@extends('layouts.admin')

@section('content')
    <main class="app-content">
        <div class="container-fluid">
            <a href="{{ route('courses.index') }}" class="btn btn-primary mt-2 mb-1">All Courses</a>
            <div class="app-title text-md-center text-sm-left h3 text-primary mb-1">Edit Course</div>
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('courses.update', ['course' => $course->id]) }}">
                        @csrf
                        @method('put')

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') ?? $course->name }}" required
                                       autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="code"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Code') }}</label>

                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control @error('code') is-invalid @enderror"
                                       name="code" value="{{ old('code') ?? $course->code }}" required
                                       autocomplete="code">

                                @error('code')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fee"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Fee') }}</label>

                            <div class="col-md-6">
                                <input id="fee" type="number" class="form-control @error('fee') is-invalid @enderror"
                                       name="fee" value="{{ old('fee') ?? $course->fee }}" required autocomplete="fee"
                                       aria-label="Fee"
                                       aria-describedby="cash-addon">

                                @error('fee')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="duration"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Duration') }}</label>

                            <div class="col-md-6">
                                <input id="duration" type="text"
                                       class="form-control @error('duration') is-invalid @enderror"
                                       name="duration" value="{{ old('duration') ?? $course->duration }}" required
                                       autocomplete="duration">

                                @error('duration')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary float-right ml-2">
                                    {{ __('Update') }}
                                </button>

                                <a href="{{ route('courses.show', ['course' => $course->id]) }}"
                                   class="btn btn-info float-right">Review</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </main>
@endsection
