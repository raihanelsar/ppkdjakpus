<?php
// struktur kendali
// perulangan for, while, do.. while, foreach

for ($i = 0; $i < 5; $i++) {
  echo "hello <br>";
}

//While
$i = 0; // ini adalah increment
while ($i < 5) {
  echo "hehe <br>";
  $i++; // ini adalah decrement
}
//do..while
$i = 0;
do {
  echo "xaxaxaxa<br>";
  $i++;
} while ($i < 5);
?>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table border="1" cellpadding="10" cellspacing="0">
    <?php for ($i = 0; $i < 5; $i++) :  //horizon
      if ($i % 2 == 0) {
        echo "<tr style='background-color: red;'>";
      } else {
        echo "<tr>";
      }
    ?>
      <?php for ($j = 0; $j < 3; $j++) { //vertikal
        echo "<td>$i, $j </td>";
      } ?>
      </tr>
    <?php endfor; ?>
  </table>
</body>

</html>