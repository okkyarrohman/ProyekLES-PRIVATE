<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Session;



class MateriController extends Controller
{
    public function showMateriTentor()
    {
        return view('tentor.tentor-materi');
    }

    public function showMateriAdmin()
    {
        return view('admin.admin-materi');
    }

    public function showMateriAdminIPA()
    {
        return view ('admin.materi.materi-ipa');
    }

    public function addMateriAdminIPA(Request $request)
    {
        $materi = new Materi();
        $materi->bab = $request->bab;
        $materi->materi = $request->materi;
        $materi->deskripsi = $request->deskripsi;
                if($request->hasFile('foto'))
        {
            $materi->foto = $request->foto;
            $request->file('foto')->move(public_path('files/'), $request->file('foto')->getClientOriginalName());
            $materi->foto = $request->file('foto')->getClientOriginalName();
            $materi->save();
        }
        $materi->save();

        return back()->with('materi_added', 'Materi Berhasil Ditambah');
    }

        public function tampilMateriAdminIPA()
    {
        $materi = Materi::orderBy('id','DESC')->get();
        return view('admin.materi.materi-ipa', compact('materi'));  
    }

    public function DownloadFile($foto)
    {
    $file_path = public_path('files/'.$foto);
    return response()->download( $file_path);
    }
    

        public function tampilMateriAdminIPAUser()
    {
        $materi = Materi::orderBy('id','DESC')->get();
        return view('user.materi.user-materi-ipa', compact('materi'));  
    }
}
