<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat beberapa pengguna acak
        User::factory(1)->create();

        // Membuat pengguna administrator
        $admin = User::first();
        $admin->name = 'Admin';
        $admin->username = 'admin';
        $admin->email = 'admin@gmail.com';
        $admin->id_role = 1;
        $admin->save();

        // Membuat pengguna karyawan
    }
}
