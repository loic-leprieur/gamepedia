<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 22/02/16
 * Time: 15:05
 */

namespace app\controler;
use app\model\Game;

class ControleurJeux{
    public function __construct(){}

    public function listerJeux(){
        foreach(Game::all() as $jeu){
            echo $jeu->id;
        }
    }
}