@extends('dashboard.home')

@section('content')

    <div class="content">

        <section class="content-header">

            <h1>Team</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Team</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                  <a href="{{ route('team.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Create New</a>

                </div><!-- end of box header -->

                <div class="box-body">

                    @if ($team->count() > 0)

                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Photo</th>
                                <th>name</th>
                                <th>position</th>
                                <th>social media </th>
                        
                            </tr>
                            </thead>
                            
                            <tbody>
                            @foreach ($team as $index=>$tea)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td><img src="{{ asset($tea->image)}}" style="border-radius: 50%;height:100px;width:100px;"  alt=""></td>
                                    <td>{{ $tea->name }}</td>
                                    <td>{{ $tea->position }}</td>
                                    <td> <a href="{{ URL($tea->facebook) }}"><i class="fa fa-facebook-square fa-6" aria-hidden="true" style="font-size:30px; color: #4267B2"></i></a>
                                        <a href="{{ URL($tea->instagram) }}"><i class="fa fa-instagram fa-6" aria-hidden="true" style="font-size:30px; color: #D5307F"></i></a>
                                        <a href="{{ URL($tea->github) }}"><i class="fa fa-github fa-6" aria-hidden="true" style="font-size:30px; color:#24292E"></i></a>
                                        <a href="{{ URL($tea->twitter) }}"><i class="fa fa-twitter fa-6" aria-hidden="true" style="font-size:30px"></i></a></td>
                                        <td>
{{--                            
                                            <a href="{{ route('team.edit', $tea->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>

                                            <form action="{{ route('team.destroy', $tea->id) }}" method="post" style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                            </form><!-- end of form --> --}}
                                      
                                    </td>
                                </tr>
                            
                            @endforeach
                            </tbody>

                        </table><!-- end of table -->
                        
                        <div class="container pagination-lg">
                            {{ $team->appends(request()->query())->links() }}

                        </div>
                        
                    @else
                        
                        <h2>No team</h2>
                        
                    @endif

                </div><!-- end of box body -->


            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection