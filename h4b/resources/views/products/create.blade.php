@extends('layouts.app')
  
@section('title', 'Add Medicine')
  
@section('contents')
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
        <div class="col">
            <label for="user_id">User ID:</label>
            <input type="text" name="user_id" class="form-control" placeholder="User ID">
        </div>
            <div class="col">
                <label class="labels">Medicine Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Medicine Name">
            </div>
            <div class="col">
                <label class="labels">Quantity</label>
                <input type="number" name="quantity" class="form-control" placeholder="Quantity">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="labels">Expiry Date:</label>
                <input type="date" name="expiry_date" class="form-control" placeholder="Expiry Date">
            </div>
            <div class="col">
                <label class="labels">Description:</label>
                <textarea class="form-control" name="description" placeholder="Description"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection