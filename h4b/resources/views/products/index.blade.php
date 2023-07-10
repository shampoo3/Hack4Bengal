@extends('layouts.app')
  
@section('title', 'Medicine List')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Medicine</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover" style="width: 100%;border-spacing: 0 10px;">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Donor's Name</th>
                <th>Donor's Contact</th>
                <th>Medicine Name</th>
                <th>Quantity</th>
                <th>Expiry Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($product->count() > 0)
                @foreach($product as $rs)
                    <tr class = "shadow" style="border-radius:15px;">
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->user->name }}</td>
                        <td class="align-middle">{{ $rs->user->phone }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->quantity }}</td>
                        <td class="align-middle">{{ $rs->expiry_date }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="#" data-toggle="modal" data-target="#showModal_{{ $rs->id }}">
                                                    <i class="fas fa-eye text-info" style="margin-right: 10px"></i>
                            </a>
                                <a href="{{ route('products.edit', $rs->id)}}" type="button"> 
                                    <i class="fas fa-edit text-primary" style="margin-right: 10px"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>


    <!-- Show Modal -->
@foreach ($product as $rs)                  
    <div class="modal fade" id="showModal_{{ $rs->id }}" tabindex="-1" role="dialog" aria-labelledby="showModalLabel_{{ $rs->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style=" background-color:#061148; ">
                    <h5 class="modal-title" id="showModalLabel_{{  $rs->id }}" style="color: white;font-weight: bolder;">Medicine Details</h5>
                </div>
                <div class="modal-body">
                    <table class="table table-striped" style="margin: 0 auto;">
                        <tbody>
                            <tr>
                                <th style="font-weight: 600; padding-left:30px;">Donor's Name:</th>
                                <td style="font-weight: 500">{{ $rs->user->name }}</td>
                            </tr>
                            <tr>
                                <th style="font-weight: 600; padding-left:30px;">Donor's Contact:</th>
                                <td style="font-weight: 500; padding-left:30px;">{{ $rs->user->phone }}</td>
                            </tr>
                            <tr>
                                <th style="font-weight: 600; padding-left:30px;">Medicine Name:</th>
                                <td style="font-weight: 500">{{ $rs->name }}</td>
                            </tr>
                            <tr>
                                <th style="font-weight: 600; padding-left:30px;">Quantity:</th>
                                <td style="font-weight: 500">{{ $rs->quantity }}</td>
                            </tr>
                            <tr>
                                <th style="font-weight: 600; padding-left:30px;">Details:</th>
                                <td style="font-weight: 500">{{ $rs->description }}</td>
                            </tr>
                            <tr>
                                <th style="font-weight: 600; padding-left:30px;">Expiry Date:</th>
                                <td style="font-weight: 500">{{ $rs->expiry_date }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color:#D22B2B">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection