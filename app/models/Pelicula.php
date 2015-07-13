<?php

use Illuminate\Database\Eloquent\Model;
/**
 * Created by PhpStorm.
 * User: juanlopez
 * Date: 7/12/15
 * Time: 4:53 PM
 */
class Pelicula extends Model
{
    protected $table = 'Pelicula';

    protected $fillable = ['titulo','sinopsis','trailer_url', 'image','rated','genero'];
}