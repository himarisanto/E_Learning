@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Confirm Password</div>
    <div class="card-body">
        <p class="text-muted">
        </p>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control" name="password" required
                    autocomplete="current-password">
            </div>
            <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary">
                    Confirm
                </button>
            </div>
        </form>
    </div>
</div>
@endsection