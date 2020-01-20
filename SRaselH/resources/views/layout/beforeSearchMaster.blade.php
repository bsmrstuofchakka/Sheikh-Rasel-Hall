<!DOCTYPE html>
<html>
<head>
    <title>Hall Management</title>
    <meta name="language" content="English">
    <meta name="description" content="It is a website about education">
    <meta name="keywords" content="blog,cms blog">
    <meta name="author" content="Murad">
    <link rel="stylesheet" href="{{asset('/sharing/font-awesome-4.5.0/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('/sharing/css/nivo-slider.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{asset('/sharing/style.css')}}">



    <script src="{{asset('/sharing/js/jquery.js')}}" type="text/javascript"></script>
    <script src="{{asset('/sharing/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>

    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
                effect:'random',
                slices:10,
                animSpeed:500,
                pauseTime:5000,
                startSlide:0, //Set starting Slide (0 index)
                directionNav:false,
                directionNavHide:false, //Only show on hover
                controlNav:false, //1,2,3...
                controlNavThumbs:false, //Use thumbnails for Control Nav
                pauseOnHover:true, //Stop animation while hovering
                manualAdvance:false, //Force manual transitions
                captionOpacity:0.8, //Universal caption opacity
                beforeChange: function(){},
                afterChange: function(){},
                slideshowEnd: function(){} //Triggers after all slides have been shown
            });
        });
    </script>

    <!--login register-->
    <!-- Google font -->
    <link href="{{asset('https://fonts.googleapis.com/css?family=Hind:400,700')}}" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('/loginRegister/css/bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('/loginRegister/css/custom.css')}}" />
    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{asset('/loginRegister/css/slick.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('/loginRegister/css/slick-theme.css')}}" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{asset('/loginRegister/css/nouislider.min.css')}}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('/loginRegister/css/font-awesome.min.css')}}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('/loginRegister/css/style.css')}}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>  <![endif]-->


    <!--end login register>



        <!-- ========== Title ==========
     title> site map Cocoon -Portfolio</title-->
    <!-- ========== Favicon Ico ========== -->
    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->
    <!-- Custom styles for this template -->
    <link href="{{asset('/sharing/assets/css/main.css')}}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="{{asset('/sharing/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="{{asset('/sharing/assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/sharing/assets/css/et-line.css')}}" rel="stylesheet">
    <link href="{{asset('/sharing/assets/css/ionicons.min.css')}}" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="{{asset('/sharing/assets/css/slick.css')}}" rel="stylesheet">
    <!-- Magnific-popup -->
    <link rel="stylesheet" href="{{asset('/sharing/assets/css/magnific-popup.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('/sharing/assets/css/animate.min.css')}}">
    <!-- Custom styles for this template -->

    <!-- end site map-->

    <!--  footer manu-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/sharing/footer/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/sharing/footer/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{asset('/sharing/footer/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/sharing/footer/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/sharing/footer/vendors/lightbox/simpleLightbox.css')}}">
    <link rel="stylesheet" href="{{asset('/sharing/footer/vendors/nice-select/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('/sharing/footer/vendors/animate-css/animate.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('/sharing/footer/css/style.css')}}">
    <!--end footer -->

    <!--logout css-->

    <!-- Google font -->
    <link href="{{asset('https://fonts.googleapis.com/css?family=Hind:400,700')}}" rel="stylesheet">

    <!-- Bootstrap -->

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{asset('/logFolder/css/slick.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('/logFolder/css/slick-theme.css')}}" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{asset('/logFolder/css/nouislider.min.css')}}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('/logFolder/css/font-awesome.min.css')}}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('/logFolder/css/style.css')}}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>  <![endif]-->



    <!--logout css-->

    <!--list show / table show css-->
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css')}}">
    <link rel="stylesheet" href="{{asset('/listShow/css/style.css')}}">
    <!--list show / table show css-->

    <!--category list show  css-->
    <link rel="stylesheet" href="{{asset('/category/css/style.css')}}">

    <link rel="stylesheet" href="./style.css">
    <!--category list show  css-->


    <!--add form show css-->
    <!-- ========== STYLESHEETS ========== -->


    <link rel="stylesheet" type="text/css" href="{{asset('/addForm/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/addForm/css/main.css')}}">
    <!--end add form show css-->

</head>

<body>
<div class="headersection templete clear">
    <a href="#">
        <div class="logo">
            <img src="{{asset('/sharing/images/cseLogo.png')}}" alt="Logo"/>
            <h2>Hall Management</h2>
        </div>
    </a>
