<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
        public function index2()
        {
            $data = Pegawai::all();
            return view('pegawai', compact('data'));
        }

        public function tambahpegawai()
        {
            $kerja = Pekerjaan::all();
            return view('tambahpegawai', compact('kerja'));
        }

        public function insertpegawai(Request $request)
        {
            // dd($request->all());
            Pegawai::create($request->all());
            return redirect()->route('pegawai')->with('success', 'Berhasil Inputkan');
        }

        public function tampilpegawai($id)
        {
            $data = Pegawai::find($id);
            $ker = Pekerjaan::all();
            $kerja = Pegawai::all();

            return view('editpegawai', compact('data', 'ker', 'kerja'));
        }

        // public function tampilpegawai(Pegawai $id)
        // {
        //     $data = $id;

        //     // dd($data);
        //     return view('editpegawai', compact('data'));
        // }

        public function updatepegawai(Request $request, $id)
        {
            $data = Pegawai::find($id);
            $data->update($request->all());
            return redirect()->route('pegawai')->with('success', 'Berhasil Update');
        }

        public function deletepegawai($id)
        {
            $data = Pegawai::find($id);
            $data->delete();
            return redirect()->route('pegawai')->with('success', 'Berhasil Hapus');
        }
}
