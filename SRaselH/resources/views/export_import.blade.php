@extends('layouts.user')

@section('content')




<!-- BEGIN PAGE HEADER-->
    <!-- BEGIN PAGE BAR -->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ URL::to('dashboard') }}">Dashboard</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">Export&Import</a>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title"> Database Export&Import</h3>
    <!-- END DASHBOARD STATS 1-->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <!-- BEGIN PORTLET-->

            <div class="col-md-4 portlet light bordered col-sm-4">
                <!-- BEGIN PORTLET-->
                <div class="portlet-title">
                    <div class="caption">
                        <h5 class="bold">Database Export </h5>
                    </div>
                </div>
                <div class="portlet-body form">
                    <a href="{{ URL::to('ex-import/export') }}" class="btn btn-md btn-primary">
                        Database Export
                    </a> 
                </div>
                <br/><br/>
            </div>

            <div class="col-md-1"></div>

            <div class="col-md-7 portlet light bordered col-sm-7">
                <!-- BEGIN PORTLET-->
                <div class="portlet-title">
                    <div class="caption">
                        <h5 class="bold">Database Import</h5>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form action="{{ URL::to('ex-import/import') }}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Import <span class="red"></span> : </label>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <input type="file" id="uploaded_file" name="uploaded_file" class="form-control input-inline input-medium">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary batch_add" type="submit">
                                                Import</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><br/>
            </div>
        </div>
    </div>



@stop


@section('custom_js')

@stop