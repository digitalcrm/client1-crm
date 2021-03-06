@extends('layouts.adminlte-boot-4.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-0">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Contacts</h1>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content mt-2 mx-0">
	<div class="container-fluid">
        <!-- Small cardes (Stat card) -->
        <div class="row">
            <div class="col-lg-12">
                @if(session('success'))
                <div class='alert alert-success'>
                    {{session('success')}}
                </div>
                @endif

                @if(session('error'))
                <div class='alert alert-danger'>
                    {{session('error')}}
                </div>
                @endif
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header with-border">
                        <h3 class="card-title">
                            Create Contact
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    {{Form::open(['action'=>'ContactController@store','method'=>'Post','enctype'=>'multipart/form-data'])}}
                    @csrf
                    <div class="card-body">
                        <!-- Left col -->
                        <section class="col-lg-4">
                            <div class="form-group">
                                <label for="first_name">First Name</label>&nbsp;<i class="fa fa-asterisk text-danger"></i>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="" value="{{old('first_name')}}" required>
                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="" value="{{old('mobile')}}" >
                                <span class="text-danger">{{ $errors->first('mobile') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="leadsource">Lead Source</label>
                                <select class="form-control" name="leadsource" id="leadsource">
                                    {!!$data['leadsourceoptions']!!}
                                </select>
                                <span class="text-danger">{{ $errors->first('leadsource') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="notes">Notes</label>
                                <textarea name="notes" id="notes" class="form-control" rows="5"></textarea>
                                <span class="text-danger">{{ $errors->first('notes') }}</span>
                            </div>
                        </section>
                        <!-- /.Left col -->
                        <section class="col-lg-4">
                            <div class="form-group">
                                <label for="last_name">Last Name</label>&nbsp;<i class="fa fa-asterisk text-danger"></i>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="" value="{{old('last_name')}}" required>
                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                            </div>                                 

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder=""  value="{{old('phone')}}">
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="account">Account</label>
                                <select class="form-control" name="account" id="account">
                                    {!!$data['accountoptions']!!}
                                </select>
                                <span class="text-danger">{{ $errors->first('account') }}</span>
                                <br>
                                <input class="form-control" type="text" name="addAccount" id="addAccount" style="display: none;" />
                                <span class="text-danger">{{ $errors->first('addAccount') }}</span>
                            </div>
                        </section>
                        <!-- /.Left col -->
                        <section class="col-lg-4">
                            <div class="form-group">
                                <label for="email">Email</label>&nbsp;<i class="fa fa-asterisk text-danger"></i>
                                <input type="email" class="form-control" name="email" id="email" placeholder="" value="{{old('email')}}" required>
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="userpicture">Profile Picture</label>
                                <input type="file" class="btn btn-default" name="userpicture" id="userpicture" />
                                <span class="text-danger">{{ $errors->first('userpicture') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" name="website" id="website" placeholder="" value="{{old('website')}}">
                                <span class="text-danger">{{ $errors->first('website') }}</span>
                            </div>
                        </section>

                        <div class="form-group col-lg-12">
                            <h4 class="card-title text-primary">Address Information</h4>
                        </div>
                        <!-- right col -->
                        <section class="col-lg-4">
                            <div class="form-group">
                                <label for="country">Country</label>
                                <select class="form-control" name="country" id="country">
                                    {!!$data['countryoptions']!!}
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="street">Street</label>
                                <input type="text" class="form-control" name="street" id="street" placeholder="" value="{{old('street')}}">
                            </div>

                        </section>
                        <!-- Left col -->
                        <section class="col-lg-4">
                            <div class="form-group">
                                <label for="state">State</label>
                                <select class="form-control" name="state" id="state">
                                    <option value="0">Select State</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="zip">Zip</label>
                                <input type="text" class="form-control" name="zip" id="zip" placeholder="" value="{{old('zip')}}">
                            </div>
                        </section>
                        <!-- Left col -->
                        <section class="col-lg-4">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" name="city" id="city" placeholder="" value="{{old('city')}}">
                            </div>

                        </section>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer bg-white border-top">
                        <a href="{{url('contacts')}}" class="btn btn-primary">Back</a> 
                        {{Form::submit('Save',['class'=>"btn btn-primary pull-right"])}}
                    </div>
                    <!-- </form> -->
                    {{Form::close()}}
                </div>
                <!-- /.card -->
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">


            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">


            </section>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
	</div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
    var url = "{{url('ajaxwebtolead/getStateoptions')}}";
    $(function () {

        $(".sidebar-menu li").removeClass("active");
        $("#licontacts").addClass("active");

        $("#account").change(function () {
            var acc = $(this).val();
            if (acc == "NewAccount") {
                $("#addAccount").show();
            } else {
                $("#addAccount").hide();
            }
        });

        $("#country").change(function () {
            var country = $(this).val();
            // alert(country);
            if (country > 0) {
                $.get(url, {'country': country}, function (result, status) {
                    // alert(result);
                    $("#state").html(result);
                });
            }
        });

    });
</script>
@endsection