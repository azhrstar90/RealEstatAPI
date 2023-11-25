@section('navgitor_name','REAL EASTAT OBJECTS')
@include('layouts.header')

<div class="container icon-dboard text-center mt-4 mb-4">
    <h2 class="text-center">Objects DataBase</h2>
  
    <!-- SidebarSearch Form -->
    <div class="form-inline mb-2" >
        <form action="#" method="POST">
            @csrf
            <div class="input-group">
            <input class="form-control form-control-sidebar" name="keyword" type="search" placeholder="search" aria-label="Search" style="background-color: #84dfff; border: 1px solid #fbc531;">
            <div class="input-group-append">
                <button type="submit" class="btn btn-sidebar" style="background-color: #84dfff; border: 1px solid #fbc531;">
                <img src="/imgs/dboard/searching.png" class="fa-fw" alt="">
                </button>
            </div>
            </div>
        </form>
    </div>
    <!-- Modal -->
    <table class="table table-hover">
        <thead class="bg-ourapp">
            <tr>
                <th>Object-ID</th>
                <th>object_name</th>
                <th>object_price</th>
                <th>object_type</th>
                <th>object_created</th>
                <th>object_updated</th>
                <th>Our Control</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ObjectsDatas as $ObjectsData)
            <tr>
                <td class="bg-ourapp" style="color: white">{{$ObjectsData->object_ID}}</td>
                <td>{{$ObjectsData->object_name}}</td>
                <td>{{$ObjectsData->object_price}}</td>
                <td>{{$ObjectsData->object_type}}</td>
                <td>{{$ObjectsData->object_created}}</td>
                <td>{{$ObjectsData->object_updated}}</td>
                <td>
                    <button  class="btn btn-danger martyr_deletebtn">Delete</button>  
                </td>
            </tr>
            @endforeach          
        </tbody>
      </table>
      {{$MartyrDatas->links()}}
</div>

