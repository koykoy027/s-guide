<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\School;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create schools
        $school1 = School::create([
            'name' => 'University of Caloocan City - Congressional Campus',
            'year_level' => 'College',
        ]);

        $school2 = School::create([
            'name' => 'University of Caloocan City - Camarin Campus',
            'year_level' => 'College',
        ]);
        $school3 = School::create([
            'name' => 'University of Caloocan City - Main Campus',
            'year_level' => 'College',
        ]);

        // Create users
        $user1 = new User([
            'name' => 'Francis Oliver Light Hiloma',
            'gender' => 'Male',

            'email' => 'hilomafrancisoliver@gmail.com',
            'password' => bcrypt('Pa$$w0rd!')
        ]);
        $user1->schools()->associate($school1);
        $user1->save();

        $user2 = new User([
            'name' => 'Joshua Villanueva',
            'gender' => 'Male',

            'email' => 'villanuevajoshua27@gmail.com',
            'password' => bcrypt('Pa$$w0rd!')
        ]);
        $user2->schools()->associate($school2);
        $user2->save();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $this->call(ReportSeeder::class);
        $this->call(SchoolSeeder::class);
        $this->call(UserSeeder::class);
    }
}
