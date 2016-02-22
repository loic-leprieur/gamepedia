<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 22/02/16
 * Time: 17:09
 */

namespace app\model;

use Illuminate\Database\Eloquent\Model;

class Game2Character extends Model{
    protected $table = 'Game2Characters';

    protected $primaryKey = ['game_id', 'character_id'];

    public $timestamps = false;


}