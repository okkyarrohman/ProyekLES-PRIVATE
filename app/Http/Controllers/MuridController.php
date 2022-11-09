<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuridController extends Controller
{
    public function show()
    {
        return view('admin/datamurid');
    }
}
