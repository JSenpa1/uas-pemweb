<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Guru;

class PageController extends Controller
{
    public function profil()
    {
        return view('FrontEnd.profil');
    }

    public function dataGuru()
    {
        $gurus = Guru::all();
        return view('FrontEnd.dataGuru')->with('gurus', $gurus);
    }

    public function galeri()
    {
        return view('FrontEnd.galeri');
    }

    public function kontak()
    {
        return view('FrontEnd.kontak');
    }

    public function pendaftaran()
    {
        return view('FrontEnd.pendaftaran');
    }
}
