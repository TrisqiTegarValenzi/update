<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    public function index()
    {
        $data = Pekerjaan::all();
        return view('pekerjaan', compact('data'));
    }

    public function tambahpekerjaan()
    {
        return view('tambahpekerjaan');
    }

    public function insertpekerjaan(Request $request)
    {
        // dd($request->all());
        Pekerjaan::create($request->all());
        return redirect()->route('pekerjaan')->with('success', 'Berhasil Inputkan');
    }

    public function tampilpekerjaan($id)
    {
        $data = Pekerjaan::find($id);
        // dd($data);
        return view('editpekerjaan', compact('data'));
    }

    public function updatepekerjaan(Request $request, $id)
    {
        $data = Pekerjaan::find($id);
        $data->update($request->all());
        return redirect()->route('pekerjaan')->with('success', 'Berhasil Update');
    }

    public function deletepekerjaan($id)
    {
        $data = Pekerjaan::find($id);
        $data->delete();
        return redirect()->route('pekerjaan')->with('success', 'Berhasil Hapus');
    }
}
