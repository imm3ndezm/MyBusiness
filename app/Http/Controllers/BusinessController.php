<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {

        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role === 'entrepreneur') {
                return redirect('/')->with('error', 'You cannot enter this page.');
            }
        }
        return view('business.createbusiness');
    }

    public function store(Request $request) 
    {
        
    }
}
