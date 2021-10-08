<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    protected $table = "coches";

    protected $primaryKey = 'id';

    protected $fillable = ['numero_serie'];
    protected $guarded = ['id'];
    protected $hidden = ['created_at', 'updated_at'];

    public function modelo()
    {
        return $this->hasMany('App\modelo');
    }
}
