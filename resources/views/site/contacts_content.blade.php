<section id="contacts">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">
                        Наши контакты
                    </h2>
                </div>
                @foreach($contacts as $contact)
                <div class="col-12">
                    <div class="contacts">
                        <div class="d-flex">
                            <ul>
                            <li><p>{{$contact->name}} - {{$contact->contacts}}</p></li>
                            
                        </ul>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <section id="maps">
        <h2 class="text-center">
                        Место выдачи велосипедов
                    </h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5355.746948042345!2d35.09607903314323!3d47.84204447967672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dc6129e17d8561%3A0x7b1000586321777c!2z0J3QuNC20L3Rj9GPINGD0LsuLCA1NCwg0JfQsNC_0L7RgNC-0LbRjNC1LCDQl9Cw0L_QvtGA0L7QttGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA2OTAwMA!5e0!3m2!1sru!2sua!4v1524407719537" frameborder="0" allowfullscreen class="maps__google"></iframe>
    </section>