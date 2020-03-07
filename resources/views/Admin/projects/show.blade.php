@extends('dashboard.home')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($project->name) ? $project->name : 'Project' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('projects.project.destroy', $project->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('projects.project.index') }}" class="btn btn-primary" title="Show All Project">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('projects.project.create') }}" class="btn btn-success" title="Create New Project">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('projects.project.edit', $project->id ) }}" class="btn btn-primary" title="Edit Project">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Project" onclick="return confirm(&quot;Click Ok to delete Project.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
           
            <dt>Photo</dt>
            <dd> <img src="{{ url('/' . $project->photo) }}" style="border-radius: 50%;height:100px;width:100px;"> </dd>
             <dt>Name</dt>
            <dd>{{ $project->name }}</dd>
            <dt>Decreption</dt>
            <dd>{{ $project->decreption }}</dd>

        </dl>

    </div>
</div>

@endsection