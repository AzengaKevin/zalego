@extends('layouts.admin')

@section('content')
    <main class="app-content">
        <div class="container-fluid">
            <a href="{{ route('courses.index') }}" class="btn btn-primary mt-2 mb-1">All Courses</a>
            <div class="app-title text-md-center text-sm-left h3 text-primary mb-1">{{ $course->name }}</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">Name</div>
                        <div class="col-md-6">{{ $course->name }}</div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-6">Code</div>
                        <div class="col-md-6">{{ $course->code }}</div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-6">Fee</div>
                        <div class="col-md-6">{{ $course->fee }}</div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-6">Duration</div>
                        <div class="col-md-6">{{ $course->duration }}</div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-6">Created At</div>
                        <div class="col-md-6">{{ $course->created_at }}</div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-6">Updated At</div>
                        <div class="col-md-6">{{ $course->updated_at }}</div>
                    </div>
                    <hr />
                    <hr />
                    <a href="{{ route('courses.edit', ['course' => $course->id]) }}"
                       class="btn btn-info float-right">Edit Course</a>
                </div>

            </div>
        </div>
    </main>
@endsection
