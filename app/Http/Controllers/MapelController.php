<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function ShowDatamapel()
    {
        return view('admin.datamapel');
    }
}
