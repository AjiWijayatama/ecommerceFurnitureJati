<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FurnitureSet extends Model
{
    protected $table = 'furniture_set';

    protected $fillable = ['name', 'deskripsi', 'harga'];

    public function products()
    {
        return $this->hasMany(Product::class, 'furniture_set_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'furniture_set_id');
    }
}
