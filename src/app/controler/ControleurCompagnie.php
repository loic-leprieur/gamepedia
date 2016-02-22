<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 22/02/16
 * Time: 15:06
 */

namespace app\controler;


use app\model\Company;

class ControleurCompagnie{
    public function __construct(){}

    public function listeCompagniesJapon(){
        $comp = new Company();
        echo $comp->companies();
    }
}