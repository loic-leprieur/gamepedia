<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 22/02/16
 * Time: 14:56
 */

namespace app\model;


use Illuminate\Database\Eloquent\Model;

class enemies extends Model
{

    protected $table = 'enemies';

    protected $primaryKey = 'id';

    public $timestamps = false;
}