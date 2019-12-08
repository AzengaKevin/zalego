<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{

    public function register(Request $request)
    {
        if (empty($request->name)) {
            return response()->json([
                'isSuccessful' => false,
                'message' => 'Name is required'
            ], 400);
        }

        if (empty($request->username)) {
            return response()->json([
                'isSuccessful' => false,
                'message' => 'Username is required'
            ], 400);
        }

        if (empty($request->password)) {
            return response()->json([
                'isSuccessful' => false,
                'message' => 'Password is required'
            ], 400);
        }

        $data = $request->validate([
            'name' => ['required'],
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if(is_null(Student::where('username', $data['username'])->first())){
            Student::create($data);

            return response()->json([
                'isSuccessful' => true,
                'message' => 'Registered Successfully',
                'student' => Student::where('username', $data['username'])->first(),
            ], 201);

        }else{

            return response()->json([
                'isSuccessful' => false,
                'message' => 'Username Already Taken',
            ], 409);
        }
    }


    public function login(Request $request)
    {
        if (empty($request->username)) {
            return response()->json([
                'isSuccessful' => false,
                'message' => 'Name is required'
            ], 400);
        }

        if (empty($request->password)) {
            return response()->json([
                'isSuccessful' => false,
                'message' => 'Password is required'
            ], 400);
        }

        $data = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        $query = Student::query();
        $query->where('username', $data['username']);
        $query->where('password', $data['password']);
        $student = $query->first();

        return response()->json([
            'isSuccessful' => is_null($student) ? false : true,
            'message' => is_null($student) ? 'Wrong Auth Credentials' : 'Logged In Successfully',
            'student' => $student
        ], 200);

    }
}
