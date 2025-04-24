<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->integer('grade')->nullable();
            $table->integer('term')->nullable();
            $table->integer('japanese')->nullable();
            $table->integer('math')->nullable();
            $table->integer('science')->nullable();
            $table->integer('social_studies')->nullable();
            $table->integer('music')->nullable();
            $table->integer('home_economics')->nullable();
            $table->integer('english')->nullable();
            $table->integer('art')->nullable();
            $table->integer('physical_education')->nullable();
            $table->timestamps();

            /*$table->foreign('student_id')->references('id')->on('students');*/
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
