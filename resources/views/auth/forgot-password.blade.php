@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Reset Password</div>
    <div class="card-body">
        <p class="text-muted">
        </p>

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required
                    autofocus>
            </div>
            <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary">
                    Email Password Reset Link
                </button>
            </div>
        </form>
    </div>
</div>
@endsection