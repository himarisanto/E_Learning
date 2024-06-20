<!-- resources/views/quizzes/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Quiz</title>
</head>
<body>
    <h1>Create New Quiz</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('quizzes.store') }}" method="POST">
        @csrf
        <div>
            <label for="course_id">Course ID:</label>
            <input type="text" id="course_id" name="course_id" value="{{ old('course_id') }}">
        </div>
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
        </div>
        <button type="submit">Create Quiz</button>
    </form>
</body>
</html>
