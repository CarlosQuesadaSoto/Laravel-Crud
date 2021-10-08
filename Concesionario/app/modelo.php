<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelo extends Model
{

        protected $table = "modelos";

        protected $primaryKey = 'id';

        protected $fillable = ['marca','modelo','matricula','precio','año','serie','images'];
        protected $guarded = ['id'];
        protected $hidden = ['created_at', 'updated_at'];

        public function Coche()
        {
            return $this->belongsTo('App\Coche');
        }
    
}
