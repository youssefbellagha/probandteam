@include('Front.layouts.header')

@include('Front.layouts.navbar')

@if ($service->id == 1)
    
<section style="margin-bottom: 5px" class="header-side">
    <div class="container" style="margin-bottom: 6px">
        <div class="row">
            <div class="col-lg-5" style="margin-bottom: 17px;padding-top: 3rem;">
                <img class="header-image img-fluid wow bounceInDown img-responsive" data-wow-duration="1.5s"
                    data-wow-delay=".5s" src="{{ asset('front_end/v2/imgs/web.png')}}">
            </div>
            <div class="col-lg-7">
                <div class="col-md-12  wow bounceInDown" style="border-right: 5px solid #ffba08;">
                    <h1 class="head-text">برمجة وتصميم المواقع</h1>
                </div>
                <div class="col-md-12  wow bounceInDown">
                    <p class="article-info">تصميم وبرمجة مواقع الكترونية ذات شكل فريد وتصميمات احترافية تساعدك على
                        الظهور امام عملائك بشكل يليق بمؤسستك ويساعد عملائك على التواصل مع مؤسستك .</p>
                </div>
                <div class="col-md-12 btn-header  wow bounceInDown text-center"
                    style="margin-top: 7pc; margin-bottom: 10%">
                    <a href="#contact_form" class="btn btn-primary ">طلب الخدمة</a>
                </div>
            </div>
        </div>

    </div>
</section>


<h2 class="what mt-5 "> مميزات الخدمة</h2>
<div class="head-line"></div>
<section id="we-offer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4  col-sm-12">
                <div class="row">
                    <div class="col-md-12 feature" style="margin-top: 3rem;">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="card-img-top img-width article-thumnail" data-wow-duration="1.5s"
                                    data-wow-delay=".5s" src="{{ asset('front_end/uploads/features/thumbnails/157158416563849.png')}}">
                            </div>
                            <div class="col-md-9">
                                <div style="border-right: 5px solid #68456d;padding-right: 7px">
                                    <h5>حماية كاملة</h5>
                                </div>
                                <h4>تمتع بأقصى درجات الأمان لموقعك حيث نستخدم أصعب اساليب التشفير للأكواد البرمجية.
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 feature" style="margin-top: 3rem;">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="card-img-top img-width  article-thumnail" data-wow-duration="1.5s"
                                    data-wow-delay=".5s" src="{{ asset('front_end/uploads/features/thumbnails/157158411492403.png')}}">
                            </div>
                            <div class="col-md-9">
                                <div style="border-right: 5px solid #68456d;padding-right: 7px">
                                    <h5>تصميمات احترافية</h5>
                                </div>
                                نتميز بالتصميمات البسيطة والاحترافية واختيار الألوان العصرية التي تعبر عن هوية
                                مشروعك الذي
                                تعلن عنه.
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12 feature" style="margin-top: 3rem;">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="card-img-top img-width  article-thumnail" data-wow-duration="1.5s"
                                    data-wow-delay=".5s" src="{{ asset('front_end/uploads/features/thumbnails/157158391847869.png')}}">
                            </div>
                            <div class="col-md-9">
                                <div style="border-right: 5px solid #68456d;padding-right: 7px">
                                    <h5>تعدد اللغات</h5>
                                </div>
                                نقدم خيارات لغات عديدة لموقعك فمن الممكن ان يعرض موقعك بلغة واحدة او يعرض بأكثر من
                                لغة حسب
                                اختيارك.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 feature" style="margin-top: 3rem;">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="card-img-top img-width  article-thumnail" data-wow-duration="1.5s"
                                    data-wow-delay=".5s" src="{{ asset('front_end/uploads/features/thumbnails/157158384388632.png')}}">
                            </div>
                            <div class="col-md-9">
                                <div style="border-right: 5px solid #68456d;padding-right: 7px">
                                    <h5>تحكم في موقعك بسهولة</h5>
                                </div>
                                يمكننا العمل على توفير لوحة تحكم عربية أو إنجليزية لإدارة صفحات موقعك واضافة خدماتك
                                بكل
                                سهولة.
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-md-4 col-sm-12  ">
                <div class="img-feature2">
                    <img src="{{ asset('front_end/v2/imgs/web.png')}}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="row">
                    <div class="col-md-12 feature" style="margin-top: 3rem;">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="card-img-top img-width article-thumnail" data-wow-duration="1.5s"
                                    data-wow-delay=".5s" src="{{ asset('front_end/uploads/features/thumbnails/157158418299724.png')}}">
                            </div>
                            <div class="col-md-9 ">
                                <div style="border-right: 5px solid #68456d;padding-right: 7px">
                                    <h5>دعم فني متكامل</h5>
                                </div>
                                تقدم وينجز خدمات الدعم الفنى على مدار الساعة على أكمل وجه من دون توقف.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 feature" style="margin-top: 3rem;">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="card-img-top img-width article-thumnail" data-wow-duration="1.5s"
                                    data-wow-delay=".5s" src="{{ asset('front_end/uploads/features/thumbnails/157158414518843.png')}}">
                            </div>
                            <div class="col-md-9">
                                <div style="border-right: 5px solid #68456d;padding-right: 7px">
                                    <h5>تصميم متوافق</h5>
                                </div>
                                نقوم بإنشاء موقع متوافق مع كافة الأجهزة الذكية وجميع الجوالات المختلفة والشاشات
                                لسهولة
                                التصفح.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 feature" style="margin-top: 3rem;">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="card-img-top img-width article-thumnail" data-wow-duration="1.5s"
                                    data-wow-delay=".5s" src="{{ asset('front_end/uploads/features/thumbnails/157158397288982.png')}}">
                            </div>
                            <div class="col-md-9">
                                <div style="border-right: 5px solid #68456d;padding-right: 7px">
                                    <h5>ايميلات رسمية</h5>
                                </div>
                                نوفر إيميلات رسمية بإسم مشروعك الى جميع طاقم الموظفين بالشركة لسهولة التواصل بينهم و
                                بين
                                العملاء.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 feature" style="margin-top: 3rem;">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="card-img-top img-width article-thumnail" data-wow-duration="1.5s"
                                    data-wow-delay=".5s" src="{{ asset('front_end/uploads/features/thumbnails/157217525658858.html')}}">
                            </div>
                            <div class="col-md-9">
                                <div style="border-right: 5px solid #68456d;padding-right: 7px">
                                    <h5>تصميمات سريعة</h5>
                                </div>
                                نقدم تصميمات مواقع سريعة ومتوافقة مع محركات البحث لتظهر في نتائج البحث الأولى.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


