<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function profil()
    {
        return view('FrontEnd.profil');
    }

    public function dataGuru()
    {
        return view('FrontEnd.dataGuru');
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
