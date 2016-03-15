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
    <h2>TD2</h2>
    <li><a href=$racineServeur/td2/q1>Question 1</a></li>
    <li><a href=$racineServeur/td2/q2>Question 2</a></li>
    <li><a href=$racineServeur/td2/q3>Question 3</a></li>
    <li><a href=$racineServeur/td2/q4>Question 4</a></li>
    <li><a href=$racineServeur/td2/q5>Question 5</a></li>
    <h2>TD3</h2>
    <li><a href=$racineServeur/td3/q1>Question 1</a></li>
    <li><a href=$racineServeur/td3/q2>Question 2</a></li>
    <li><a href=$racineServeur/td3/q3>Question 3</a></li>
    <li><a href=$racineServeur/td3/q4>Question 4</a></li>
    <li><a href=$racineServeur/td3/q5>Question 5</a></li>

</ul>
END;
        echo $html;

    }
}