<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\categorie;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorie = new Categorie();
        $categorie->nom = "Fruit";
        $categorie->save();

        $categorie = new Categorie();
        $categorie->nom = "Legume";
        $categorie->save();

        $categorie = new Categorie();
        $categorie->nom = "cremerie";
        $categorie->save();

        $categorie = new Categorie();
        $categorie->nom = "Charcuterie";
        $categorie->save();

        $categorie = new Categorie();
        $categorie->nom = "Boucherie";
        $categorie->save();

        $categorie = new Categorie();
        $categorie->nom = "Surgele";
        $categorie->save();

        $categorie = new Categorie();
        $categorie->nom = "Epicerie-sucree";
        $categorie->save();

        $categorie = new Categorie();
        $categorie->nom = "Epicerie-salee";
        $categorie->save();

        $categorie = new Categorie();
        $categorie->nom = "Boisson";
        $categorie->save();
        
    }
}
