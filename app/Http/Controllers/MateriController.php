<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;

class MateriController extends Controller
{
    public function show()
    {
        return view ('tentor.tentor-materi');
    }
}
