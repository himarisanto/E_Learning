<!-- resources/views/options/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $option->option_text }}</title>
</head>
<body>
    <h1>{{ $option->option_text }}</h1>
    <p>Question ID: {{ $option->question_id }}</p>
    <p>Is Correct: {{ $option->is_correct ? 'Yes' : 'No' }}</p>
    <p>Created at: {{ $option->created_at }}</p>
    <p>Updated at: {{ $option->updated_at }}</p>

    <a href="{{ route('options.edit', $option->option_id) }}">Edit</a>
    <form action="{{ route('options.destroy', $option->option_id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <a href="{{ route('options.index') }}">Back to Options</a>
</body>
</html>
