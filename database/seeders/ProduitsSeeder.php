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
        $produit->nom = "Pomme";
        $produit->categories_id = 1;
        $produit->prix =4500;
        $produit->description = "La pomme est un fruit comestible à pépins d’un goût sucré et acidulé. Elle se présente sous différentes formes de variétés, mais ici nous vous proposons la pomme verte.
            Comme son nom l’indique, elle conserve sa couleur verte même arrivée à sa pleine maturité. Quand elle est fraîche sa chair est juteuse, acidulée, ferme et croquante.
            Les pommes à Madagascar sont généralement cultivé de façon organique pour conserver son goût et ses vertus";
        $produit->poids = "1 kg";
        $produit->image = "pomme.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Banane";
        $produit->categories_id = 1;
        $produit->prix =1800;
        $produit->description = "Que ce soit pour les besoins des consommateurs internes, ou encore pour les besoins externes (par le biais de l’exportation), l’activité de la culture de banane est présente à Madagascar depuis 1960 en commençant dans la région de Tamatave. Aujourd’hui, elle est plus que développée et nourrit bien des familles";
        $produit->poids = "1 kg";
        $produit->image = "banane.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Pastèque";
        $produit->categories_id = 1;
        $produit->prix =3300;
        $produit->description = "Madagascar ou encore l’île verte est un pays riche, et parmi ses verdures les arbres fruitiers.
La pastèque bien qu’elle ne soit pas originaire de l’île est très consommée par les Malgaches, et beaucoup se sont investis dans sa culture";
        $produit->poids = "";
        $produit->image = "pasteque.jpg";
        $produit->save();


        $produit = new Produit();
        $produit->nom = "Pomme de terre";
        $produit->categories_id = 2;
        $produit->prix =2500;
        $produit->description = "La pomme de terre joue un rôle important dans l’alimentation malgache comme complément du riz lors de la période de soudure. C’est l’une des productions les plus porteuses économiquement pour les agriculteurs";
        $produit->poids = "1 kg";
        $produit->image = "pommeTerre.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Haricot vert";
        $produit->categories_id = 2;
        $produit->prix =4200;
        $produit->description = "Dans l’alimentation malgache, le haricot occupe la quatrième place après le riz, le manioc et le maïs. A Madagascar, la culture du haricot est pratiquée essentiellement dans trois régions : les hautes terres, le sud ouest et le nord ouest de la grande île";
        $produit->poids = "1 kg";
        $produit->image = "haricot.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Carotte";
        $produit->categories_id = 2;
        $produit->prix =2000;
        $produit->description = "Disponible toute l’année. Plus la carotte est orangée, plus elle est tendre et sucrée. La peau doit être lisse, uniforme et sans tache. La partie externe est riche en vitamine et en sels minéraux. C’est un des légumes les plus riches en sucre, provitamine A et en carotène";
        $produit->poids = "1 kg";
        $produit->image = "carotte.jpg";
        $produit->save();

        

        $produit = new Produit();
        $produit->nom = "Yaourt Yoplait";
        $produit->categories_id = 3;
        $produit->prix =2300;
        $produit->description = "Yoplait Nature sur Fruits, c'est toute la fraîcheur et l'onctuosité d'un yaourt nature sucré sur un savoureux lit de fruits";
        $produit->poids = "250 g";
        $produit->image = "yoplait.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Yaourt iti nature sucré";
        $produit->categories_id = 3;
        $produit->prix =1250;
        $produit->description = "Le bon goût de la spécialité laitière locale s’invite dans votre cuisine avec ce yaourt nature sucré grand format  proposé par ITI.
