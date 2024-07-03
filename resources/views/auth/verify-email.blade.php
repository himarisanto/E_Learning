@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Email Verification</div>
        <div class="card-body">
            
            <p class="text-sm text-gray-600">
            </p>

            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success" role="alert">
                </div>
            @endif

            <div class="mt-4 d-flex justify-content-between align-items-center">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">
                    </button>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-link text-sm text-gray-600">
                        Log Out
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
