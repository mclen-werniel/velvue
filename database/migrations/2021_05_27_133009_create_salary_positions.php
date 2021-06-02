<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalaryPositions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_positions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('salary_id')
                ->nullable()
                ->references('id')
                ->on('salaries');
            $table->foreignId('position_id')
                ->nullable()
                ->references('id')
                ->on('positions');
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
        Schema::dropIfExists('salary_positions');
    }
}
