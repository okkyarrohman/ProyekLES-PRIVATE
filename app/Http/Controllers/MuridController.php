<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Murid;
use App\Models\User;

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

        public function TentorTampilDatamurid()
    {
        $murids = Murid::orderBy('id','DESC')->get();
        return view('tentor.datamurid', compact('murids'));
    }

    
    public function AddUserMurid(Request $request)
    {
        $murid = new User();
        $murid->name = $request->name;
        $murid->email = $request->email;
        $murid->password = $request->password;
        $murid->save();
        return back()->with('murid_ditambah', 'murid telah ditambahkan');
    }

    public function tampilUserMurid()
    {
        $murids = User::orderBy('id','DESC')->get();
        return view('admin.datamurid', compact('murids'));
    }

    public function HapusUserMurid($id)
    {
    User::where('id',$id)->delete();
        return back()->with('murid_deleted','Data Murid Berhasil Dihapus');
    }

    public function EditUserMurid($id)
    {
        $murids = User::find($id);
        return view('admin.datamurid', compact('murids')); 
    }

    public function UpdateUserMurid(Request $request)
    {
        $murids = User::find($request->id);
        $murids->name = $request->name;
        $murids->email = $request->email;
        $murids->password = bcrypt('password');
        $murids->save();
        return back()->with('murid_updated', 'Murid Diupdate');
    }
    
}

