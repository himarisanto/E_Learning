{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
    <h1>Enrollments</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Course</th>
                <th>Enrolled At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($enrollments as $enrollment)
                <tr>
                    <td>{{ $enrollment->id }}</td>
                    <td>{{ $enrollment->user->name }}</td>
                    <td>{{ $enrollment->course->title }}</td>
                    <td>{{ $enrollment->enrolled_at }}</td>
                    <td>
                        <a href="{{ route('enrollments.show', $enrollment->id) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('enrollments.edit', $enrollment->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('enrollments.destroy', $enrollment->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this enrollment?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $enrollments->links() }}
</div>
{{-- @endsection --}}

