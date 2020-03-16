@extends('dashboard.home')

@section('content')

    <div class="content">

        <section class="content-header">

            <h1>Clients</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Clients</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                  <a href="{{ route('clients.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Create New</a>

                </div><!-- end of box header -->

                <div class="box-body">

                    @if ($clients->count() > 0)

                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Photo</th>
                                <th>name</th>
                                <th>comment</th>
                                <th>pride</th>
                        
                            </tr>
                            </thead>
                            
                            <tbody>
                            @foreach ($clients as $index=>$client)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td><img src="{{ asset($client->image)}}" style="border-radius: 50%;height:100px;width:100px;"  alt=""></td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->comment }}</td>
                                    <td>{{ $client->pride }}</td>
{{--                            
                                            <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>

                                            <form action="{{ route('clients.destroy', $client->id) }}" method="post" style="display: inline-block">
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
                            {{ $clients->appends(request()->query())->links() }}

                        </div>
                        
                    @else
                        
                        <h2>No clients</h2>
                        
                    @endif

                </div><!-- end of box body -->


            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection