@extends('layouts.app')
  
@section('title', 'Profile Details')
  
@section('contents')
    <!-- <h1 class="mb-0">Profile</h1> -->
    <hr />
 
    <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="" >
    <div class="row">
        <div class="col-md-12 border-right">
            <div class="p-3 py-5">
            <div class="row mt-2">
            <div class="col-md-6">
                        <label class="labels">User ID:</label>
                        <input type="text" name="user_id" class="form-control" placeholder="User ID" value="{{ auth()->user()->id }}" readonly>
                    </div>
            </div>
                <div class="row mt-2">
  
                    <div class="col-md-6">
                        <label class="labels">Name:</label>
                        <input type="text" name="name" class="form-control" placeholder="first name" value="{{ auth()->user()->name }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Email:</label>
                        <input type="text" name="email" disabled class="form-control" value="{{ auth()->user()->email }}" placeholder="Email" readonly>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Phone:</label>
                        <input type="text" name="phone" class="form-control" placeholder="Phone Number" value="{{ auth()->user()->phone }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Address:</label>
                        <input type="text" name="address" class="form-control" value="{{ auth()->user()->address }}" placeholder="Address" readonly>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Is Doctor:</label>
                        <input type="text" name="is_doctor" class="form-control" placeholder="Is Doctor" value="{{ auth()->user()->is_doctor }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Date of Birth:</label>
                        <input type="date" name="DOB" class="form-control" value="{{ auth()->user()->DOB }}" placeholder="DOB" readonly>
                    </div>
                </div>
                 
                <!-- <div class="mt-5 text-center"><button id="btn" class="btn btn-primary profile-button" type="submit">Save Profile</button></div> -->
            </div>
        </div>
         
    </div>   
            
        </form>
@endsection