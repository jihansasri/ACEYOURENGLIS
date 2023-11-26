<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Traits\ApiResponses;

class CourseController extends Controller
{
    use ApiResponses;

    public function index()
    {
        $courses = Course::with('mentor')->latest()->get();

        if (count($courses)) {
            return $this->successResponse($courses);
        }

        return $this->notFoundResponse(null, 'Courses Not Found');
    }

    public function show($id)
    {
        $course = Course::with('courseDetails')->find($id);

        if ($course) {
            return $this->successResponse($course);
        }

        return $this->notFoundResponse(null, 'Course Not Found');
    }
}
