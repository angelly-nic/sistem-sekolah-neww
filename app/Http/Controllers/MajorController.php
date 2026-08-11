<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "ini adalah halaman daftar siswa";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "ini adalah halaman tambah Guru";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         return "Menambah data siswa baru";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "ini adalah halaman detail Guru";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "ini adalah halaman edit siswa dengan ID: {$id}";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Mengubah data siswa dengan ID: {$id}";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       return "Menghapus data Guru dengan ID: {$id}";
    }
}
