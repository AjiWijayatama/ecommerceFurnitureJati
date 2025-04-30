<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'deskripsi', 'kategori', 'harga',
        'ukuran', 'stok', 'discount', 'furniture_set_id', 'minimal_stok_for_furniture_set'
    ];

    public function images()
    {
        return $this->hasMany(Image::class, 'product_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function furnitureSet()
    {
        return $this->belongsTo(FurnitureSet::class, 'furniture_set_id');
    }
}

