<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make(12345678)
        ]);
        $admin->attachRole('admin');
        //Pimpinan
        $pimpinan = User::create([
            'name' => 'Pimpinan',
            'email' => 'pimpinan@gmail.com',
            'password' => Hash::make(12345678)
        ]);
        $pimpinan->attachRole('pimpinan');
    }
}
