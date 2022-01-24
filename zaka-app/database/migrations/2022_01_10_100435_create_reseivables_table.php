<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReseivablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseivables', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('national');
            $table->BigInteger('iphone');
            $table->String('location');
            $table->String('state');
            $table->String('local');
            $table->String('status');
            $table->String('reseivable_type');
            $table->String('image');
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
        Schema::dropIfExists('reseivables');
    }
}
