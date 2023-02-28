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
        // User::truncate();

        // User::create([
        //     'school_id' => '1',
        //     'name' => 'Joshua Villanueva',
        //     'gender' => 'Male',
        //     'slug' => 'slugTest',
        //     'email' => 'villanuevajoshua27@gmail.com',
        //     'password' => Hash::make('P@$$Pa$$w0rd!'),
        // ]);
    }
}
