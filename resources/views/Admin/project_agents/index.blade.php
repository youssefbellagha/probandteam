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

    <section class="content-header">

            <h1>Projects Agents</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Projects Agents</li>
            </ol>
        </section>

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Project Agents</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('project_agents.project_agent.create') }}" class="btn btn-success" title="Create New Project Agent">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($projectAgents) == 0)
            <div class="panel-body text-center">
                <h4>No Project Agents Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Projet</th>
                            <th>Agent</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($projectAgents as $projectAgent)
                        <tr>
                            <td>{{ optional($projectAgent->projet)->name }}</td>
                            <td>{{ optional($projectAgent->agent)->formattedName() }}</td>

                            <td>

                                <form method="POST" action="{!! route('project_agents.project_agent.destroy', $projectAgent->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('project_agents.project_agent.show', $projectAgent->id ) }}" class="btn btn-info" title="Show Project Agent">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('project_agents.project_agent.edit', $projectAgent->id ) }}" class="btn btn-primary" title="Edit Project Agent">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Project Agent" onclick="return confirm(&quot;Click Ok to delete Project Agent.&quot;)">
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
            {!! $projectAgents->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection