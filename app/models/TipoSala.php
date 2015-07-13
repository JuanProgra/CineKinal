<?php

use Illuminate\Database\Eloquent\Model;
/**
 * Created by PhpStorm.
 * User: juanlopez
 * Date: 7/12/15
 * Time: 5:10 PM
 */
class TipoSala extends Model
{
    protected $table = 'TipoSala';

    protected $fillable = ['nombre','descripcion'];


}