@elseif($service->id == 2)
<section style="margin-bottom: 5pc;" class="header-side p-5">
    <div class="container" style="margin-bottom: 6px">
        <div class="row">
            <div class="col-lg-4  col-sm-12">
                <div class="mobile-slider-area">
                    <div class="phone">
                        <img src="{{ asset('front_end/v2/imgs/iphone-x-frame.png')}}" alt="Phone" class="img-fluid d-block">
                        <div class="owl-carousel owl-theme  mobile-slider" id="owl-mobile" dir="ltr">
                            <div class="item">
                                <a class="example-image-link img" href="{{ asset('front_end/v2/imgs/top-screen-1.png')}}"
                                    data-lightbox="example-set">
                                    <img class="img-fluid" src="{{ asset('front_end/v2/imgs/top-screen-1.png')}}">
                                </a>
                            </div>
                            <div class="item">
                                <a class="example-image-link img" href="{{ asset('front_end/v2/imgs/top-screen-2.png')}}"
                                    data-lightbox="example-set">
                                    <img class="img-fluid" src="{{ asset('front_end/v2/imgs/top-screen-2.png')}}">
                                </a>
                            </div>
                            <div class="item">
                                <a class="example-image-link img" href="{{ asset('front_end/v2/imgs/top-screen-3.png')}}"
                                    data-lightbox="example-set">
                                    <img class="img-fluid" src="{{ asset('front_end/v2/imgs/top-screen-3.png')}}">
                                </a>
                            </div>
                            <div class="item">
                                <a class="example-image-link img" href="{{ asset('front_end/v2/imgs/top-screen-5.png')}}"
                                    data-lightbox="example-set">
                                    <img class="img-fluid" src="{{ asset('front_end/v2/imgs/top-screen-5.png')}}">
                                </a>
                            </div>
                            <div class="item">
                                <a class="example-image-link img" href="{{ asset('front_end/v2/imgs/top-screen-6.jpg')}}"
                                    data-lightbox="example-set">
                                    <img class="img-fluid" src="{{ asset('front_end/v2/imgs/top-screen-6.jpg')}}">
                                </a>
                            </div>
                            <div class="item">
                                <a class="example-image-link img" href="{{ asset('front_end/v2/imgs/top-screen-7.png')}}"
                                    data-lightbox="example-set">
                                    <img class="img-fluid" src="{{ asset('front_end/v2/imgs/top-screen-7.png')}}">
                                </a>
                            </div>
                            <div class="item">
                                <a class="example-image-link img" href="{{ asset('front_end/v2/imgs/top-screen-8.jpg')}}"
                                    data-lightbox="example-set">
                                    <img class="img-fluid" src="{{ asset('front_end/v2/imgs/top-screen-8.jpg')}}">
                                </a>
                            </div>
                            <div class="item">
                                <a class="example-image-link img" href="{{ asset('front_end/v2/imgs/top-screen-1.png')}}"
                                    data-lightbox="example-set">
                                    <img class="img-fluid" src="{{ asset('front_end/v2/imgs/top-screen-1.png')}}">
                                </a>
                            </div>
                            <div class="item">
                                <a class="example-image-link img" href="{{ asset('front_end/v2/imgs/top-screen-2.png')}}"
                                    data-lightbox="example-set">
                                    <img class="img-fluid" src="{{ asset('front_end/v2/imgs/top-screen-2.png')}}">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="col-md-12  wow bounceInDown" style="border-right: 5px solid #ffba08;">
                    <h1 class="head-text">برمجة تطبيقات الجوال</h1>
                </div>
                <div class="col-md-12  wow bounceInDown">
                    <p class="article-info">نحرص على اختيار التصميمات الجذابة والمميزة والتي تتوافق مع تجربة
                        المستخدم .واجبنا ان تكون المواقع الالكترونية متوافقة مع مختلف أحجام الشاشات وأنواعها .</p>
                </div>
                <div class="col-sm-12 btn-header  wow bounceInDown text-center">
                    <a href="#contact_form" class="btn btn-primary ">طلب الخدمة</a>
                </div>
            </div>

        </div>
    </div>

