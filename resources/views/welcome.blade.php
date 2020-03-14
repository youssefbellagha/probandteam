<!doctype html>
<html lang="ar" dir="rtl">


<head>
    <meta charset="utf-8">
    <title>وينجز للبرمجيات</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="وينجز هي شركة برمجيات مصرية بدأت عملها فى عام 2020
متخصصون فى  تصميم و تطوير المواقع الالكترونية وبرامج المبيعات والبرامج الإدارية وبرمجة تطبيقات الهواتف والتسويق الالكتروني">
    <meta name="keywords" content="تصميم المواقع ، برمجة التطبيقات">
    <meta name="author" content="وينجز للبرمجيات">
    <link rel="icon" type="image/png" href="{{ asset('front_end/img/favicon-96x96.png')}}" />
    <!-- website font  -->
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css"
        integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('front_end/v2/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('front_end/v2/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{ asset('front_end/v2/css/animate.css')}}">
    <link href="{{ asset('front_end/v2/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front_end/v2/css/lightbox.min.css')}}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130768684-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-130768684-2');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P83P5FX');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P83P5FX" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5dcd2a7ad96992700fc76708/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- Load Facebook SDK for JavaScript -->

    <!-- Return to Top -->



    <nav class="navbar fixed-top navbar-expand-lg navbar-dark " style="direction: rtl">
        <a class="navbar-brand" href="index.html"><img class="img-fluid logo-img" src="{{ asset('front_end/v2/imgs/logo2.png')}}"
                width="190px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav w-100 d-flex">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">الرئيسية <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hvr-rotate"
                        href="page/%d8%a7%d8%a8%d8%af%d8%a7%d8%b9-%d8%aa%d9%83-%d9%84%d9%84%d8%a8%d8%b1%d9%85%d8%ac%d9%8a%d8%a7%d8%aa.html">من
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
                        href="service/%d8%aa%d8%af%d8%b1%d9%8a%d8%a8-%d8%a7%d8%a8%d8%af%d8%a7%d8%b9.html">{{$service->name}}</a>
                        @endforeach
                       
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="projects.html">أعمالنا</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="mailto:jobs@ekramy.no3man@gmail.com">الوظائف</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="testimonials.html">أراء عملائنا</a>

                </li>
                <li class="navbar-btns">
                    <a href="contacts.html" class="btn btn-primary my-sm-0">تواصل معنا</a>
                    <a target="_blank" href="#" class="btn btn-success  my-sm-0"><i class="fab fa-whatsapp whats"></i>
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
                    <a href="contacts.html" class="btn btn-primary mb-5   my-2 my-sm-0"> أنطلق معنا</a>

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
                    <div class="item">
                        <a href="service/%d8%aa%d8%af%d8%b1%d9%8a%d8%a8-%d8%a7%d8%a8%d8%af%d8%a7%d8%b9.html">
                            <div class="card wow fadeIn" style="width: 18rem;" data-wow-duration="1s"
                                data-wow-delay=".5s">
                                <img class="card-img-top service-thum" src="{{ asset('front_end/uploads/services/boss.svg')}}" alt="تدريب">
                                <div class="card-body">
                                    <h5 class="card-title service-title">تدريب </h5>
                                    <p class="card-text text-color">تقدم وينجز خدمة التدريب للمبرمجين حديثي التخرج
                                        والطلاب
                                        لتأهيل المتدربين لسوق العمل عن طريق تنفيذ مشاريع حقيقية في مجال تطوير المواقع
                                        الالكترونية وت</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a
                            href="service/%d8%a8%d8%b1%d9%85%d8%ac%d8%a9-%d9%88%d8%aa%d8%b5%d9%85%d9%8a%d9%85-%d8%a7%d9%84%d9%85%d9%88%d8%a7%d9%82%d8%b9.html">
                            <div class="card  wow fadeIn" style="width: 18rem;" data-wow-duration="1s"
                                data-wow-delay=".5s">
                                <img class="card-img-top service-thum" src="{{ asset('front_end/uploads/services/responsive.svg')}}"
                                    alt="برمجة وتصميم المواقع">
                                <div class="card-body">
                                    <h5 class="card-title service-title">برمجة وتصميم المواقع</h5>
                                    <p class="card-text text-color">تصميم وبرمجة مواقع الكترونية ذات شكل فريد وتصميمات
                                        احترافية
                                        تساعدك على الظهور امام عملائك بشكل يليق بمؤسستك ويساعد عملائك على التواصل مع
                                        مؤسستك .</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a
                            href="service/%d8%a8%d8%b1%d9%85%d8%ac%d8%a9-%d8%aa%d8%b7%d8%a8%d9%8a%d9%82%d8%a7%d8%aa-%d8%a7%d9%84%d8%ac%d9%88%d8%a7%d9%84.html">
                            <div class="card  wow fadeIn" style="width: 18rem;" data-wow-duration="1s"
                                data-wow-delay=".5s">
                                <img class="card-img-top service-thum" src="{{ asset('front_end/uploads/services/app.svg')}}"
                                    alt="برمجة تطبيقات الجوال">
                                <div class="card-body">
                                    <h5 class="card-title service-title">برمجة تطبيقات الجوال</h5>
                                    <p class="card-text text-color">نحرص على اختيار التصميمات الجذابة والمميزة والتي
                                        تتوافق مع
                                        تجربة المستخدم .واجبنا ان تكون المواقع الالكترونية متوافقة مع مختلف أحجام
                                        الشاشات وأنواعها </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a
                            href="service/%d8%a7%d9%84%d8%a8%d8%b1%d8%a7%d9%85%d8%ac-%d8%a7%d9%84%d9%85%d8%ad%d8%a7%d8%b3%d8%a8%d9%8a%d8%a9-%d9%88-%d8%a7%d9%84%d8%a5%d8%af%d8%a7%d8%b1%d9%8a%d8%a9-%d9%84%d9%84%d9%85%d8%a4%d8%b3%d8%b3%d8%a7%d8%aa-%d9%88%d8%a8%d8%b1%d8%a7%d9%85%d8%ac-%d8%a7%d9%84%d9%85%d8%a8%d9%8a%d8%b9%d8%a7%d8%aa-%d9%84%d9%84%d9%85%d8%ad%d9%84%d8%a7%d8%aa-%d9%88-%d8%a7%d9%84%d8%b4%d8%b1%d9%83%d8%a7%d8%aa.html">
                            <div class="card  wow fadeIn" style="width: 18rem;" data-wow-duration="1s"
                                data-wow-delay=".5s">
                                <img class="card-img-top service-thum" src="{{ asset('front_end/uploads/services/calculator.svg')}}"
                                    alt="البرامج المحاسبية و الإدارية">
                                <div class="card-body">
                                    <h5 class="card-title service-title">البرامج المحاسبية و الإدارية</h5>
                                    <p class="card-text text-color">تصميم وبرمجة تطبيقات الإدارية و المحاسبية لتكون
                                        مناسبة
                                        لاحتياجات مجالك المستثمر فيه و تنظيم التعاملات المحاسبية و المنظومة الادارية
                                        التى تعد عصب اى اس</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a
                            href="service/web-hosting-%d8%a7%d8%b3%d8%aa%d8%b6%d8%a7%d9%81%d8%a9-%d8%a7%d9%84%d9%85%d9%88%d8%a7%d9%82%d8%b9.html">
                            <div class="card  wow fadeIn" style="width: 18rem;" data-wow-duration="1s"
                                data-wow-delay=".5s">
                                <img class="card-img-top service-thum" src="{{ asset('front_end/uploads/services/cloud.svg')}}"
                                    alt="استضافة المواقع">
                                <div class="card-body">
                                    <h5 class="card-title service-title">استضافة المواقع</h5>
                                    <p class="card-text text-color">مع خدمة استضافة المواقع من وينجز يمكنك استضافة موقعك
                                        الالكتروني على أفضل السيرفرات العالمية بأسعار مناسبة جدا وفي المتناول . تتضمن
                                        عروضنا أيضا شرا</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a
                            href="service/%d8%a7%d9%84%d8%aa%d8%b3%d9%88%d9%8a%d9%82-%d8%a7%d9%84%d8%a7%d9%84%d9%83%d8%aa%d8%b1%d9%88%d9%86%d9%8a-Digital-Marketing.html">
                            <div class="card  wow fadeIn" style="width: 18rem;" data-wow-duration="1s"
                                data-wow-delay=".5s">
                                <img class="card-img-top service-thum" src="{{ asset('front_end/uploads/services/bullhorn.svg')}}"
                                    alt="التسويق الالكتروني">
                                <div class="card-body">
                                    <h5 class="card-title service-title">التسويق الالكتروني</h5>
                                    <p class="card-text text-color">تقدم وينجز خدمة التسويق الإلكتروني من خلال منصات
                                        التواصل
                                        الإجتماعي والتي تستخدم من قبل الملايين لضمان الوصول لأكبر عدد ممكن من العملاء
                                        المستهدفين ف</p>
                                </div>
                            </div>
                        </a>
                    </div>
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
                    <h2 class="Count">352</h2>
                    <h4 class="text-color">COMPLETE PROJECT</h4>
                </div>
                <div class="col-lg-3 text-center col-md-6 col-sm-12 border-right">
                    <h2 class="Count">121</h2>
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
                <div class="item ">
                    <img src="{{ asset('front_end/v2/imgs/team-1.jpg')}}" alt="">

                    <div class="caption text-center">
                        <div class="caption2 p-2">
                            <h4 class="">JONATHON DOE</h4>
                            <p>User Interface Designer</p>
                            <div class="icons-team">
                                <i class="fab fa-facebook-f px-1"></i>
                                <i class="fab fa-twitter px-1"></i>
                                <i class="fab fa-dribbble px-1"></i>
                                <i class="fab fa-instagram px-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item ">
                    <img src="{{ asset('front_end/v2/imgs/team-4.jpg')}}" alt="">

                    <div class="caption text-center">
                        <div class="caption2 p-2">
                            <h4 class="">JONATHON DOE</h4>
                            <p>User Interface Designer</p>
                            <div class="icons-team">
                                <i class="fab fa-facebook-f px-1"></i>
                                <i class="fab fa-twitter px-1"></i>
                                <i class="fab fa-dribbble px-1"></i>
                                <i class="fab fa-instagram px-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item ">
                    <img src="{{ asset('front_end/v2/imgs/team-3.jpg')}}" alt="">

                    <div class="caption text-center">
                        <div class="caption2 p-2">
                            <h4 class="">JONATHON DOE</h4>
                            <p>User Interface Designer</p>
                            <div class="icons-team">
                                <i class="fab fa-facebook-f px-1"></i>
                                <i class="fab fa-twitter px-1"></i>
                                <i class="fab fa-dribbble px-1"></i>
                                <i class="fab fa-instagram px-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item ">
                    <img src="{{ asset('front_end/v2/imgs/team-4.jpg')}}" alt="">

                    <div class="caption text-center">
                        <div class="caption2 p-2">
                            <h4 class="">JONATHON DOE</h4>
                            <p>User Interface Designer</p>
                            <div class="icons-team">
                                <i class="fab fa-facebook-f px-1"></i>
                                <i class="fab fa-twitter px-1"></i>
                                <i class="fab fa-dribbble px-1"></i>
                                <i class="fab fa-instagram px-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item ">
                    <img src="{{ asset('front_end/v2/imgs/team-3.jpg')}}" alt="">

                    <div class="caption text-center">
                        <div class="caption2 p-2">
                            <h4 class="">JONATHON DOE</h4>
                            <p>User Interface Designer</p>
                            <div class="icons-team">
                                <i class="fab fa-facebook-f px-1"></i>
                                <i class="fab fa-twitter px-1"></i>
                                <i class="fab fa-dribbble px-1"></i>
                                <i class="fab fa-instagram px-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item ">
                    <img src="{{ asset('front_end/v2/imgs/team-2.jpg')}}" alt="">

                    <div class="caption text-center">
                        <div class="caption2 p-2">
                            <h4 class="">JONATHON DOE</h4>
                            <p>User Interface Designer</p>
                            <div class="icons-team">
                                <i class="fab fa-facebook-f px-1"></i>
                                <i class="fab fa-twitter px-1"></i>
                                <i class="fab fa-dribbble px-1"></i>
                                <i class="fab fa-instagram px-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <div class="col-md-4">
                        <a
                            href="project/%d8%aa%d8%b7%d8%a8%d9%8a%d9%82-%d9%88%d9%85%d9%88%d9%82%d8%b9-%d8%a7%d9%83%d8%aa%d8%b4%d9%81%d9%86%d9%8a.html">
                            <div class="card card-shadow wow fadeIn" style="width: 18rem;" data-wow-duration="1s"
                                data-wow-delay=".5s">
                                <img src="https://placehold.it/300x350/68456d/ffffff?text=image" class="work-thumnail"
                                    alt="">
                                <div class="card-body">
                                    <p class="card-text text-color">اسم التطبيق</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="project/%d8%aa%d8%b7%d8%a8%d9%8a%d9%82-%d9%85%d8%b5%d8%b1%d9%88%d9%81%d9%8a.html">
                            <div class="card card-shadow wow fadeIn" style="width: 18rem;" data-wow-duration="1s"
                                data-wow-delay=".5s">
                                <img src="https://placehold.it/300x350/68456d/ffffff?text=image" class="work-thumnail"
                                    alt="تطبيق مصروفي">
                                <div class="card-body">
                                    <p class="card-text text-color">اسم التطبيق</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="project/%d8%aa%d8%b7%d8%a8%d9%8a%d9%82-%d8%af%d9%83%d8%a7%d9%86.html">
                            <div class="card card-shadow wow fadeIn" style="width: 18rem;" data-wow-duration="1s"
                                data-wow-delay=".5s">
                                <img src="https://placehold.it/300x350/68456d/ffffff?text=image" class="work-thumnail"
                                    alt="تطبيق دكان">
                                <div class="card-body">
                                    <p class="card-text  text-color">اسم التطبيق</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4">
                        <a
                            href="project/%d9%85%d9%88%d9%82%d8%b9-%d8%a7%d9%84%d9%86%d8%b3%d8%b1-%d9%84%d9%84%d9%85%d9%88%d8%a7%d8%af-%d8%a7%d9%84%d8%ba%d8%b0%d8%a7%d8%a6%d9%8a%d8%a9.html">
                            <div class="card card-shadow wow fadeIn" style="width: 18rem;" data-wow-duration="1s"
                                data-wow-delay=".5s">
                                <img src="https://placehold.it/300x350/68456d/ffffff?text=image" class="work-thumnail"
                                    alt="موقع النسر للمواد الغذائية">
                                <div class="card-body">
                                    <p class="card-text text-color">اسم التطبيق</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="project/%d9%85%d9%88%d9%82%d8%b9-%d8%b3%d9%85%d8%a7%d8%b1%d8%aa.html">
                            <div class="card card-shadow wow fadeIn" style="width: 18rem;" data-wow-duration="1s"
                                data-wow-delay=".5s">
                                <img src="https://placehold.it/300x350/68456d/ffffff?text=image" class="work-thumnail"
                                    alt="موقع سمارت">
                                <div class="card-body">
                                    <p class="card-text text-color">اسم التطبيق</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="project/%d8%aa%d8%b7%d8%a8%d9%8a%d9%82-%d8%b9%d8%af%d9%84.html">
                            <div class="card card-shadow wow fadeIn" style="width: 18rem;" data-wow-duration="1s"
                                data-wow-delay=".5s">
                                <img src="https://placehold.it/300x350/68456d/ffffff?text=image" class="work-thumnail"
                                    alt="تطبيق عدل">
                                <div class="card-body">
                                    <p class="card-text  text-color">اسم التطبيق</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="align">
                    <a class="one" href="projects.html">
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
                                <div class="item clients wow bounceInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                    <a href="http://smarterisildi.com/en" title="Smart Erisildi">
                                        <img class="img-fluid" src="{{ asset('front_end/v2/imgs/tomorrowworld-logo.png')}}">
                                    </a>
                                </div>
                                <div class="item clients wow bounceInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                    <a href="index.html" title="العميل الثاني">
                                        <img class="img-fluid" src="{{ asset('front_end/v2/imgs/tomorrowworld-logo.png')}}">
                                    </a>
                                </div>
                                <div class="item clients wow bounceInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                    <a href="http://one-services.org/" title="العميل الأول" class="">
                                        <img class="img-fluid" src="{{ asset('front_end/v2/imgs/tomorrowworld-logo.png')}}">
                                    </a>
                                </div>
                                <div class="item clients wow bounceInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                    <a href="http://rawagemarketing.com/en" title="rawag" class="">
                                        <img class="img-fluid" src="{{ asset('front_end/v2/imgs/tomorrowworld-logo.png')}}">
                                    </a>
                                </div>
                                <div class="item clients wow bounceInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                    <a href="http://alnesregypt.com/ar" title="النسر للصناعات الغذائية" class="">
                                        <img class="img-fluid" src="{{ asset('front_end/v2/imgs/tomorrowworld-logo.png')}}">
                                    </a>
                                </div>
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
                    <div class="col-md-12">
                        <div class="owl-carousel owl-loaded owl-drag" id="owl-testimonial" dir="ltr">

                            <div class="item testi-item say  wow bounceInUp" data-wow-duration="1s"
                                data-wow-delay=".5s">
                                <div class="media">

                                    <div class="media-body ml-3">
                                        <h4>أحد العملاء</h4>

                                        <p class=" text-color"> كلام جميل و كلام معقول مقدرش اقول حاجة عنه كلام جميل و
                                            كلام معقول مقدرش اقول حاجة عنه</p>

                                    </div>

                                    <div class="m-auto">
                                        <img class="card-img-top circle article-thumnail"
                                            src="https://placehold.it/100x100/68456d/ffffff?text=image" alt="">
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>



            </div>
            <div class="align">
                <a class="one" href="testimonials.html">
                    <button class="btn watch-more hvr-bob">المزيد</button>
                </a>
            </div>
        </section>
    </section>

    <footer id="footer">
        <section class="layout">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-sm-12 text-center feeds m-auto ">
                        <h3 class="text-light">Instgram Feed</h3>
                        <div class=" d-flex flex-wrap feed-img">
                            <a href="/"><img src="{{ asset('front_end/v2/imgs/Image-01.jpg')}}" alt=""></a>
                            <a href="/"><img src="{{ asset('front_end/v2/imgs/Image-02.jpg')}}" alt=""></a>
                            <a href="/"><img src="{{ asset('front_end/v2/imgs/Image-04.jpg')}}" alt=""></a>
                            <a href="/"><img src="{{ asset('front_end/v2/imgs/Image-05.jpg')}}" alt=""></a>
                            <a href="/"><img src="{{ asset('front_end/v2/imgs/Image-07.jpg')}}" alt=""></a>
                            <a href="/"><img src="{{ asset('front_end/v2/imgs/Image-08.jpg')}}" alt=""></a>
                            <a href="/"><img src="{{ asset('front_end/v2/imgs/Image-06.jpg')}}" alt=""></a>
                            <a href="/"><img src="{{ asset('front_end/v2/imgs/Image-03.jpg')}}" alt=""></a>
                        </div>

                    </div>
                    <div class="col-lg-6  col-sm-12 footer-sec" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="responsive-behavior text-center text-light">
                            <h3 class="mb-3">NEWSLETTER</h3>
                            <p>You can trust us. we only send promo offers, not a single spam.</p>
                            <div class="form-group mt-3">
                                <input type="email" class="form-control w-100 ml-auto inpEmail text-right" name="" id=""
                                    aria-describedby="helpId" placeholder="Your Email Adress">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-8 text-center mt-4">
                                <div class="social ">
                                    <a class="text-right" href="#"><i class="fab fa-instagram github"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter twitter"></i></a>
                                    <a href="#"><i class="fab fa-whatsapp whats"></i></a>
                                    <a href="#"><i class="fab fa-linkedin twitter"></i></a>
                                </div>
                            </div>

                            <div class=" col-lg-3 col-md-4 col-sm-12  mb-4 mt-3">
                                <button type="button" name="" id="" class="btn btnStart btn-outline-light"> Started
                                    Now</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 m-auto text-center text-light">
                        <h3 class="mb-4">TOP PRODUCTS</h3>
                        <ul class="list-unstyled ">
                            <li class="nav-item ">
                                <a class="nav-link active text-light" href="#">Managed Website</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#">Manage Reputation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#">Power Tools</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#">Marketing Service</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </footer>


    <!-- loader  -->
    <section class="overlay">


        <div class="boxes">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
        </div>
    </section>

    <!-- scripts -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('front_end/v2/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('front_end/v2/js/wow.min.js')}}"></script>
    <script src="{{ asset('front_end/v2/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('front_end/v2/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('front_end/v2/js/owl.carousel.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="{{ asset('front_end/v2/js/lightbox.min.js')}}"></script>
    <script src="{{ asset('front_end/v2/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{ asset('front_end/v2/js/script.js')}}"></script>



</body>

</html>