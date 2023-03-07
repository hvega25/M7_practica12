<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContabilidadControlador extends Controller
{
    public function  contabilidad(){
        return view('admin.contabilidad') -> with(['text' => 'contabilidad']);
    }
}
