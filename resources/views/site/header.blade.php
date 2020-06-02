<div class="container">
            <nav>
                <div class="row align-items-center justify-content-between">
                    <div class="col-3 col-sm-4 col-lg-1 px-0">
                        <div class="logo animated fadeInLeft">
                            <a href="{{route('home')}}">
                                Лого
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7 px-0 d-none d-lg-block menu-collapse">
                        <ul class="d-flex justify-content-center menu opened animated fadeInDown">
                            <li class="menu__item">
                                <a href="{{route('home')}}">
                                    Главная
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="{{route('conditions')}}">
                                    Условия проката
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="{{route('tours')}}">
                                    Веломаршруты
                                </a>
                            </li>                            
                            <li class="menu__item">
                                <a href="{{route('contacts')}}">
                                    Контакты
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-7 col-sm-3 col-md-4 col-lg-2 px-0">
                        <p class="phone">
                            095-885-01-45
                        </p>
                    </div>
                    <div class="d-none d-sm-block col-sm-2 col-md-2 col-lg-2 px-0">
                        <ul class="social d-flex justify-content-between animated fadeInRight">
                            <li class="social__item social__f d-none d-sm-block">
                                <a href="#">
                                    <img src="{{asset('assets/img/facebook.png')}}" alt="facebook">
                                </a>
                            </li>
                            <li class="social__item social__tw d-none d-sm-block">
                                <a href="#">
                                    <img src="{{asset('assets/img/instagram.png')}}" alt="instagram">
                                </a>
                            </li>
                            <li class="social__item social__ua d-none d-sm-block">
                            <a href="#">
                                <img src="{{asset('assets/img/ua.gif')}}" alt="ua">
                            </a>
                        </li>
                        </ul> 
                    </div>
                    <!-- <div class="col-7 col-lg-1 px-0 d-flex justify-content-center">
                        <img src="img/twitter.png" alt="twitter">
                    </div> -->
                    <div class="col-1 d-lg-none d-flex justify-content-center btn1">
                        <button class="menu-open">
                            <i class="fa fa-navicon"></i>
                        </button>
                    </div>
                </div>
            </nav>
            <div class="row">
                <div class="col-12 col-lg-6 px-0">
                    <div class="offer animated fadeInLeft">
                        <h1 class="offer__title">
                            Велопрокат<br>& продажа<br>в Запорожье
                        </h1>
                        <p class="offer__text d-flex justify-content-center justify-content-lg-start">
                            Мы предлагаем Вам классно отдохнуть, забыть про тяжёлые будни
                        </p>
                        <!-- <div class="offer__button d-flex flex-column flex-md-row justify-content-center justify-content-lg-start">
                            <a href="tur.html">
                            <button class="button__turs button">
                                Туры
                            </button>
                            </a>
                            <a href="prokat.html">
                            <button class="button__turs button">
                                Прокат
                            </button>
                            </a>
                        </div> -->
                    </div>
                </div>
                <!-- <div class="col-12 col-lg-6 px-0 d-flex justify-content-center">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/JBmaBh-yCk8?autoplay=1&origin=http://example.com" frameborder="0" ></iframe>
                </div> -->
                <div class="el d-none">
                    <a href="#plus">
                        <div class="down">↓</div>
                    </a>
                </div>
            </div>
        </div>