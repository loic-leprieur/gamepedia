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

    public function characters(){
        return $this->belongsToMany('app\model\Game', 'game2Character', 'character_id', 'game_id');
    }
}