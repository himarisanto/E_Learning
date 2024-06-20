<!-- resources/views/courses/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Create Course</title>
</head>
<body>
    <h1>Create New Course</h1>
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>
        </div>
        <div>
            <label for="category_id">Category ID:</label>
            <input type="text" id="category_id" name="category_id">
        </div>
        <div>
            <label for="created_by">Created By:</label>
            <input type="text" id="created_by" name="created_by">
        </div>
        <button type="submit">Create Course</button>
    </form>
</body>
</html>
