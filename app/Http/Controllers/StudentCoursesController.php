<?php

namespace App\Http\Controllers;

use App\Course;
use App\Student;
use http\Env\Response;
use Illuminate\Http\Request;

class StudentCoursesController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $courses = Course::all();

        return view('dashboard.student-courses.index', compact(['students', 'courses']));
    }

    /**
     * Registers a student with a course
     * @param Request $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'student_id' => ['required'],
            'course_id' => ['required'],
        ]);

        $student = Student::findOrFail($data['student_id']);
        $course = Course::findOrFail($data['course_id']);

        $student->taking()->toggle($course);

        return redirect()->route('student.courses', ['student' => $student->id]);
    }

    public function courses(Student $student)
    {
        $courses = $student->taking;

        return view('dashboard.student-courses.courses', compact(['courses', 'student']));
    }
}
