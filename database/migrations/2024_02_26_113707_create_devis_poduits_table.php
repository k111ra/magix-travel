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
        Schema::create('devis_poduits', function (Blueprint $table) {
            $table->bigInteger('devis_id');
            $table->bigInteger('produit_id');
            $table->primary(['devis_id', 'produits_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devis_poduits');
    }
};
