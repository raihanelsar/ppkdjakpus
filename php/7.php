<?php
// $_POST, $_GET, $_REQUEST, $_SESSION
// >, <. >=, ==, ===, !=
?>

<!-- <form action="" method="post">
  <label for="">Nama</label>
  <input type="text" name="nama" placeholder="Masukan nama anda">
  <br>
  <button type="submit">Simpan</button>
</form> -->

<?php
if (isset($_POST['nama'])) {
  $nama = $_POST['nama'];
  echo "<h1>Nama anda : $nama </h1>";
}
?>

<!-- 
Buat program sederhana dengan satu buah input bernama nilai 
jika  nilai lebih dari 90 maka grade nya A
jika  nilai 80 sampai 89 maka grade nya B
jika  nilai 70 sampai 79 maka grade nya C
jika  nilai 60 sampai 69 maka grade nya D
jika  nilai dibawah 59 maka grade nya E
-->

<form method="post">
  Masukkan Nilai:
  <input type="number" name="nilai" required>
  <input type="submit" value="Cek Grade">
</form>

<?php
if (isset($_POST['nilai'])) {
  $nilai  = $_POST['nilai'];
  if ($nilai >= 90 && $nilai <= 100) {
    $grade = "A";
  } else if ($nilai >= 80 && $nilai <= 89) {
    $grade = "B";
  } else if ($nilai >= 70 && $nilai <= 79) {
    $grade = "C";
  } else if ($nilai >= 60 && $nilai <= 69) {
    $grade = "D";
  } else if ($nilai < 60) {
    $grade = "E";
  } else {
    $grade = "Nilai tidak valid";
  }
}

echo "<br> Nilai anda: $nilai <br> Grade: $grade ";
?>