<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 22/02/16
 * Time: 14:56
 */

namespace app\model;


use Illuminate\Database\Eloquent\Model;

class GameRating extends Model
{
    /**
     * Table pochette de la base de données
     * @var string Nom de la table pochette
     */
    protected $table = 'game_rating';

    /**
     * Clé primaire dans la table pochette
     * @var string Clé primaire de la table pochette
     */
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['name', 'rating_board_id'];

    public function ratingBoard(){
        return $this->belongsTo('app\model\Rating_board', 'rating_board_id');
    }

}