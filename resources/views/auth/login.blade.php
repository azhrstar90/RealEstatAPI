@section('navgitor_name','LOGIN PAG')
@include('layouts.header')

<div class="contaner">
    <div class="row">
        <h1 class="text-center mt-3">THE LOGIN page </h1>
        <div class="col-md-12">
        @if (Route::has('login'))
        @if (Session::get('success'))
        @endif
        @if (Session::get('error'))
        @endif
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else                          
            <h4 class="text-center mt-4"><span style="color: red">NOTE:</span>YOU NEED TO LOGIN TO HAVE ACCESS TO THE DATABASE</h4>
            <div class="container admin_login mt-5 mb-5">
                <div class="rows">
                    <div class="col-12">
                            <h5 class="card-header admincard_header white-text text-center py-4">لوحة تسجيل الدخول</h5>
                            <!--Card content-->
                            <div class="card-body px-lg-5 pt-0">
                                <!-- Form -->
                                <form action="{{route('login')}}" method="POST" style="color: #757575;">
                                    @csrf
                                    <!-- Email -->
                                    <div class="md-form">
                                        <label for="email" class="mb-2 mt-3">البريد الالكتروني</label>
                                        <input type="text" id="email" name="email" class="form-control" placeholder="البريد الالكتروني" value="{{old('email')}}">
                                        <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                                    </div>
         
                                    <!-- Password -->
                                    <div class="md-form mt-2">
                                        <label for="password" class="mb-2 mt-3">كلمة السر</label>
                                        <input type="password" id="password" name="password" class="form-control" placeholder="كلمة السر" value="{{old('password')}}">
                                        <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                                    </div>
                                    <!-- Sign in button -->
                                    <button class="btn btn-danger admin-submit mt-3 mb-3" type="submit">تسجيل دخول</button>
        
                                    <!-- Social login -->
                                </form>

                                <p>If you hav no account you can register</p>
                                <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 mb-3 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                    @endif
                                @endauth
                                </div>
                                    @endif
                          
                                <!-- Form -->
                            </div>
                        </div>
                        <!-- Material form login -->
                 </div>
             </div>        
            <p></p>
        </div>
    </div>
</div>
@include('sweetalert::alert')