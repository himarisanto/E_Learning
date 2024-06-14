{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
    <h1>Create Notification</h1>
    <form action="{{ route('notifications.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user_id">User ID</label>
            <input type="number" name="user_id" id="user_id" class="form-control" value="{{ old('user_id') }}">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control">{{ old('message') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
{{-- @endsection --}}
