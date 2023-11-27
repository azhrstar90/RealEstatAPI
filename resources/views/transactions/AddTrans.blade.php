@section('navgitor_name','USER REGESTRASION')
@include('layouts.header')
<div class="bodyofreg mb-5 mt-3">
    <!-- Material form login -->
    <div class="container">
        <div class="rows">
            <div class="col-12">
                <div class="card register-front">
                    <h2 class="card-header register-header white-text text-center py-4">CREATING A TRANSACTION</h2>
                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">
                        <!-- Form -->
                        <form action="{{ route('creatTrans')}}" method="POST" style="color: #757575;" enctype="multipart/form-data">
                            @if (Session::get('success'))
                                <div class="alert alert-success mt-2" role="alert">
                                    {{Session::get('success')}}
                                </div>
                            @endif
                            @if (Session::get('error'))
                                <div class="alert alert-danger mt-2" role="alert">
                                    {{Session::get('error')}}
                                </div>
                            @endif
                            @csrf
                               <!-- CLIENT TYPE -->
                            <div class="md-form">
                                <label for="transType" class="mb-2 mt-3">TRANSACTION TYPE</label>
                                <select class="form-control" name="transType" id="transType">
                                    <option disabled selected>CHOSE THE STATUS OF TRANSACTION</option>
                                    <option value="Individual">COMPLETED</option>
                                    <option value="LegalEntity">REJECTED</option>
                                </select>
                            </div>
                            <button class="btn btn-danger btn-login mt-3 " type="submit">CREAT</button>
                        </form>
                        <!-- Form -->
                    </div>
                </div>
            </div>
         </div>
     </div>
 </div>
