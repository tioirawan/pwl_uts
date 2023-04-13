<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MatkulController extends Controller
{
    public function index()
    {
        $data=Matkul::all();
        return View('matkul',['matkul' => $data]);
        
    }
}
