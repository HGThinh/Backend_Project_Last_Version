<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'admin',
            'email' => 'admin@ehb.be',
            'email_verified_at' => now(),
            'is_admin' => 1,
            'password' => 'Password!321',
            'remember_token' => Str::random(10),
        ]);
    }
}
