@section('navgitor_name','Real Estat API')
@include('layouts.header')

<div class="contaner">
    <div class="row">
        <h1 class="text-center mt-4">ADD CLIENTS AND TRANSACTION PAGE </h1>
        <div class="col-md-6">
            <div class="addclientdata">
                <a href="{{ route('addclient') }}">
                    <img src="{{asset('img/addclient.png')}}" class=" d-block w-100 normal-img" alt="...">
                </a>
            </div>
            <h3 class="text-center">ADD CLIENTS</h3>
        </div>
        <div class="col-md-4  mb-3">
            <div class="addtransdata">
                <a href="{{ route('AddTrans')}}">
                    <img src="{{asset('img/addtrans.png')}}" class=" d-block w-100 normal-img" alt="...">
                </a>
            </div>
            <h3 class="text-center">ADD TRANSACTION</h3>
        </div>
    </div>
</div>


@include('sweetalert::alert')