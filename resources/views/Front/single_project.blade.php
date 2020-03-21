@include('Front.layouts.header')

@include('Front.layouts.navbar')

<section class="p-4"></section>
<div class="vertical-line">
    <h2 class="our-work ">{{$project->name}}</h2>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-9">

                <div class="dt-laptop-slider">
                    <div class="laptop-screen">
                      
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                            @if ($images->count()>0)
    
                            @foreach ($images as $index=>$image)
                                @if ($index == 0)
                                <div class="carousel-item active">
                                    <img class="d-block " width="100%" height="360" src="{{ url('/' . $image->photo) }}" >
                                </div>
                                @else
                                <div class="carousel-item">
                                    <img class="d-block " width="100%" height="360" src="{{ url('/' . $image->photo) }}" >
                                </div>
                                @endif
                                
                                @endforeach
                                <div class="carousel-item ">
                                    <img class="d-block " width="100%" height="360" src="{{$project->photo}}" >
                                </div>
                                @else
                                <div class="carousel-item active">
                                    <img class="d-block " width="100%" height="360" src="{{$project->photo}}" >
                                </div>
                                @endif
                           
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
                  
        </div>

        <div class="col-md-3">
            <h2 class="our-work "> تفاصيل المشروع </h2>
            <section>
                <p class="we wow slideInLeft text-color">{{$project->decreption}}</p>
            </section>
        </div>
    </div>
</div>





@include('Front.layouts.footer')