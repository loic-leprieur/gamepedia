<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 22/02/16
 * Time: 15:06
 */

namespace app\controler;


use app\model\Platform;

class ControleurPlateformes{
    public function __construct(){}

    public function listerPlatform(){
        foreach(Platform::all() as $p){
            if($p->install_base >= 10000000)
                echo $p->id . ' ' . $p->name . ' ' . $p->install_base . '<br><br>';
        }
    }
}