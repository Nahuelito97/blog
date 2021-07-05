<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/themify-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front-end/assets/css/style.css') }}" type="text/css">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('home/css/styles.css') }}" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('posts/css/bootstrap.css') }}">
    <!-- Estilos en Css -->
    <style>
        .slider {
            background: url("{{ asset('posts/images/bg-3.png') }}");
            background-size: cover;
            background-position: center;
            height: 400px;
        }

    </style>

    <!-- Styles Header -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="{{ asset('front-end/header/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end/header/css/fontawesome-all.css') }}" rel="stylesheet">
	<link href="{{ asset('front-end/header/css/styles.css') }}" rel="stylesheet">
	
</head>

<body data-spy="scroll" data-target=".fixed-top">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    @include('frontend.heade')

    @yield('content')


    @include('frontend.footer')

    <!-- Js Plugins -->
    <script src="{{ asset('front-end/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/jquery.dd.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front-end/assets/js/main.js') }}"></script>



    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous">
    </script>
    <script src="{{ asset('posts/js/bootstrap.min.js') }}"></script>
    <script id="dsq-count-scr" src="//nahucoodes.disqus.com/count.js" async></script>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('home/js/scripts.js') }}"></script>

        <!-- Scripts -->
    <script src="{{ asset('front-end/header/js/jquery.min.js') }}"></script> <!-- jQuery for Bootstraps JavaScript plugins -->
    <script src="{{ asset('front-end/header/js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('front-end/header/js/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset('front-end/header/js/scripts.js') }}"></script> <!-- Custom scripts -->
</body>

</html>
