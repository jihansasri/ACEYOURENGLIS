<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetPasswordRequest;
use App\Models\ResetCodePassword;
use App\Models\User;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    use ApiResponses;

    public function index(ResetPasswordRequest $request)
    {
        $data = $request->validated();

        $passwordReset = ResetCodePassword::firstWhere('code', $request->code);

        if (!$passwordReset) {
            return $this->notFoundResponse(false, 'Code is invalid');
        }

        $user = User::firstWhere('email', $passwordReset->email);

        $user->update([
            'password' => bcrypt($data['password'])
        ]);

        $passwordReset->delete();

        return $this->successResponse(true, 'Reset Password Successfully');
    }
}