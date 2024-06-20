<!-- resources/views/lessons/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>{{ $lesson->title }}</title>
</head>
<body>
    <h1>{{ $lesson->title }}</h1>
    <p>Course ID: {{ $lesson->course_id }}</p>
    <p>{{ $lesson->content }}</p>
    <a href="{{ route('lessons.edit', $lesson->id) }}">Edit</a>
    <form action="{{ route('lessons.destroy', $lesson->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('lessons.index') }}">Back to Lessons</a>
</body>
</html>
