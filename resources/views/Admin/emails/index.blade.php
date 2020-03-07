@extends('dashboard.home')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Emails</h4>
            </div>

           

        </div>
        
        @if(count($emails) == 0)
            <div class="panel-body text-center">
                <h4>No Emails Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Service</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($emails as $email)
                        <tr>
                            <td>{{ $email->email }}</td>
                            <td>{{ $email->name }}</td>
                            <td>{{ $email->phone }}</td>
                            <td>{{ optional($email->service)->name }}</td>

                            <td>

                                <form method="POST" action="{!! route('emails.email.destroy', $email->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('emails.email.show', $email->id ) }}" class="btn btn-info" title="Show Email">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                      

                                        <button type="submit" class="btn btn-danger" title="Delete Email" onclick="return confirm(&quot;Click Ok to delete Email.&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $emails->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection