<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('admin.gallery.index');
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        // Logika untuk menyimpan data galeri
    }

    public function edit($id)
    {
        return view('admin.gallery.edit');
    }

    public function update(Request $request, $id)
    {
        // Logika untuk memperbarui data galeri
    }

    public function destroy($id)
    {
        // Logika untuk menghapus data galeri
    }
}
