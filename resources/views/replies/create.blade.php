{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
    <h1>Create Reply</h1>
    <form action="{{ route('replies.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="discussion_id">Discussion ID</label>
            <input type="number" name="discussion_id" id="discussion_id" class="form-control" value="{{ old('discussion_id') }}">
        </div>
        <div class="form-group">
            <label for="user_id">User ID</label>
            <input type="number" name="user_id" id="user_id" class="form-control" value="{{ old('user_id') }}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control">{{ old('content') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
{{-- @endsection --}}
