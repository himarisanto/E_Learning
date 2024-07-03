<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Hapus semua data user yang ada jika diperlukan
        // User::truncate();

        // Buat user admin
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
        ]);

        // Buat user guru
        User::create([
            'name' => 'Guru User',
            'email' => 'guru@example.com',
            'password' => Hash::make('guru123'),
        ]);

        User::factory()->count(5)->create();
    }
}
