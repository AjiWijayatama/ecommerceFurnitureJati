<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Tambahkan admin default jika belum ada
        $adminEmail = 'admin1@gmail.com';
        $admin = DB::table('users')->where('email', $adminEmail)->first();

        if (!$admin) {
            DB::table('users')->insert([
                'name' => 'Admin',
                'email' => $adminEmail,
                'password' => Hash::make('admin123'), // Ini akan cocok dengan login kamu
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('users')->where('email', 'admin1@gmail.com')->delete();
    }
};
