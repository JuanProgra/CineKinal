<?php


use Illuminate\Database\Eloquent\Model;
/**
 * Created by PhpStorm.
 * User: juanlopez
 * Date: 7/12/15
 * Time: 5:10 PM
 */
class Sala extends Model
{
    protected $table = 'Sala';

    protected $fillable = ['cine_id','numero','tiposala_id'];


}