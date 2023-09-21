<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UniversitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nama = "Universitas Negeri Semarang";
        $alamat = "Jalan Sekaran Gunungpati Semarang";
        $website = "https://www.unnes.ac.id/";
        $kontak = "humas@mail.unnes.ac.id";
        $instagram = "unnes_semarang";
        $twitter = "unneskonservasi";

        $data = [
            'nama' => $nama,
            'alamat' => $alamat,
            'website' => $website,
            'kontak' => $kontak,
            'instagram' => $instagram,
            'twitter' => $twitter
        ];
        
        return view('universitas', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
