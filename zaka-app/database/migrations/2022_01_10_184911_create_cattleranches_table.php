<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCattleranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cattleranches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
           

            $table->String('cattleranch_type');
            $table->BigInteger('cattleranch_amount');
            $table->String('location');
           
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
        Schema::dropIfExists('cattleranches');
    }
}
