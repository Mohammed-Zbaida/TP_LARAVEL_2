<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
   protected $fillable=['quantity','produit_id'];
//    public function produits(){
//     return $this->hasMany(Produit::class);
//    }
}
