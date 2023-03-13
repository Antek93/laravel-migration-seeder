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
        Schema::table('trains', function (Blueprint $table) {
            $table->string('Azienda');
            // $table->string('Stazione di partenza');
            $table->string('Stazione di arrivo');
            $table->time('Orario di partenza');
            $table->time('Orario di arrivo');
            $table->string('Codice Treno');
            $table->string('Numero carrozze');
            $table->time('In orario');
            $table->boolean('Cancellato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn([
                'Azienda',
                'Stazione di partenza',
                'Stazione di arrivo',
                'Orario di partenza',
                'Codice Treno',
                'Numero carrozze',
                'In orario',
                'Cancellato'
            ]);
        });
    }
};
