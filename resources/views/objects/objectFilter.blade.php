@section('navgitor_name','FILTER OF REAL ESTAT OBJECTS')
@include('layouts.header')

<div class="container icon-dboard text-center mt-4 mb-4">
    <h2 class="text-center">THE REAL ESTATE OBJECTS</h2>
    <!-- FilterSearch Form -->
    <!-- THE TABLE -->
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="bg-ourapp">Object-ID</th>
                <th class="bg-ourapp">object_name</th>
                <th class="bg-ourapp">object_price</th>
                <th class="bg-ourapp">object_type</th>
                <th class="bg-ourapp">object_created</th>
                <th class="bg-ourapp">object_updated</th>
                <th class="bg-ourapp">Admin</th>
                <th class="bg-ourapp">Our Control</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ObjectsDatas as $ObjectsData)
            <tr>
                <td class="bg-ourapp">{{$ObjectsData->object_ID}}</td>
                <td>{{$ObjectsData->object_name}}</td>
                <td>{{$ObjectsData->object_price}}</td>
                <td>{{$ObjectsData->object_type}}</td>
                <td>{{$ObjectsData->object_created}}</td>
                <td>{{$ObjectsData->object_updated}}</td>
                <td>{{$ObjectsData->userName}}</td>
                <td>
                    <button  class="btn btn-danger martyr_deletebtn">Delete</button>  
                </td>
            </tr>
            @endforeach          
        </tbody>
      </table>
</div>

