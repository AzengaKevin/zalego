@extends('layouts.admin')

@section('content')
    <main class="app-content">
        <div class="container-fluid">
            <a href="{{ route('students.index') }}" class="btn btn-primary mt-2 mb-1">All Students</a>
            <div class="app-title text-md-center text-sm-left h3 text-primary mb-1">Students</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">Name</div>
                        <div class="col-md-6">{{ $student->name }}</div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-6">Username</div>
                        <div class="col-md-6">{{ $student->username }}</div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-6">Password</div>
                        <div class="col-md-6">{{ $student->password }}</div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-6">Approved</div>
                        <div class="col-md-6">{{ $student->status ? 'Yes' : 'No' }}</div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-6">Created At</div>
                        <div class="col-md-6">{{ $student->created_at }}</div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-6">Updated At</div>
                        <div class="col-md-6">{{ $student->updated_at }}</div>
                    </div>
                    <hr/>
                    <a href="{{ route('student.courses', ['student' => $student->id]) }}" class="btn btn-primary float-right">Registered Courses</a>
                    <a href="{{ route('students.edit', ['student' => $student->id]) }}"
                       class="btn btn-info float-right">Edit Student</a>
                </div>

            </div>
        </div>
    </main>
@endsection
