<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BomberosController extends Controller
{
    function index(){

        $users = HTTP::get('http://127.0.0.1:8000/api/usuario');
        $usuarios = $users->json();
   
        return view('/bomberos',compact('usuarios'));

    }
    function registrar(){

        return view('registrar');
    }
}
