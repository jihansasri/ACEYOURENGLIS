<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgotPasswordRequest;
use App\Mail\SendCodeResetPassword;
use App\Models\ResetCodePassword;
use App\Models\User;
use App\Traits\ApiResponses;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    use ApiResponses;

    public function index(ForgotPasswordRequest $request)
    {
        $data = $request->validated();

        ResetCodePassword::where('email', $request->email)->delete();

        $data['code'] = mt_rand(100000, 999999);

        $resetCodePassword = ResetCodePassword::create($data);
        $user = User::firstWhere('email', $data['email']);

        Mail::to($request->email)->send(new SendCodeResetPassword($resetCodePassword->code, $user));

        return $this->successResponse($data, 'We have e-mailed your code reset password');
    }
}
