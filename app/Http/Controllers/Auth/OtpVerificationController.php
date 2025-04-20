<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\OtpNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\RedirectResponse;

class OtpVerificationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Middleware will be applied in routes
    }

    /**
     * Show the OTP verification form.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return View::make('auth.verify-otp');
    }

    /**
     * Send OTP to the user's email.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendOtp(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $user = User::where('email', $request->email)->first();
        $otp = $user->generateOtp();

        // Send OTP via notification
        $user->notify(new OtpNotification($otp));

        return Redirect::route('otp.verify')
            ->with('status', 'We have sent an OTP to your email address.')
            ->with('email', $user->email);
    }

    /**
     * Verify the OTP.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function verify(Request $request): RedirectResponse
    {
        $request->validate([
            'otp' => 'required|string|size:6',
            'email' => 'required|email|exists:users,email',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !$user->verifyOtp($request->otp)) {
            throw ValidationException::withMessages([
                'otp' => ['The OTP is invalid or has expired.'],
            ]);
        }

        // Log the user in
        Auth::login($user, $request->boolean('remember'));

        // Mark email as verified if not already
        if (!$user->hasVerifiedEmail()) {
            $user->markEmailAsVerified();
        }

        return Redirect::intended(Route::has('dashboard') ? route('dashboard') : '/');
    }

    /**
     * Resend the OTP.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function resend(Request $request): RedirectResponse
    {
        $user = Auth::user();
        $otp = $user->generateOtp();

        // Send OTP via notification
        $user->notify(new OtpNotification($otp));

        return Redirect::back()->with('status', 'A new OTP has been sent to your email address.');
    }
}
