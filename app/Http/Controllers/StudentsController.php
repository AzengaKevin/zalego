<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $students = Student::all();
        return view('dashboard.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'min:6'],
            'username' => ['required', 'min:3', 'unique:students'],
            'password' => ['required', 'confirmed']
        ]);

        Student::create($data);

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Student $student
     * @return Response
     */
    public function show(Student $student)
    {
        return view('dashboard.students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Student $student
     * @return Response
     */
    public function edit(Student $student)
    {
        return view('dashboard.students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Student $student
     * @return Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => ['required', 'min:6'],
        ]);

        $status = $request->status === 'on' ? true : false;

        $student->update([
            'name' => $request->name,
            'status' => $status
        ]);

        return redirect()->route('students.show', ['student' => $student->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Student $student
     * @return Response
     *
     * @throws \Exception
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }
}
