@section('navgitor_name','DATABASE OF CLIENT')
@include('layouts.header')

<div class="container icon-dboard text-center mt-4 mb-4">
    <h2 class="text-center">CLIENTS DATABASE</h2>
    <!-- TABL OF DATA -->
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="bg-ourapp">Client ID</th>
                <th class="bg-ourapp">Client_name</th>
                <th class="bg-ourapp">Client_type</th>
                <th class="bg-ourapp">Client_contactDetails</th>
                <th class="bg-ourapp">Client_Created</th>
                <th class="bg-ourapp">Client_Updated</th>
                <th class="bg-ourapp">Admin</th>
                <th class="bg-ourapp">Transaction</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ClientDatas as $ClientData)
            <tr>
                <td class="bg-ourapp">{{$ClientData->Client_ID}}</td>
                <td>{{$ClientData->Client_name}}</td>
                <td>{{$ClientData->Client_type}}</td>
                <td>{{$ClientData->Client_contactDetails}}</td>
                <td>{{$ClientData->Client_Created}}</td>
                <td>{{$ClientData->Client_Updated}}</td>
                <td>{{$ClientData->userName}}</td>
                <td>
                    <a href="{{route('clientWithTran',$ClientData->Client_ID)}}"><button class="btn btn-info">Get</button></a> 
                </td>
            </tr>
            @endforeach          
        </tbody>
      </table>
</div>
@include('sweetalert::alert')
