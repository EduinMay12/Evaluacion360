<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'nivels';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['competencia', 'nivel'];

    public function competencia(){
        return $this->belongsTo('App\Competencium', 'competencias_id', 'id');
    }
    
}
