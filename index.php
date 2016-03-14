<?php

include 'vendor/autoload.php';
require_once "src/conf/ConnectionFactory.php";

use app\model\GameRating;

$app = new \Slim\Slim();

\conf\ConnectionFactory::setConfig('src/conf/db.config.ini');

$db = \conf\ConnectionFactory::makeConnection();


$app->get('/', function(){
    $controleur = new app\controler\ControleurAccueil();
    $controleur->render();
});

/**
 * TD2
 */

/* Question 1 */
$app->get('/td2/q1', function(){
    $controleur = new \app\controler\ControleurJeux();
    $controleur->listerJeux();
});

/* Question 2 */
$app->get('/td2/q2', function(){
    $controleur = new \app\controler\ControleurJeux();
    $controleur->liste442();
});


/* Question 3 */
$app->get('/td2/q3', function(){
    $controleur = new \app\controler\ControleurJeux();
    $controleur->listeMario();
});


/* Question 4 */
$app->get('/td2/q4', function(){
    $controleur = new \app\controler\ControleurCompagnie();
    $controleur->listeCompagniesJapon();
});

/* Question 5 */
$app->get('/td2/q5', function(){
    $controleur = new \app\controler\ControleurPlateformes();
    $controleur->listerPlatform();
});

/**
 * TD3
 */

/* Question 1 */
$app->get('/td3/q6', function(){
    $controleur = new \app\controler\ControleurJeux();
    $controleur->persoJeu12342();
});

/* Question 2 */
$app->get('/td3/q7', function(){
    $controleur = new \app\controler\ControleurJeux();
    $controleur->persoJeuxMario();
});


/* Question 3 */
$app->get('/td3/q8', function() {
    $controleur = new \app\controler\ControleurJeux();
    $controleur->jeuxSony();
});

/* Question 4*/
$app->get('/td3/q9', function(){
    $controleur = new \app\controler\ControleurJeux();
    $controleur->ratingJeuxMario();
});

// activation des routes
$app->run();

/**
 * TD4 : durée des requêtes précédentes
 */

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
