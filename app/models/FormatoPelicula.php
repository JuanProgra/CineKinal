<?php

use Illuminate\Database\Eloquent\Model;
/**
 * Created by PhpStorm.
 * User: juanlopez
 * Date: 7/12/15
 * Time: 5:10 PM
 */
class FormatoPelicula extends Model
{
    protected $table = 'FormatoPelicula';

    protected $fillable = ['nombre','descripcion'];


}