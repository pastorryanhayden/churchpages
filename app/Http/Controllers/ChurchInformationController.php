<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChurchInformationController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $info = null;
        $info = $user->info();
        return view('info', compact('user', 'info'));
    }
}
