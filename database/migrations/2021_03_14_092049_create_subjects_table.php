<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedBigInteger('participant_id');
            $table->foreign('participant_id')
                ->references('id')
                ->on('participants')
                ->onDelete('cascade');
            $table->unsignedBigInteger('classe_id');
            $table->foreign('classe_id')
                ->references('id')
                ->on('classes')
                ->onDelete('cascade');
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
        Schema::dropIfExists('subjects');
    }
}
