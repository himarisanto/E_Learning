{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
    <h1>Edit Notification</h1>
    <form action="{{ route('notifications.update', $notification->notification_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="user_id">User ID</label>
            <input type="number" name="user_id" id="user_id" class="form-control" value="{{ $notification->user_id }}">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control">{{ $notification->message }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
{{-- @endsection --}}