</section>


<h2 class="what mt-5 "> مميزات الخدمة</h2>
<div class="head-line"></div>
<section id="we-offer">
    <div class="container">
        <div class="row">
            <div class=" col-lg-4 col-sm-12">
                <div class="row">
                    <div class="col-md-12 feature" style="margin-top: 3rem;">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="card-img-top img-width article-thumnail" data-wow-duration="1.5s"
                                    data-wow-delay=".5s" src="{{ asset('front_end/uploads/features/thumbnails/157158416563849.png')}}">
                            </div>
                            <div class="col-md-9">
                                <div style="border-right: 5px solid #68456d;padding-right: 7px">
                                    <h5>حماية كاملة</h5>
                                </div>
                                تمتع بأقصى درجات الأمان للتطبيقات حيث نستخدم أصعب اساليب التشفير للأكواد البرمجية.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 feature" style="margin-top: 3rem;">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="card-img-top img-width article-thumnail" data-wow-duration="1.5s"
                                    data-wow-delay=".5s" src="{{ asset('front_end/uploads/features/thumbnails/157217785664626.html')}}">
                            </div>
                            <div class="col-md-9">
                                <div style="border-right: 5px solid #68456d;padding-right: 7px">
                                    <h5>تصميمات احترافية</h5>
                                </div>
                                نتميز بالتصميمات البسيطة والاحترافية واختيار الألوان العصرية التي تعبر عن هوية
                                مشروعك الذي
                                تعلن عنه.
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12 feature" style="margin-top: 3rem;">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="card-img-top img-width article-thumnail" data-wow-duration="1.5s"
                                    data-wow-delay=".5s" src="{{ asset('front_end/uploads/features/thumbnails/157158391847869.png')}}">
                            </div>
                            <div class="col-md-9">
                                <div style="border-right: 5px solid #68456d;padding-right: 7px">
                                    <h5>تعدد اللغات</h5>
                                </div>
                                التطبيقات يمكنها ان تكون بلغه واحدة او متعددة اللغات حسب طلب العميل وما يناسبه.

                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 feature" style="margin-top: 3rem;">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="card-img-top img-width article-thumnail" data-wow-duration="1.5s"
                                    data-wow-delay=".5s" src="{{ asset('front_end/uploads/features/thumbnails/157217599171646.png')}}">
                            </div>
                            <div class="col-md-9">
                                <div style="border-right: 5px solid #68456d;padding-right: 7px">
                                    <h5>تطبيقات على منصات مختلفة</h5>
                                </div>
                                نقدم برمجة تطبيقات الجوال على مختلف المنصات سواء كانت برمجة تطبيقات الاندرويد أو ios
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-md-4">
                <div class="d-flex img-feature justify-conten-center align-item-center">
                    <img src="{{ asset('front_end/v2/imgs/feature-image.png')}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="row">
                    <div class="col-md-12 feature" style="margin-top: 3rem;">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="card-img-top img-width article-thumnail" data-wow-duration="1.5s"
                                    data-wow-delay=".5s" src="{{ asset('front_end/uploads/features/thumbnails/157158418299724.png')}}">
                            </div>
                            <div class="col-md-9">
                                <div style="border-right: 5px solid #68456d;padding-right: 7px">
                                    <h5>دعم فني متكامل</h5>
                                </div>
                                تقدم وينجز خدمات الدعم الفنى على مدار الساعة على أكمل وجه من دون توقف.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 feature" style="margin-top: 3rem;">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="card-img-top img-width article-thumnail" data-wow-duration="1.5s"
                                    data-wow-delay=".5s" src="{{ asset('front_end/uploads/features/thumbnails/157158414518843.png')}}">
                            </div>
                            <div class="col-md-9">
                                <div style="border-right: 5px solid #68456d;padding-right: 7px">
                                    <h5>تصميم متوافق</h5>
                                </div>
                                نقوم بإنشاء تطبيقات للجوال متوافقة مع جميع أجهزة الهواتف الذكية بمختلف اصدارتها.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 feature" style="margin-top: 3rem;">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="card-img-top img-width article-thumnail" data-wow-duration="1.5s"
                                    data-wow-delay=".5s" src="{{ asset('front_end/uploads/features/thumbnails/157217957830821.png')}}">
                            </div>
                            <div class="col-md-9">
                                <div style="border-right: 5px solid #68456d;padding-right: 7px">
                                    <h5>ربط تطبيق الجوال بالموقع الإلكتروني</h5>
                                </div>
                                امكانية ربط تطبيق الجوال الذي نقدمه بموقعك الالكتروني او بالبرمجيات الخاصة التي
                                تستخدمها.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 feature" style="margin-top: 3rem;">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="card-img-top img-width article-thumnail" data-wow-duration="1.5s"
                                    data-wow-delay=".5s" src="{{ asset('front_end/uploads/features/thumbnails/157217418750919.html')}}">
                            </div>
                            <div class="col-md-9">
                                <div style="border-right: 5px solid #68456d;padding-right: 7px">
                                    <h5>رفع التطبيقات</h5>
                                </div>
                                نقدم رفع للتطبيقات على المتاجر الالكترونية الخاصة بها سواء كان Google play او Apple
                                Store.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


