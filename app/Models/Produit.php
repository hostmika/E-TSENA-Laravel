<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;

class Produit extends Model
{
    use HasFactory;

    public function categorie()
    {
        return $this->belongsTo(Categorie::class,'categories_id');
    }
}
