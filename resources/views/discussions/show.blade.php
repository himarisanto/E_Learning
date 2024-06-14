{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
	<h1>{{ $discussion->title }}</h1>
	<p>Course: {{ $discussion->course->title }}</p>
	<p>User: {{ $discussion->user->name }}</p>
	<p>Content: {{ $discussion->content }}</p>
	<hr>
	<h3>Replies</h3>
	@foreach ($discussion->replies as $reply)
	<div>
		<p>User: {{ $reply->user->name }}</p>
		<p>Reply: {{ $reply->content }}</p>
		<hr>
	</div>
	@endforeach
	<a href="{{ route('discussions.index') }}" class="btn btn-primary">Back to Discussions</a>
</div>
{{-- @endsection --}}