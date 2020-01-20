
@extends('layouts.user')
@section('custom_css')
    <link href="{{asset('phq/assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('phq/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
@stop


@section('content')

    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ URL::to('/adminUser') }}">Dashboard</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">StudentList</a>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <div class="content">
        <div class="col-md-6">
            <h3 class="page-title">Student List </h3>
        </div>
        <div class="btn-group right" style="float:right;padding-top:25px">
            <a href="{{ URL::to('users/add') }}" class="btn btn-sm red"><i class="fa fa-plus"></i>  Add Student </a>
        </div>

    </div>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_1"><!-- table2 -->
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Student Id</th>
                            <th>Username</th>
                            <th>EMAIL</th>
                            <th>Amount</th>
                            <th>User Type</th>
                            <th>Name</th>

                            <th>Room No.</th>
                            <th>Bed No.</th>
                            <th>Department</th>
                            <th>Session</th>
                            <th>Year/Semester</th>
                            <th>Father Name</th>
                            <th>Mother Name</th>
                            <th>Address</th>
                            <th>Birth Date</th>
                            <th>Contact Number</th>

                            <th>Guardian Contact Number</th>
                            <th>Blood Group</th>
                            <th>Photo</th>
                            <th>ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($users[0]))
                            @foreach($users as $user)

                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->student_id}}</td>
                                    <td>{{$user->username}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->amount}}</td>
                                    @if($user->userType==1)
                                        <td>Admin</td>
                                    @else
                                        <td>User</td>
                                    @endif
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->roomno}}</td>
                                    <td>{{$user->bedno}}</td>

                                    <td>{{$user->department}}</td>
                                    <td>{{$user->ses}}</td>
                                    <td>{{$user->yearSem}}</td>
                                    <td>{{$user->fname}}</td>
                                    <td>{{$user->mname}}</td>
                                    <td>{{$user->address}}</td>
                                    <td>{{$user->birth_date}}</td>
                                    <td>{{$user->cnumber}}</td>
                                    <td>{{$user->guarcontact}}</td>
                                    <td>{{$user->blood_group}}</td>
                                    <td>
                                    @if(!empty($user->photo))
                                    <img width="80%" src="{{asset('/uploads/personalPhotos/'.$user->photo)}}"  alt="">
                                    @endif

                                    </td>
                                    <td>
                                        <a href="{{url('users/edit').'?id='.$user->id}}" class="btn btn-xs blue"> <i class="fa fa-edit"></i> Edit /</a>
                                        <a href="{{url('users/delete').'?id='.$user->id}}" class="btn btn-xs red" onclick="return confirm('Do You confirm?')"><i class="fa fa-trash" title="delete"></i>Delete</a>
                                    </td>
                                </tr>

                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
    </div>
    <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->



@stop


@section('custom_js')
    <script src="{{asset('phq/assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
    <script src="{{asset('phq/assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('phq/assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('phq/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
    <script>
        $('#sample_1').DataTable({
            "iDisplayLength": 10,
            "aLengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "all"]
            ]
        });

        $(document).ready(function(){
            $('.delete-user').on('click', function(e){
                e.preventDefault();
                var user_id = $(this).attr("data-user_id");
                var csrf_token = "{{ csrf_token() }}";
                if(user_id)
                {
                    var url_op = base_url+"/users/delete";
                    $.ajax({
                        type: "POST",
                        url: url_op,
                        dataType: 'json',
                        data: {user_id: user_id, _token: csrf_token},
                        success: function(msg) {
                            if(msg['output'] == 'ture')
                            {
                                alert('Successfully Deleted.');
                                location.reload();
                            }
                            else{
                                alert(msg['output']);
                            }
                        }
                    });
                }
            });
        });

    </script>
@stop




















