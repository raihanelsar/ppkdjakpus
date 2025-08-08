<?php
// perkondisian
// if else
// if else if else
// switch
$n = 10;
if ($n < 20) {
  echo "Betullll";
} else {
  echo "Salahhhhh" . "<br>";
}
echo "<br>";

$x = 30;
if ($x < 20) {
  echo "Benarrrrr";
} else if ($x == 20) {
  echo "ini resultnya";
} else {
  echo "Salah";
}
echo "<br>";

// if tenary
$no = 1;
$hasil = ($no % 2 == 0) ? 'Genap' : (($no % 2) ? 'Ganjil' : 'tak terhingga');
echo $hasil;

echo "<br>";

$nilai = 75;
// jika nilai lebih dari atau sama dengan 80 maka A
// jika nilai lebih dari atau sama dengan 70 maka B
// jika nilai lebih dari atau sama dengan 60 maka C
// D
$result = ($nilai >= 80) ? 'A' : (($nilai >= 70) ? 'B' : (($nilai >= 60) ? 'C' : 'D'));
echo "<br>", $result, "<br>";

$score = 68;
$r = "";

switch (true) {
  case ($score >= 80);
    $r = 'A';
    break;
  case ($score >= 70);
    $r = 'B';
    break;
  case ($score >= 60);
    $r = 'C';
    break;
  default:
    $r = 'D';
    break;
}
echo $r;
echo "<br>";

$day = "Senin";
// $day = "Week day" or "Weekday"

if ($day == "Sabtu" || $day == "Minggu") {
  $dayType = "Weekend";
} else {
  $dayType = "Weekday";
}
echo "Hari $day adalah $dayType.";

echo "<br>";

$day = "Senin";
$weekend = ["Sabtu", "Minggu"];
$dayType = in_array($day, $weekend) ?
  "Weekend" : "Weekday";
echo "Hari $day adalah $dayType";
echo "<br>";

$day = "Thursday";
$dayType = "";
switch ($day) {
  case "Monday":
  case "Tuesday":
  case "Wednesday":
  case "Thursday":
  case "Friday":
    $dayType = 'Weekday';
    break;
  case "Saturday":
  case "Sunday":
    $dayType = 'Weekend';
    break;
  default;
    $dayType = 'bukan weekday atau weekend';
    break;
}
echo "$day is $dayType.";
