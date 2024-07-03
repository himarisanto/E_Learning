<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="antialiased">
    <div>
        <nav>
            <ul>
                <li><a href="{{ route('courses.index') }}">Courses</a></li>
                <li><a href="{{ route('categories.index') }}">Categories</a></li>
                <li><a href="{{ route('lessons.index') }}">Lessons</a></li>
                <li><a href="{{ route('quizzes.index') }}">Quizzes</a></li>
                <li><a href="{{ route('questions.index') }}">Questions</a></li>
                <li><a href="{{ route('options.index') }}">Options</a></li>
                <li><a href="{{ route('grades.index') }}">Grades</a></li>
                <li><a href="{{ route('discussions.index') }}">Discussions</a></li>
                <li><a href="{{ route('replies.index') }}">Replies</a></li>
                <li><a href="{{ route('notifications.index') }}">Notifications</a></li>
                <li><a href="{{ route('payments.index') }}">Payments</a></li>
                <li><a href="{{ route('enrollments.index') }}">Enrollments</a></li>
            </ul>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
