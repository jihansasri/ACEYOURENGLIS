<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    use ApiResponses;

    public function index()
    {
        $mentors = User::whereHas('role', function ($query) {
            $query->where('name', 'mentor');
        })->with('courses')->get();

        if (count($mentors)) {
            return $this->successResponse($mentors);
        }

        return $this->notFoundResponse(null, 'Mentors Not Found');
    }
}