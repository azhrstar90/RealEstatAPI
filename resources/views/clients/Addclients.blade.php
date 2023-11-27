@section('navgitor_name','USER REGESTRASION')
@include('layouts.header')
<div class="bodyofreg mb-5 mt-3">
    <!-- Material form login -->
    <div class="container">
        <div class="rows">
            <div class="col-12">
                <div class="card register-front">
                    <h5 class="card-header register-header white-text text-center py-4">Creating A Client</h5>
                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">
                        <!-- Form -->
                        <form action="{{ route('creatclient')}}" method="POST" style="color: #757575;" enctype="multipart/form-data">
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
                            <!-- cLIENT name -->
                            <div class="md-form">
                                <label for="clientname" class="mb-2 mt-3">CLIENT NAME</label>
                                <input type="text" id="clientname" name="clientname" class="form-control" placeholder="You Should Enter The Client Name ">
                            </div>
                               <!-- CLIENT TYPE -->
                            <div class="md-form">
                                <label for="clientType" class="mb-2 mt-3">CLIENT TYPE</label>
                                <select class="form-control" name="clientType" id="clientType">
                                    <option disabled selected>ENTER THE TYPE OF CLIENT</option>
                                    <option value="Individual">Individual</option>
                                    <option value="LegalEntity">Legal Entity</option>
                                </select>
                            </div>
                            <!-- contact details -->
                            <div class="md-form mt-2">
                                <label for="contact" class="mb-2 mt-3">CONTACT DETAILS</label>
                                <input type="text" id="contact" name="contact" class="form-control" placeholder="You Should Enter The Contact Detail Of Client">
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
