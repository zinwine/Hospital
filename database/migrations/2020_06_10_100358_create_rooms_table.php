<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('room_number');
            $table->integer('bed_number');
            $table->enum('status', [0, 1]);
            $table->integer('user_id');
            $table->string('price');
            $table->string('area');
            $table->string('photo');
            $table->enum('room_type', ['vip', 'normal']);
            $table->string('description');
            $table->string('facilities');
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
