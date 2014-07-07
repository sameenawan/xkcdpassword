<?php

$symbols = ['$','#','@','!','*','&','^','%'];

$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");

$wordslength = count($input);

$password = 'hello Horse Brown Boxes';



if (empty($_GET)) $password = 'Girls candy running sword';
else{$password = array_rand($input,($_GET(numwords))) }
   if(isset($_GET['num']))
      $password .= rand(0,9);
   if(isset($_GET['symbol']))
      $password .= $symbols[rand(0,7)];

?>