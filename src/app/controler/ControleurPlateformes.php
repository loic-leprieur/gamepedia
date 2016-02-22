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

    public function listerCompanies(){
        $pf= new Platform();
        echo $pf->plateformes();
    }
}