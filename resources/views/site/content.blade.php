<section id="plus">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9 px-0">
                    <h2>
                        Лучший прокат велосипедов в Запорожье
                    </h2>
                    <p>
                        Мы любим кататься на велосипедах. И хотим, чтобы как можно больше людей разделили с нами это увлечение. Поэтому мы открыли велопрокат, веломастерскую и веломагазин.
                        Во многих городах Европы уже давно существуют велопрокаты и мы подумали, а чем мы хуже? И решили, что Петербургу просто необходим велопрокат.

                        Прокат является отличной альтернативой покупке собственного велосипеда. Поскольку не надо задумываться о месте хранения и его техническом обслуживании. Да и все мы знаем, как бывает, купишь, к примеру, велосипед в надежде кататься каждый вечер, а на самом деле он пылится на балконе. Поэтому для тех, кто несколько раз за лето хочет покататься на велосипеде, прокат это хороший выбор.

                        Наши пункты проката находятся в самом центре и это хороший повод лишний раз полюбоваться своим любимым городом. Мы так редко это делаем в ежедневной суете.

                        Гости нашего города также смогут оценить преимущества проката велосипедов. Куда удобнее перемещаться по центру нашего города на велосипедах. Этот вариант экономит время и позволяет увидеть гораздо больше интересных мест. Нет необходимости спускаться и подниматься в метро или стоять в пробке в душном автобусе.

                        Мы предоставим все необходимое для поездки. К нашим велосипедам прилагаются бесплатно передние фонари, замки и шлемы. Для желающих покататься с детьми мы предоставляем детские кресла.
                    </p>
                </div>
                <div class="partner d-none d-lg-block col-lg-3">
                    <h2 >
                        Партнёры
                    </h2>
                    <ul class="partners d-flex flex-row flex-lg-column justify-content-center">
                        <li class="d-flex justify-content-center">
                            <a href="#">
                                <img src="{{asset('assets/img/10.jpg')}}" alt="">
                            </a>
                        </li>
                        <li class="d-flex justify-content-center">
                            <a href="#">
                                <img src="{{asset('assets/img/20.jpg')}}" alt=" ">
                            </a>
                        </li>
                        <li class="d-flex justify-content-center">
                            <a href="#">
                                <img src="{{asset('assets/img/30.jpg')}}" alt=" ">
                            </a>
                        </li>
                    </ul> 
                </div>
            </div>
        </div>
    </section>
    <section id="advantage">
        <div class="container">
            <div class="row text-center">
                <h2 class="advantage__groop">Наши преимущества</h2>
                
                @if(isset($advantages))
                @foreach($advantages as $advantage)
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="advantage wow fadeInRight">
                        <div class="advantage__one">
                            <img src="{{asset('assets/img/'. $advantage->logo)}}" alt="">
                        </div>
                        <h3 class="advantage__title">
                            {{$advantage->name}}
                        </h3>
                        <p class="advantage__text">
                            {{$advantage->text}}
                        </p>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </section>
        <section id="product">
        <!-- <div class="container">
            <div class="row justify-content-center"> -->
                <!-- <div class="col-12 col-md-12 col-lg-8 px-0">
                    <div class="product">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner text-center">
                            <div class="carousel-item active">
    
                                <img class="" src="img/10.jpg" alt="...">
                                <h3>Классные велики</h3>
                                <p>al exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy</p>
                                <a href=""><i class="fa fa-facebook"></i></a>
                           
                            </div>
                            <div class="carousel-item">
                                <img class="" src="img/20.jpg" alt="...">
                                <h3>Легкость и комфорт</h3>
                                <p>al exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy</p>
                                <a href=""><i class="fa fa-facebook"></i></a>
                               
                            </div>
                            <div class="carousel-item">
                                <img class="" src="img/30.jpg" alt="...">
                                <h3>Рекомендуем</h3>
                                <p>al exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy</p>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                    </div>
                </div> -->
                <div class="col-12 px-0 d-flex justify-content-center">
                    <iframe width="100%" height="350" src="https://www.youtube.com/embed/JBmaBh-yCk8?autoplay=1&origin=http://example.com" frameborder="0"></iframe>
                </div>
           <!--  </div>
        </div> -->
    </section>