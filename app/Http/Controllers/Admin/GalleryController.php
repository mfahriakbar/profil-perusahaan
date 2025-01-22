<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->paginate(10);
        return view('admin.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        // Validate request
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'boolean'
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/gallery'), $filename);
            $validated['image'] = $filename;
        }

        // Set is_active default value if not provided
        $validated['is_active'] = $request->has('is_active') ? true : false;

        // Create gallery
        Gallery::create($validated);

        return redirect()
            ->route('admin.gallery.index')
            ->with('success', 'Galeri berhasil ditambahkan');
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        // Validate request
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'boolean'
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($gallery->image) {
                $oldImagePath = public_path('uploads/gallery/' . $gallery->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload new image
            $image = $request->file('image');
            $filename = time() . '_' . Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/gallery'), $filename);
            $validated['image'] = $filename;
        }

        // Aktif Atau Tidak Aktif
        $validated['is_active'] = $request->has('is_active') ? true : false;

        // Update gallery
        $gallery->update($validated);

        return redirect()
            ->route('admin.gallery.index')
            ->with('success', 'Galeri berhasil diperbarui');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        // Hapus file gambar
        if ($gallery->image) {
            $imagePath = public_path('uploads/gallery/' . $gallery->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Hapus catatan galeri
        $gallery->delete();

        return redirect()
            ->route('admin.gallery.index')
            ->with('success', 'Galeri berhasil dihapus');
    }
}
