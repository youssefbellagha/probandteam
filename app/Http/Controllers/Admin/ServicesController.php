<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\service;
use Illuminate\Http\Request;
use Exception;

class ServicesController extends Controller
{

    /**
     * Display a listing of the services.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $services = service::paginate(25);

        return view('Admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new service.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('Admin.services.create');
    }

    /**
     * Store a new service in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            service::create($data);

            return redirect()->route('services.service.index')
                ->with('success_message', 'Service was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified service.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $service = service::findOrFail($id);

        return view('Admin.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified service.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $service = service::findOrFail($id);
        

        return view('Admin.services.edit', compact('service'));
    }

    /**
     * Update the specified service in the storage.
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
            
            $service = service::findOrFail($id);
            $service->update($data);

            return redirect()->route('services.service.index')
                ->with('success_message', 'Service was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified service from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $service = service::findOrFail($id);
            $service->delete();

            return redirect()->route('services.service.index')
                ->with('success_message', 'Service was successfully deleted.');
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
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
