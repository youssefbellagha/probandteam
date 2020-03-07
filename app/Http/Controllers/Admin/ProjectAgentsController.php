<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agent;

use App\Models\Project as Projet;
use App\Models\project_agent;
use Illuminate\Http\Request;
use Exception;

class ProjectAgentsController extends Controller
{

    /**
     * Display a listing of the project agents.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $projectAgents = project_agent::with('projet','agent')->paginate(25);

        return view('Admin.project_agents.index', compact('projectAgents'));
    }

    /**
     * Show the form for creating a new project agent.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $projets = Projet::pluck('name','id')->all();
$agents = Agent::pluck('last_name','id')->all();
        
        return view('Admin.project_agents.create', compact('projets','agents'));
    }

    /**
     * Store a new project agent in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            project_agent::create($data);

            return redirect()->route('project_agents.project_agent.index')
                ->with('success_message', 'Project Agent was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified project agent.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $projectAgent = project_agent::with('projet','agent')->findOrFail($id);

        return view('Admin.project_agents.show', compact('projectAgent'));
    }

    /**
     * Show the form for editing the specified project agent.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $projectAgent = project_agent::findOrFail($id);
        $projets = Projet::pluck('name','id')->all();
$agents = Agent::pluck('last_name','id')->all();

        return view('Admin.project_agents.edit', compact('projectAgent','projets','agents'));
    }

    /**
     * Update the specified project agent in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $projectAgent = project_agent::findOrFail($id);
            $projectAgent->update($data);

            return redirect()->route('project_agents.project_agent.index')
                ->with('success_message', 'Project Agent was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified project agent from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $projectAgent = project_agent::findOrFail($id);
            $projectAgent->delete();

            return redirect()->route('project_agents.project_agent.index')
                ->with('success_message', 'Project Agent was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
                'projet_id' => 'nullable',
            'Agent_id' => 'numeric|min:0|max:4294967295|nullable', 
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
