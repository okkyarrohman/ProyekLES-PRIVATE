<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function showDataMapel()
    {
        return view('admin.datamapel');
    }

    public function createDataMapel(Request $request)
    {
        $mapel = new Mapel();
        $mapel->name_mapel = $request->name_mapel;
        $mapel->educational_level = $request->educational_level;
        $mapel->save();
        return back()->with('mapel_created', 'Data mapel berhasil ditambahkan');
    }

    public function getDataMapel()
    {
        $mapels = Mapel::orderBy('id', 'ASC')->get();
        return view('admin.datamapel', compact('mapels'));
    }

    public function deleteMapel($id)
    {
        Mapel::where('id', $id)->delete();
        return back()->with('mapel_deleted', 'Data mapel berhasil di hapus');
    }

    public function editMapel($id)
    {
        $mapels = Mapel::find($id);
        return view('admin.admin-datamapel', compact('mapels'));
    }

    public function updateMapel(Request $request)
    {
        $mapels = Mapel::find($request->id);
        $mapels->name_mapel = $request->name_mapel;
        $mapels->educational_level = $request->educational_level;
        $mapels->save();
        return back()->with('mapel_updated', 'Data mapel berhasil diperbarui');
    }
}
