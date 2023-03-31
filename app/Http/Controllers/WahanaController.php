<?php

namespace App\Http\Controllers;

use App\Models\Wahana;
use Illuminate\Http\Request;

class WahanaController extends Controller
{
    public function index7()
    {
        $data = Wahana::all();
        return view('wahana', compact('data'));
    }

    public function tambahwahana()
    {
        return view('tambahwahana');
    }

    public function insertwahana(Request $request)
    {
        // dd($request->all());
        Wahana::create($request->all());
        return redirect()->route('wahana')->with('success', 'Berhasil Inputkan');
    }

    public function tampilwahana($id)
    {
        $data = Wahana::find($id);
        // dd($data);
        return view('editwahana', compact('data'));
    }

    public function updatewahana(Request $request, $id)
    {
        $data = Wahana::find($id);
        $data->update($request->all());
        return redirect()->route('wahana')->with('success', 'Berhasil Update');
    }

    public function deletewahana($id)
    {
        $data = Wahana::find($id);
        $data->delete();
        return redirect()->route('wahana')->with('success', 'Berhasil Hapus');
    }
}
