<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    use ApiResponses;

    public function index()
    {
        $quizzez = Quiz::with('course')->latest()->get();

        if (count($quizzez)) {
            return $this->successResponse($quizzez);
        }

        return $this->notFoundResponse(null, 'Quizzes Not Found');
    }

    public function show($id)
    {
        $quiz = Quiz::with('questions.choices', 'course')->find($id);

        if ($quiz) {
            return $this->successResponse($quiz);
        }

        return $this->notFoundResponse(null, 'Quiz Not Found');
    }
}