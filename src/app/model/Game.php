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

    public function games(){
        $res = '';
        foreach($this::limit(30)->offset(0)->get() as $jeu){
            $res .= $jeu->id . " " . $jeu->name . ' : ' . $jeu->deck."<br><br>";
        }
        return $res;
    }

    public function games442(){
        $res = '';
        foreach($this->limit(442)->offset(21172)->get() as $jeu){
            $res .= $jeu->id . " " . $jeu->name . ' ' . $jeu->deck.'<br><br>';
        }
        return $res;
    }

    public function mario(){
        $res = '';
        foreach($this->limit(10000)->offset(505)->get() as $jeu){
            if(strpos($jeu->name, 'Mario') != false)
                $res .= $jeu->id . " " . $jeu->name . "<br>";
        }
        return $res;
    }

    public function characters(){
        return $this->belongsToMany('app\model\Character', 'game2Character', 'game_id', 'character_id');
    }
}