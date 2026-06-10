<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpMail;


class AuthController extends Controller
{
    public function prosesLogin(Request $request)
{
    $login = $request->login;

    $field = filter_var($login, FILTER_VALIDATE_EMAIL)
        ? 'email'
        : 'username';

    $user = \App\Models\Karyawan::where($field, $login)->first();

    if (!$user) {
        return back()->with(
            'error',
            'Username / Email tidak ditemukan'
        );
    }

    if ($user->must_change_password == 1) {

    // User baru, password masih plaintext
    if ($user->password != $request->password) {
        return back()->with(
            'error',
            'Password salah'
        );
    }

} else {

    // User sudah ganti password, password sudah hash
    if (!Hash::check($request->password, $user->password)) {
        return back()->with(
            'error',
            'Password salah'
        );
    }

}

    Auth::guard('karyawan')->login($user);

    $request->session()->regenerate();

    if ($user->must_change_password == 1) {

    $otp = rand(100000,999999);

    $user->otp_code = $otp;
    $user->otp_expired = now()->addMinutes(10);
    $user->save();

    Mail::to($user->email)
    ->send(new OtpMail($otp));


    session([
        'verify_user_id' => $user->id
    ]);


    return redirect('/verify-otp');
}

    return redirect()->route('dashboard');
}

public function changePassword()
{
    return view('auth.change-password');
}

public function updatePassword(Request $request)
{
    $request->validate([
        'password' => 'required|min:8|confirmed'
    ]);

    $user = Auth::guard('karyawan')->user();

    $user->password = Hash::make($request->password);
    $user->must_change_password = 0;

    $user->otp_code = null;
    $user->otp_expired = null;

    $user->save();

    return redirect()->route('dashboard')
        ->with('success', 'Password berhasil diubah');
}

public function showOtpForm()
{
    return view('auth.verify-otp');
}

public function verifyOtp(Request $request)
{
    $user = \App\Models\Karyawan::find(
        session('verify_user_id')
    );

    if (!$user) {
        return redirect('/');
    }

    if ($request->otp != $user->otp_code) {
        return back()->with(
            'error',
            'OTP tidak valid'
        );
    }

    if (now()->gt($user->otp_expired)) {
        return back()->with(
            'error',
            'OTP sudah kadaluarsa'
        );
    }

    // OTP berhasil
    $user->otp_verified = 1;
    $user->save();

    return redirect('/change-password');
}
public function forgotPassword()
{
    return view('auth.forgot-password');
}
public function sendForgotOtp(Request $request)
{
    $request->validate([
        'email' => 'required|email'
    ]);

    $user = \App\Models\Karyawan::where(
        'email',
        $request->email
    )->first();

    if (!$user) {

        return back()->with(
            'error',
            'Email tidak ditemukan'
        );
    }

    $otp = rand(100000,999999);

    $user->otp_code = $otp;
    $user->otp_expired = now()->addMinutes(10);
    $user->save();

    Mail::to($user->email)
        ->send(new OtpMail($otp));

    session([
        'verify_user_id' => $user->id,
        'forgot_password' => true
    ]);

    return redirect('/verify-otp');
}
}