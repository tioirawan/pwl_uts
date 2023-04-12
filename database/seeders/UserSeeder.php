<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Tio Misbaqul Irawan',
            'email' => '2141720003@student.polinema.ac.id',
            'password' => Hash::make('12345678'),
        ]);

        // TODO: ubah data satria
        User::create([
            'name' => 'Satria ...',
            'email' => 'satria@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
