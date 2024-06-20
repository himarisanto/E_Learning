<!-- resources/views/options/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Options</title>
</head>
<body>
    <h1>Options</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @elseif(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <ul>
        @foreach ($options as $option)
            <li>
                <a href="{{ route('options.show', $option->option_id) }}">{{ $option->option_text }}</a>
                <a href="{{ route('options.edit', $option->option_id) }}">Edit</a>
                <form action="{{ route('options.destroy', $option->option_id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('options.create') }}">Add New Option</a>
</body>
</html>
