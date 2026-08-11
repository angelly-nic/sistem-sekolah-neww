<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
     public function index()
    {
        return "ini adalah halaman daftar Guru";
    }

    public function show()
    {
        return "ini adalah halaman detail Guru";
    }

    public function create()
    {
        return "ini adalah halaman tambah Guru";
    }
    
    public function edit(string $id)
    {
        return "ini adalah halaman edit Guru dengan ID: {$id}";
    }

    public function store()
    {
        return "Menambah data Guru baru";
    }

    public function update(string $id)
    {
        return "Mengubah data Guru dengan ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data Guru dengan ID: {$id}";
    }
}
