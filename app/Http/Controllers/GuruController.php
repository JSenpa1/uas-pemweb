<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Guru;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gurus = Guru::all();
        return view("admin.adminPageGuru")->with('gurus', $gurus);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.form.GuruAddForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $guru = new Guru();
        $guru->nama = $request->nama;
        $guru->tempat_lahir = $request->tempat_lahir;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->pendidikan = $request->pendidikan;
        $guru->jabatan = $request->jabatan;
        $guru->nomor_telepon = $request->nomor_telepon;
        $foto = $request->file('foto');
        $fileName = $foto->getClientOriginalName();
        $foto->move(public_path('fotoGuru'), $fileName);
        $guru->foto = $fileName;
        $guru->save();
        return redirect('/guru');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $guru = Guru::find($id);
        return view('admin.form.GuruEditForm')->with('guru', $guru);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $guru = Guru::find($id);
        $guru->nama = $request->nama;
        $guru->tempat_lahir = $request->tempat_lahir;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->pendidikan = $request->pendidikan;
        $guru->jabatan = $request->jabatan;
        $guru->nomor_telepon = $request->nomor_telepon;
        $foto = $request->file('foto');
        $fileName = $foto->getClientOriginalName();
        $foto->move(public_path('fotoGuru'), $fileName);
        $guru->foto = $fileName;
        $guru->save();
        return redirect('/guru');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guru = Guru::find($id);
        $guru->delete();
        return redirect('/guru');
    }
}
