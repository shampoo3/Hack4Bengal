
  
@section('title', 'Profile')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Register</title>
  <!-- Custom fonts for this template-->
  <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
  <style>
    h1{
  text-align: center;
  color:black;
  font-family: "Lucida Handwriting", Brush Script MT, cursive;
  padding-top: 5px;
  padding-bottom: 5px;
  font-weight: bold;
    }
    body {
        background-image: url("https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/rm373batch15-217-01.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=d8bbc66e02e81095950de55fcc9347f5");
        background-repeat: no-repeat;
  background-size: 100% 100%;
        }
  </style>
</head>
<body>
<!-- <b1><h1 >FreeHealer</h1></b1> -->
  <div class="container">
  <!-- <b1><h1 >FreeHealer</h1></b1> -->
    <div class="card o-hidden border-0 shadow-lg my-3">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
              <b1><h1 >FreeHealer</h1></b1>
                <h2 class="h4 text-gray-900 mb-4">Create an Account!</h2>
              </div>
              <form action="{{ route('register.save') }}" method="POST" class="user">
                @csrf
                <div class="form-group">
                <label class="form-check-label mt-2" for="exampleInputName">Name:</label>
                  <input name="name" type="text" class="form-control form-control-user @error('name')is-invalid @enderror" id="exampleInputName" placeholder="Name">
                  @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                <label class="form-check-label mt-2" for="exampleInputEmail">Email:</label>
                  <input name="email" type="email" class="form-control form-control-user @error('email')is-invalid @enderror" id="exampleInputEmail" placeholder="Email Address">
                  @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                <label class="form-check-label mt-2" for="exampleInputPhone">Phone:</label> 
                  <input name="phone" type="text" class="form-control form-control-user @error('phone')is-invalid @enderror" id="exampleInputPhone" placeholder="Phone Number">
                  @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                <label class="form-check-label mt-2" for="exampleInputAddress">Address:</label>
                  <input name="address" type="text" class="form-control form-control-user @error('address')is-invalid @enderror" id="exampleInputAddress" placeholder="Address">
                  @error('address')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                <label class="form-check-label mt-2" for="DOB">Date Of Birth:</label>
                  <input name="DOB" type="date" class="form-control form-control-user @error('DOB')is-invalid @enderror" id="DOB" placeholder="DOB">
                  @error('address')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                
                    <div class="form-group">
                        <label class="form-check-label mt-2" for="is_doctor">Is Doctor:</label>
                        <select name="is_doctor" id="is_doctor" class="form-control shadow-sm">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                         </select>
                        @error('is_doctor')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <label class="form-check-label mt-2" for="exampleInputPassword">Password:</label>
                    <input name="password" type="password" class="form-control form-control-user @error('password')is-invalid @enderror" id="exampleInputPassword" placeholder="Password">
                    @error('password')
                      <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="col-sm-6">
                  <label class="form-check-label mt-2" for="exampleRepeatPassword">Repeat Password:</label>
                    <input name="password_confirmation" type="password" class="form-control form-control-user @error('password_confirmation')is-invalid @enderror" id="exampleRepeatPassword" placeholder="Repeat Password">
                    @error('password_confirmation')
                      <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Register Account</button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('admin_assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  
  <!-- Core plugin JavaScript-->
  <script src="{{ asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  
  <!-- Custom scripts for all pages-->
  <script src="{{ asset('admin_assets/js/sb-admin-2.min.js') }}"></script>
</body>
</html>
