<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Report;
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
        // $school4 = School::create([
        //     'name' => 'Bagong Silang High School',
        //     'year_level' => 'High school',
        // ]);

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

        //create report
        $report1 = new Report([
            'fullname' => 'Francis Oliver Hiloma',
            'gender' => 'Male',
            'birthday' => '11/21/2001',
            'contact_number' => '09460070541',
            'school' => 'University of Caloocan City - Congressional Campus',
            'student_number' => '20190001',
            'program' => 'Bachelor of Science in Computer Science',
            'year' => '4',
            'section' => 'C',
            'type_of_complain' => 'Vandalism and littering',
            'status' => 'Minor offense',
            'place_of_incidence' => 'Outside Campus',
            'summary' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dolor magnam suscipit excepturi sequi, nihil eius. Molestias, harum nobis quod iure quisquam perspiciatis vero fugiat! Dicta iure rem nesciunt neque illum quisquam alias eligendi possimus modi ab eius sit cum hic, est voluptatum, odit obcaecati dolor non qui corporis? Distinctio.',
        ]);
        $report1->usersReport()->associate($user1);
        $report1->save();

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
