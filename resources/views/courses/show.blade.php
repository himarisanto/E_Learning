<!-- resources/views/courses/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>{{ $course->title }}</title>
</head>
<body>
    <h1>{{ $course->title }}</h1>
    <p>{{ $course->description }}</p>
    <p>Category ID: {{ $course->category_id }}</p>
    <p>Created By: {{ $course->created_by }}</p>
    <a href="{{ route('courses.edit', $course->id) }}">Edit</a>
    <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('courses.index') }}">Back to Courses</a>
</body>
</html>
