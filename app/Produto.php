<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable =[
'Descricao','Preco','Cor','Peso'

    ];
    public function categoria()
    {
        return $this->belongsTo('App\categoria');
    }
    
}
