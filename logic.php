<?php

$symbols = ['$','#','@','!','*','&','^','%'];
$words = ['math','mathematics','brown','foxy','brother','horse','green','girl','running','boxes','green','chunk','bank','ground'];
$wordslength = count($words);


$randomwords = array_rand($words,($_GET(numwords)));

$password = 'hello Horse Brown Boxes';



if (empty($_GET)) $password = 'Girls candy running sword';
   if(isset($_GET['num']))
      $password .= rand(0,9);
   if(isset($_GET['symbol']))
      $password .= $symbols[rand(0,7)];

?>