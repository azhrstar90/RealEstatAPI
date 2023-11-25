@section('navgitor_name','Real Estat API')
@include('layouts.header')

<div class="contaner">
    <div class="row">
        <h1 class="text-center mt-4">THE MAIN COTOGURIES</h1>
        @if (Session::get('success'))
        @endif
        @if (Session::get('error'))
        @endif
        <div class="col-md-6">
            <div class="clientdata">
                <a href="">
                    <img src="{{asset('img/client.png')}}" class="w-100 normal-img" alt="...">
                    <img src="{{asset('img/hoverdata.png')}}" class="w-100 hover-img" alt="...">
                </a>
            </div>
            <h3 class="text-center">CLIENTS</h3>
        </div>
        <div class="col-md-6  mb-3">
            <div class="objtdata">
                <a href="">
                    <img src="{{asset('img/obj.png')}}" class="w-100 normal-img" alt="...">
                    <img src="{{asset('img/hoverdata.png')}}" class="w-100 hover-img" alt="...">
                </a>
            </div>
            <h3 class="text-center">OBJECTS</h3>
        </div>
        <div class="col-md-4  mb-3">
            <div class="transdata">
                <a href="">
                    <img src="{{asset('img/trans.png')}}" class="w-100 normal-img" alt="...">
                    <img src="{{asset('img/hoverdata.png')}}" class="w-100 hover-img" alt="...">
                </a>
            </div>
            <h3 class="text-center">TRANSACTION</h3>
        </div>
        <div class="col-md-4  mb-3">
            <div class="otherdata">
                <a href="">
                    <img src="{{asset('img/other.png')}}" class="w-100 normal-img" alt="...">
                    <img src="{{asset('img/hoverdata.png')}}" class="w-100 hover-img" alt="...">
                </a>
            </div>
            <h3 class="text-center">API METHOD</h3>
        </div>
        <div class="col-md-4 mb-3">
            <div class="logout22">
                @auth
                <a  href="{{ route('logout') }}" class="nav-link"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                <img src="{{asset('img/logout.png')}}" class="d-block w-100 normal-img" alt="...">
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @endauth
            </div>
            <h3 class="text-center">Logout</h3>
        </div>
    </div>
</div>


@include('sweetalert::alert')