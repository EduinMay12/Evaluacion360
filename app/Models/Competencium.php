<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competencium extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'competencias';

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
    protected $fillable = ['nombre', 'descripcion', 'basicocorto1', 'basicocorto2', 'basicocorto3', 'basicoaccion1', 'basicoaccion2', 'basicoaccion3', 'calificadocorto1', 'calificadocorto2', 'calificadocorto3', 'calificadoaccion1', 'calificadoaccion2', 'calificadoaccion3', 'experimentadocorto1', 'experimentadocorto2', 'experimentadocorto3', 'experimentadoaccion1', 'experimentadoaccion2', 'experimentadoaccion3'];

    public function competencia(){
        return $this->hasMany('App\Nivel', 'competencias_id', 'id');
    }
}
