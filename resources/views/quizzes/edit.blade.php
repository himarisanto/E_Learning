<!-- resources/views/quizzes/edit.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Quiz</title>
</head>
<body>
    <h1>Edit Quiz</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('quizzes.update', $quiz->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="course_id">Course ID:</label>
            <input type="text" id="course_id" name="course_id" value="{{ old('course_id', $quiz->course_id) }}">
        </div>
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title', $quiz->title) }}">
        </div>
        <button type="submit">Update Quiz</button>
    </form>

    <a href="{{ route('quizzes.index') }}">Back to Quizzes</a>
</body>
</html>
