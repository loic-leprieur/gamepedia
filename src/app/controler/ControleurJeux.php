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
        foreach($jeux->all() as $jeu){
            echo $jeu->id . ' ' . $jeu->name . ' : ' . $jeu->deck.'<br><br>';
        }
    }

    public function liste442(){
        $jeux = new Game();
        foreach($jeux->limit(442)->offset(21172)->get() as $jeu){
            echo $jeu->id . ' ' . $jeu->name . ' ' . $jeu->deck.'<br><br>';
        }
    }

    public function listeMario(){
        foreach(Game::where('name', 'like', '%Mario%')->get() as $jeu){
            echo $jeu->id . ' ' . $jeu->name . '<br>';
        }
    }

    public function persoJeu12342(){
        echo Game::find(12342)->name . ' a pour personnages : <br><br>';
        foreach(Game::find(12342)->characters()->get() as $ch){
            echo '* '.$ch->id . '. ' . $ch->name . ' : ' . $ch->deck . '<br><br>';
        }
    }

    public function persoJeuxMario(){
        $jeux = new Game();
        foreach ($jeux->characters() as $perso) {
            echo $jeux->name . '<br>';
            echo '    * ' . $perso->name . '<br>';
        }
        echo '<br>';
    }
}

