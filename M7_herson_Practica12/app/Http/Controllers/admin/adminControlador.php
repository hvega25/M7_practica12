<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminControlador extends Controller
{
    public function  articulos(){
        return view('admin.mensajeAdmin') -> with(['text' => 'Bienvenido']);
    }
}
