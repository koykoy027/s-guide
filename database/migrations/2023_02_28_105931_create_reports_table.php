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
            $table->foreign('report_id')->references('id')->on('users')->onDelete('cascade');
            // personal information
            $table->string('fullname');
            $table->string('gender');
            $table->string('birthday');
            $table->string('contact_number');

            // school information
            $table->string('student_number');
            $table->string('school');
            $table->string('program');
            $table->string('year');
            $table->string('section');

            // case information
            $table->string('type_of_complain');
            $table->string('status');
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
        Schema::dropIfExists('reports');
    }
};