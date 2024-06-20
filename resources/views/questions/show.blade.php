<!-- resources/views/questions/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $question->question_text }}</title>
</head>
<body>
    <h1>{{ $question->question_text }}</h1>
    <p>Quiz ID: {{ $question->quiz_id }}</p>
    <p>Question Type: {{ $question->question_type }}</p>
    <p>Created at: {{ $question->created_at }}</p>
    <p>Updated at: {{ $question->updated_at }}</p>

    <a href="{{ route('questions.edit', $question->id) }}">Edit</a>
    <form action="{{ route('questions.destroy', $question->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <a href="{{ route('questions.index') }}">Back to Questions</a>
</body>
</html>
