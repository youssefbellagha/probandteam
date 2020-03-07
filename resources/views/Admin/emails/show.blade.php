@extends('dashboard.home')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($email->name) ? $email->name : 'Email' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('emails.email.destroy', $email->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('emails.email.index') }}" class="btn btn-primary" title="Show All Email">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                 

                    <button type="submit" class="btn btn-danger" title="Delete Email" onclick="return confirm(&quot;Click Ok to delete Email.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Email</dt>
            <dd>{{ $email->email }}</dd>
            <dt>Name</dt>
            <dd>{{ $email->name }}</dd>
            
            <dt>Phone</dt>
            <dd>{{ $email->phone }}</dd>
            <dt>Service</dt>
            <dd>{{ optional($email->service)->name }}</dd>

            <dt>Message</dt>
            <dd>{{ $email->message }}</dd>

        </dl>

    </div>
</div>

@endsection