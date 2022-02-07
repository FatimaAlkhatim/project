<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
           

            $table->String('image');
            $table->String('location');
            $table->String('metels_type');
           
            $table->BigInteger('production_quantity');
            $table->timestamps();
            $table->foreign('client_id')
            ->references('id')
            ->on('clients')
            ->onDelete("cascade");
            
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metels');
    }
}
