{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
    <h1>Edit Reply</h1>
    <form action="{{ route('replies.update', $reply->reply_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="discussion_id">Discussion ID</label>
            <input type="number" name="discussion_id" id="discussion_id" class="form-control" value="{{ $reply->discussion_id }}" readonly>
        </div>
        <div class="form-group">
            <label for="user_id">User ID</label>
            <input type="number" name="user_id" id="user_id" class="form-control" value="{{ $reply->user_id }}" readonly>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control">{{ $reply->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
{{-- @endsection --}}
