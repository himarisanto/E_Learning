{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
	<h1>Edit Grade</h1>
	<form action="{{ route('grades.update', $grade->grade_id) }}" method="POST">
		@csrf
		@method('PUT')
		<div class="form-group">
			<label for="user_id">User</label>
			<select name="user_id" id="user_id" class="form-control">
				@foreach ($users as $user)
				<option value="{{ $user->user_id }}" {{ $user->user_id == $grade->user_id ? 'selected' : '' }}>{{
					$user->name }}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label for="quiz_id">Quiz</label>
			<select name="quiz_id" id="quiz_id" class="form-control">
				@foreach ($quizzes as $quiz)
				<option value="{{ $quiz->quiz_id }}" {{ $quiz->quiz_id == $grade->quiz_id ? 'selected' : '' }}>{{
					$quiz->title }}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label for="score">Score</label>
			<input type="number" name="score" id="score" class="form-control" value="{{ $grade->score }}">
		</div>
		<button type="submit" class="btn btn-primary">Update</button>
	</form>
</div>
{{-- @endsection --}}