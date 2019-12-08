@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="jumbotron text-center text-muted">
            <div>This is the web and section for the zalego education task. But I think it is really cool</div>
            <div class="d-flex justify-content-center my-2">
                <a href="{{ route('login') }}" class="btn btn-sm btn-primary mr-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-sm btn-secondary">Register</a>
            </div>
        </div>
    </div>

@endsection
