@extends('layouts.admin')

@section('content')
    <main class="app-content">
        <a href="{{ route('courses.index') }}" class="btn btn-primary">All Courses</a>
        <div class="app-title text-center h3 text-primary my-2">Add Course</div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <form method="POST" action="{{ route('courses.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                       name="code" value="{{ old('code') }}" required autocomplete="code">

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
                                       name="fee" value="{{ old('fee') }}" required autocomplete="fee" aria-label="Fee"
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
                                       name="duration" value="{{ old('duration') }}" required autocomplete="duration">

                                @error('duration')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary float-right">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </main>
@endsection
