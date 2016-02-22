<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 22/02/16
 * Time: 14:59
 */

namespace app\model;


use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{

    protected $table = 'theme';


    protected $primaryKey = 'id';

    public $timestamps = false;
}