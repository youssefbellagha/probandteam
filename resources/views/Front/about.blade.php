@include('Front.layouts.header')

@include('Front.layouts.navbar')

<section id="article-content" class="about-us-page">
    <div class="vertical-line">
        <h5 class="article-head text-white">عن وينجز</h5>
    </div>
    <div class="     wow slideInDown" data-wow-duration="2s">

        <div class="article-div mb-0">
            <img class="article-img" src="{{ asset('front_end/v2/imgs/logo-bg.png')}}">
            <p class="about-us-page-info  text-white">وينجز..
                مجموعة متعاونة من الشغوفين بالتكنولوجيا و الإبداع الذين يحبون مشاركة شغفهم مع بقية العالم. بدأنا في
                تطوير وتصميم المواقع و التطبيقات الإلكترونية منذ عام 2020 ، و في هذه الفترة الصغيرة ، قمنا بخدمة
                الكثير من الشركات في أكتر من دولة. نتميز بالخبرة مع الابداع و الدقة مع السرعة و مواكبة العصر<br />
                في انتظاركم لتنطلقوا معنا .</p>
        </div>
    </div>

</section>

@include('Front.layouts.footer')