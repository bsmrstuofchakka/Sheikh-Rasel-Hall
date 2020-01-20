
{{--@include('layouts.user')--}}

@extends('layouts.userWelcome')
@section('custom_css')
    <link href="{{asset('/phq/assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/phq/assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
@stop
@section('content')
    <script src="{{asset('phq/assets/js/tableToExcel.js')}}" type="text/javascript"></script>

    <style type="text/css">
        #sample_12 th{
            text-align: center;
        }

    </style>





    <div class="content">
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div style="text-align: center;  margin-top: 5%;" class="tools">


                <h3 style="background-color: #ff2300"  class="col-md-8">This information is not changable, Please fill up with right information <span class="red"></span>  </h3>



                </div>
            </div>
        </div>
    </div>

        <div class="row">
            <div class="col-md-12">
                <div class="portlet-body form">

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Registration Form</div>

            <div class="panel-body">
                <div class="form-body">

                    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}


                    <div class="form-group{{ $errors->has('student_id') ? ' has-error' : '' }}">
                        <label for="username" class="col-md-4 control-label">Student Id</label>

                        <div class="col-md-6">
                            <input id="student_id" type="text" class="form-control" name="student_id" value="{{ old('student_id') }}" required autofocus>

                            @if ($errors->has('student_id'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('student_id') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label for="username" class="col-md-4 control-label">Username</label>

                        <div class="col-md-6">
                            <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                            @if ($errors->has('username'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('roomno') ? ' has-error' : '' }}">
                        <label for="roomno" class="col-md-4 control-label">Room No</label>

                        <div class="col-md-6">
                            <input id="roomno" type="text" class="form-control" name="roomno" value="{{ old('roomno') }}" required autofocus>

                            @if ($errors->has('roomno'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('roomno') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('bedno') ? ' has-error' : '' }}">
                        <label for="bedno" class="col-md-4 control-label">Bed No</label>

                        <div class="col-md-6">
                            <input id="bedno" type="text" class="form-control" name="bedno" value="{{ old('bedno') }}" required autofocus>

                            @if ($errors->has('bedno'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('bedno') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                        <label for="username" class="col-md-4 control-label">Department</label>

                        <div class="col-md-6">
                            <input id="department" type="text" class="form-control" name="department" value="{{ old('department') }}" required autofocus>

                            @if ($errors->has('department'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('ses') ? ' has-error' : '' }}">
                        <label for="username" class="col-md-4 control-label">Session</label>

                        <div class="col-md-6">
                            <input id="ses" type="text" class="form-control" name="ses" value="{{ old('ses') }}" required autofocus>

                            @if ($errors->has('ses'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('ses') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('yearSem') ? ' has-error' : '' }}">
                        <label for="username" class="col-md-4 control-label">Year/Semester</label>

                        <div class="col-md-6">
                            <input id="yearSem" type="text" class="form-control" name="yearSem" value="{{ old('yearSem') }}" required autofocus>

                            @if ($errors->has('yearSem'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('yearSem') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                        <label for="fname" class="col-md-4 control-label">Father Name</label>

                        <div class="col-md-6">
                            <input id="fname" type="text" class="form-control" name="fname" value="{{ old('fname') }}" required autofocus>

                            @if ($errors->has('fname'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('mname') ? ' has-error' : '' }}">
                        <label for="mname" class="col-md-4 control-label">Mother Name</label>

                        <div class="col-md-6">
                            <input id="mname" type="text" class="form-control" name="mname" value="{{ old('mname') }}" required autofocus>

                            @if ($errors->has('mname'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('mname') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        <label for="address" class="col-md-4 control-label">Address</label>

                        <div class="col-md-6">
                            <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                            @if ($errors->has('address'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('birth_date') ? ' has-error' : '' }}">
                        <label for="birth_date" class="col-md-4 control-label">Birth Date</label>

                        <div class="col-md-6">
                            <input id="birth_date" data-date-format="dd-mm-yyyy" type="text" class="form-control date-picker" name="birth_date" value="{{ old('birth_date') }}" required autofocus>

                            @if ($errors->has('birth_date'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('birth_date') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('cnumber') ? ' has-error' : '' }}">
                        <label for="cnumber" class="col-md-4 control-label">Contact Number</label>

                        <div class="col-md-6">
                            <input id="cnumber" type="text" class="form-control" name="cnumber" value="{{ old('cnumber') }}" required autofocus>

                            @if ($errors->has('cnumber'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('cnumber') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('guarcontact') ? ' has-error' : '' }}">
                        <label for="guarcontact" class="col-md-4 control-label">Guardian Contact Number</label>

                        <div class="col-md-6">
                            <input id="guarcontact" type="text" class="form-control" name="guarcontact" value="{{ old('guarcontact') }}" required autofocus>

                            @if ($errors->has('guarcontact'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('guarcontact') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('blood_group') ? ' has-error' : '' }}">
                        <label for="blood_group" class="col-md-4 control-label">Blood Group</label>

                        <div class="col-md-6">
                            <input id="blood_group" type="text" class="form-control" name="blood_group" value="{{ old('blood_group') }}" required autofocus>

                            @if ($errors->has('blood_group'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('blood_group') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                        <label for="photo" class="col-md-4 control-label">Photo</label>

                        <div class="col-md-6">
                            <input id="photo" type="file"  class="form-control" name="photo" value="{{ old('photo') }}" required autofocus>

                            @if ($errors->has('photo'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btN btn-primary">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>


    </div>
    </div>
    </div>
    </div>
















































    {{--<div class="pass hide">--}}
        {{--<div class="row">--}}

            {{--<!-- BEGIN EXAMPLE TABLE PORTLET-->--}}

            {{--<div class="portlet-body">--}}



                {{--<div   class="col-md-8 col-md-offset-2">--}}
                    {{--<div style="margin-top: 0%; min-height: 500px" class="panel panel-default">--}}
                        {{--<div style="background-color: purple" class="panel-heading">Student Login</div>--}}

                        {{--<div style="margin-top: 10%" class="panel-body">--}}
                            {{--{!! Form::open(array('url' => url('studentLogin'), 'files' => true, 'class'=>'form-horizontal') )  !!}--}}

                            {{--<form class="form-horizontal" method="POST" action="{{ route('studentLogin') }}">--}}
                            {{--{{ csrf_field() }}--}}

                            {{--<div class="form-group{{ $errors->has('pstudent_id') ? ' has-error' : '' }}">--}}
                                {{--<label for="pstudent_id" class="col-md-4 control-label">Student Id</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="pstudent_id" type="text" class="form-control" name="pstudent_id" value="{{ old('pstudent_id') }}" required autofocus>--}}

                                    {{--@if ($errors->has('pstudent_id'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('pstudent_id') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                                {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                    {{--@if ($errors->has('password'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<div class="col-md-6 col-md-offset-4">--}}
                                    {{--<div class="checkbox">--}}
                                        {{--<label>--}}
                                            {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
                                        {{--</label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<div class="col-md-8 col-md-offset-4">--}}
                                    {{--<button type="submit" class="btn btn-primary">--}}
                                        {{--Login--}}
                                    {{--</button>--}}

                                    {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                        {{--Forgot Your Password?--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--</form>--}}

                            {{--{!! Form::close() !!}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}

        {{--</div>--}}

        {{--<!-- END EXAMPLE TABLE PORTLET-->--}}
    {{--</div>--}}
    {{--<div class="log hidden">--}}
        {{--<div class="row">--}}

            {{--<!-- BEGIN EXAMPLE TABLE PORTLET-->--}}

            {{--<div class="portlet-body">--}}



                {{--<div   class="col-md-8 col-md-offset-2">--}}
                    {{--<div style="margin-top: 0%; min-height: 500px" class="panel panel-default">--}}
                        {{--<div style="background-color: purple" class="panel-heading">Login</div>--}}

                        {{--<div style="margin-top: 10%" class="panel-body">--}}
                            {{--<form class="form-horizontal" method="POST" action="{{ route('login') }}">--}}
                                {{--{{ csrf_field() }}--}}

                                {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                                    {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                                    {{--<div class="col-md-6">--}}
                                        {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}

                                        {{--@if ($errors->has('email'))--}}
                                            {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                        {{--@endif--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                                    {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                                    {{--<div class="col-md-6">--}}
                                        {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                        {{--@if ($errors->has('password'))--}}
                                            {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                        {{--@endif--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="form-group">--}}
                                    {{--<div class="col-md-6 col-md-offset-4">--}}
                                        {{--<div class="checkbox">--}}
                                            {{--<label>--}}
                                                {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
                                            {{--</label>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="form-group">--}}
                                    {{--<div class="col-md-8 col-md-offset-4">--}}
                                        {{--<button type="submit" class="btn btn-primary">--}}
                                            {{--Login--}}
                                        {{--</button>--}}

                                        {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                            {{--Forgot Your Password?--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}

        {{--</div>--}}

        {{--<!-- END EXAMPLE TABLE PORTLET-->--}}
    {{--</div>--}}








@stop


@section('custom_js')
    <script src="{{asset('/phq/assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/phq/assets/pages/scripts/components-select2.min.js')}}" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            //console.log('value');
            $(document).on('change', '.password_change', function (evt) {
                var value = $(this).val();
                // document.write(value);
                console.log(value);
                if(value == 1){

                    $('.pass').removeClass('hide');
                    $('.log').addClass('hidden');


                }

                if(value==0){

                    $('.pass').addClass('hide');
                    $('.log').removeClass('hidden');
                }

            });
        });
    </script>



@stop
