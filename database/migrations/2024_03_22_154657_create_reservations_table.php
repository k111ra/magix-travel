<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('client_id')->constrained()->onDelete('cascade')->nullable();
            $table->foreignId('tour_id')->nullable()->constrained()->onDelete('cascade')->nullable();
            $table->foreignId('hotel_id')->nullable()->constrained()->onDelete('cascade')->nullable();
            $table->foreignId('vol_id')->nullable()->constrained()->onDelete('cascade')->nullable();
            $table->date('reservation_date')->nullable();
            $table->decimal('amount', 24, 2);
            $table->integer('num_persons')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('reservations');
    }
};
