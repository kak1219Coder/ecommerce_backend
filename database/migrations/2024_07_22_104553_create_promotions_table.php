<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->integer('pourcentage_reduction');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('promotions');
    }
};
