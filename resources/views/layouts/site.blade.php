<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Velo</title>
    <meta name="description" content="Описание страницы">
    <meta name="keywords" content="ключевые, слова, через, занятую">
    <!-- favikon 64*64 -->
    <link rel="icon" href="#" type="image/x-icon">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <!-- OG-метки -->
    <meta property="og:title" content="Weatherapp">
    <meta property="og:description" content="Профессиональный веб-дизайнер">
    <meta property="og:type" content="article">
    <meta property="og:image" content="#">
    <meta property="og:site_name" content="Профессиональный веб-дизайнер">
    <!-- css -->
    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/media.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
</head>
<body>
    @if(Route::getFacadeRoot()->current()->uri() === '/')
        <header class="header">
        @yield('header')
        </header>

    @else
    <header class="header__page">
        @yield('header')
    </header>
    @endif
    	@yield('content')
    
    <footer id="footer">
        @yield('footer')
    </footer>
    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script>new WOW().init();</script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script>
        $('#myModal').on('shown.bs.modal', function () {
          $('#myInput').trigger('focus')
        })
    </script>
</body>
</html> 
