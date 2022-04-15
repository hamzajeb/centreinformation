<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UtilisateurController extends Controller
{
    public function index()
    {
        return view('home');
    }
    // public function __construct()

    // {
    //     $this->middleware('auth');
    //     // $this->middleware('role:Etudiant');
    // }
 
}
