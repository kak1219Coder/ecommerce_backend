<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
{
    Schema::create('produits', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->text('description');
        $table->decimal('prix_base', 8, 2);
        $table->string('categorie');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('produits');
}
};
