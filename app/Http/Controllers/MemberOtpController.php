<?php

namespace App\Http\Controllers;

use App\Jobs\UserSendEmailJob;
use App\Models\MemberOtp;
use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\UserEmailTemplateTrait;
use App\Traits\MemberOtpTrait;
use Illuminate\Support\Carbon;


class MemberOtpController
{

    use UserEmailTemplateTrait;
    use MemberOtpTrait;


    public function validateOtp(Request $request)
    {
        dump($request->all());
        $request->validate([
            'otp' => 'required',
            'mobile' => 'required',
            'email' => 'required|email',
        ]);

        $requestOtp = $request->otp;
        $requestMobile = $request->mobile;
        $requestEmail = $request->email;

        $user = User::where('email', $requestEmail)->where('mobile', $requestMobile)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Email & Mobile number do not match our records!');
        }
        $otp = MemberOtp::where('otp', $requestOtp)->where('user_id', $user->id)->latest('id')->first();
        if (!$otp) {
            return redirect()->back()->with('error', 'Incorrect OTP or OTP expired!');
        }
        if (now()->greaterThan($otp->expires_at)) {
            return redirect()->back()->with('error', 'OTP has expired');
        }
        if ($user && $otp) {
            $user->update([
                'status' => 1
            ]);
            $otp->delete();
        }
        return response()->json(['success' => 'OTP has been verified successfully!']);
    }
    public function otpResend(Request $request)
    {

        $validateData = $request->validate([
            'mobile' => 'required',
            'email' => 'required',
        ]);
        $requestMobile = $request->mobile;
        $requestEmail = $request->email;
        $user = User::where('email', $requestEmail)->where('mobile', $requestMobile)->first();
        if (!$user) {
            return response()->json(['error' => 'Mobile number do not match our records!']);
        }

        $name = 'UserResendOTP';
        session(['accountInfo' => $validateData]);
        MemberOtp::where('user_id', $user->id)->delete();
        $emailTemplate = $this->userEmailTemplate($name);
        UserSendEmailJob::dispatch($user, $emailTemplate);
        return redirect()->back()->with('success', 'OTP resent successfully!');

    }

}
