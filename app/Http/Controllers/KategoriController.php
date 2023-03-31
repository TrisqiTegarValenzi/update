<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index8()
    {
        $data = Kategori::all();
        return view('kategori', compact('data'));
    }

    public function tambahkat()
    {
        return view('tambahkat');
    }

    public function insertkat(Request $request)
    {
        // dd($request->all());
        Kategori::create($request->all());
        return redirect()->route('kategori')->with('success', 'Berhasil Inputkan');
    }

    public function tampilkat($id)
    {
        $data = Kategori::find($id);
        // dd($data);
        return view('editkat', compact('data'));
    }

    public function updatekat(Request $request, $id)
    {
        $data = Kategori::find($id);
        $data->update($request->all());
        return redirect()->route('kategori')->with('success', 'Berhasil Update');
    }

    public function deletekat($id)
    {
        $data = Kategori::find($id);
        $data->delete();
        return redirect()->route('kategori')->with('success', 'Berhasil Hapus');
    }
}
