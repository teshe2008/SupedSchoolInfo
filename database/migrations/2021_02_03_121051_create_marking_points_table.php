<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarkingPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marking_points', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->unsignedBigInteger('marking_period_id');
            $table->integer('weights');
            $table->foreign('marking_period_id')->references('id')->on('marking_periods');
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
        Schema::dropIfExists('marking_points');
    }
}
