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
        foreach(Company::where('location_country', 'like', 'Japan')->get() as $co){
            /*if($co->location_country == 'Japan')*/
            echo $co->id . ' ' . $co->name . ' / ' . $co->location_country . ' / ' . $co->deck . '<br><br>';
        }
    }
}