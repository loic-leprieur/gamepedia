<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 22/02/16
 * Time: 14:43
 */

namespace app\model;


use Illuminate\Database\Eloquent\Model;

class Character extends Model{

    protected $table = 'character';

    protected $primaryKey = 'id';

    public $timestamps = false;
}