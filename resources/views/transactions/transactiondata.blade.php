@section('navgitor_name','DATABASE OF CLIENT')
@include('layouts.header')

<div class="container icon-dboard text-center mt-4 mb-4">
    <h2 class="text-center">TRANSACTION DATABASE</h2>
    <!-- TABL OF DATA -->
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="bg-ourapp">Transaction ID</th>
                <th class="bg-ourapp">Transaction status</th>
                <th class="bg-ourapp">Transaction date</th>
                <th class="bg-ourapp">Transaction Created</th>
                <th class="bg-ourapp">Transaction Updated</th>
                <th class="bg-ourapp">Admin</th>
                <th class="bg-ourapp">View Objects And Clients</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($TransDatas as $TransData)
            <tr>
                <td class="bg-ourapp">{{$TransData->Transaction_ID}}</td>
                <td>{{$TransData->Transaction_status}}</td>
                <td>{{$TransData->Transaction_date}}</td>
                <td>{{$TransData->Transaction_Created}}</td>
                <td>{{$TransData->Transaction_Updated}}</td>
                <td>{{$TransData->userName}}</td>
                <td>
                    <a href="{{route('TransDetail',$TransData->Transaction_ID)}}"><button class="btn btn-info">Get</button></a> 
                </td>
            </tr>
            @endforeach          
        </tbody>
      </table>
</div>
@include('sweetalert::alert')
