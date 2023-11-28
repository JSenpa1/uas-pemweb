<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kontak;

class KontakController extends Controller
{
    public function addPertanyaan(Request $request)
    {
        $kontak = new Kontak();
        $kontak->email = $request->email;
        $kontak->judul = $request->judul;
        $kontak->pertanyaan = $request->pertanyaan;
        $kontak->save();
        return redirect('/');
    }

    public function showPertanyaan()
    {
        $kontaks = Kontak::all();
        return view('admin.adminPageKontak')->with('kontaks', $kontaks);
    }
}
