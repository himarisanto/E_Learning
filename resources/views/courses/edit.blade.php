<!-- resources/views/courses/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
</head>
<body>
    <h1>Edit Course</h1>
    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $course->title }}">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description">{{ $course->description }}</textarea>
        </div>
        <div>
            <label for="category_id">Category ID:</label>
            <input type="text" id="category_id" name="category_id" value="{{ $course->category_id }}">
        </div>
        <div>
            <label for="created_by">Created By:</label>
            <input type="text" id="created_by" name="created_by" value="{{ $course->created_by }}">
        </div>
        <button type="submit">Update Course</button>
    </form>
</body>
</html>
