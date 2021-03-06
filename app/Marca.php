<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';

    protected $fillable = [ 'nome' ];

    protected $hidden = [ 'id', 'created_at', 'updated_at' ];

    public function produtos()
    {
        return $this->hasMany('App\Produto','marcas_id','id');
    }
}
