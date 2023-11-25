@section('navgitor_name','USER REGESTRASION')
@include('layouts.header')
<div class="bodyofreg mb-5 mt-3">
    <!-- Material form login -->
    <div class="container">
        <div class="rows">
            <div class="col-12">
                <div class="card register-front">
                    <h5 class="card-header register-header white-text text-center py-4">Registrastino for Agancy</h5>
                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">
                        <!-- Form -->
                        <form action="{{ route('register') }}" method="POST" style="color: #757575;" enctype="multipart/form-data">
                            @if (Session::get('success'))
                                <div class="alert alert-success mt-2" role="alert">
                                    {{Session::get('success')}}
                                </div>
                            @endif
                            @if (Session::get('error'))
                                <div class="alert alert-danger mt-2" role="alert">
                                    {{Session::get('error')}}
                                </div>
                            @endif
                            @csrf
                            <!-- admin name -->
                            <div class="md-form">
                                <label for="name" class="mb-2 mt-3">USER NAME</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="You should write your user name " value="{{old('username')}}">
                                <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                            </div>
                               <!-- Email -->
                            <div class="md-form">
                                <label for="email" class="mb-2 mt-3">E-MAIL</label>
                                <input type="text" id="email" name="email" class="form-control" placeholder="You should write your E-mail" value="{{old('email')}}">
                                <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                            </div>
                               <!-- our page type -->
                            <!-- Password -->
                            <div class="md-form mt-2">
                                <label for="password" class="mb-2 mt-3">PASSWORD</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Enter the password" value="{{old('password')}}">
                                <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                            </div>
                            
                            <!-- conform Password -->
                            <div class="md-form mt-2">
                                <label for="cpassword" class="mb-2 mt-3">RE WRITE PSSWORD</label>
                                <input type="password" id="cpassword" name="password_confirmation" class="form-control" placeholder="rewrite the same password That you enterd" value="{{old('password_confirmation')}}">
                                <span class="text-danger">@error('password_confirmation') {{ $message }} @enderror</span>
                            </div>
                            <button class="btn btn-danger btn-login mt-3 " type="submit">CREAT</button>
                            <!-- Social login -->
                        </form>
                        <!-- Form -->
                    </div>
                </div>
                <!-- Material form login -->
            </div>
         </div>
     </div>
 </div>
