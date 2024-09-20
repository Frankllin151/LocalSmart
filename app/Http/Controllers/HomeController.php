<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
public function PainelAdmin()
{
    $user = Auth::user();// Obtém o usuário autenticado

    // Verifica se o usuário é admin
    if ($user && $user->is_admin) {
        return redirect()->route('admin.dashboard'); // Redireciona para a rota admin se for admin
    }

    return view('dashboard'); // Retorna a view do dashboard se não for admin
}
}