<?php

namespace App\Http\Controllers;

use App\Models\FurnitureSet;
use Illuminate\Http\Request;

class UserFurnitureSetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $furniture_sets = FurnitureSet::with('images', 'products')->get();
        return view('user.furnitureSet', compact('furniture_sets'));
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
        $set = FurnitureSet::with('images', 'products')->findOrFail($id);

        // Kirim ke view user/detailprodukfurnitureset.blade.php
        return view('user.detailprodukfurnitureset', compact('set'));
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
