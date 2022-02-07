<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelecttsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selectts', function (Blueprint $table) {
            $table->id();
            $table->String('amount');
            $table->unsignedBigInteger('reseivable_id');

            $table->foreign('reseivable_id')
            ->references('id')
            ->on('reseivables')
            ->onDelete("cascade");

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
        Schema::dropIfExists('selectts');
    }
}
