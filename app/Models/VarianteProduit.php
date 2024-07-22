<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VarianteProduit extends Model
{
    
    
    protected $fillable = ['produit_id', 'couleur', 'taille', 'stock'];

    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
}
