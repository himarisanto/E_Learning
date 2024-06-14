{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
    <h1>Edit Payment</h1>
    <form action="{{ route('payments.update', $payment->payment_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="user_id">User ID</label>
            <input type="number" name="user_id" id="user_id" class="form-control" value="{{ $payment->user_id }}">
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" step="0.01" name="amount" id="amount" class="form-control" value="{{ $payment->amount }}">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="pending" {{ $payment->status === 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="completed" {{ $payment->status === 'completed' ? 'selected' : '' }}>Completed</option>
                <option value="failed" {{ $payment->status === 'failed' ? 'selected' : '' }}>Failed</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
{{-- @endsection --}}
