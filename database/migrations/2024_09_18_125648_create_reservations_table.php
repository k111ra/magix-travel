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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
             //les champs appartenant toutes reservations
            $table->string('ref_reservation')->nullable();//un champ permettant de reference
            $table->string('nom')->nullable();
            $table->string('prenoms')->nullable();
            $table->string('email')->nullable();
            $table->string('contact')->nullable();
            $table->string('numero_whatsapp')->nullable();
            $table->string('adresse')->nullable();

            $table->foreignId('tour_id')->nullable()->constrained()->onDelete('cascade')->nullable();
            $table->foreignId('hotel_id')->nullable()->constrained()->onDelete('cascade')->nullable();
            $table->foreignId('type_reservations_id')->nullable()->constrained()->onDelete('cascade')->nullable();
            $table->date('reservation_date')->nullable();
            $table->decimal('amount', 24, 2)->nullable();

            //element pour la reservation de vol
            $table->integer('num_persons');// ce champ recois la sommes de bébé + enfant +adulte(1 bébé + 2 enfants +2 adultes = 5)
            $table->string('destination_depart');//ou tu quittes
            $table->string('destination_final')->nullable();//ou tu vas
            $table->string('date_depart')->nullable();
            $table->string('date_retour')->nullable();//dans le cas ou c'est une reservation pour un vol aller-retour
            $table->integer('nombre_bebe')->nullable(); // age entre 0-2
            $table->integer('nombre_enfant')->nullable(); // age entre 2-12
            $table->integer('nombre_adultes')->nullable(); // age entre 12 - et plus
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
        //
    }
};
