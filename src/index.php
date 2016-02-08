require /autoload.php;
<?php
$names = gamepedia/character::all('name');
foreach ($names as $name) {
    echo $name->name, '<br>';
}