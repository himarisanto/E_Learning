{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
<div class="container">
    <h1>Grades</h1>
    <a href="{{ route('grades.create') }}" class="btn btn-primary">Add Grade</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Quiz</th>
                <th>Score</th>
                <th>Graded At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grades as $grade)
            <tr>
                <td>{{ $grade->grade_id }}</td>
                <td>{{ $grade->user->name }}</td>
                <td>{{ $grade->quiz->title }}</td>
                <td>{{ $grade->score }}</td>
                <td>{{ $grade->graded_at }}</td>
                <td>
                    <a href="{{ route('grades.edit', $grade->grade_id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('grades.destroy', $grade->grade_id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{-- @endsection --}}
