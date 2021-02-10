<!DOCTYPE html>
<html lang="en">
<head>
    <title> @yield('title') </title>

    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Elif Nurber Karakaş">
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--// Meta tag Keywords -->

    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.css" type="text/css" media="all">
    <!-- css files -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->

    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <!-- //web-fonts -->

    @yield('css')
    @yield('headerjs')

</head>
<body>

@include('home._header')

<div class="banner" id="home">
    @include('home._category')
    <x-slider-component/>
</div>

@section('content')

@show


@include('home._footer')
@yield('footerjs')


</body>
</html>