@elseif($service->id == 3)
<section style="margin-bottom: 5pc" class="header-side">
    <div class="container" style="margin-bottom: 6px">
        <div class="row">
            <div class="col-lg-5 col-sm-12" style="margin-bottom: 17px">
                <img class="header-image wow bounceInDown img-responsive" data-wow-duration="1.5s"
                    data-wow-delay=".5s" src="{{ asset('front_end/uploads/services/thumbnails/155559833496444.png')}}">
            </div>
            <div class="col-lg-7">
                <div class="col-md-12  wow bounceInDown" style="border-right: 5px solid #ffba08;">
                    <h1 class="head-text">البرامج المحاسبية و الإدارية</h1>
                </div>
                <div class="col-md-12  wow bounceInDown">
                    <p class="article-info">تصميم وبرمجة تطبيقات الإدارية و المحاسبية لتكون مناسبة لاحتياجات مجالك
                        المستثمر فيه و تنظيم التعاملات المحاسبية و المنظومة الادارية التى تعد عصب اى استثمار مربح.
                    </p>
                </div>
                <div class="col-md-12 btn-header  wow bounceInDown text-center">
                    <a href="#contact_form" class="btn btn-primary ">طلب الخدمة</a>
                </div>
            </div>
        </div>

    </div>
</section>

