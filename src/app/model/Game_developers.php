<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 22/02/16
 * Time: 14:57
 */

namespace app\model;


use Illuminate\Database\Eloquent\Model;

class Game_developers extends Model
{
    /**
     * Table pochette de la base de données
     * @var string Nom de la table pochette
     */
    protected $table = 'game_developers';

    /**
     * Clé primaire dans la table pochette
     * @var string Clé primaire de la table pochette
     */
    protected $primaryKey = 'id';

    public $timestamps = false;
}