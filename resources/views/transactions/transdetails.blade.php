@section('navgitor_name','FILTER OF REAL ESTAT OBJECTS')
@include('layouts.header')
<div class="container icon-dboard text-center mt-4 mb-4">
    <h2 class="mt-3">Object and Client for Transaction</h2>
    <div class="row">
        <div class="col-md-6">
            <h2 class="mt-3">CLIENTS</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="bg-ourapp">Client ID</th>
                        <th class="bg-ourapp">Client Name</th>
                        <th class="bg-ourapp">Clien Contacts</th>
                        <th class="bg-ourapp">Our Control</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trans->transwithclients as $client)
                    <tr>
                        <td class="bg-ourapp">{{$client->Client_ID}}</td>
                        <td>{{$client->Client_name}}</td>
                        <td>{{$client->Client_contactDetails}}</td>
                        <td>
                            <button  class="btn btn-danger martyr_deletebtn">Delete</button>  
                        </td>
                    </tr>
                    @endforeach          
                </tbody>
              </table>        
        </div>
        <div class="col-md-6">
            <h2 class="mt-3">REALESTAT OBJECT</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="bg-ourapp">Object ID</th>
                        <th class="bg-ourapp">Object Name</th>
                        <th class="bg-ourapp">Object price</th>
                        <th class="bg-ourapp">Object Type</th>
                        <th class="bg-ourapp">Our Control</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trans->transwithObjects as $object)
                    <tr>
                        <td class="bg-ourapp">{{$object->object_ID}}</td>
                        <td>{{$object->object_name}}</td>
                        <td>{{$object->object_price}}</td>
                        <td>{{$object->object_type}}</td>
                        <td>
                            <button  class="btn btn-danger martyr_deletebtn">Delete</button>  
                        </td>
                    </tr>
                    @endforeach          
                </tbody>
              </table>
        </div>
    </div>
</div>
@include('sweetalert::alert')