<h2 class="what ">البرامج المحاسبية و الإدارية</h2>
<div class="head-line"></div>
<section class="our-workk">
    <div class="container">
        <p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="line-height: 107%;"
                arial",sans-serif;mso-ascii-theme-font:minor-bidi;mso-hansi-theme-font:=""
                minor-bidi;mso-bidi-theme-font:minor-bidi"="">تصميم وبرمجة
                تطبيقات الإدارية و المحاسبية لتكون مناسبة لاحتياجات مجالك المستثمر
                فيه و تنظيم التعاملات المحاسبية و المنظومة الادارية التى تعد عصب اى استثمار
                مربح.</span><span dir="LTR" style="line-height: 107%;"
                arial",sans-serif;mso-ascii-theme-font:minor-bidi;mso-hansi-theme-font:minor-bidi;=""
                mso-bidi-theme-font:minor-bidi"="">
                <o:p></o:p>
            </span></p>
        <p class="MsoNormal" dir="RTL">

        </p>
        <p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="line-height: 107%;"
                arial",sans-serif;mso-ascii-theme-font:minor-bidi;mso-hansi-theme-font:=""
                minor-bidi;mso-bidi-theme-font:minor-bidi"="">ومن ابرز برامجنا</span><a
                href=""
                target="_blank"> برنامج البدر للمبيعات</a><span lang="AR-SA" style="line-height: 107%;"
                arial",sans-serif;mso-ascii-theme-font:minor-bidi;mso-hansi-theme-font:=""
                minor-bidi;mso-bidi-theme-font:minor-bidi"=""> </span></p>
        <p class="MsoNormal" dir="RTL"><span dir="LTR" style="line-height: 107%;"></span></p>
        <h3 style="margin-top: 20px;">برنامج بدر للمبيعات اليومية</h3>
        <div>
            <p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="line-height: 107%;"
                    arial",sans-serif;mso-ascii-theme-font:minor-bidi;mso-hansi-theme-font:=""
                    minor-bidi;mso-bidi-theme-font:minor-bidi"="">برنامج متخصص فى ادارة عمليات البيع
                    اليومية و نقاط البيع و ادارة المخزون</span><span dir="LTR" style="line-height: 107%;"
                    arial",sans-serif;mso-ascii-theme-font:minor-bidi;=""
                    mso-hansi-theme-font:minor-bidi;mso-bidi-theme-font:minor-bidi"="">
                    <o:p></o:p>
                </span></p>

            <p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="line-height: 107%;"
                    arial",sans-serif;mso-ascii-theme-font:minor-bidi;mso-hansi-theme-font:=""
                    minor-bidi;mso-bidi-theme-font:minor-bidi"="">يتميز البرنامج بسهولة الاسخدام و
                    المرونة فى التحكم من اى مكان من خلال النسخة الاونلاين او من خلال العمل على
                    سيرفرات محلية .</span><span dir="LTR" style="line-height: 107%;"
                    arial",sans-serif;mso-ascii-theme-font:minor-bidi;mso-hansi-theme-font:=""
                    minor-bidi;mso-bidi-theme-font:minor-bidi"="">
                    <o:p></o:p>
                </span></p>

            <p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="line-height: 107%;"
                    arial",sans-serif;mso-ascii-theme-font:minor-bidi;mso-hansi-theme-font:=""
                    minor-bidi;mso-bidi-theme-font:minor-bidi"="">يدعم </span><a
                    href="" target="_blank"
                    style="outline: none;">برنامج البدر للمبيعات</a> استخدام الباركود و تعدد المخازن
                و تعدد المستخدمين و الصلاحيات.</p>
            <p class="MsoNormal" dir="RTL"><span lang="AR-SA" style="line-height: 107%;"
                    arial",sans-serif;mso-ascii-theme-font:minor-bidi;mso-hansi-theme-font:=""
                    minor-bidi;mso-bidi-theme-font:minor-bidi"="">
                    <o:p> </o:p>
                </span></p>
            <p class="MsoNormal" dir="RTL"><br></p>
        </div>
        <p class="MsoNormal" dir="RTL"><span dir="LTR" style="line-height: 107%;">
                <o:p></o:p>
            </span></p>

    </div>
</section>

@elseif($service->id == 4)

<section style="margin-bottom: 5pc" class="header-side">
    <div class="container" style="margin-bottom: 6px">
        <div class="row">
            <div class="col-lg-5" style="margin-bottom: 17px">
                <img class="header-image wow bounceInDown img-responsive" data-wow-duration="1.5s"
                    data-wow-delay=".5s" src="{{ asset('front_end/v2/imgs/web-hosting.png')}}">
            </div>
            <div class="col-lg-7">
                <div class="col-md-12  wow bounceInDown" style="border-right: 5px solid #ffba08;">
                    <h1 class="head-text">استضافة المواقع</h1>
                </div>
                <div class="col-md-12  wow bounceInDown">
                    <p class="article-info">مع خدمة استضافة المواقع من وينجز يمكنك استضافة موقعك الالكتروني على أفضل
                        السيرفرات العالمية بأسعار مناسبة جدا وفي المتناول . تتضمن عروضنا أيضا شراء النطاقات Domains
                        الخاصة بموقعك ، كما</p>
                </div>
                <div class="col-md-12 btn-header  wow bounceInDown text-center">
                    <a href="#contact_form" class="btn btn-primary ">طلب الخدمة</a>
                </div>
            </div>
        </div>

    </div>
</section>

