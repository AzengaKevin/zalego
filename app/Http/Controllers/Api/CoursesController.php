<?php

namespace App\Http\Controllers\Api;

use App\Course;
use App\Http\Controllers\Controller;

class CoursesController extends Controller
{
    public function index()
    {

        return response()->json([
            'isSuccessful' => true,
            'message' => 'All courses collection',
            'courses' => Course::all()
        ], 200);
    }
}
