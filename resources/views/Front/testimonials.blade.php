@include('Front.layouts.header')


@include('Front.layouts.navbar')

    <!-- articles section -->

    <section class="testimonial-pages">
        <div class="vertical-line">
            <h2 class="our-work "> أراء العملاء</h2>
        </div>


        <section class="customer-say">

            <div class="container">

            <div class="say">
                <div class="row">
                      

                    @foreach ($clients as $client)
                        <div class="col-md-6">  
                           
                            <div class="item testi-item say  wow bounceInUp" data-wow-duration="1s"
                                data-wow-delay=".5s">
                                <div class="media">

                                    <div class="media-body ml-3">
                                        <h4>{{$client->name}}</h4>

                                        <p class=" text-color">{{$client->comment}}</p>

                                    </div>

                                    <div class="m-auto">
                                        <img class="card-img-top circle article-thumnail"
                                            src="{{$client->image}}" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>

                    @endforeach

        
                </div>
            </div>



                <div class="clearfix"></div>
                        
                    {{ $clients ->appends(request()->query())->links() }}

                </div>
                <br><br>


         </div>
        </section>

    </section>


    @include('Front.layouts.footer')