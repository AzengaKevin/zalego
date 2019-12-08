@extends('layouts.admin')

@section('content')
    <main class="app-content">
        <div class="container-fluid">
            <div class="app-title text-md-center text-sm-left h2 text-primary my-md-5 my-sm-1">Register Course</div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="{{ route('student.register.course') }}" method="post">
                        @csrf

                        <div class="form-group row">
                            <label for="student_id"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Student') }}</label>
                            <div class="col-md-6">
                                <select
                                    id="student_id"
                                    name="student_id"
                                    class="form-control @error('student_id') is-invalid @enderror"
                                    required>
                                    <option value="">-- Student --</option>

                                    @if(count($students) > 0)
                                        @foreach($students as $student)
                                            <option
                                                value="{{ $student->id }}"
                                                @if($student->id == old('$student_id'))
                                                selected
                                                @endif >{{ $student->name }}</option>
                                        @endforeach
                                    @endif
                                </select>

                                @error('student_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="course_id"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Course') }}</label>
                            <div class="col-md-6">
                                <select
                                    id="course_id"
                                    name="course_id"
                                    class="form-control @error('course_id') is-invalid @enderror"
                                    required>
                                    <option value="">-- Course --</option>

                                    @if(count($courses) > 0)
                                        @foreach($courses as $course)
                                            <option
                                                value="{{ $course->id }}"
                                                @if($course->id == old('$course_id'))
                                                selected
                                                @endif >{{ $course->name }}</option>
                                        @endforeach
                                    @endif
                                </select>

                                @error('course_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="offset-4 col-md-6">
                                <button type="submit" class="btn btn-primary float-right">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
