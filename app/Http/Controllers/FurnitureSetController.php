<?php

namespace App\Http\Controllers;

use App\Models\FurnitureSet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FurnitureSetController extends Controller
{
    /**
     * Tampilkan daftar furniture set beserta relasi images dan products.
     */
    public function index()
    {
        $furniture_sets = FurnitureSet::with('images', 'products')->get();
        return view('admin.kelolafurnitureset.kelolafurnitureset', compact('furniture_sets'));
    }

    /**
     * Tampilkan form tambah furniture set.
     */
    public function create()
    {
        return view('admin.kelolafurnitureset.create');
    }

    /**
     * Simpan furniture set baru beserta gambar.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'      => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga'     => 'required|numeric|min:0',
            'images.*'  => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Create the furniture set
        $furnitureSet = FurnitureSet::create($data);

        // Handle uploaded images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('furniture_sets', 'public');
                $furnitureSet->images()->create(['link' => $path]);
            }
        }

        return redirect()
            ->route('furnitureset.index')
            ->with('success', 'Furniture Set berhasil ditambahkan.');
    }

    /**
     * Tampilkan detail satu furniture set beserta relasi images dan products.
     */
    public function show(FurnitureSet $furnitureset)
    {
        $furnitureset->load('images', 'products');
        return view('admin.kelolafurnitureset.show', compact('furnitureset'));
    }

    /**
     * Tampilkan form edit.
     */
    public function edit(FurnitureSet $furnitureset)
    {
        return view('admin.kelolafurnitureset.edit', compact('furnitureset'));
    }

    /**
     * Proses update data furniture set dan gambar.
     */
    public function update(Request $request, FurnitureSet $furnitureset)
    {
        $data = $request->validate([
            'name'      => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga'     => 'required|numeric|min:0',
            'images.*'  => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Update the furniture set
        $furnitureset->update($data);

        // If new images uploaded, delete old ones and save new
        if ($request->hasFile('images')) {
            // Delete old image files
            foreach ($furnitureset->images as $img) {
                Storage::disk('public')->delete($img->link);
            }
            // Delete old records
            $furnitureset->images()->delete();

            // Save new uploads
            foreach ($request->file('images') as $file) {
                $path = $file->store('furniture_sets', 'public');
                $furnitureset->images()->create(['link' => $path]);
            }
        }

        return redirect()
            ->route('furnitureset.index')
            ->with('success', 'Furniture Set berhasil diperbarui.');
    }

    /**
     * Hapus furniture set beserta relasi images.
     */
    public function destroy(FurnitureSet $furnitureset)
    {
        // Delete image files
        foreach ($furnitureset->images as $img) {
            Storage::disk('public')->delete($img->link);
        }
        // Delete image records
        $furnitureset->images()->delete();

        // Delete the furniture set
        $furnitureset->delete();

        return redirect()
            ->route('furnitureset.index')
            ->with('success', 'Furniture Set berhasil dihapus.');
    }
}
