<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Business;

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
        $validatedData = $request->validate([
            'photo' => 'nullable|mimes:jpg,jpeg,png,svg|max:10240', // Máx. 2MB por ejemplo
            'banner' => 'nullable|mimes:jpg,jpeg,png,svg|max:10240',
            'name' => 'required|string|max:255',
            'nickname' => 'required|string|unique:business,nickname|max:50',
            'owner_id' => [
                'required',
                'string',
                'unique:business,owner_id',
                'regex:/^\d{8}-\d$/',
            ],
            'email' => 'required|email|unique:business,email|max:255',
            'description' => 'required|string|max:1000',
            'location' => 'required|string|max:255',
            'phone' => [
                'required',
                'string',
                'regex:/^\d{4}-\d{4}$/',
            ],
            'url' => 'nullable|url|max:255',
            'tags' => 'nullable|string',
            'status' => 'required|in:Active,Pending,Inactive,Suspended,Deleted,Archived',
        ]);

        $business = new Business();
        $business->fill($validatedData); // Rellenar los campos con los datos validados

        // Guardar la 'photo' si se ha enviado
        if ($request->hasFile('photo')) {
            $photoName = Str::uuid() . '.' . $request->file('photo')->getClientOriginalExtension();
            $photoPath = public_path('business/photos');
            $request->file('photo')->move($photoPath, $photoName);
            $business->photo = 'business/photos/' . $photoName;
        }

        // Guardar el 'banner' si se ha enviado
        if ($request->hasFile('banner')) {
            $bannerName = Str::uuid() . '.' . $request->file('banner')->getClientOriginalExtension();
            $bannerPath = public_path('business/banners');
            $request->file('banner')->move($bannerPath, $bannerName);
            $business->banner = 'business/banners/' . $bannerName;
        }

        // Guardar el nuevo negocio en la base de datos
        $business->save();

        return response()->json([
            'message' => 'El negocio se ha creado exitosamente.',
            'business' => $business
        ], 201);
    }
}
