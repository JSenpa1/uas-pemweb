<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pendaftaran;

class AdminPageController extends Controller
{
    public function menu()
    {
        return view("admin.adminPageMenu");
    }

    public function pendaftaran()
    {
        $pendaftarans = Pendaftaran::all();
        return view("admin.adminPagePendaftaran")->with('pendaftarans', $pendaftarans);
    }
}
