<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            //nom
            $table->string('nom');
            //prix
            $table->float('prix');

            // lieu de fabrication
            $table->string('fabrication');
            // marque
            $table->string('marque');
            //type carburant
            $table->string('carburant');
            //couleur
            $table->string('couleur');
            //date
            $table->date('fabric');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
