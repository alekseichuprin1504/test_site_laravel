
        <div class="container">
            <nav>
                <div class="row align-items-center justify-content-between">
                    <div class="col-3 col-sm-4 col-lg-1 px-0">
                        <div class="logo">
                            <a href="index.html">
                                Лого
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7 px-0 d-none d-lg-block menu-collapse">
                        <ul class="d-flex justify-content-center menu opened">
                            <li class="menu__item">
                                <a href="{{route('home')}}">
                                    Главная
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="{{route('conditions')}}">
                                    Прокат
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

                    <div class="d-none d-sm-block col-sm-2 col-md-2 col-lg-2 px-0">
                        <ul class="social d-flex justify-content-between">
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
        </div>
