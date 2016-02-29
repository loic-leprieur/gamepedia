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
        $jeux = new Game();
        echo $jeux->games();
    }

    public function liste442(){
        $jeux = new Game();
        echo $jeux->games442();
    }

    public function listeMario(){
        $jeux = new Game();
        echo $jeux->mario();
    }

    public function persoJeu12342(){
        foreach(Game::find(12342)->characters()->get() as $ch){
            echo $ch->id . '. ' . $ch->name . ' : ' . $ch->deck . "<br><br> ";
        }
    }
}

