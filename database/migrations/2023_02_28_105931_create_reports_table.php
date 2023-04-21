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
        Schema::enableForeignKeyConstraints();
        Schema::create('reports', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('report_id');
            $table->string('school_code');
            $table->foreign('report_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('gender');
            $table->string('birthday');
            $table->string('contact_number');
            // $table->string('email');

            $table->string('student_number');
            $table->string('program');
            $table->string('year');
            $table->string('section');
            $table->string('type_of_complain');
            $table->string('status');
            $table->string('place_of_incidence');
            $table->longText('summary');
            $table->string('offender_lastname')->nullable();
            $table->string('offender_firstname')->nullable();
            $table->string('offender_program')->nullable();
            $table->string('offender_year')->nullable();
            $table->string('offender_section')->nullable();
            $table->string('offender_gender')->nullable();

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
        Schema::dropIfExists('reports');
    }
};
