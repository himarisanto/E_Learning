<!-- resources/views/quizzes/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $quiz->title }}</title>
</head>
<body>
    <h1>{{ $quiz->title }}</h1>
    <p>Course ID: {{ $quiz->course_id }}</p>
    <p>Created at: {{ $quiz->created_at }}</p>
    <p>Updated at: {{ $quiz->updated_at }}</p>

    <a href="{{ route('quizzes.edit', $quiz->id) }}">Edit</a>
    <form action="{{ route('quizzes.destroy', $quiz->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <a href="{{ route('quizzes.index') }}">Back to Quizzes</a>
</body>
</html>
