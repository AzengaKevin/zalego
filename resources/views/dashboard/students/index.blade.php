@extends('layouts.admin')

@section('content')
    <main class="app-content">
        <div class="container-fluid">
            <a href="{{ route('students.create') }}" class="btn btn-primary mt-2 mb-1">Add Student</a>
            <div class="app-title text-md-center text-sm-left h3 mb-1 text-primary">Students</div>
            <div class="row">
                <div class="col-md-12">
                    @if(count($students) > 0)
                        <div class="table-responsive">
                            <table class="table my-2 my-sm-1">
                                <thead class="bg-secondary">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Status</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>


                                @foreach($students as $student)
                                    <tr>
                                        <th scope="row">{{ $student->id }}</th>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->username }}</td>
                                        <td>{{ $student->status ? 'Cleared' : 'Not cleared' }}</td>
                                        <td><a href="{{ route('students.show', ['student' => $student->id]) }}" class="btn btn-primary"><fa class="fa fa-eye"></fa></a></td>
                                        <td>
                                            <form action="{{ route('students.destroy', ['student' => $student->id]) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger"><fa class="fa fa-trash-alt"></fa></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    @else
                        <p class="my-2 text-muted">No student in the database yet</p>
                    @endif
                </div>
            </div>
        </div>
    </main>
@endsection
