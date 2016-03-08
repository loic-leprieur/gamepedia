<?php

include 'vendor/autoload.php';
require_once "src/conf/ConnectionFactory.php";

use app\model\GameRating;

$app = new \Slim\Slim();

\conf\ConnectionFactory::setConfig('src/conf/db.config.ini');

$db = \conf\ConnectionFactory::makeConnection();


/* Routes vers le TD2 */

$app->get('/', function(){
    $controleur = new app\controler\ControleurAccueil();
    $controleur->render();
});

$app->get('/q1', function(){
    $controleur = new \app\controler\ControleurJeux();
    $controleur->listerJeux();
});

$app->get('/q2', function(){
    $controleur = new \app\controler\ControleurJeux();
    $controleur->liste442();
});

$app->get('/q3', function(){
    $controleur = new \app\controler\ControleurJeux();
    $controleur->listeMario();
});

$app->get('/q4', function(){
    $controleur = new \app\controler\ControleurCompagnie();
    $controleur->listeCompagniesJapon();
});

$app->get('/q5', function(){
    $controleur = new \app\controler\ControleurPlateformes();
    $controleur->listerCompanies();
});

/* Routes vers le TD3 */

$app->get('/q6', function(){
    $controleur = new \app\controler\ControleurJeux();
    $controleur->persoJeu12342();
});

$app->get('/q7', function(){
    $controleur = new \app\controler\ControleurJeux();
    $controleur->persoJeuxMario();
});

$app->run();

$app->run();
$start=microtime(true);

//$liste = \app\model\Game::all();
$time=microtime(true)-$start;
//echo "durée requête 1 : ".$time."\n";

$start=microtime(true);
//$liste=\app\model\Game::where('name', 'like', '%Mario%')->get();
$time=microtime(true)-$start;

//echo "durée requête 2 : ".$time."\n";

$start=microtime(true);
//$liste=\app\model\Character::where('name', 'like', '%Mario%')->get();
$time=microtime(true)-$start;

//echo "durée requête 3 : ".$time."\n";

$start=microtime(true);

$liste=\app\model\Game::where('name', 'like', '%Mario%')
    ->whereHas('original_game_ratings', function($q){
        $q->where('name', 'like', '%3+%');
    })
    ->get();
$time=microtime(true)-$start;
echo "durée requête 4 : ".$time."\n";
