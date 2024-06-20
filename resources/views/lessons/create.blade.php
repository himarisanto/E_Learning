<!-- resources/views/lessons/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Create Lesson</title>
</head>
<body>
    <h1>Create New Lesson</h1>
    <form action="{{ route('lessons.store') }}" method="POST">
        @csrf
        <div>
            <label for="course_id">Course ID:</label>
            <input type="text" id="course_id" name="course_id">
        </div>
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="content">Content:</label>
            <textarea id="content" name="content"></textarea>
        </div>
        <button type="submit">Create Lesson</button>
    </form>
</body>
</html>

