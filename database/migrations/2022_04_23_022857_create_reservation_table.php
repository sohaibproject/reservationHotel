<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('reservation', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->foreignId('room_id');
                $table->string('CheckIn_date');
                $table->string('CheckOut_date');
               
                $table->string('name');
                $table->string('email');
                $table->string('phone');
                $table->string('notes');
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
        Schema::dropIfExists('reservation');
    }
}
