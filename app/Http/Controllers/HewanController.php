<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use Illuminate\Http\Request;

class HewanController extends Controller
{
    public function index3()
    {
        $data = Hewan::all();
        return view('hewan', compact('data'));
    }

    public function tambahhewan()
    {
        return view('tambahhewan');
    }

    public function inserthewan(Request $request)
    {
        $data = Hewan::create($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('fotohewan/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('hewan')->with('success', 'Berhasil Inputkan');
    }

    public function tampilhewan($id)
    {
        $data = Hewan::find($id);
        // dd($data);
        return view('edithewan', compact('data'));
    }

    public function updatehewan(Request $request, $gambar)
    {
        $data = Hewan::find($gambar);
        $data->update($request->all());
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('fotohewan/', $filename);
            $data->gambar = $filename;
        }
        $data->save();
        return redirect()->route('hewan')->with('success', 'Berhasil Update');
    }

    public function deletehewan($id)
    {
        $data = Hewan::find($id);
        $data->delete();
        return redirect()->route('hewan')->with('success', 'Berhasil Hapus');
    }
}
