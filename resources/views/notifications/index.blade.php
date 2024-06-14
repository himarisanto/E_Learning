{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
    <h1>Notifications</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <ul class="list-group">
        @forelse ($notifications as $notification)
            <li class="list-group-item">
                <strong>{{ $notification->message }}</strong>
                <br>
                <small>{{ $notification->created_at->diffForHumans() }}</small>
                @unless($notification->is_read)
                    <form action="{{ route('notifications.markAsRead', $notification->notification_id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-sm btn-primary ml-2">Mark as Read</button>
                    </form>
                @endunless
                <form action="{{ route('notifications.destroy', $notification->notification_id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger ml-2">Delete</button>
                </form>
            </li>
        @empty
            <li class="list-group-item">No notifications found.</li>
        @endforelse
    </ul>

    {{ $notifications->links() }}
</div>
{{-- @endsection --}}