<h2 class="what ">استضافة المواقع</h2>
<div class="head-line"></div>
<section class="our-workk">
    <div class="container">
        <p>مع خدمة استضافة المواقع من وينجز يمكنك استضافة موقعك الالكتروني على أفضل السيرفرات العالمية بأسعار مناسبة
            جدا وفي المتناول .</p>
        <p>تتضمن عروضنا أيضا شراء النطاقات Domains الخاصة بموقعك ، كما يمكنك من خلالها الحصول على ايميلات رسمية
            للعمل Business Emails مثل info@my-website.com للتواصل الرسمي مع الأشخاص والشركات والبنوك وهكذا
            .<br>لدينا عروض متنوعة تناسب كل الاحتياجات .</p>
        <h2 style="text-align: center; ">خطط الاستضافة من وينجز</h2>
        <p><br></p>

        <style>
            .price-panel {
                background-color: #f9f9f9;
                margin-bottom: 15px;
                text-align: center;
                box-shadow: 0 1px 11px rgba(0, 0, 0, 0.12);
                border-radius: 4px;
                transition: all 0.3s ease-in;
            }
        </style>
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default price-panel">
                        <div class="panel-heading p-2" style="background-color:#b87333;">
                            <h4 class="text-center">
                                الخطة النحاسية</h4>
                        </div>
                        <div class="panel-body text-center">
                            <p class="lead">
                                <strong>120 ر.س / سنوي</strong></p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>دومين مجاني .com</li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>500 ميجا بايت مساحة</li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>3 جيجا بايت معدل نقل
                                بيانات</li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>بريد الكتروني غير محدود
                            </li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>قواعد البيانات غير محدودة
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default price-panel">
                        <div class="panel-heading p-2" style="background-color:#CD7F32;">
                            <h4 class="text-center">
                                الخطة البرونزية</h4>
                        </div>
                        <div class="panel-body text-center">
                            <p class="lead">
                                <strong>160 ر.س / سنوي</strong></p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>دومين مجاني .com</li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>1 جيجا مساحة</li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>5 جيجا بايت معدل نقل
                                بيانات</li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>بريد الكتروني غير
                                محدود<br></li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>قواعد البيانات غير
                                محدودة<br></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default price-panel">
                        <div class="panel-heading p-2" style="background-color:#C0C0C0;">
                            <h4 class="text-center">
                                الخطة الفضية</h4>
                        </div>
                        <div class="panel-body text-center">
                            <p class="lead">
                                <strong>220 ر.س / سنوي</strong></p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>دومين مجاني .com</li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>2 جيجا مساحة</li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>5 جيجا بايت معدل نقل
                                بيانات</li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>بريد الكتروني غير
                                محدود<br></li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>قواعد البيانات غير
                                محدودة<br></li>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="col-md-4">
                    <div class="panel panel-default price-panel">
                        <div class="panel-heading p-2" style="background-color:#FFD700;">
                            <h4 class="text-center">
                                الخطة الذهبية</h4>
                        </div>
                        <div class="panel-body text-center">
                            <p class="lead">
                                <strong>280 ر.س / سنوي</strong></p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>دومين مجاني .com</li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>3 جيجا مساحة</li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>30 جيجا بايت معدل نقل
                                بيانات</li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>بريد الكتروني غير
                                محدود<br></li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>قواعد البيانات غير
                                محدودة<br></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default price-panel">
                        <div class="panel-heading p-2" style="background-color:#b9f2ff;">
                            <h4 class="text-center">
                                الخطة الماسية</h4>
                        </div>
                        <div class="panel-body text-center">
                            <p class="lead">
                                <strong>430 ر.س / سنوي</strong></p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>دومين مجاني .com</li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>5 جيجا مساحة</li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>50 جيجا بايت معدل نقل
                                بيانات</li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>بريد الكتروني غير
                                محدود<br></li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>قواعد البيانات غير
                                محدودة<br></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default price-panel">
                        <div class="panel-heading p-2" style="background-color:#e5e4e2;">
                            <h4 class="text-center">
                                الخطة البلاتينية</h4>
                        </div>
                        <div class="panel-body text-center">
                            <p class="lead">
                                <strong>700 ر.س / سنوي</strong></p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>دومين مجاني .com</li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>10 جيجا مساحة</li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>100 جيجا بايت معدل نقل
                                بيانات</li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>بريد الكتروني غير
                                محدود<br></li>
                            <li class="list-group-item"><i class="icon-ok text-danger"></i>قواعد البيانات غير
                                محدودة<br></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@elseif($service->id == 5)
