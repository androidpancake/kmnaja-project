@extends('template-admin.template')
@section('content')

<div class="container my-3">
    <div class="d-flex justify-content-center">
        <h4 class="text-center">Edit Transaksi</h4>
    </div>
    <form action="{{ route('transaction.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="status" class="form-label">Status</label>
          <select name="transaction_status" required class="form-control">
            <option value="{{ $item->transaction_status }}">
              Jangan ubah {{ $item->transaction_status }}
            </option>
            <option value="IN_CART">In Cart</option>
            <option value="PENDING">Pending</option>
            <option value="SUCCESS">Success</option>
            <option value="CANCEL">Cancel</option>
            <option value="FAILED">Failed</option>
          </select>
        </div>
        <button class="btn btn-primary float-right" type="submit">Update</button>
    </form>
</div>
@endsection 