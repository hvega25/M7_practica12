<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class clientesControlador extends Controller
{
    public function  clientes(){
        return view('admin.clientes') -> with(['text' => 'Clientes']);
    }
}
