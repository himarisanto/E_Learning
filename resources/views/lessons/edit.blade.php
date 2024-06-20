<!-- resources/views/lessons/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Lesson</title>
</head>
<body>
    <h1>Edit Lesson</h1>
    <form action="{{ route('lessons.update', $lesson->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="course_id">Course ID:</label>
            <input type="text" id="course_id" name="course_id" value="{{ $lesson->course_id }}">
        </div>
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $lesson->title }}">
        </div>
        <div>
            <label for="content">Content:</label>
            <textarea id="content" name="content">{{ $lesson->content }}</textarea>
        </div>
        <button type="submit">Update Lesson</button>
    </form>
</body>
</html>
