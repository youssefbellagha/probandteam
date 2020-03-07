@extends('dashboard.home')

@section('content')

    <div class="content">

        <section class="content-header">

            <h1>Agent</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">agents</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                  <a href="{{ route('agents.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Create New</a>

                </div><!-- end of box header -->

                <div class="box-body">

                    @if ($agents->count() > 0)

                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Photo</th>
                                <th>Full name</th>
                                <th>Email</th>
                                <th>Phone number</th>
                                <th>Country</th>
                                <th>City</th>
                                <th>Address</th>
                                <th>Gender</th>
                                <th>social media </th>
                                <th></th>
                            </tr>
                            </thead>
                            
                            <tbody>
                            @foreach ($agents as $index=>$agent)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td><img src="{{ asset($agent->image)}}" style="border-radius: 50%;height:100px;width:100px;"  alt=""></td>
                                    <td>{{ $agent->formattedName() }}</td>
                                    <td>{{ $agent->email }}</td>
                                    <td>{{ $agent->phone }}</td>
                                    <td>{{ $agent->Countrie->name }}</td>
                                    <td>{{ $agent->Citie->name }}</td>
                                    <td>{{ $agent->address }}</td>
                                    <td>{{ $agent->gender }}</td>
                                    <td> <a href="{{ URL($agent->facebook) }}"><i class="fa fa-facebook-square fa-6" aria-hidden="true" style="font-size:30px; color: #4267B2"></i></a>
                                    <a href="{{ URL($agent->instagram) }}"><i class="fa fa-instagram fa-6" aria-hidden="true" style="font-size:30px; color: #D5307F"></i></a>
                                    <a href="{{ URL($agent->youtube) }}"><i class="fa fa-youtube fa-6" aria-hidden="true" style="font-size:30px; color:#FF0000"></i></a>
                                    <a href="{{ URL($agent->twitter) }}"><i class="fa fa-twitter fa-6" aria-hidden="true" style="font-size:30px"></i></a></td>
                                    <td>
                                            <a href="{{ route('agents.edit', $agent->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>

                                            <form action="{{ route('agents.destroy', $agent->id) }}" method="post" style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                            </form><!-- end of form -->
                                      
                                    </td>
                                </tr>
                            
                            @endforeach
                            </tbody>

                        </table><!-- end of table -->
                        
                        <div class="container pagination-lg">
                            {{ $agents->appends(request()->query())->links() }}

                        </div>
                        
                    @else
                        
                        <h2>No Agents</h2>
                        
                    @endif

                </div><!-- end of box body -->


            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection