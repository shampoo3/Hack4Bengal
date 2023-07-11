@extends('layouts.app')
  
@section('title', 'Order List')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('orders.create') }}" class="btn btn-primary">Add Order</a>
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
                <th>Orderer's Name</th>
                <th>Medicine Name</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                @foreach($order as $or)
                    <tr class = "shadow" style="border-radius:15px;">
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $or->user->name }}</td>
                        <td class="align-middle">{{ $or->ptd_id }}</td>
                        <td class="align-middle">{{ $or->quantity }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="#" data-toggle="modal" data-target="#showModal_{{ $or->id }}">
                                                    <i class="fas fa-eye text-info" style="margin-right: 10px"></i>
                            </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>


    <!-- Show Modal -->
@foreach ($order as $or)                  
    <div class="modal fade" id="showModal_{{ $or->id }}" tabindex="-1" role="dialog" aria-labelledby="showModalLabel_{{ $or->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style=" background-color:#061148; ">
                    <h5 class="modal-title" id="showModalLabel_{{  $or->id }}" style="color: white;font-weight: bolder;">Order Details</h5>
                </div>
                <div class="modal-body">
                    <table class="table table-striped" style="margin: 0 auto;">
                        <tbody>
                            <tr>
                                <th style="font-weight: 600; padding-left:30px;">Orderer's Name:</th>
                                <td style="font-weight: 500">{{ $or->user->name }}</td>
                            </tr>
                            <tr>
                                <th style="font-weight: 600; padding-left:30px;">Medicine Name:</th>
                                <td style="font-weight: 500">{{ $or->pdt_id }}</td>
                            </tr>
                            <tr>
                                <th style="font-weight: 600; padding-left:30px;">Quantity:</th>
                                <td style="font-weight: 500">{{ $or->quantity }}</td>
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