<section style="margin-bottom: 5pc" class="header-side">
    <div class="container" style="margin-bottom: 6px">
        <div class="row">
            <div class="col-lg-5"  style="margin-top: 70px">
                <img class="header-image img-fluid wow bounceInDown img-responsive" data-wow-duration="1.5s" data-wow-delay=".5s" src="{{ asset('front_end/v2/imgs/marketing.png')}}">
            </div>
            <div class="col-lg-7">
                <div class="col-md-12  wow bounceInDown" style="border-right: 5px solid #ffba08;">
                    <h1 class="head-text">التسويق الالكتروني</h1>
                </div>
                <div class="col-md-12  wow bounceInDown">
                    <p class="article-info">تقدم وينجز خدمة التسويق الإلكتروني من خلال منصات التواصل الإجتماعي والتي تستخدم من قبل الملايين لضمان الوصول لأكبر عدد ممكن من العملاء المستهدفين في أقل وقت وبأقل تكلفة ممكنة<br></p>
                </div>
                <div class="col-md-12 btn-header  wow bounceInDown text-center">
                    <a href="#contact_form" class="btn btn-primary ">طلب الخدمة</a>
                </div>
            </div>
        </div>

    </div>
</section>


    <h2 class="what "> مميزات الخدمة</h2>
    <div class="head-line"></div>
    <section id="we-offer">
        <div class="container">

                        
             <div class="row">
                <div class="col-md-6 feature" style="margin-top: 2rem;">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="card-img-top article-thumnail" style="width: 168px;"  data-wow-duration="1.5s" data-wow-delay=".5s" src="{{ asset('front_end/uploads/features/thumbnails/157217438294612.html')}}">
                        </div>
                        <div class="col-md-7" style="    padding-top:2rem;">
                            <div style="border-right: 5px solid rgb(58, 173, 230);padding-right: 7px">
                                <h5>دراسة السوق</h5>
                            </div>
                            نقوم بعمل دراسة خاصة على يد فريق متخصص للسوق المستهدف وتقسيم الشرائح المستهدفة عن طريق الأبحاث التسويقية قبل البدء في تنفيذ مشروعك للوصول إلى أفضل النتائج.
                        </div>
                    </div>
                </div>

            
            
                 <div class="col-md-6 feature" style="margin-top: 3rem;">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="card-img-top article-thumnail" style="width: 168px;"  data-wow-duration="1.5s" data-wow-delay=".5s" src="{{ asset('front_end/uploads/features/thumbnails/157217441147431.html')}}">
                        </div>
                        <div class="col-md-7" style="    padding-top:2rem;">
                            <div style="border-right: 5px solid rgb(58, 173, 230);padding-right: 7px">
                                <h5>دراسة المشروع</h5>
                            </div>
                            نقوم بعمل دراسة خاصة لمشروعك وعمل خطة التسويق الالكتروني اللازمة لما يتناسب مع مشروعك بعد دراسة السوق والمشروع وتحديد الأهداف المراد تحقيقها.
                        </div>
                    </div>
                </div>

                        </div>
                <div class="clearfix"></div>
                            
            
                            <div class="row">
                                        <div class="col-md-6 feature" style="margin-top: 3rem;">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="card-img-top article-thumnail" style="width: 168px;"  data-wow-duration="1.5s" data-wow-delay=".5s" src="{{ asset('front_end/uploads/features/thumbnails/157217445498648.html')}}">
                        </div>
                        <div class="col-md-7" style="    padding-top:2rem;">
                            <div style="border-right: 5px solid rgb(58, 173, 230);padding-right: 7px">
                                <h5>اختيار منصة التسويق المناسبة</h5>
                            </div>
                            نختار القناة التسويقية الأفضل لتسويق مشروعك ان كان موقع الكتروني بتهيئته وعمل حملات اعلانيه له أو من خلال صفحات التواصل الاجتماعي ويتم التنسيق مع قسم تصميم المواقع لاختيار الشكل المناسب للموقع وتهيئته للتسويق.
                        </div>
                    </div>
                </div>

            
            
                                        <div class="col-md-6 feature" style="margin-top: 3rem;">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="card-img-top article-thumnail" style="width: 168px;"  data-wow-duration="1.5s" data-wow-delay=".5s" src="{{ asset('front_end/uploads/features/thumbnails/157217448871176.png')}}">
                        </div>
                        <div class="col-md-7" style="    padding-top:2rem;">
                            <div style="border-right: 5px solid rgb(58, 173, 230);padding-right: 7px">
                                <h5>الاستهداف والمنافسين</h5>
                            </div>
                            نقوم باستهداف أفضل الكلمات المفتاحية المناسبة لموقعك لتحقيق أهدافك التسويقية بعد دراسة وتحليل نقاط القوة والضعف في السوق المستهدف.
                        </div>
                    </div>
                </div>

                        </div>
                <div class="clearfix"></div>
                            
            
                            <div class="row">
                                        <div class="col-md-6 feature" style="margin-top: 3rem;">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="card-img-top article-thumnail" style="width: 168px;"  data-wow-duration="1.5s" data-wow-delay=".5s" src="{{ asset('front_end/uploads/features/thumbnails/157217454134383.html')}}">
                        </div>
                        <div class="col-md-7" style="    padding-top:2rem;">
                            <div style="border-right: 5px solid rgb(58, 173, 230);padding-right: 7px">
                                <h5>الميزانية والنتائج المتوقعة</h5>
                            </div>
                            تحديد الميزانية التقريبية لنجاح المشروع خلال الاشهر الاولى من تنفيذ الحملة التسويقية وتحديد النتائج المتوقعة.
                        </div>
                    </div>
                </div>

            
            
                                        <div class="col-md-6 feature" style="margin-top: 3rem;">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="card-img-top article-thumnail" style="width: 168px;"  data-wow-duration="1.5s" data-wow-delay=".5s" src="{{ asset('front_end/uploads/features/thumbnails/157158343680201.png')}}">
                        </div>
                        <div class="col-md-7" style="    padding-top:2rem;">
                            <div style="border-right: 5px solid rgb(58, 173, 230);padding-right: 7px">
                                <h5>إنشاء حملات إعلانية</h5>
                            </div>
                            نعمل على إنشاء الحملات الإعلانية على موقعك أو على منصات التواصل الاجتماعي للوصول إلى الفئة المستهدفة لمشروعك لتحقيق الأرباح.
                        </div>
                    </div>
                </div>

                        </div>
                <div class="clearfix"></div>
                            
            
                            <div class="row">
                                        <div class="col-md-6 feature" style="margin-top: 3rem;">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="card-img-top article-thumnail" style="width: 168px;"  data-wow-duration="1.5s" data-wow-delay=".5s" src="{{ asset('front_end/uploads/features/thumbnails/157158340520759.png')}}">
                        </div>
                        <div class="col-md-7" style="    padding-top:2rem;">
                            <div style="border-right: 5px solid rgb(58, 173, 230);padding-right: 7px">
                                <h5>متابعة تقارير الحملة</h5>
                            </div>
                            كتابة التقارير المناسبة حسب الميزانية المتاحة لديك وإرسال التقارير لمتابعة الحملات والإطمئنان على نجاحها.
                        </div>
                    </div>
                </div>

            
            
                                        <div class="col-md-6 feature" style="margin-top: 3rem;">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="card-img-top article-thumnail" style="width: 168px;"  data-wow-duration="1.5s" data-wow-delay=".5s" src="{{ asset('front_end/uploads/features/thumbnails/157158312684053.png')}}">
                        </div>
                        <div class="col-md-7" style="    padding-top:2rem;">
                            <div style="border-right: 5px solid rgb(58, 173, 230);padding-right: 7px">
                                <h5>التطوير المستمر</h5>
                            </div>
                            بعد الاطلاع على التقارير ومتابعة أداء الحملات التسويقية نعمل على التطوير المستمر بشكل دائم لوصول مشروعك الى الأهداف المراد تحقيقها.
                        </div>
                    </div>
                </div>

                        </div>
                <div class="clearfix"></div>
                            
            
        </div>
    </section>

