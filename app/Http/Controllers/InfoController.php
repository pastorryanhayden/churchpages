<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfoController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('info', compact('user'));
    }
    public function update(Request $request)
    {
        // dd($request);
        // Validate the data
         $validatedData = $request->validate([
             'church_name' => 'required | string | min:4',
             'have_url' => 'boolean',
             'church_url' => 'string',
             'desired_url' => ' string',
             'service_times' => 'required',
             'address1' => 'required',
             'city' => 'required',
             'state' => 'required | max:4',
             'zip' => 'required | max:6',
             'phone' => 'required | max:11',
             'contact_email' => 'required | email'

         ]);
        // Save the data
        $user = Auth::user();
        $user->info->update($validatedData);
        // Return back or go to the next page
        if($user->info->done()){
            return redirect('/home');
        }else {
            return redirect('/info');
        }
        
    }
}
