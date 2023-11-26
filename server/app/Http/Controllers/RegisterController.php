<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Traits\ApiResponses;

class RegisterController extends Controller
{
    use ApiResponses;

    public function index(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['role_id'] = 1;

        try {
            $user =  User::create($data);

            return $this->successResponse($user, 'Register Successfully');
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage());
        }
    }
}