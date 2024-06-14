{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
    <h1>Create Enrollment</h1>
    <form action="{{ route('enrollments.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user_id">User</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="course_id">Course</label>
            <select name="course_id" id="course_id" class="form-control">
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="enrolled_at">Enrolled At</label>
            <input type="date" name="enrolled_at" id="enrolled_at" class="form-control" value="{{ old('enrolled_at') }}">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
{{-- @endsection --}}
