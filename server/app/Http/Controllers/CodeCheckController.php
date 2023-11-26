<?php

namespace App\Http\Controllers;

use App\Http\Requests\CodeCheckRequest;
use App\Models\ResetCodePassword;
use App\Traits\ApiResponses;

class CodeCheckController extends Controller
{
    use ApiResponses;

    public function index(CodeCheckRequest $request)
    {
        $passwordReset = ResetCodePassword::firstWhere('code', $request->code);

        return $this->successResponse($passwordReset, 'Code is valid');
    }
}