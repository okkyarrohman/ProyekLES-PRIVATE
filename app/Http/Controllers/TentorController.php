<?php

namespace App\Http\Controllers;

use App\Models\Tentor;
use App\Models\User;
use Illuminate\Http\Request;

class TentorController extends Controller
{
    public function showDataTentor()
    {
        return view('admin.admin-datatentor');
    }

    public function createDataTentor(Request $request)
    {
        $tentor = new Tentor();
        $tentor->name = $request->name;
        $tentor->email = $request->email;
        $tentor->password = bcrypt('password');
        $tentor->mobile = $request->mobile;
        $tentor->gender = $request->gender;
        $tentor->birthday = $request->birthday;
        $tentor->address = $request->address;
        $tentor->save();
        return back()->with('tentor_created', 'Data tentor berhasil ditambahkan');
    }

    public function getDataTentor()
    {
        $tentors = Tentor::orderBy('id', 'ASC')->get();
        return view('admin.admin-datatentor', compact('tentors'));
    }

    public function deleteTentor($id)
    {
        Tentor::where('id', $id)->delete();
        return back()->with('tentor_deleted', 'Data tentor berhasil di hapus');
    }

    public function editTentor($id)
    {
        $tentors = Tentor::find($id);
        return view('admin.admin-datatentor', compact('tentors'));
    }

    public function updateTentor(Request $request)
    {
        $tentors = Tentor::find($request->id);
        $tentors->name = $request->name;
        $tentors->email = $request->email;
        $tentors->password =$request->password;
        $tentors->mobile = $request->mobile;
        $tentors->gender = $request->gender;
        $tentors->birthday = $request->birthday;
        $tentors->address = $request->address;
        $tentors->save();
        return back()->with('tentor_updated', 'Data tentor berhasil diperbarui');
    }
}
