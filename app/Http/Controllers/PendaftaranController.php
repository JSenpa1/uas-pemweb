<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function create(Request $request)
    {
        $pendaftaran = new Pendaftaran();
        $pendaftaran->nama = $request->nama;
        $pendaftaran->alamat = $request->alamat;
        $pendaftaran->tanggal_lahir = $request->tanggal_lahir;
        $pendaftaran->tempat_lahir = $request->tempat_lahir;
        $pendaftaran->tujuan = $request->tujuan;
        $pendaftaran->nomor_telepon = $request->nomor_telepon;
        $pendaftaran->save();
        return redirect('/');
    }
}
