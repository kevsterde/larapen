<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name' => 'Kevin Revalde',
            'is_vertical' => true,
            'email' => 'kevin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('kevin'), // password encryption
            'bio' => 'This is Kevin Webster Revalde\'s bio.',
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Rhysin Villahermosa',
            'is_vertical' => true,
            'email' => 'rhysin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('rhysin'), // password encryption
            'bio' => 'I love coding so much.',
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}