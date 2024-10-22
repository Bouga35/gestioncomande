<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable =['adresse_livraison','id_client'];
    public function client()
    {
        return $this->belongsTo(Client::class,'id_client');
    }

    public function details()
    {
        return $this->hasMany(DetailsCommande::class);
    }

}
