<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->timestamps();
            $table->string('Azienda', 50);
            $table->string('Stazione di arrivo', 100);
            $table->string('Stazione di partenza', 100);
            $table->dateTime('Orario di partenza', 3);
            $table->dateTime('Orario di arrivo', 1);
            $table->string('Codice Treno', 12);
            $table->tinyInteger('Numero carrozze')->unsigned();
            $table->boolean('In orario')->default(true); //booleano
            $table->boolean('Cancellato')->default(false);
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
};
