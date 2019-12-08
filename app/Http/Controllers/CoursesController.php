<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('dashboard.courses.index', ['courses' => Course::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * Response
     */
    public function create()
    {
        return view('dashboard.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'unique:courses'],
            'code' => ['required', 'min:3', 'unique:courses'],
            'fee' => ['required'],
            'duration' => ['required', 'min:3'],
        ]);

        Course::create([
            'name' => $request->name,
            'code' => 'ZAL_' . $request->code,
            'fee' => $request->fee,
            'duration' => $request->duration,
        ]);

        return redirect()->route('courses.index');


    }

    /**
     * Display the specified resource.
     *
     * @param Course $course
     * @return Response
     */
    public function show(Course $course)
    {
        return view('dashboard.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Course $course
     * @return Response
     */
    public function edit(Course $course)
    {
        return view('dashboard.courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Course $course
     * @return Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'code' => ['required', 'min:3'],
            'fee' => ['required'],
            'duration' => ['required', 'min:3'],
        ]);

        $course->update([
            'name' => $request->name,
            'code' => $request->code,
            'fee' => $request->fee,
            'duration' => $request->duration,
        ]);

        return redirect()->route('courses.show', ['course' => $course->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Course $course
     * @return Response
     *
     * @throws
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index');

    }
}
