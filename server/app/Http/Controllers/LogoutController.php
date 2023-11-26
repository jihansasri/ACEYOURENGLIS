<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    use ApiResponses;

    public function index()
    {
        Auth::user()->tokens()->delete();
        return $this->successResponse(true, 'Logout Successfully');
    }
}