<?php

$symbols = ['$','#','@','!','*','&','^','%'];
$words = ['math','green','brown','foxy'];
$wordslength = count($words);


$randomwords = array_rand($words,($_GET(numwords)));

$password = 'hello Horse Brown Boxes';



if (empty($_GET)) $password = 'Girls candy running sword';
   if(isset($_GET['num']))
      $password .= rand(0,9);
   if(isset($_GET['symbol']))
      $password .= $symbols[rand(0,7)];

?>