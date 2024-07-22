<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'date_debut', 'date_fin', 'pourcentage_reduction'];

    public function produits()
    {
        return $this->belongsToMany(Produit::class, 'produit_promotion');
    }

    public function est_active()
    {
        $aujourdhui = date('Y-m-d');
        return $this->date_debut <= $aujourdhui && $this->date_fin >= $aujourdhui;
    }
}
