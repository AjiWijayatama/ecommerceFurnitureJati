<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use App\Models\FurnitureSet;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.product', compact('products'));
    }

    public function create()
    {
        $furnitureSets = FurnitureSet::all(); 
        return view('admin.product.create', compact('furnitureSets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products',
            'deskripsi' => 'string',
            'kategori' => 'required|in:minimalis,ukiran',
            'harga' => 'required|numeric|min:0',
            'ukuran' => 'required|string|max:255',
            'stok' => 'required|integer|min:0',
            'discount' => 'nullable|integer|min:0|max:100',
            'furniture_set_id' => 'nullable|exists:furniture_set,id',
            'minimal_stok_for_furniture_set' => 'nullable|integer|min:0',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:5120'
        ]);

        $product = Product::create($request->only([
            'name', 'slug', 'deskripsi', 'kategori', 'harga', 'ukuran',
            'stok', 'discount', 'furniture_set_id', 'minimal_stok_for_furniture_set'
        ]));

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('images', 'public');
                $product->images()->create(['link' => $path]);
            }
        }

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit(Product $product)
    {
        $furnitureSets = FurnitureSet::all();
        return view('admin.product.edit', compact('product', 'furnitureSets'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => "required|string|max:255|unique:products,slug,{$product->id}",
            'deskripsi' => 'string',
            'kategori' => 'required|in:minimalis,ukiran',
            'ukuran' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'discount' => 'nullable|integer|min:0|max:100',
            'furniture_set_id' => 'nullable|exists:furniture_set,id',
            'minimal_stok_for_furniture_set' => 'nullable|integer|min:0',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:5120'
        ]);

        $product->update($request->only([
            'name', 'slug', 'deskripsi', 'kategori', 'harga', 'ukuran',
            'stok', 'discount', 'furniture_set_id', 'minimal_stok_for_furniture_set'
        ]));

        if ($request->hasFile('images')) {
            $product->images()->delete();
            foreach ($request->file('images') as $image) {
                $path = $image->store('images', 'public');
                $product->images()->create(['link' => $path]);
            }
        }

        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbaharui.');
    }

    public function destroy(Product $product)
    {
        $product->images()->delete();
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus.');
    }

    public function show(Product $product)
    {
        return view('admin.product.detail', compact('product'));
    }
}