<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmeries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('local_id');

            $table->BigInteger('projct_id');
            $table->String('area');
            $table->String('location');
            $table->String('crope_type');
            $table->String('irrigate_type');
            
            $table->BigInteger('production_quantity');
            $table->timestamps();
            $table->foreign('client_id')
                            ->references('id')
                            ->on('clients')
                            ->onDelete("cascade");
 $table->foreign('state_id')
            ->references('id')
            ->on('states')
            ->onDelete("cascade");


            $table->foreign('local_id')
            ->references('id')
            ->on('locals')
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
        Schema::dropIfExists('farmeries');
    }
}
