<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 12);
            $table->char('code', 6);
            $table->string('departure', 30);
            $table->string('destination', 20);
            $table->dateTime('departure_time', 0);
            $table->dateTime('arrival_time', 0);
            $table->char('carriages', 2);
            $table->boolean('in_time');
            $table->boolean('cancelled');
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
        Schema::dropIfExists('trains');
    }
}
