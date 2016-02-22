<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 22/02/16
 * Time: 14:58
 */

namespace app\model;


use Illuminate\Database\Eloquent\Model;

class Game_Rating extends Model
{

    protected $table = 'game_rating';

    protected $primaryKey = 'id';

    public $timestamps = false;
}