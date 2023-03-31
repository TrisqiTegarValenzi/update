<?php

namespace App\Http\Controllers;

use App\Models\Sakit;
use Illuminate\Http\Request;

class SakitController extends Controller
{
    public function index6()
    {
        $data = Sakit::all();
        return view('sakit', compact('data'));
    }

    public function tambahsakit()
    {
        return view('tambahsakit');
    }

    public function insertsakit(Request $request)
    {
        // dd($request->all());
        Sakit::create($request->all());
        return redirect()->route('sakit')->with('success', 'Berhasil Inputkan');
    }

    public function tampilsakit($id)
    {
        $data = Sakit::find($id);
        // dd($data);
        return view('editsakit', compact('data'));
    }

    public function updatesakit(Request $request, $id)
    {
        $data = Sakit::find($id);
        $data->update($request->all());
        return redirect()->route('sakit')->with('success', 'Berhasil Update');
    }

    public function deletesakit($id)
    {
        $data = Sakit::find($id);
        $data->delete();
        return redirect()->route('sakit')->with('success', 'Berhasil Hapus');
    }
}
