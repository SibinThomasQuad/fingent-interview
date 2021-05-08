<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_marks', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('student');
            $table->foreign('student')->references('id')->on('students');
            $table->float('maths');
            $table->float('science');
            $table->float('history');
            $table->float('terms');
            $table->float('total');
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
        //
    }
}
