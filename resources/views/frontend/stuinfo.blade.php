@extends('frontendtemplate')

@section('content')
<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('stuinfo') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right ">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control name" name="name" value="">

                              
                                    
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">Photo</label>

                            <div class="col-md-6">
                                <input id="photo" type="file" class="form-control photo" name="photo" value="">

                              
                                    
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="fathername" class="col-md-4 col-form-label text-md-right">Father Name</label>

                            <div class="col-md-6">
                                <input id="fathername" type="text" class="form-control fathername" name="fathername" value="">

                              
                                    
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nrcno" class="col-md-4 col-form-label text-md-right">NRC NO</label>

                            <div class="col-md-6">
                                <input id="nrcno" type="nrcno" class="form-control nrcno" name="nrcno" value="">

                                
                            </div>
                        </div>
                       

                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">State</label>

                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control state" name="state">

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">City</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control city" name="city">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phoneno" class="col-md-4 col-form-label text-md-right">Phone No</label>

                            <div class="col-md-6">
                                <input id="phoneno" type="text" class="form-control phoneno" name="phoneno">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary add">
                                   Add
                                </button>
                            </div>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
@endsection