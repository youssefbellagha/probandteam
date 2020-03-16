@include('Front.layouts.header')

@include('Front.layouts.navbar')


    <section class="works ">
        <div class="vertical-line">
            <h2 class="our-work "> أعمالنا</h2>
        </div>
        <section id="our-work">
            <div class="container">
                <div class="row adjust wow bounceInLeft" data-wow-duration="2s" data-wow-delay=".5s">
                    
                   @foreach ($projects as $project)
                   <div class="col-md-4">
                    <a
                        href="{{ route('single_projects', $project->id ) }}">
                        <div class="card card-shadow" style="width: 18rem;">
                            <img src="{{$project->photo}}" class="work-thumnail" height="350"
                                alt="">
                            <div class="card-body">
                            <p class="card-text">{{$project->name}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                   @endforeach
                </div>
                <div class="clearfix"></div>
                  
                    {{ $projects->appends(request()->query())->links() }}

            </div>
            <br><br>
        </section>

    </section>


@include('Front.layouts.footer')