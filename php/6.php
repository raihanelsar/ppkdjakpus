<?php

// array sebuah tipe data
// bool, string, number/int, float

// $nama = "Reza, Ibrahim";
// echo $nama;
// echo "<br>";

// array index
$tas_buah = ["Semangka", "Nanas", "Jeruk"];
$tas_buah[] = "Pisang";
$tas_buah[] = "Melon";
print_r($tas_buah);
echo "<br>";
foreach ($tas_buah as $key => $val) {
  echo "index dari " . $val . " adalah " . $key . " <br>";
}

// array associative : array dengan indeks berupa string 
$keranjang  = [
  'buah' => 'Nanas',
  'sayuran' => 'Bayem'
];
echo $keranjang['buah'];
echo "<br>";
echo $keranjang['sayuran'];
