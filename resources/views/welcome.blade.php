@include('Front.layouts.header')

<nav class="navbar fixed-top navbar-expand-lg navbar-dark " style="direction: rtl">
    <a class="navbar-brand" href="/"><img class="img-fluid logo-img" src="{{ asset('front_end/v2/imgs/logo2.png')}}"
            width="190px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav w-100 d-flex">
            <li class="nav-item active">
                <a class="nav-link" href="/">الرئيسية <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link hvr-rotate"
                    href="{{ route('about') }}">من
                    نحن
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    خدماتنا
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach ($services as $service)
                    <a class="dropdown-item"
                    href="{{ route('service', $service->id ) }}">{{$service->name}}</a>
                    @endforeach
                   
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('all_projects')}}">أعمالنا</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="mailto:jobs@ekramy.no3man@gmail.com">الوظائف</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('testimonials')}}">أراء عملائنا</a>

            </li>
            <li class="navbar-btns">
                <a href="{{route('contact')}}" class="btn btn-primary my-sm-0">تواصل معنا</a>
                <a target="_blank" href="" class="btn btn-success  my-sm-0"><i class="fab fa-whatsapp whats"></i>
                    <span style="direction: ltr">واتساب</span>
                </a>
            </li>

        </ul>
    </div>
</nav>


    <section class="homeSec">
        <!-- Header -->
        <div class="container-fluid  test">
            <div class="row">
                <div class="col-md-6  rightMob">
                    <img class="w-50" src="{{ asset('front_end/v2/imgs/right-mobile.png')}}" alt="">
                </div>
                <div class="col-md-6 descTitle">
                    <h1 class="head-text wow bounceInDown " data-wow-duration="0.5s" data-wow-delay="0.5s">وينجز .. لمن
                        يقدرون الدقة مع السرعة <br />و الخبرة مع الإبداع</h1>
                    <a href="{{route('contact')}}" class="btn btn-primary mb-5   my-2 my-sm-0"> أنطلق معنا</a>

                </div>
            </div>
        </div>
    </section>

    <!--who we are -->
    <section id="who-we-are" class="custom-section  p-section">
        <h2 class="who">من نحن ؟</h2>
        <div class="head-line"></div>
        <div class="container modify-height">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <img class="hi wow slideInRight" data-wow-duration=".5s" data-wow-delay="0s"
                        src="{{ asset('front_end/v2/imgs/interior-1.png')}}">
                </div>
                <div class="col-md-6 col-sm-12">
                    <div>

                        <p class="we wow slideInLeft text-color" data-wow-duration=".5s" data-wow-delay="0s">وينجز..
                            مجموعة متعاونة من الشغوفين بالتكنولوجيا و الإبداع الذين يحبون مشاركة شغفهم مع بقية العالم.
                            بدأنا في تطوير وتصميم المواقع و التطبيقات الإلكترونية منذ عام 2020 ، و في هذه الفترة الصغيرة
                            ، قمنا بخدمة الكثير من الشركات في أكتر من دولة. نتميز بالخبرة مع الابداع و الدقة مع السرعة و
                            مواكبة العصر<br /> في انتظاركم لتنطلقوا معنا .</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- What we offer -->
    <section class="p-section">
        <h2 class="what ">مانقدمه لكم </h2>
        <div class="head-line"></div>
        <section id="we-offer">
            <div class="container">
                <div class="owl-carousel owl-theme" id="owl-services" dir="ltr">

                  @foreach ($services as $service)
                    @if ($service->id == 6)
                       
                    <div class="item">
                        <a href="{{ route('service', $service->id ) }}">
                            <div class="card wow fadeIn" style="width: 18rem;" data-wow-duration="1s"
                                data-wow-delay=".5s">
                                <img class="card-img-top service-thum" src="{{ asset('front_end/uploads/services/boss.svg')}}" alt="تدريب">
                                <div class="card-body">
                                    <h5 class="card-title service-title">{{$service->name}}</h5>
                                    <p class="card-text text-color">تقدم وينجز خدمة التدريب للمبرمجين حديثي التخرج
                                        والطلاب
                                        لتأهيل المتدربين لسوق العمل عن طريق تنفيذ مشاريع حقيقية في مجال تطوير المواقع
                                        الالكترونية وت</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    @elseif($service->id == 1)
                    <div class="item">
                        <a
                            href="{{ route('service', $service->id ) }}">
                            <div class="card  wow fadeIn" style="width: 18rem;" data-wow-duration="1s"
                                data-wow-delay=".5s">
                                <img class="card-img-top service-thum" src="{{ asset('front_end/uploads/services/responsive.svg')}}"
                                    alt="برمجة وتصميم المواقع">
                                <div class="card-body">
                                    <h5 class="card-title service-title">{{$service->name}}</h5>
                                    <p class="card-text text-color">تصميم وبرمجة مواقع الكترونية ذات شكل فريد وتصميمات
                                        احترافية
                                        تساعدك على الظهور امام عملائك بشكل يليق بمؤسستك ويساعد عملائك على التواصل مع
                                        مؤسستك .</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    @elseif($service->id == 2)
                    <div class="item">
                        <a
                            href="{{ route('service', $service->id ) }}">
                            <div class="card  wow fadeIn" style="width: 18rem;" data-wow-duration="1s"
                                data-wow-delay=".5s">
                                <img class="card-img-top service-thum" src="{{ asset('front_end/uploads/services/app.svg')}}"
                                    alt="برمجة تطبيقات الجوال">
                                <div class="card-body">
                                    <h5 class="card-title service-title">{{$service->name}}</h5>
                                    <p class="card-text text-color">نحرص على اختيار التصميمات الجذابة والمميزة والتي
                                        تتوافق مع
                                        تجربة المستخدم .واجبنا ان تكون المواقع الالكترونية متوافقة مع مختلف أحجام
                                        الشاشات وأنواعها </p>
                                </div>
                            </div>
                        </a>
                    </div>

                    @elseif($service->id == 3)
                    <div class="item">
                        <a
                            href="{{ route('service', $service->id ) }}">
                            <div class="card  wow fadeIn" style="width: 18rem;" data-wow-duration="1s"
                                data-wow-delay=".5s">
                                <img class="card-img-top service-thum" src="{{ asset('front_end/uploads/services/calculator.svg')}}"
                                    alt="البرامج المحاسبية و الإدارية">
                                <div class="card-body">
                                    <h5 class="card-title service-title">{{$service->name}}</h5>
                                    <p class="card-text text-color">تصميم وبرمجة تطبيقات الإدارية و المحاسبية لتكون
                                        مناسبة
                                        لاحتياجات مجالك المستثمر فيه و تنظيم التعاملات المحاسبية و المنظومة الادارية
                                        التى تعد عصب اى اس</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    @elseif($service->id == 4)
                    <div class="item">
                        <a
                            href="{{ route('service', $service->id ) }}">
                            <div class="card  wow fadeIn" style="width: 18rem;" data-wow-duration="1s"
                                data-wow-delay=".5s">
                                <img class="card-img-top service-thum" src="{{ asset('front_end/uploads/services/cloud.svg')}}"
                                    alt="استضافة المواقع">
                                <div class="card-body">
                                    <h5 class="card-title service-title">{{$service->name}}</h5>
                                    <p class="card-text text-color">مع خدمة استضافة المواقع من وينجز يمكنك استضافة موقعك
                                        الالكتروني على أفضل السيرفرات العالمية بأسعار مناسبة جدا وفي المتناول . تتضمن
                                        عروضنا أيضا شرا</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    @elseif($service->id == 5)
                    <div class="item">
                        <a
                            href="{{ route('service', $service->id ) }}">
                            <div class="card  wow fadeIn" style="width: 18rem;" data-wow-duration="1s"
                                data-wow-delay=".5s">
                                <img class="card-img-top service-thum" src="{{ asset('front_end/uploads/services/bullhorn.svg')}}"
                                    alt="التسويق الالكتروني">
                                <div class="card-body">
                                 <h5 class="card-title service-title">{{$service->name}}</h5>
                                    <p class="card-text text-color">تقدم وينجز خدمة التسويق الإلكتروني من خلال منصات
                                        التواصل
                                        الإجتماعي والتي تستخدم من قبل الملايين لضمان الوصول لأكبر عدد ممكن من العملاء
                                        المستهدفين ف</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                   @endforeach
                </div>
            </div>
        </section>
    </section>
    <!-- Start Counter -->
    <section id="Counter" class="sectionCount custom-section mt-5 py-5">
        <h2 class="who">احصائيات</h2>
        <div class="head-line"></div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-3 text-center col-md-6 col-sm-12 border-right">
                    <h2 class="Count">{{$allprojects->count()}}</h2>
                    <h4 class="text-color">COMPLETE PROJECT</h4>
                </div>
                <div class="col-lg-3 text-center col-md-6 col-sm-12 border-right">
                    <h2 class="Count">{{$clients->count()}}</h2>
                    <h4 class="text-color">HAPPY CLIENTS</h4>
                </div>
                <div class="col-lg-3 text-center col-md-6 col-sm-12 border-right">
                    <h2 class="Count">560</h2>
                    <h4 class="text-color">CUP OF COFFIE</h4>
                </div>
                <div class="col-lg-3 text-center col-md-6 col-sm-12 ">
                    <h2 class="Count">11</h2>
                    <h4 class="text-color">AWARDS</h4>
                </div>
            </div>
        </div>

    </section>
    <!-- End Counter -->
    <!-- Start sectionTeam -->
    <section id="Teams" class="sectionTeam py-5">
        <div class="container">
            <div class="details text-center pt-2">
                <h2>فريق الخبراء لدينا</h2>
                <div class="head-line"></div>

            </div>

            <div class="owl-carousel owl-theme" id="owl-team" dir="ltr">
                @foreach ($team as $tea)
                <div class="item ">
                    <img src="{{ asset($tea->image)}}" alt="">

                    <div class="caption text-center">
                        <div class="caption2 p-2">
                            <h4 class="">{{ $tea->name }}</h4>
                            <p>{{$tea->position}}</p>
                            <div class="icons-team">
                                <a href="{{ $tea->facebook }}"><i class="fab fa-facebook-f px-1"></i></a>
                                <a href="{{ $tea->twitter }}"><i class="fab fa-twitter px-1"></i></a>
                                <a href="{{ $tea->github }}"><i class="fab fa-github px-1"></i></a>
                                <a href="{{ $tea->instagram }}"><i class="fab fa-instagram px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End sectionTeam -->
    <!-- Our-works -->
    <section class="custom-section p-section">
        <h2 class="what "> بعض أعمالنا</h2>
        <div class="head-line"></div>
        <section class="our-workk">
            <div class="container">
                <div class="row adjust justify-content-center">
                    
                    @foreach ($projects as $project)
                    <div class="col-md-4">
                        <a
                            href="{{ route('single_projects', $project->id ) }}">
                            <div class="card card-shadow wow fadeIn" style="width: 18rem;" data-wow-duration="1s"
                                data-wow-delay=".5s">
                                <img src="{{$project->photo}}" class="work-thumnail" height="350"
                                    alt="">
                                <div class="card-body">
                                <p class="card-text text-color">{{$project->name}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    
                    <div class="clearfix"></div>
                </div>
                <div class="align">
                    <a class="one" href="{{route('all_projects')}}">
                        <button class="btn watch-more hvr-bob">شاهد كل أعمالنا</button>
                    </a>
                </div>
            </div>
        </section>
    </section>

    <section class="our-client">
        <section class="layout">
            <h2 class="what " style="color: #ffba08"> عملاء نفتخر بهم </h2>
            <div class="head-line"></div>
            <!-- our client section -->
            <section id="our-client">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel owl-theme" id="owl-clients" dir="ltr">
                    
                               @foreach ($clients as $client)
                               @if ($client->pride == 1)
                         
                                <div class="item clients wow bounceInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                    <a href="#" title="Smart Erisildi">
                                        <img class="img-fluid" src="{{$client->image}}">
                                    </a>
                                </div>
                                          
                               @endif
                               @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <!-- articles section -->
    <section class="p-section custom-section">
        <h2 class="what "> أراء عملائنا </h2>

        <div class="head-line"></div>

        <section class="customer-say">
            <div class="container">
                <div class="row">
                    {{-- <div class="col-md-12"> --}}
                        <div class="owl-carousel owl-loaded owl-drag" id="owl-testimonial" dir="ltr">
                            @foreach ($clients as $client)
                            <div class="col md-6">
                            <div class="item testi-item say  wow bounceInUp" data-wow-duration="1s"
                                data-wow-delay=".5s">
                             
                               <div class="media">

                                <div class="media-body ml-3">
                                 <h4>{{$client->name}}</h4>

                                 <p class=" text-color">{{$client->comment}}</p>

                                </div>

                                <div class="m-auto">
                                    <img class="card-img-top circle article-thumnail"
                                        src="{{$client->image}}" style="width: 120px" alt="">
                                </div>
                            </div>
                            

                            </div>
                        </div>
                            @endforeach
                        </div>
                    {{-- </div> --}}
                </div>



            </div>
            <div class="align">
                <a class="one" href="{{route('testimonials')}}">
                    <button class="btn watch-more hvr-bob">المزيد</button>
                </a>
            </div>
        </section>
    </section>
@include('Front.layouts.footer')