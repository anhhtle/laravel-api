<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mmas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fighter_one')->nullable(false);
            $table->integer('fighter_one_odd')->nullable(false);
            $table->string('fighter_two')->nullable(false);
            $table->integer('fighter_two_odd')->nullable(false);
            $table->string('event_title')->nullable(false);
            $table->dateTime('time')->nullable(false);
            $table->string('email')->nullable();
            $table->string('status')->default(0);
            $table->integer('winner')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mmas');
    }
}
