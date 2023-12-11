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
        Schema::table('adhesions', function (Blueprint $table) {
            $table->string('connu_par')->nullable();
            $table->string('statut')->nullable();
            $table->boolean('enregistre')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('adhesions', function (Blueprint $table) {
            //
        });
    }
};
