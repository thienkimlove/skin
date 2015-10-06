<!DOCTYPE html>
<html lang="vi" class="no-js">
<head>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <link rel="stylesheet" href="{{url('css/lycoskin.css')}}" type="text/css"/>
    <title>{{$meta_title}}</title>
    <meta name="keywords" content="{{$meta_keywords}}" />
    <meta name="description" content="{{$meta_desc}}" />
    <!--[if lte IE 9]>
    <script src="{{url('js/html5.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" href="{{url('css/ie9.css')}}" type="text/css"/>
    <![endif]-->
    <script src="{{url('js/modernizr.js')}}" type="text/javascript"></script>
</head>
<body>
@include('frontend.header')
@if (!empty($page) && $page != 'lyco-skin')
   @include('frontend.box_banner')
@endif
@yield('content')
@include('frontend.footer')
<!-- /endboxNews -->
<{{--div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.4";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>--}}
<script type="text/javascript" src="{{url('js/jquery-1.10.2.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/jquery.matchHeight-min.js')}}"></script>
<script type="text/javascript" src="{{url('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/common.js')}}"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-68450930-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>