<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Exception;
use App\Models\service;

class ProjectsController extends Controller
{

    /**
     * Display a listing of the projects.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $projects = Project::paginate(25);

        return view('Admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new project.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $services = service::all();
        
        return view('Admin.projects.create', compact('services'));
    }

    /**
     * Store a new project in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        try {
            
            $data = $this->getData($request);
            
            Project::create($data);

            return redirect()->route('projects.project.index')
                ->with('success_message', 'Project was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified project.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $services = service::all();
        $project = Project::findOrFail($id);

        return view('Admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified project.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $services = service::all();
        return view('Admin.projects.edit', compact('project','services'));
    }

    /**
     * Update the specified project in the storage.
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
            
            $project = Project::findOrFail($id);
            $project->update($data);

            return redirect()->route('projects.project.index')
                ->with('success_message', 'Project was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified project from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $project = Project::findOrFail($id);
            $project->delete();

            return redirect()->route('projects.project.index')
                ->with('success_message', 'Project was successfully deleted.');
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
                'name' => 'string|min:1|max:255|nullable',
            'photo' => ['file','nullable'],
            'decreption' => 'string|min:1|nullable', 
            'service_id' => 'numeric|min:0|max:4294967295|nullable', 
            
        ];
        
        $data = $request->validate($rules);
        if ($request->has('custom_delete_photo')) {
            $data['photo'] = null;
        }


        if($request->hasfile('photo')){

            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();

            $filename = time().'.'.$ext;

            $file->move('upload/project_photos/',$filename);

        $data['photo'] = 'upload/project_photos/'.$filename;

    }
      

        return $data;
    }
  
    /**
     * Moves the attached file to the server.
     *
     * @param Symfony\Component\HttpFoundation\File\UploadedFile $file
     *
     * @return string
     */
    protected function moveFile($file)
    {
        if (!$file->isValid()) {
            return '';
        }
        

        $path = config('codegenerator.files_upload_path', 'uploads');

        return substr($saved, 7);
    }
}
