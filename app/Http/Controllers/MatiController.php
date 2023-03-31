<?php

namespace App\Http\Controllers;

use App\Models\Mati;
use Illuminate\Http\Request;

class MatiController extends Controller
{
    public function index5()
    {
        $data = Mati::all();
        return view('mati', compact('data'));
    }

    public function tambahmati()
    {
        return view('tambahmati');
    }

    public function insertmati(Request $request)
    {
        // dd($request->all());
        Mati::create($request->all());
        return redirect()->route('mati')->with('success', 'Berhasil Inputkan');
    }

    public function tampilmati($id)
    {
        $data = Mati::find($id);
        // dd($data);
        return view('editmati', compact('data'));
    }

    public function updatemati(Request $request, $id)
    {
        $data = Mati::find($id);
        $data->update($request->all());
        return redirect()->route('mati')->with('success', 'Berhasil Update');
    }

    public function deletemati($id)
    {
        $data = Mati::find($id);
        $data->delete();
        return redirect()->route('mati')->with('success', 'Berhasil Hapus');
    }
}
