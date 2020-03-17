<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Email;
use App\Models\Service;
use Illuminate\Http\Request;
use Exception;

class EmailsController extends Controller
{

    /**
     * Display a listing of the emails.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $emails = Email::with('service')->orderBy('id','desc')->paginate(25);

        return view('Admin.emails.index', compact('emails'));
    }




    /**
     * Display the specified email.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $email = Email::with('service')->findOrFail($id);

        return view('Admin.emails.show', compact('email'));
    }


  

    /**
     * Remove the specified email from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $email = Email::findOrFail($id);
            $email->delete();

            return redirect()->route('emails.email.index')
                ->with('success_message', 'Email was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    
  

}
