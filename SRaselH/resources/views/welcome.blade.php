

{{--@include('layouts.user')--}}

@extends('layouts.userWelcome')

@section('content')
    <script src="{{asset('phq/assets/js/tableToExcel.js')}}" type="text/javascript"></script>

    <style type="text/css">
        #sample_12 th{
            text-align: center;
        }

    </style>

    <!-- BEGIN PAGE HEADER-->
    <!-- BEGIN PAGE BAR -->


    <div class="hall" >Sheikh Rasel Hall</div>
    <div class="bsmrstu">Bangabandhu Sheikh Mujibur Rahman Science & Technology University</div>
    <div class="home-wrap">
        <!-- home slick -->
        <div id="home-slick">
            <!-- banner -->



            <div style="margin: auto; text-align: center"   class="banner banner-1">
                <img style="height: 550px;" width="75%" src="{{asset('/slidor/img/srh02.jpg')}}"/>

            </div>
        {{--<div class="banner banner-1">--}}
        {{--<img width="400px" src="{{asset('/slidor/img/banner02.jpg')}}"/>--}}

        {{--</div>--}}
        {{--<div class="banner banner-1">--}}
        {{--<img width="400px" src="{{asset('/slidor/img/banner03.jpg')}}"/>--}}

        {{--</div>--}}
        {{--<div class="banner banner-1">--}}
        {{--<img width="400px" src="{{asset('/slidor/img/banner04.jpg')}}"/>--}}
        {{--</div>--}}
        {{--<div class="banner banner-1">--}}
        {{--<img width="400px" src="{{asset('/slidor/img/banner05.jpg')}}"/>--}}
        {{--</div>--}}
        {{--<div class="banner banner-1">--}}
        {{--<img width="400px" src="{{asset('/slidor/img/banner06.jpg')}}"/>--}}
        {{--</div>--}}
        {{--<div class="banner banner-1">--}}
        {{--<img width="400px" src="{{asset('/slidor/img/banner07.jpg')}}"/>--}}
        {{--</div>--}}
        {{--<div class="banner banner-1">--}}
        {{--<img width="400px" src="{{asset('/slidor/img/banner08.jpg')}}"/>--}}
        {{--</div>--}}
        {{--<div class="banner banner-1">--}}
        {{--<img width="400px" src="{{asset('/slidor/img/banner09.jpg')}}"/>--}}
        {{--</div>--}}
        {{--<div class="banner banner-1">--}}
        {{--<img width="400px" src="{{asset('/slidor/img/banner10.jpg')}}"/>--}}
        {{--</div>--}}
        {{--<div class="banner banner-1">--}}
        {{--<img width="400px" src="{{asset('/slidor/img/banner11.jpg')}}"/>--}}
        {{--</div>--}}
        {{--<div class="banner banner-1">--}}
        {{--<img width="400px" src="{{asset('/slidor/img/banner12.jpg')}}"/>--}}
        {{--</div>--}}
        {{--<div class="banner banner-1">--}}
        {{--<img width="400px" src="{{asset('/slidor/img/banner13.jpg')}}"/>--}}
        {{--</div>--}}
        {{--<div class="banner banner-1">--}}
        {{--<img width="400px" src="{{asset('/slidor/img/banner14.jpg')}}"/>--}}
        {{--</div>--}}
        {{--<div class="banner banner-1">--}}
        {{--<img width="400px" src="{{asset('/slidor/img/banner15.jpg')}}"/>--}}
        {{--</div>--}}
        {{--<div class="banner banner-1">--}}
        {{--<img width="400px" src="{{asset('/slidor/img/banner16.jpg')}}"/>--}}
        {{--</div>--}}
        {{--<div class="banner banner-1">--}}
        {{--<img width="400px" src="{{asset('/slidor/img/banner17.jpg')}}"/>--}}
        {{--</div>--}}
        {{--<div class="banner banner-1">--}}
        {{--<img width="400px" src="{{asset('/slidor/img/banner18.jpg')}}"/>--}}
        {{--</div>--}}
        <!-- /banner -->


        </div>
        <!-- /home slick -->
    </div>
    <!-- /home wrap -->






@stop


@section('custom_js')

@stop
