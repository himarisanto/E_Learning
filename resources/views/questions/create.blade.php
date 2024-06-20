<!-- resources/views/questions/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Question</title>
</head>
<body>
    <h1>Create New Question</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('questions.store') }}" method="POST">
        @csrf
        <div>
            <label for="quiz_id">Quiz ID:</label>
            <input type="text" id="quiz_id" name="quiz_id" value="{{ old('quiz_id') }}">
        </div>
        <div>
            <label for="question_text">Question Text:</label>
            <input type="text" id="question_text" name="question_text" value="{{ old('question_text') }}">
        </div>
        <div>
            <label for="question_type">Question Type:</label>
            <select id="question_type" name="question_type">
                <option value="multiple_choice" {{ old('question_type') == 'multiple_choice' ? 'selected' : '' }}>Multiple Choice</option>
                <option value="true_false" {{ old('question_type') == 'true_false' ? 'selected' : '' }}>True/False</option>
                <option value="short_answer" {{ old('question_type') == 'short_answer' ? 'selected' : '' }}>Short Answer</option>
            </select>
        </div>
        <button type="submit">Create Question</button>
    </form>
</body>
</html>
