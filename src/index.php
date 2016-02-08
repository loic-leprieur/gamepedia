<?php

session_start();
include 'vendor/autoload.php';
require_once "conf/ConnectionFactory.php";
/* Etablissement de la connection à la DB */
\conf\ConnectionFactory::makeConnection('conf/db.config.ini');

$names = gamepedia/character::all('name');
foreach ($names as $name) {
    echo $name->name, '<br>';
}