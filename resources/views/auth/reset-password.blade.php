{{-- Example view file, e.g., resources/views/auth/reset-password.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Reset Password</div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email"
                    value="{{ old('email', $request->email) }}" required autofocus>
            </div>
            <div class="form-group mt-4">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group mt-4">
                <label for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation"
                    required>
            </div>
            <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary">
                    Reset Password
                </button>
            </div>
        </form>
    </div>
</div>
@endsection