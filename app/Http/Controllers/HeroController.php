<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HeroController extends Controller
{
     public function index()
    {
        $user = Auth::user();
        return view('hero', compact('user'));
    }
    public function update(Request $request)
    {
        // dd($request);
        // Validate the data
         $validatedData = $request->validate([
             'image' => 'file',
             'message' => 'required | string',
             'title' => 'required | string',
             'giving_link' => 'url',
             'livestream_link' => 'url',
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
