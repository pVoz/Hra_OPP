<?php

///--- ///--- ///--- ///--- ///--- ///---
 ///--- ///--- ///--- ///--- ///--- ///---
 ///-----------COMPOSER------------/////
 //         getcomposer.org        //////
 ///-----------COMPOSER------------//////
///--- ///--- ///--- ///--- ///--- ///---
///--- ///--- ///--- ///--- ///--- ///---
 ///--- ///--- ///--- ///--- ///--- ///---

require 'src/Being.php';
require 'src/enemy.php';

use penis\Being;


function pre_r($value){
    echo ('<pre>');  
    print_r ($value);
    echo ('</pre>');
}


$hero = new penis\Being('marceline',50,[
    'gold' => 120, 'potion' => 3 ,'axe' => 1,
]);

$enemies = [
    new Being('Kunda',60,['gold' => 100,'potion' => 2, 'sword'=> 1 ]), 
     new Being('ssss',60,[ 'gold' => 100,'potion' => 2, 'sword'=> 1,])
    ];

$enemies[0]->takeDamage(3);

$hero->takeDamage(2);
echo '<br>';
$hero->takeDamage(20);
$hero->takeDamage(10);
echo '<br>';


pre_r($hero->health);

