<?php
//Array :
// $foods = array ("Burger", "Nasi Padang", "Gado-gado");
$foods = ["Burger", "Nasi Padang", "Gado-gado"];
var_dump($foods[2]);

$fills = ["Spageti", "Pizza"];
foreach ($fills as $fill) {
  $foods[] = $fill;
}
var_dump($foods);
