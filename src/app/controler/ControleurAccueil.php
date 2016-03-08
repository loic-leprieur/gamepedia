<?php
/**
 * Created by PhpStorm.
 * User: loic
 * Date: 29/02/16
 * Time: 13:51
 */

namespace app\controler;


class ControleurAccueil
{
    public function __construct(){}

    public function render(){
        $racineServeur = 'index.php';
        $html = <<<END
<ul>
    <li><a href=$racineServeur/q1>Question 1</a></li>
    <li><a href=$racineServeur/q2>Question 2</a></li>
    <li><a href=$racineServeur/q3>Question 3</a></li>
    <li><a href=$racineServeur/q4>Question 4</a></li>
    <li><a href=$racineServeur/q5>Question 5</a></li>
    <li><a href=$racineServeur/q6>Question 6</a></li>
    <li><a href=$racineServeur/q7>Question 7</a></li>
</ul>
END;
        echo $html;

    }
}