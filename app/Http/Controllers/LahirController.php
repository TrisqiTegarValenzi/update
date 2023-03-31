<?php

namespace App\Http\Controllers;

use App\Models\Lahir;
use Illuminate\Http\Request;

class LahirController extends Controller
{
    public function index4()
    {
        $data = Lahir::all();
        return view('lahir', compact('data'));
    }

    public function tambahlahir()
    {
        return view('tambahlahir');
    }

    public function insertlahir(Request $request)
    {
        // dd($request->all());
        Lahir::create($request->all());
        return redirect()->route('lahir')->with('success', 'Berhasil Inputkan');
    }

    public function tampillahir($id)
    {
        $data = Lahir::find($id);
        // dd($data);
        return view('editlahir', compact('data'));
    }

    public function updatelahir(Request $request, $id)
    {
        $data = Lahir::find($id);
        $data->update($request->all());
        return redirect()->route('lahir')->with('success', 'Berhasil Update');
    }

    public function deletelahir($id)
    {
        $data = Lahir::find($id);
        $data->delete();
        return redirect()->route('lahir')->with('success', 'Berhasil Hapus');
    }
}
