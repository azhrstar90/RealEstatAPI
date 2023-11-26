@section('navgitor_name','DATABASE OF REAL ESTAT OBJECTS')
@include('layouts.header')

<div class="container icon-dboard text-center mt-4 mb-4">
    <h2 class="text-center">The DataBase</h2>
    <!-- FilterSearch Form -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Data Objects Filter</h3>                
                <div class="form-inline mb-2 objFilter" >
                    <form action="{{ route('ObjFilter')}}" method="GET">
                        @csrf
                        <div class="input-group">
                            <select name="type">
                                <option value="">Select Type</option>
                                <option value="home">HOME</option>
                                <option value="apartment">APARTMENT</option>
                                <option value="supermarkit">SUPERMARKIT</option>
                            </select>
                            <input type="number" name="min_price" placeholder="Min Price">
                            <input type="number" name="max_price" placeholder="Max Price">
                            <div class="input-group-append" >
                                <button type="submit" class="btn btn-sidebar">
                                    <img src="/img/searching.png" class="fa-fw" alt="">
                                </button>
                            </div>
                        </div>
                    </form>    
                </div>             
            </div>
        </div>
    </div>
    <!-- Modal -->
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

