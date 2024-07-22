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
    Schema::create('image_produits', function (Blueprint $table) {
        $table->id();
        $table->foreignId('produit_id')->constrained()->onDelete('cascade');
        $table->string('url');
        $table->string('description')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('image_produits');
}
