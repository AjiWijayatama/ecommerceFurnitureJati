<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FurnitureSet;

class FurnitureSetController extends Controller
{
    public function index()
    {
        $furnitureset = FurnitureSet::all();
        return view('admin.furnitureSet.index', compact('furnitureset'));
    }

    public function create()
    {
        return view('admin.furnitureSet.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric|min:0',
        ]);

        FurnitureSet::create($request->only(['name', 'deskripsi', 'harga']));

        return redirect()->route('furnitureset.index')->with('success', 'Furniture Set berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $furnitureSet = FurnitureSet::findOrFail($id);
        return view('admin.furnitureSet.show', compact('furnitureSet'));
    }

    public function edit(string $id)
    {
        $furnitureSet = FurnitureSet::findOrFail($id);
        return view('admin.furnitureSet.edit', compact('furnitureSet'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric|min:0',
        ]);

        $furnitureSet = FurnitureSet::findOrFail($id);
        $furnitureSet->update($request->only(['name', 'deskripsi', 'harga']));

        return redirect()->route('furnitureset.index')->with('success', 'Furniture Set berhasil diperbaharui.');
    }

    public function destroy(string $id)
    {
        $furnitureSet = FurnitureSet::findOrFail($id);
        $furnitureSet->delete();

        return redirect()->route('furnitureset.index')->with('success', 'Furniture Set berhasil dihapus.');
    }
}
