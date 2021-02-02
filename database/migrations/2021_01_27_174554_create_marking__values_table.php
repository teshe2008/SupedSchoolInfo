<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarkingValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marking__values', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('marking_point_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('teacher_id');
            $table->string('value');
            $table->date('date');
            $table->foreign('marking_point_id')->references('id')->on('marking_points');
            $table->foreign('student_id')->references('id')->on('users');
            $table->foreign('teacher_id')->references('id')->on('users');
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
        Schema::dropIfExists('marking__values');
    }
}
