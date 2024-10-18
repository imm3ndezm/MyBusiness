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
        $request->validate([
            'business_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240', // Máximo 10MB
            'business_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240', // Máximo 10MB
            'business_name' => ['required', 'string', 'max:255'],
            'business_nickname' => ['nullable', 'string', 'max:255', 'unique:business,nickname'],
            'business_description' => ['nullable', 'string', 'max:500'],
            'business_email' => ['required', 'email', 'max:255', 'unique:business,email'],
            'business_phone' => ['nullable', 'regex:/^\+?[0-9]{7,15}$/'], // Soporta formato internacional (+123456789)
            'business_url' => ['nullable', 'url'],
            'address' => ['required', 'string', 'max:255'],
        ]);
    }
}
