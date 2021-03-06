<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class HeroController extends Controller
{
     public function index()
    {
        $user = Auth::user();
        return view('hero', compact('user'));
    }
    public function update(Request $request, User $user)
    {
        // dd($request);
        // Validate the data
         $validatedData = $request->validate([
             'image' => 'nullable | url',
             'message' =>  'nullable | string',
             'title' => 'nullable | string',
             'giving_link' => 'nullable | url',
             'livestream_link' => 'nullable | url',

         ]);
        // Save the data
        $user->hero->update($validatedData);
        // Return back or go to the next page
        
        return response('success');
        
    }
}
