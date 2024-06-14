{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
    <h1>Enrollment Details</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $enrollment->id }}</td>
        </tr>
        <tr>
            <th>User</th>
            <td>{{ $enrollment->user->name }}</td>
        </tr>
        <tr>
            <th>Course</th>
            <td>{{ $enrollment->course->title }}</td>
        </tr>
        <tr>
            <th>Enrolled At</th>
            <td>{{ $enrollment->enrolled_at }}</td>
        </tr>
    </table>

    <a href="{{ route('enrollments.edit', $enrollment->id) }}" class="btn btn-primary">Edit</a>

    <form action="{{ route('enrollments.destroy', $enrollment->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this enrollment?')">Delete</button>
    </form>
</div>
{{-- @endsection --}}
