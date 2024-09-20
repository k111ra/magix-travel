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
        Schema::table('reservations', function (Blueprint $table) {
            $table->enum('status', ['initialiser', 'traiter','valider','annuler'])->default('initialiser');
            $table->dateTime('date_debut_traitement')->nullable();
            $table->dateTime('date_valider')->nullable();
            $table->dateTime('date_annuler')->nullable();
            $table->dateTime('date_fin_traitement')->nullable();//il prendre la date a laquelle le bouton valider est activé 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
