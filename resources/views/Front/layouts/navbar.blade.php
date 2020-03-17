<nav class="navbar fixed-top navbar-expand-lg navbar-dark navbar-bg" style="direction: rtl">
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
                <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                    style="background-color: #291238; margin-top: 19px;">
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
                <a target="_blank" href="#" class="btn btn-success  my-sm-0"><i class="fab fa-whatsapp whats"></i>
                    <span style="direction: ltr">واتساب</span>
                </a>
            </li>
        </ul>

    </div>
</nav>