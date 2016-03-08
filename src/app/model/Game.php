<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 22/02/16
 * Time: 14:56
 */

namespace app\model;


use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /**
     * Table pochette de la base de données
     * @var string Nom de la table pochette
     */
    protected $table = 'game';

    /**
     * Clé primaire dans la table pochette
     * @var string Clé primaire de la table pochette
     */
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['name', 'deck'];


    public function characters(){
        return $this->belongsToMany('app\model\Character', 'game2character', 'game_id', 'character_id');
    }

    public function company(){
        return $this->belongsToMany('app\model\Company', 'game_developers', 'game_id', 'comp_id');
    }

    public function original_game_ratings(){
        return $this->belongsToMany('app\model\GameRating', 'game_rating', 'game_id', 'rating_id');
    }
}