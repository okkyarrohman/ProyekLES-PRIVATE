<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Murid;

class MuridController extends Controller
{

    
    public function ShowDatamurid()
    {
        return view('admin.datamurid');
    }

    public function AddDatamurid(Request $request)
    {
        $murid = new Murid();
        $murid->name = $request->name;
        $murid->phone = $request->phone;
        $murid->sekolah = $request->sekolah;
        $murid->umur = $request->umur;
        $murid->save();
        return back()->with('murid_created','Data Murid Berhasil Ditambahkan');
    }

    public function TampilDatamurid()
    {
        $murids = Murid::orderBy('id','DESC')->get();
        return view('admin.datamurid', compact('murids'));
    }




    public function HapusDatamurid($id)
    {
        Murid::where('id',$id)->delete();
        return back()->with('murid_deleted','Data Murid Berhasil Dihapus');
        
    }

}
