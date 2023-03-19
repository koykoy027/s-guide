<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_reports', function (Blueprint $table) {
            $table->id();
            $table->string('complainant');
            $table->string('name_of_complainant');
            // personal information
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('gender');
            $table->string('birthday');
            $table->string('contact_number');
            $table->string('email');

            // school information
            $table->string('student_number');
            $table->string('school');
            $table->string('program');
            $table->string('year');
            $table->string('section');

            // case information
            $table->string('type_of_complain');
            $table->string('place_of_incidence');
            $table->longText('summary');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('online_reports');
    }
};
