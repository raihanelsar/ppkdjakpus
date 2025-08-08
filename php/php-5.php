<!-- function -->

<?php

// $nama = "Reza";
// echo $nama;
// echo "<br>";

// $nama = "Bambang";
// echo $nama;
// echo "<br>";

function callName($name = "Default")
{
  // echo "Reza Ibrahim";
  return "Nama saya adalah : " . $name . "<br>";
}

echo callName(); //default
echo callName("Reza"); //reza
echo callName("Bambang"); //bambang

function rumusPersegiPanjang($panjang, $lebar)
{
  return "Luas : " . $panjang * $lebar . "<br>";
}

echo rumusPersegiPanjang(5, 3); //15