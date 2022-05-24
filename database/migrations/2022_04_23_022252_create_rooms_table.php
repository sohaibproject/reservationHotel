<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('rooms', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('name');
           $table->string('price');
           $table->string('photo');
           $table->string('discription');
           $table->string('nbr_place');
          

           
           $table->foreignId('room_type_id');
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
        Schema::dropIfExists('rooms');
    }
}
