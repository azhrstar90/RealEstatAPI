@section('navgitor_name','Real Estat API')
@include('layouts.header')

<div class="contaner">
    <div class="row">
        <h1 class="text-center mt-3">THE MAIN page </h1>
        <div class="col-md-12">
                @if (Route::has('login'))
                <div class="col-md-12 text-center">
                    @auth
                    <a href="{{ url('/home') }}" class=""><button class="btn btn-info">HOME</button></a> 
                    @else                          
                    <h4 class="text-center mt-4"><span style="color: red">NOTE:</span>YOU NEED TO LOGIN TO HAVE ACCESS TO THE DATABASE</h4>
                    <a href="{{ route('login') }}"><button class="btn btn-info">LOGIN</button></a> 

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"><button class="btn btn-info">REGISTER</button></a>                    
                    @endif                    
                @endauth
                </div>  
                @endif      
            </div>
        </div>
    </div>
</div>

@include('sweetalert::alert')