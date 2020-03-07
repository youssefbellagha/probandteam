@extends('dashboard.home')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Project Agent' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('project_agents.project_agent.destroy', $projectAgent->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('project_agents.project_agent.index') }}" class="btn btn-primary" title="Show All Project Agent">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('project_agents.project_agent.create') }}" class="btn btn-success" title="Create New Project Agent">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('project_agents.project_agent.edit', $projectAgent->id ) }}" class="btn btn-primary" title="Edit Project Agent">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Project Agent" onclick="return confirm(&quot;Click Ok to delete Project Agent.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Projet</dt>
            <dd>{{ optional($projectAgent->projet)->id }}</dd>
            <dt>Agent</dt>
            <dd>{{ optional($projectAgent->agent)->image }}</dd>

        </dl>

    </div>
</div>

@endsection