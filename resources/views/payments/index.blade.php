{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
    <h1>Payments</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($payments as $payment)
                <tr>
                    <td>{{ $payment->payment_id }}</td>
                    <td>{{ $payment->user->name }}</td>
                    <td>${{ $payment->amount }}</td>
                    <td>{{ $payment->payment_date }}</td>
                    <td>
                        @if ($payment->status === 'pending')
                            <span class="badge badge-warning">Pending</span>
                        @elseif ($payment->status === 'completed')
                            <span class="badge badge-success">Completed</span>
                        @elseif ($payment->status === 'failed')
                            <span class="badge badge-danger">Failed</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('payments.show', $payment->payment_id) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('payments.edit', $payment->payment_id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('payments.destroy', $payment->payment_id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this payment?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $payments->links() }}
</div>
{{-- @endsection --}}
