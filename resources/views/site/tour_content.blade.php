
<!DOCTYPE html>
<html lang="ru"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>zpbike.com.ua</title>
    <meta name="description" content="Велопрокат в Запорожье">
    <meta name="keywords" content="ключевые, слова, через, занятую">
    <!-- favikon 64*64 -->
    <link rel="icon" href="/1527540250.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/1527540250.ico" type="image/x-icon">
    <!-- OG-метки -->
    <meta property="og:title" content="Велопрокат в Запорожье">
    <meta property="og:description" content="Ты хочешь попробовать чего-то нового?
Ты хочешь вспомнить, то беззаботное детство, когда ты ездил на велосипеде?
Ты хочешь просто насладиться красотой наших мест?
Значит тебе пора к нам за велосипедом в ZPBIKE.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="#">
    <meta property="og:site_name" content="">
    <!-- css -->
    <base href="http://zpbike.com.ua/">
    <link rel="stylesheet" href="assets/templates/velo/css/normalize.css">
    <link rel="stylesheet" href="assets/templates/velo/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/templates/velo/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/templates/velo/css/swiper.min.css">
    <link rel="stylesheet" href="assets/templates/velo/css/animate.css">
    <link rel="stylesheet" href="assets/templates/velo/css/fonts.css">
    <link rel="stylesheet" href="assets/templates/velo/css/media.css">
    <link rel="stylesheet" href="assets/templates/velo/css/main.css">
</head>
<body>
       

    <section id="">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    
                    <div class="one_turs">
                        <h2>{{$tour->name}}</h2>
                        <div class="foto_one">
                            <img src="{{asset('assets/img/'. $tour->image)}}" alt="это будет описание первого тура" title="это будет описание первого тура">
                        </div>
                        <div class="one_turs_text">
                            <p>{{$tour->text}}</p>
                        </div>
                        <a href="{{route('tours')}}" class="btn btn-light">
                            Назад к списку веломаршрутов
                        </a>
                    </div> 
                </div>
            </div>
        </div>
    </section>