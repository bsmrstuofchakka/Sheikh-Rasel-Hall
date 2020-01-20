<ul class="header-account dropdown default-dropdown" xmlns:color="http://www.w3.org/1999/xhtml">

    @if (Auth::guest())
        <div class="login"><a href="login"> <span>Login <i class="icon-calendar3"></i></span></a>
            /<a href="register"> <span>Join <i class="icon-calendar3"></i></span></a>
        </div>
    @else
        <div class="login" role="button" data-toggle="dropdown" aria-expanded="true">

            <strong class="text-lowercase">{{ Auth::user()->username }} </strong>
        </div>


        <ul class="custom-menu">
            <li><a href="{{ route('logout') }}"><i class="fa fa-unlock-alt"></i> Logout</a></li>
        </ul>
    @endif
</ul>
<!-- /Account -->








</div>

<div class="row justify-content-colter">
    <div class="col-lg-2 col-md-3 col-12 menu_block">



        <!--main menu -->
        <div class="side_menu_section">
            <ul class="menu_navCocoon">

                <li class="active" >
                    <a  href="{{asset('/adminUser')}}">
                        Dashboard
                    </a>
                </li>
                @if($userTable->userType==0)
                <li  >
                    <a  href="{{asset('reports/add')}}">
                        Report
                    </a>
                </li>
                @endif
                <li>

                    <a href="{{url('profileDisplay')}}">
                        Profiles
                    </a>
                </li>
                <li>

                    <a href="{{url('passwordChange')}}">
                        Password Change
                    </a>
                </li>
                @if($userTable->userType==1)
                <li>


                        <a href="{{url('reports')}}">
                            ReportList
                        </a>


                </li>
                @endif

                @if($userTable->userType==1)
                <li>


                    <a href="{{url('/users')}}">
                        UsersList
                    </a>


                </li>
                @endif
                @if($userTable->userType==1)
                <li>


                        <a href="{{url('/barcodes')}}">
                            Barcode
                        </a>


                </li>
                @endif

                @if($userTable->userType==1)
                <li>


                        <a href="{{url('/barcodeUDetails')}}">
                            Security
                        </a>


                </li>
                @endif

                @if($userTable->userType==1)
                <li>

                        <a href="{{url('/set_token_date')}}">
                            Token List
                        </a>
                </li>
                @endif
                    @if($userTable->userType==1)
                    <li>
                        <a href="{{url('/update_meal_cost')}}">
                            Update Meal Cost
                        </a>
                    </li>
                    @endif
                    @if($userTable->userType==1)
                    <li>
                        <a href="{{url('/turn_on_token_sell')}}">
                            Turn On Token Sell
                        </a>
                    </li>
                    @endif
                    @if($userTable->userType==1)
                    <li>
                        <a href="{{url('/turn_off_token_sell')}}">
                            Turn Off Token Sell
                        </a>
                    </li>
                    @endif
                    @if($userTable->userType==0)
                    <li>
                    <!--Ashish Meal option-->
                        <a href="{{url('/buy_meal')}}">
                            Buy Meal Token
                        </a>
                    </li>
                    @endif

                @if($userTable->userType==1)
                <li>

                        <a href="">
                            @if(session('success'))
                                {{session('success')}}
                            @endif
                        </a>


                </li>
                 @endif
                <!--    <li>
                        if($userTable->userType==1)

                            <a href="url('')}}">
                                UsersList
                            </a>

                        endif
                    </li>
                    <li>
                        if($userTable->userType==1)

                            <a href="{url('')}}">
                                Folder
                            </a>

                        endif
                    </li>
                    -->

            </ul>
        </div>
        <!--main menu end -->


    </div>
    <script>

        $('.li').on('click','li', function(){
            $(this).addClass('active').siblings().removeClass('active');
        });
    </script>