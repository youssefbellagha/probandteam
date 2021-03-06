@extends('dashboard.home')

@section('content')

    <div class="content">

        <section class="content-header">

            <h1>Agents</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                <li><a href="{{ route('agents.index') }}"> agents</a></li>
                <li class="active">Add</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">Add</h3>
                </div><!-- end of box header -->

                <div class="box-body">


                    <form action="{{ route('agents.store') }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        <div class="form-group">
                            <label>Country</label>
                            <select name="countrie_id" id="countrie_id" class="form-control">
                                <option value="">Country</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}" {{ old('countrie_id') == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>City</label>
                            <select name="citie_id" id="citie_id" class="form-control">
                                <option value="">City</option>
                                @foreach ($citie as $city)
                                    <option value="{{ $city->id }}" {{ old('citie_id') == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Photo</label>
                            <input type="file" name="image" class="form-control image">
                        </div>

                        <div class="form-group">
                            <img src="{{ asset('uploads/product_images/default.png') }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                        </div>

                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}">
                        </div>


                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}">
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="{{ old('address') }}">
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
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
                            <label>Github</label>
                            <input type="text" name="github" class="form-control" value="{{ old('github') }}">
                        </div>

                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" name="twitter" class="form-control" value="{{ old('twitter') }}">
                        </div>

                        <div class="form-group">
                            <label>Ginder</label>
                            <div class="form-check ">
                                <div class="col md-6">
                                <input class="iradio_minimal-blue " type="radio" name="gender"  value="Male" checked>
                                <label class="form-check-label" for="gender">
                                  Male
                                </label>
                            </div>
                                <input class="iradio_minimal-blue" type="radio" name="gender"  value="Female">
                                <label class="form-check-label" for="gender">
                                  Female 
                                </label>
                                
                              </div>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                        </div>


                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Confirmation Password</label>
                            <input type="password" name="password_confirmation" class="form-control">
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



@section('js')
  <script>
    
      $(document).ready(function() {

$('#countrie_id').change(function(){
    $id = $(this).val()
        $('#citie_id').empty(); 
        $citie = {!! json_encode($citie->toArray()) !!}
            
            $.each($citie, function(key, element) {
                if(element.countrie_id == $id){
                  $('#citie_id').append("<option value='" + element.id + "'>" + element.name + "</option>");  
                }
                
            });
    });


      });
  </script>

  @endsection
