<?php

use Illuminate\Database\Eloquent\Model;
/**
 * Created by PhpStorm.
 * User: juanlopez
 * Date: 7/12/15
 * Time: 4:53 PM
 */
class Cine extends Model
{
    protected $table = 'Cine';

    protected $fillable = ['nombre','direccion','telefono','latitud','longitud', 'hora_apertura', 'hora_cierre',];


}