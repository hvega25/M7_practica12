<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class facturacionControlador extends Controller
{
    public function  facturacion(){
        return view('admin.facturacion') -> with(['text' => 'facturacion']);
    }
}
