<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 22/02/16
 * Time: 14:58
 */

namespace app\model;


use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{

    protected $table = 'genre';


    protected $primaryKey = 'id';

    public $timestamps = false;
}