@extends('layouts.app')
  
@section('title', 'Add Order')
  
@section('contents')
    <hr />
    <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
        <div class="col">
            <label for="user_id">User ID:</label>
            <input type="text" name="user_id" class="form-control" placeholder="User ID">
        </div>
            <div class="col">
                <label class="labels">Medicine Name:</label>
                <select name="pdt_id" id="pdt_id" class="form-control shadow-sm" required>
                        <option value="">Select Medicine</option>
                        @foreach ($product as $rs)
                            <option value="{{ $rs->id }}">{{ $rs->name }}</option>
                        @endforeach
                    </select>
            </div>
            <div class="col">
            <label for="user_id">Quantity:</label>
            <input type="number" name="quantity" class="form-control" placeholder="Quantity">
        </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection