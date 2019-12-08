@extends('layouts.admin')

@section('content')
    <main class="app-content">
        <div class="container-fluid">
            <a href="{{ route('courses.create') }}" class="btn btn-primary mt-2 mb-1">Add Course</a>
            <div class="app-title text-md-center text-sm-left h3 text-primary mb-1">Courses</div>
            <div class="row">
                <div class="col-md-12">
                    @if(count($courses) > 0)
                        <div class="table-responsive-sm">
                            <table class="table my-2 my-sm-1">
                                <thead class="bg-secondary">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Code</th>
                                    <th scope="col">Fee</th>
                                    <th scope="col">Duration</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>


                                @foreach($courses as $course)
                                    <tr>
                                        <th scope="row">{{ $course->id }}</th>
                                        <td>{{ $course->name }}</td>
                                        <td>{{ $course->code }}</td>
                                        <td>{{ $course->fee }}</td>
                                        <td>{{ $course->duration }}</td>
                                        <td><a href="{{ route('courses.show', ['course' => $course->id]) }}"
                                               class="btn btn-primary">
                                                <fa class="fa fa-eye"></fa>
                                            </a></td>
                                        <td>
                                            <form action="{{ route('courses.destroy', ['course' => $course->id]) }}"
                                                  method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">
                                                    <fa class="fa fa-trash-alt"></fa>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    @else
                        <p class="my-2 text-muted">No Courses in the database yet</p>
                    @endif
                </div>
            </div>
        </div>
    </main>
@endsection
