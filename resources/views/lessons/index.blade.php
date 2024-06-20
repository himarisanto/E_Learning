<!-- resources/views/lessons/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Lessons</title>
</head>
<body>
    <h1>Lessons</h1>
    <ul>
        @foreach ($lessons as $lesson)
            <li>
                <a href="{{ route('lessons.show', $lesson->id) }}">{{ $lesson->title }}</a>
                <form action="{{ route('lessons.destroy', $lesson->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('lessons.create') }}">Add New Lesson</a>
</body>
</html>
