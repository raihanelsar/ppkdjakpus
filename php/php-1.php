<?php
echo "Halo PHP", "<br>";
echo "<br>";
echo 123;
echo "<br>";
echo true;
echo "<br>";
echo false;
echo "<br>";
print_r("hallooooo" . "<br>");
var_dump("tessss");
echo "<br>";
$nama = "Udin" . "<br>";
echo $nama;

// HTML di dalam PHP;
$html = "<h1?>HTML di dalam PHP</h1>";
echo $html;

// Operator Aritmatika + - * / %
$nilai1 = 7;
$nilai2 = 18.5;
echo "<br>";
echo $nilai1 . "+" . $nilai2 . "=" . $nilai1 + $nilai2;
echo "<br>";
// Operator Assignment = += -= *= /= %= .=
$nama = "Dino ";
// $nama .= "";
$nama .= "Danuarta ";
// $nama .= "";
$nama .= "Siregar";
echo $nama . "<br>";
$x = 4;
$x += 8;
echo $x;
echo "<br>";
// Perbandingan < ,> , <= ,>= , == , !=
var_dump(5 >= 5);
echo "<br>";
// Logika && , || , !
$y = 5;
var_dump($y <= 5 && $y % 2 == 0); // T && F=F