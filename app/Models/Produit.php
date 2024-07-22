<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable =['nom',' description', 'prix_base', 'categorie'];

    public function variantes(){
        return $this->hasMany(VarianteProuduit::class);
    }
    public function promotion(){
        return $this->belongsToMany(Promotion::class,'produit_promotion');
    }
    public function images(){
        return $this->hasMany(Imageproduit::class);
    }
}

