<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentorController extends Controller
{
    public function ShowDatatentor()
    {
        return view('admin.admin-datatentor');
    }
}
