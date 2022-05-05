<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produit;

class ProduitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produit = new Produit();
        $produit->nom = "Yaourt iti";
        $produit->categories_id = 1;
        $produit->prix =1000;
        $produit->description = "Yaourt be creme";
        $produit->poids = "50 mg";
        $produit->image = "yaourt.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Le Fruit";
        $produit->categories_id = 2;
        $produit->prix =2500;
        $produit->description = "Un jus concentre";
        $produit->poids = "250 mg";
        $produit->image = "jus.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Cremerie";
        $produit->categories_id = 3;
        $produit->prix =2500;
        $produit->description = "Un jus concentre";
        $produit->poids = "250 mg";
        $produit->image = "jus.jpg";
        $produit->save();
    }
}
