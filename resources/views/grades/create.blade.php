{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
    <h1>Add Grade</h1>
    <form action="{{ route('grades.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user_id">User</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach ($users as $user)
                <option value="{{ $user->user_id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="quiz_id">Quiz</label>
            <select name="quiz_id" id="quiz_id" class="form-control">
                @foreach ($quizzes as $quiz)
                <option value="{{ $quiz->quiz_id }}">{{ $quiz->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="score">Score</label>
            <input type="number" name="score" id="score" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
{{-- @endsection --}}
