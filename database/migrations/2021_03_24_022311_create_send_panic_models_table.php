<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendPanicModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('send_panic_models', function (Blueprint $table) {
            $table->id();
            $table->string('Longitude');
            $table->string('Latitude ');
            $table->string('Panic_type')->nullable();
            $table->string('Details ')->nullable();
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
        Schema::dropIfExists('send_panic_models');
    }
}
