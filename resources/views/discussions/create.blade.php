{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
    <h1>Create Discussion</h1>
    <form action="{{ route('discussions.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="course_id">Course</label>
            <input type="number" name="course_id" id="course_id" class="form-control" value="{{ old('course_id') }}">
        </div>
        <div class="form-group">
            <label for="user_id">User</label>
            <input type="number" name="user_id" id="user_id" class="form-control" value="{{ old('user_id') }}">
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control">{{ old('content') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
{{-- @endsection --}}
