<!-- resources/views/categories/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>{{ $category->name }}</title>
</head>
<body>
    <h1>{{ $category->name }}</h1>
    <p>{{ $category->description }}</p>
    <a href="{{ route('categories.edit', $category->category_id) }}">Edit</a>
    <form action="{{ route('categories.destroy', $category->category_id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('categories.index') }}">Back to Categories</a>
</body>
</html>
