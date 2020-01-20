








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
                <a href="#">Set Token Date</a>
                <i class="fa fa-circle"></i>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->

    <div class="content">
        <div class="col-md-6">
            <h3 class="page-title"> Set Token Date Option </h3>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="portlet-body form">


                    {!! Form::open(array('url' => url('/token_list'), 'files' => true, 'class'=>'form-horizontal') )  !!}

                    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}


                    <div class="form-body">

                        <div class="form-group">
                            <label class="col-md-5 control-label"> Token Date <span class="red">*</span> : </label>
                            <div class="col-md-7">
                                <input type="text" value="<?php $day=strtotime("today");echo date("d-m-Y",$day); ?>" name="token_date" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy"  title="Enter a date in this format dd-mm-yyyy" class="form-control date-picker input-medium" />
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-md-5 control-label"> Meal Quantity <span class="red">*</span> : </label>
                            <div class="col-md-7">
                                <select  name="meal_time_quantity" class="form-control input-inline input-medium">
                                    <option value="morning_meal_quantity">Morning</option>
                                    <option value="launch_meal_quantity">Launch</option>
                                    <option value="dinner_meal_quantity">Dinner</option>
                                </select>
                            </div>
                        </div>






                        <div class="col-md-12">
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-5 col-md-6">
                                        <button type="submit" class="btn green">Request</button>
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


        $(function() {
            $( "#date" ).datepicker({dateFormat: 'yy'});
        });

    </script>

@stop

