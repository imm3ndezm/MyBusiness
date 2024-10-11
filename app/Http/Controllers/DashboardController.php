<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Verifica el rol del usuario
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role !== 'superadmin' && $user->role !== 'admin') {
                // Redirigir a la página de inicio o a donde desees
                return redirect('/')->with('error', 'No tienes acceso a esta página.');
            }
        }

        return view('admin.dashboard');  // Página para '/'
    }
}
