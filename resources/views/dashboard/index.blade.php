@extends('layouts.admin')

@section('content')
    <main class="app-content">
        <div class="app-title text-center h3 text-primary py-2 py-sm-1">Dashboard</div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <div class="card">
                        <h5 class="card-header">Featured</h5>
                        <div class="card-body">
                            <div class="card-title">Simple title treatment</div>
                            <div class="card-text">With some text below as a natural lead-in to additional content</div>
                            <a href="#" class="btn btn-sm btn-primary my-1">Read More...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="card">
                        <h5 class="card-header">Featured</h5>
                        <div class="card-body">
                            <div class="card-title">Simple title treatment</div>
                            <div class="card-text">With some text below as a natural lead-in to additional content</div>
                            <a href="#" class="btn btn-sm btn-primary my-1">Read More...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