Ingrédient incontournable, il entre dans la composition de plusieurs préparations culinaires.";
        $produit->poids = "400 g";
        $produit->image = "iti.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Fromage Gaborit";
        $produit->categories_id = 3;
        $produit->prix =9500;
        $produit->description = "La Fleurs de chèvres est un fromage bio très crémeux et fondant qui offre des saveurs équilibrées et florales avec de légères notes de noisettes";
        $produit->poids = "350 g";
        $produit->image = "fromage.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Saucisson d’Arles Lewis";
        $produit->categories_id = 4;
        $produit->prix =7270;
        $produit->description = "Boyau rempli de viande hachée et assaisonnée. C'est l'un des apprêt les plus anciens et les plus répandus. Elle est généralement constituée de maigre et de gras de porc, éventuellement additionnée de maigre de veau, de boeuf, de mouton, de volaille avec parfois des abats et toujours des condiments variés, d'où la diversité des préparations";
        $produit->poids = "200 g";
        $produit->image = "saucisson.jpg";
        $produit->save();


        $produit = new Produit();
        $produit->nom = "Jambon de Paris";
        $produit->categories_id = 4;
        $produit->prix =22000;
        $produit->description = "Jambon de Paris : Le jambon de Paris ou jambon blanc est un jambon cuit, poché dans un bouillon de légumes aromatisé. Il se présente le plus souvent sous la forme d'une pièce dépassant cinq kilogrammes, vendu en tranches et commercialisé en plusieurs qualités : traditionnelle, supérieure ou « au torchon »";
        $produit->poids = "320 g";
        $produit->image = "jambon.jpg";
        $produit->save();


         $produit = new Produit();
        $produit->nom = "Kitoza de Boeuf préparé";
        $produit->categories_id = 5;
        $produit->prix =13100;
        $produit->description = "Le kitoza est un produit traditionnel de Madagascar obtenu à partir de lanières de viande de porc ou de bœuf, généralement salées  puis séchées  et/ou fumées.  Il est consommé avec du « vary sosoa » ou du « vary amin’anana » au petit déjeuner ou au dîner";
        $produit->poids = "500 g";
        $produit->image = "kitoza.jpg";
        $produit->save();


        $produit = new Produit();
        $produit->nom = "Tranche fine de Boeuf";
        $produit->categories_id = 5;
        $produit->prix =12000;
        $produit->description = "La tranche fine est une des parties les plus tendres et fraîches de la viande bovine. Sa découpe est soignée afin qu’elle comporte essentiellement de la chair.
    A Madagascar, c’est la tranche fine que la plupart utilise pour faire les brochettes, les incontournables “kitoza” ou encore pour un simple steak";
        $produit->poids = "500 g";
        $produit->image = "trancheBoeuf.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Saucisse Chipolatas";
        $produit->categories_id = 5;
        $produit->prix =13850;
        $produit->description = "Chipolatas désigne une saucisse plus fine, idéale pour les cocktails de bienvenue mais peut également accompagner vos repas.  Le chipolatas est une saucisse de spécialité charcutière élaboré suivant des recettes variées avec une assaisonnement";
        $produit->poids = "500 g";
        $produit->image = "saucisse.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Crème Glacée Fraise Motily";
        $produit->categories_id = 6;
        $produit->prix =10100;
        $produit->description = "La marque Motily™,anciennement GO COOL, est une marque malgache spécialisée dans la production des crèmes glacée. Passant des cornets de glace et des esquimaux, à des barquettes de crème glacées, ce sont des professionnels de renoms à Madagascar avec des produits de qualité à la portée de tous. Ici notre sujet se focalisera beaucoup plus sur leur crème glacée en barquette de 750ml";
        $produit->poids = "1 kg";
        $produit->image = "motily.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Glace Hazelnut Luxe Magnum";
        $produit->categories_id = 6;
        $produit->prix =7750;
        $produit->description = "Les confiseries de marque Magnum sont des bâtonnets glacés, entre 100 et 120 mL, composées pour la plupart de crème glacée saveur vanille enrobée de chocolat. Des déclinaisons existent : enrobage chocolat au lait, noir ou blanc ; crème glacée vanille ou chocolat";
        $produit->poids = "120 g";
        $produit->image = "magnum.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Kit Kat";
        $produit->categories_id = 7;
        $produit->prix =9200;
        $produit->description = "Kit Kat est une marque commerciale de biscuits enrobés de chocolat créée en Angleterre en 1935 par Rowntree et actuellement fabriquée dans le monde entier par Nestlé qui a racheté Rowntree en 1988, sauf aux États-Unis, où la fabrication Kit Kat est assurée par Hershey's";
        $produit->poids = "415 g";
        $produit->image = "kitkat.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Céréale corn flakes Kellogg’s";
        $produit->categories_id = 7;
        $produit->prix =15380;
        $produit->description = "Flocons grillés, préparés à partir de semoules de maïs salées et additionnées de sirop de sucre";
        $produit->poids = "500 g";
        $produit->image = "cornflakes.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Caca Pigeon de Qualité Supérieur Aina";
        $produit->categories_id = 8;
        $produit->prix =3850;
        $produit->description = "Les caca pigeon malgaches sont des biscuits à base de farine, levure, huile, poivre, sel et eau. Parfumés au curcuma et au cumin, ces biscuits sont incontournables à Madagascar. Le terme Caca pigeon viendrait d'une légende du temps des colons";
        $produit->poids = "250 g";
        $produit->image = "cacapigeon.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Chips orientale Cheese Balls";
        $produit->categories_id = 8;
        $produit->prix =4350;
        $produit->description = "Ces délicieuses boulettes de pommes de terre croustillantes font de superbes fête";
        $produit->poids = "60 g";
        $produit->image = "cheeseBalls.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Boisson gazeuse Coca cola 150 cl";
        $produit->categories_id = 9;
        $produit->prix =4500;
        $produit->description = "Le Coca-Cola est une boisson gazeuse distribuée sur les cinq continents de la planète comme boisson rafraîchissante, et présentée sous différentes variétés";
        $produit->poids = "";
        $produit->image = "cocacola.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Jus de fruit raisin 1L";
        $produit->categories_id = 9;
        $produit->prix =8750;
        $produit->description = "Nos saveurs exotiques de jus de fruits 100% pur naturel sont remplies des bienfaits sains des vitamines et des minéraux présents dans les fruits frais.   Le jus de fruit Ceres à base de raisin offre le meilleur des bienfaits naturels , c'est pourquoi  notre gamme de saveurs nutritives et savoureuses nourrira votre corps et ravira vos papilles";
        $produit->poids = "";
        $produit->image = "ceres.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Jus Le Fruit 1L";
        $produit->categories_id = 9;
        $produit->prix =9000;
        $produit->description = "Jus que l'on obtient à partir de différents fruits. On peut classer les jus de fruits en trois catégories : les purs jus, les jus concentrés et les nectars. Parmi les jus de fruits les plus consommés, on peut citer le jus d'orange et le jus de pomme";
        $produit->poids = "";
        $produit->image = "lefruit.jpg";
        $produit->save();
    }
}
