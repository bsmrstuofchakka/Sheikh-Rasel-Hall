


@extends('layouts.user')

@section('custom_css')
    <link href="{{asset('assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
@stop

@section('content')

    <!-- BEGIN PAGE BAR -->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ URL::to('adminUser') }}">Dashboard</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">Add Student</a>
                <i class="fa fa-circle"></i>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->

    <div class="content">
        <div class="col-md-6">
            <h3 class="page-title"> Add Student Form </h3>
        </div>
        <div class="btn-group right" style="float:right;padding-top:25px">
            <a href="{{ URL::to('users') }}" class="btn btn-sm blue"> <i class="fa fa-list"> </i> Student List</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="portlet-body form">



                    {!! Form::open(array('url' => url('users/save'), 'files' => true, 'class'=>'form-horizontal') )  !!}

                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}


                        <div class="form-body">






                            @if(!empty($users))
                                <input type="hidden" name="id" value="{{$users->id}}">
                            @endif

                            <div class="form-group">
                                <label class="col-md-5 control-label"> Student Id <span class="red">*</span> : </label>
                                <div class="col-md-7">
                                    <input type="text" name="student_id" value="@if(!empty($users)) {{$users->student_id}} @endif" class="form-control input-inline input-medium" placeholder="Please, Enter Unique Student Id">
                                    <div class="red">{{ $errors->first('student_id') }}</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-5 control-label"> Username <span class="red">*</span> : </label>
                                <div class="col-md-7">
                                    <input type="text" name="username"   value="@if(!empty($users)) {{$users->username}} @endif" placeholder="Please,Enter Unique Username" class="form-control input-inline input-medium" >
                                    <div class="red">{{ $errors->first('username') }}</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-5 control-label"> Email <span class="red">*</span> : </label>
                                <div class="col-md-7">
                                    <input type="email" name="email"  value="@if(!empty($users)) {{$users->email}} @endif" placeholder="Please, Enter Unique email" class="form-control input-inline input-medium" >
                                    <div class="red">{{ $errors->first('email') }}</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-5 control-label"> Password <span class="red">*</span> : </label>
                                <div class="col-md-7">
                                    <input type="password" name="password"   placeholder="Enter password" class="form-control input-inline input-medium" >
                                    <div class="red">{{ $errors->first('password') }}</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-5 control-label"> Amount <span class="red">*</span> : </label>
                                <div class="col-md-7">
                                    <input type="text"  name="amount"   value="@if(!empty($users)) {{$users->amount}} @endif" placeholder="Enter Amount" class="form-control input-inline input-medium" >
                                    <div class="red">{{ $errors->first('amount') }}</div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-5 control-label"> UserType <span class="red">*</span> : </label>
                                <div class="col-md-7">

                                    <select class="form-control input-inline input-medium" type="text" name="userType"  >
                                        @if(!empty($users))

                                            <option @if($users->userType==1) selected @endif value=1>Admin</option>
                                            <option @if($users->userType==0) selected @endif value=0>User</option>
                                        @else
                                            <option value="0">User</option>
                                            <option value="1">Admin</option>

                                        @endif
                                    </select>
                                    <div class="red">{{ $errors->first('userType') }}</div>
                                </div>



                            </div>





                            <div class="form-group">
                            <label class="col-md-5 control-label"> Name <span class="red">*</span> : </label>
                            <div class="col-md-7">
                            <input type="text" name="name" value="@if(!empty($users)) {{$users->name}} @endif" placeholder="Enter name" class="form-control input-inline input-medium" >
                            <div class="red">{{ $errors->first('name') }}</div>
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-md-5 control-label">Room No <span class="red">*</span> : </label>
                            <div class="col-md-7">
                            <input type="text" name="roomno" value="@if(!empty($users)) {{$users->roomno}} @endif" placeholder="Enter room no" class="form-control input-inline input-medium" >
                            <div class="red">{{ $errors->first('roomno') }}</div>
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-5 control-label"> Bed No <span class="red">*</span> : </label>
                            <div class="col-md-7">
                            <input type="text" name="bedno" value="@if(!empty($users)) {{$users->bedno}} @endif" placeholder="Enter bed no" class="form-control input-inline input-medium" >
                            <div class="red">{{ $errors->first('bedno') }}</div>
                            </div>
                            </div>
                            <div class="form-group">
                                    <label class="col-md-5 control-label"> Department <span class="red">*</span> : </label>
                                    <div class="col-md-7">
                                        <input type="text" name="department" value="@if(!empty($users)) {{$users->department}} @endif" placeholder="Enter department" class="form-control input-inline input-medium" >
                                        <div class="red">{{ $errors->first('department') }}</div>
                                    </div>
                                </div>
                            <div class="form-group">
                            <label class="col-md-5 control-label">Session <span class="red">*</span> : </label>
                            <div class="col-md-7">
                            <input type="text" name="ses" value="@if(!empty($users)) {{$users->ses}} @endif" placeholder="Enter session" class="form-control input-inline input-medium" >
                            <div class="red">{{ $errors->first('ses') }}</div>
                            </div>
                            </div>
                            <div class="form-group">
                                    <label class="col-md-5 control-label"> Year/Sem <span class="red">*</span> : </label>
                                    <div class="col-md-7">
                                        <input type="text" name="yearSem" value="@if(!empty($users)) {{$users->yearSem}} @endif" placeholder="Enter Year/Semester" class="form-control input-inline input-medium" >
                                        <div class="red">{{ $errors->first('yearSem') }}</div>
                                    </div>
                                </div>
                            <div class="form-group">
                                <label class="col-md-5 control-label">Father Name <span class="red">*</span> : </label>
                                <div class="col-md-7">
                                    <input type="text" name="fname" value="@if(!empty($users)) {{$users->fname}} @endif" placeholder="Enter father name" class="form-control input-inline input-medium" >
                                    <div class="red">{{ $errors->first('fname') }}</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-5 control-label">Mother Name <span class="red">*</span> : </label>
                                <div class="col-md-7">
                                    <input type="text" name="mname" value="@if(!empty($users)) {{$users->mname}} @endif" placeholder="Enter mother name" class="form-control input-inline input-medium" >
                                    <div class="red">{{ $errors->first('mname') }}</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-5 control-label"> Address <span class="red">*</span> : </label>
                                <div class="col-md-7">
                                    <input type="text" name="address" value="@if(!empty($users)) {{$users->address}} @endif" placeholder="Enter address" class="form-control input-inline input-medium" >
                                    <div class="red">{{ $errors->first('address') }}</div>
                                </div>
                            </div>

                            <div class="form-group">
                        <label class="col-md-5 control-label">Birth Date <span class="red">*</span> : </label>
                        <div class="col-md-7">
                        <input type="text" data-date-format="dd-mm-yyyy" name="birth_date" value="@if(!empty($users)) {{$users->birth_date}} @endif" placeholder="Enter birth date" class="form-control date-picker input-medium" >
                        <div class="red">{{ $errors->first('birth_date') }}</div>
                        </div>
                        </div>
                            <div class="form-group">
                                <label class="col-md-5 control-label">Contact Number <span class="red">*</span> : </label>
                                <div class="col-md-7">
                                    <input type="text" name="cnumber" value="@if(!empty($users)) {{$users->cnumber}} @endif" placeholder="Enter contact number" class="form-control input-inline input-medium" >
                                    <div class="red">{{ $errors->first('cnumber') }}</div>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-5 control-label"> Guardian Contact Number <span class="red">*</span> : </label>
                            <div class="col-md-7">
                            <input type="text" name="guarcontact" value="@if(!empty($users)) {{$users->guarcontact}} @endif" placeholder="Enter guardian contact" class="form-control input-inline input-medium" >
                            <div class="red">{{ $errors->first('guarcontact') }}</div>
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-md-5 control-label">Blood Group <span class="red">*</span> : </label>
                            <div class="col-md-7">
                            <input type="text" name="blood_group" value="@if(!empty($users)) {{$users->blood_group}} @endif" placeholder="Enter blood group" class="form-control input-inline input-medium" >
                            <div class="red">{{ $errors->first('blood_group') }}</div>
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-5 control-label">Photo <span class="red">*</span> : </label>
                            <div class="col-md-7">
                            <input type="file" name="photo"  placeholder="Enter photo" class="form-control input-inline input-medium" >
                            @if(!empty($users->photo))
                            <img width="80" src="{{asset('/uploads/personalPhotos/'.$users->photo)}}"  alt="">
                            @endif

                            <div class="red">{{ $errors->first('photo') }}</div>
                            </div>
                            </div>















                                <div class="col-md-12">
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-5 col-md-6">
                                            <button type="submit" class="btn green">Save</button>
                                            <button type="reset" class="btn default reset">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE TITLE-->


@stop

@section('custom_js')
    <script src="{{asset('/phq/assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/phq/assets/pages/scripts/components-select2.min.js')}}" type="text/javascript"></script>

    <script>

        /*$(document).ready(function(){

           $(document).on('select2:select', '#member_id', function (evt) {
               var member_id = $('#member_id option:selected').attr('data-member-id');


               var url_op = base_url+"/reports/lpc-form";
               $.ajax({
                  type: "POST",
                  url: url_op,
                  dataType: 'json',
                  data: {member_id: member_id, _token: csrf_token},
                  success : function(data){
                       if(data.status){
                           if(true){
                               window.location.href = url;
                           }else{
                               location.reload();
                           }
                     }
                   }

               });
           });

       });*/


        $(function() {
            $( "#date" ).datepicker({dateFormat: 'yy'});
        });

    </script>

@stop

