<div class="container">
            <nav>
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-md-4 col-xl-2 px-0">
                        <div class="logo d-flex justify-content-center justify-content-xl-start">
                            <a href="{{route('home')}}">
                                Логотип
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-xl-8 px-0">
                        <ul class="d-flex flex-column flex-md-row justify-content-around menu">
                            <li class="menu__item d-flex justify-content-center justify-content-md-start">
                                <a href="{{route('home')}}">
                                    Главная
                                </a>
                            </li>
                            <li class="menu__item d-flex justify-content-center justify-content-md-start">
                                <a href="{{route('conditions')}}">
                                    Прокат
                                </a>
                            </li>
                            <li class="menu__item d-flex justify-content-center justify-content-md-start">
                                <a href="{{route('tours')}}">
                                    Туры
                                </a>
                            </li>                            
                            <li class="menu__item d-flex justify-content-center justify-content-md-start">
                                <a href="{{route('contacts')}}">
                                    Контакты
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                    <div class="col-12 col-xl-2 px-0">
                        <ul class="social d-flex justify-content-around">
                        <li class="social__item social__f">
                            <a href="#">
                                <img src="{{asset('assets/img/facebook.png')}}" alt="facebook">
                            </a>
                        </li>
                        <li class="social__item social__tw">
                            <a href="#">
                                <img src="{{asset('assets/img/instagram.png')}}" alt="instagram">
                            </a>
                        </li>
                        <li class="social__item social__t">
                            <a href="#">
                                <img src="{{asset('assets/img/twitter.png')}}" alt="twitter">
                            </a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
            <div class="row d-flex justify-content-center justify-content-xl-end px-0">
                <p class="footer">
                    © 2020 All rights reserved. zp.bike.com.ua
                </p>
            </div>
        </div>