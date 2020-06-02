<section id="turs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">
                        Рекомендуем туры
                    </h2>
                </div>
                
                
                @if(isset($tours))

                @foreach($tours as $tour)
                
                
                <div class="col-12 col-lg-6 text-center">
                    <div class="turs">
                        <div>
                            <img src="{{asset('assets/img/'.$tour->image )}}" alt="картинка">
                        </div>
                        <div class="turs__name">
                            {{$tour->name}}
                        </div>
                        <a href="{{route('tours_id',['tour_id'=>$tour->id])}}"><button type="button" class="btn btn-light" data-toggle="modal" data-target=".bd-example-modal4-lg">
                            Подробнее
                        </button></a>
                    </div>
                    
                </div>

                @endforeach
                @endif

            </div>
        </div>
    </section>