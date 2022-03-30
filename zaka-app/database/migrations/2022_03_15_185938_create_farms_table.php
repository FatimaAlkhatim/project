<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('cro_id');


            $table->BigInteger('projct_id');
            $table->String('area');
            $table->String('location');
           
            $table->String('irrigate_type');
            
            $table->BigInteger('production_quantity');
            $table->BigInteger('store')->nullable();
            
            $table->foreign('client_id')
                            ->references('id')
                            ->on('clients')
                            ->onDelete("cascade");

                            $table->foreign('cro_id')
                            ->references('id')
                            ->on('cros')
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
        Schema::dropIfExists('farms');
    }
}
