@section('navgitor_name','FILTER OF REAL ESTAT OBJECTS')
@include('layouts.header')

<div class="container icon-dboard text-center mt-4 mb-4">
    <h2>Transactions for Object <span style="color: #cc4158;">{{ $ObjectsTrans->object_name }}</span> </h2>
    <!-- FilterSearch Form -->
    <!-- THE TABLE -->
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="bg-ourapp">Transaction_ID</th>
                <th class="bg-ourapp">Transaction_status</th>
                <th class="bg-ourapp">Transaction_date</th>
                <th class="bg-ourapp">Transaction_Created</th>
                <th class="bg-ourapp">Transaction_Updated</th>
                <th class="bg-ourapp">Our Control</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ObjectsTrans->transactions as $ObjectsTran)
            <tr>
                <td class="bg-ourapp">{{$ObjectsTran->Transaction_ID}}</td>
                <td>{{$ObjectsTran->Transaction_status}}</td>
                <td>{{$ObjectsTran->Transaction_date}}</td>
                <td>{{$ObjectsTran->Transaction_Created}}</td>
                <td>{{$ObjectsTran->Transaction_Updated}}</td>
                <td>
                    <button  class="btn btn-danger martyr_deletebtn">Delete</button>  
                </td>
            </tr>
            @endforeach          
        </tbody>
      </table>
</div>
@include('sweetalert::alert')