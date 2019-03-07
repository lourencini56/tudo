<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $fillable =[
        'Descricao'
        
            ];

            public function produto()
            {
                return $this->hasMany('App\produto');
            }
}
