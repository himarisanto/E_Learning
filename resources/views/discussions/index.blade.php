{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
    <h1>Discussions</h1>
    <a href="{{ route('discussions.create') }}" class="btn btn-primary">Create Discussion</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Course</th>
                <th>User</th>
                <th>Title</th>
                <th>Content</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($discussions as $discussion)
            <tr>
                <td>{{ $discussion->discussion_id }}</td>
                <td>{{ $discussion->course->title }}</td>
                <td>{{ $discussion->user->name }}</td>
                <td>{{ $discussion->title }}</td>
                <td>{{ $discussion->content }}</td>
                <td>{{ $discussion->created_at }}</td>
                <td>
                    <a href="{{ route('discussions.show', $discussion->discussion_id) }}" class="btn btn-primary">View</a>
                    <a href="{{ route('discussions.edit', $discussion->discussion_id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('discussions.destroy', $discussion->discussion_id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this discussion?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{ $discussions->links() }} <!-- Pagination links --> --}}
</div>
{{-- @endsection --}}
