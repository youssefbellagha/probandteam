@extends('dashboard.home')

@section('content')

    <div class="content">

        <section class="content-header">

            <h1>Our Team</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                <li><a href="{{ route('team.index') }}"> team</a></li>
                <li class="active">Add</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">Add</h3>
                </div><!-- end of box header -->

                <div class="box-body">


                    <form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">

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
                            <label>position</label>
                            <input type="text" name="position" class="form-control" value="{{ old('position') }}">
                        </div>

           

                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" name="facebook" class="form-control" value="{{ old('facebook') }}">
                        </div>

                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" name="instagram" class="form-control" value="{{ old('instagram') }}">
                        </div>

                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" name="twitter" class="form-control" value="{{ old('twitter') }}">
                        </div>

                        <div class="form-group">
                            <label>Github</label>
                            <input type="text" name="github" class="form-control" value="{{ old('github') }}">
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

