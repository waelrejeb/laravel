<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTypeetablissementToNiveausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('niveaus', function (Blueprint $table) {
                $table->unsignedBigInteger('typeetablissement_id');

                $table->foreign('typeetablissement_id')->references('id')->on('typeetablissements');        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('niveaus', function (Blueprint $table) {
            //
        });
    }
}
