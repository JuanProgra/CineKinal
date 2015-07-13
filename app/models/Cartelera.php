<?php

use Illuminate\Database\Eloquent\Model;
/**
 * Created by PhpStorm.
 * User: juanlopez
 * Date: 7/12/15
 * Time: 5:10 PM
 */
class Cartelera extends Model
{
    protected $table = 'Cartelera';

    protected $fillable = ['sala_id','pelicula_id','formatopelicula_id','formato_lenguaje','fecha','hora'];


}