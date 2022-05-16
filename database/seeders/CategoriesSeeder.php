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
        $categorie->slug = "Fruit";
        $categorie->image = "Fruit.jpg";
        $categorie->save();

        $categorie = new Categorie();
        $categorie->nom = "Légume";
        $categorie->slug = "Fruit";
        $categorie->image = "Legume.jpg";
        $categorie->save();

        $categorie = new Categorie();
        $categorie->nom = "crèmerie";
        $categorie->slug = "Cremerie";
        $categorie->image = "Cremerie.jpg";
        $categorie->save();

        $categorie = new Categorie();
        $categorie->nom = "Charcuterie";
        $categorie->slug = "Charcuterie";
        $categorie->image = "Charcuterie.jpg";
        $categorie->save();

        $categorie = new Categorie();
        $categorie->nom = "Boucherie";
        $categorie->slug = "Boucherie";
        $categorie->image = "Boucherie.jpg";
        $categorie->save();

        $categorie = new Categorie();
        $categorie->nom = "Surgelé";
        $categorie->slug = "Surgele";
        $categorie->image = "Surgele.jpg";
        $categorie->save();

        $categorie = new Categorie();
        $categorie->nom = "Epicerie sucrée";
        $categorie->slug = "Sucre";
        $categorie->image = "Sucre.jpg";
        $categorie->save();

        $categorie = new Categorie();
        $categorie->nom = "Epicerie salée";
        $categorie->slug = "Sale";
        $categorie->image = "Sale.jpg";
        $categorie->save();

        $categorie = new Categorie();
        $categorie->nom = "Boisson";
        $categorie->slug = "Boisson";
        $categorie->image = "Boisson.jpg";
        $categorie->save();
        
    }
}
