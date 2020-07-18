<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carrucel extends Model
{
    protected $table = 'carrusel';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'titulo', 'descripcion','url_imagen' ];
}
