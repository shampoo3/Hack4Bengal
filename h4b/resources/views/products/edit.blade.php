@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Medicine Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $product->name }}" readonly >
            </div>
            <div class="col mb-3">
                <label class="form-label">Quantity:</label>
                <input type="number" name="quantity" class="form-control" placeholder="Quantity" value="{{ $product->quantity }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Expiry Date:</label>
                <input type="date" name="expiry_date" class="form-control" placeholder="Expiry Date" value="{{ $product->expiry_date }}" readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Description:</label>
                <textarea class="form-control" name="description" placeholder="Description" readonly>{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection