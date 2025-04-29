<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('furniture_set_id')->nullable(); // Menandai produk sebagai FurnitureSet atau bukan
            $table->integer('minimal_stok_for_furniture_set')->nullable(); 
        });
    }
    
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('furniture_set_id');
            $table->dropColumn('minimal_stok_for_furniture_set');
        });
    }    
};