@elseif($service->id == 6)
<section style="margin-bottom: 5pc" class="header-side">
    <div class="container" style="margin-bottom: 6px">
        <div class="row">
            <div class="col-lg-6 col-sm-12" style="margin-bottom: 17px">
                <img class="header-image wow bounceInDown img-responsive" data-wow-duration="1.5s"
                    data-wow-delay=".5s" src="{{ asset('front_end/uploads/services/thumbnails/155592661037355.png')}}">
            </div>
            <div class="col-lg-6">
                <div class="col-md-12  wow bounceInDown" style="border-right: 5px solid #ffba08;">
                    <h1 class="head-text" style="font-size: 2.1rem;">تدريب وينجز</h1>
                </div>
                <div class="col-md-12  wow bounceInDown">
                    <p class="article-info">تقدم وينجز خدمة التدريب للمبرمجين حديثي التخرج والطلاب لتأهيل المتدربين
                        لسوق العمل عن طريق تنفيذ مشاريع حقيقية في مجال تطوير المواقع الالكترونية وتطبيقات
                        الموبايل<br></p>
                </div>
                <div class="col-md-12  wow bounceInDown text-center" style="margin-top: 7pc; margin-bottom: 10%">
                    <a href="#contact_form" class="btn btn-primary ">طلب الخدمة</a>
                </div>
            </div>
        </div>

    </div>
</section>
@endif

@include('Front.layouts.form')


@include('Front.layouts.footer')