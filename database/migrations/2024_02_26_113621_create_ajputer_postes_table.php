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
        Schema::create('ajputer_postes', function (Blueprint $table) {
            $table->bigInteger('users_id');
            $table->bigInteger('postes_id');
            $table->primary(['users_id', 'postes_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ajputer_postes');
    }
};
