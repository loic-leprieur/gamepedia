<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 22/02/16
 * Time: 14:56
 */

namespace app\model;


use Illuminate\Database\Eloquent\Model;

class Company extends Model{

    protected $table = 'company';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['name', 'location_country', 'deck',];

    public function gamesAsPublisher(){
        $this->belongsToMany('app\model\Game', 'game_publishers', 'comp_id', 'game_id');
    }

    public function gamesAsDeveloper(){
        $this->belongsToMany('app\model\Game', 'game_developers', 'comp_id', 'game_id');
    }
}