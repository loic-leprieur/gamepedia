<?php

include 'vendor/autoload.php';
require_once "src/conf/ConnectionFactory.php";

\conf\ConnectionFactory::setConfig('src/conf/db.config.ini');

$db = \conf\ConnectionFactory::makeConnection();
