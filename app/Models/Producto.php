<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function almacens(){

        return $this->belongsToMany(Almacen::class);

    }
    
    public function categoria(){

        return $this->belongsTo(Categoria::class);

    }

    protected $fillable = ["nombre", "almacen_id", "categoria_id"];
}
