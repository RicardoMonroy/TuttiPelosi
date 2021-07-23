<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();

            $table->string('tag');
            $table->string('pin');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('dog_breed')->nullable();  // Raza canina
            $table->string('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('color')->nullable();
            $table->text('special_cares')->nullable(); // Cuidados especiales
            $table->text('personality')->nullable(); // Personalidad
            $table->text('veterinary')->nullable(); // Veterinario

            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')->references('id')->on('owners');

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
        Schema::dropIfExists('pets');
    }
}
