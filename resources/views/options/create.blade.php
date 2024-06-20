<!-- resources/views/options/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Option</title>
</head>
<body>
    <h1>Create New Option</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('options.store') }}" method="POST">
        @csrf
        <div>
            <label for="question_id">Question ID:</label>
            <input type="text" id="question_id" name="question_id" value="{{ old('question_id') }}">
        </div>
        <div>
            <label for="option_text">Option Text:</label>
            <input type="text" id="option_text" name="option_text" value="{{ old('option_text') }}">
        </div>
        <div>
            <label for="is_correct">Is Correct:</label>
            <input type="checkbox" id="is_correct" name="is_correct" value="1" {{ old('is_correct') ? 'checked' : '' }}>
        </div>
        <button type="submit">Create Option</button>
    </form>
</body>
</html>
