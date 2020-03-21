@extends('dashboard.home')

@section('content')

    <div class="content">

        <section class="content-header">

            <h1>Clients</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                <li><a href="{{ route('clients.index') }}"> clients</a></li>
                <li class="active">Add</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">Add</h3>
                </div><!-- end of box header -->

                <div class="box-body">


                    <form action="{{ route('clients.store') }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        <div class="form-group">
                            <label> Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label>Photo</label>
                            <input type="file" name="image" class="form-control image">
                        </div>

                        <div class="form-group">
                            <img src="{{ asset('uploads/product_images/default.png') }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                        </div>

                     


                        <div class="form-group">
                            <label>comment</label>
                            <input type="text" name="comment" class="form-control" value="{{ old('comment') }}">
                        </div>

           

                        <div class="form-group">
                            <label>pride</label>
                            <div class="form-check ">
                                <div class="col md-6">
                                <input class="iradio_minimal-blue " type="radio" name="pride"  value="1" checked>
                                <label class="form-check-label" for="pride">
                                  Pride
                                </label>
                            </div>
                                <input class="iradio_minimal-blue" type="radio" name="pride"  value="0">
                                <label class="form-check-label" for="pride">
                                  Not pride 
                                </label>
                                
                              </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection

