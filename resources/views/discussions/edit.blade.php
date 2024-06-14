{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
	<h1>Edit Discussion</h1>
	<form action="{{ route('discussions.update', $discussion->discussion_id) }}" method="POST">
		@csrf
		@method('PUT')
		<div class="form-group">
			<label for="course_id">Course</label>
			<input type="number" name="course_id" id="course_id" class="form-control"
				value="{{ $discussion->course_id }}">
		</div>
		<div class="form-group">
			<label for="user_id">User</label>
			<input type="number" name="user_id" id="user_id" class="form-control" value="{{ $discussion->user_id }}">
		</div>
		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" id="title" class="form-control" value="{{ $discussion->title }}">
		</div>
		<div class="form-group">
			<label for="content">Content</label>
			<textarea name="content" id="content" class="form-control">{{ $discussion->content }}</textarea>
		</div>
		<button type="submit" class="btn btn-primary">Update</button>
	</form>
</div>
{{-- @endsection --}}