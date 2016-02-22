<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 22/02/16
 * Time: 14:58
 */

namespace app\model;


use Illuminate\Database\Eloquent\Model;

class Rating_board extends Model
{

    protected $table = 'rating_board';


    protected $primaryKey = 'id';

    public $timestamps = false;
}