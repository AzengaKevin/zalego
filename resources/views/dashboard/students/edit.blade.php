@extends('layouts.admin')

@section('content')
    <main class="app-content">
        <div class="container-fluid">
            <a href="{{ route('students.index') }}" class="btn btn-primary mt-2 mb-1">All Students</a>
            <div class="app-title text-md-center text-sm-left h3 text-primary mb-1">Edit Student</div>
            <div class="row">
                <div class="col-md-12">

                    <form method="POST" action="{{ route('students.update', ['student' => $student->id]) }}">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <label for="username"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input disabled id="username" type="text"
                                       class="form-control @error('username') is-invalid @enderror"
                                       name="username" value="{{ old('username') ?? $student->username }}" required
                                       autocomplete="username">

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') ?? $student->name }}" required
                                       autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="status"
                                           id="status" {{ old('status') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="status">
                                        {{ __('Approve') }}
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-warning float-right ml-2">
                                    {{ __('Update') }}
                                </button>
                                <a href="{{ route('students.show', ['student' => $student->id]) }}"
                                   class="btn btn-info float-right">Review</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </main>
@endsection
