<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produit;
use App\Models\VarianteProduit;
use App\Models\Promotion;
use App\Models\ImageProduit;

class ProduitSeeder extends Seeder
{
    public function run()
    {
        $produit = Produit::create([
            'nom' => 'T-Shirt',
            'description' => 'T-Shirt en coton',
            'prix_base' => 20.0,
            'categorie' => 'Vêtements'
        ]);

        VarianteProduit::create([
            'produit_id' => $produit->id,
            'couleur' => 'Rouge',
            'taille' => 'M',
            'stock' => 10
        ]);

        Promotion::create([
            'description' => 'Soldes d\'été',
            'date_debut' => '2024-07-01',
            'date_fin' => '2024-07-31',
            'pourcentage_reduction' => 20
        ]);

        ImageProduit::create([
            'produit_id' => $produit->id,
            'url' => 'http://example.com/image1.jpg',
            'description' => 'Vue de face'
        ]);
    }
}