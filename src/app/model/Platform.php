<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 22/02/16
 * Time: 14:58
 */

namespace app\model;


use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{

    protected $table = 'platform';


    protected $primaryKey = 'id';

    public $timestamps = false;
}