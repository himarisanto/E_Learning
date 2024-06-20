<!-- resources/views/categories/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
</head>
<body>
    <h1>Categories</h1>
    <a href="{{ route('categories.create') }}">Add New Category</a>
    <ul>
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('categories.show', $category->category_id) }}">{{ $category->name }}</a>
                <form action="{{ route('categories.destroy', $category->category_id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
