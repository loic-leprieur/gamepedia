<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 22/02/16
 * Time: 15:05
 */

namespace app\controler;
use app\model\Game;
use app\model\Company;

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
        foreach(Game::where('name', 'like', '%Mario')->get() as $jeu){
            echo '<b>' . $jeu->name . '</b><br>';
            foreach($jeu->characters()->get() as $perso){
                echo $perso->name . '<br>';
            }
        }
    }

    public function jeuxSony(){
        foreach(Company::where('name', 'like', '%Sony%')->get() as $compagnie) {
            foreach ($compagnie->gamesAsDeveloper as $jeu) {
                echo $compagnie->name . ' : ' . $jeu->name . '<br>';
            }
        }
    }

    public function ratingJeuxMario(){
        foreach(Game::where('name', 'like', '%Mario%')->get() as $jeu) {
            echo '<b>' . $jeu->name . '</b><br>';
            foreach ($jeu->original_game_ratings()->get() as $rating) {
                echo $rating->name . '<br>';
                echo $rating->ratingBoard()->get()->name;
            }
        }
    }

    public function jeuxMario3Persos(){
        foreach(Game::where('name', 'like', '%Mario')->get() as $jeu) {
            if ($jeu->characters()->count() >= 3) {
                echo '<b>' . $jeu->name . '</b><br>';
                foreach($jeu->characters()->get() as $perso) {
                    echo $perso->name . '<br>';
                }
            }

        }
    }

    public function jeuxMarioRating3(){
        foreach(Game::where('name', 'like', '%Mario')->get() as $jeu){
            foreach($jeu->original_game_ratings()->where("name", "like", "%3+%")->get() as $rating){
                echo '<b>' . $jeu->name . '</b> : '. $rating->name .'<br>';
            }
        }
    }

    public function jeuxMarioCompIncRating3Cero(){

        foreach(Game::where('name', 'like', '%Mario%')
                    ->whereHas('original_game_ratings', function($q){
                        $q->where('name', 'like', '%3+%');
                    })
                    ->whereHas('companyAsDeveloper', function($q) {
                        $q->where('name', 'like', '%Inc.%');
                    })
                    ->get() as $game){
            echo '####' . $game->name . ' : ' . $game->id . '<br>';
            foreach ($game->original_game_ratings as $rating) {
                echo '--------- ' . $rating->name . '<br>';
            }
            foreach($game->companyAsDeveloper as $comp){
                echo '---> publisher : ' .$comp->name . '<br>';
            }

        }
    }
}

