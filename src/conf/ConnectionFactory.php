
<?php
namespace conf;
use Illuminate\Database\Capsule\Manager as DB;
class ConnectionFactory extends \Illuminate\Database\Connectors\ConnectionFactory{
    public static function makeConnection($file){
        $db = new DB();
        $db->addConnection(parse_ini_file($file));
        $db->setAsGlobal();
        $db->bootEloquent();
    }
}