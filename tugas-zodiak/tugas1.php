<?php 

//simpan imputan
$tgl = @$_POST['tgl'];
$bln = @$_POST['bln'];
$hasil = @$_POST['hasil'];

//submit



// (1) Aries
if ( ($tgl >= 21 && $tgl <= 31 && $bln == 3) || ($tgl >= 1 && $tgl <= 19 & $bln ==4)) {
    $hasil = "ARIES";
}
// (2) Taurus
if ( ($tgl >= 20 && $tgl <= 30 && $bln == 4) || ($tgl >= 1 && $tgl <= 20 & $bln ==5)) {
    $hasil = "TAURUS";
}
// (3) Gemini
if ( ($tgl >= 21 && $tgl <= 31 && $bln == 5) || ($tgl >= 1 && $tgl <= 20 & $bln ==6)) {
    $hasil = "GEMINI";
}
// (4) Cancer
if ( ($tgl >= 21 && $tgl <= 30 && $bln == 6) || ($tgl >= 1 && $tgl <= 22 & $bln ==7)) {
    $hasil = "CANCER";
}
// (5) Leo
if ( ($tgl >= 23 && $tgl <= 31 && $bln == 7) || ($tgl >= 1 && $tgl <= 22 & $bln ==8)) {
    $hasil = "LEO";
}
// (6) Virgo
if ( ($tgl >= 23 && $tgl <= 31 && $bln == 8) || ($tgl >= 1 && $tgl <= 22 & $bln ==9)) {
    $hasil = "VIRGO";
}
// (7) Libra
if ( ($tgl >= 23 && $tgl <= 30 && $bln == 9) || ($tgl >= 1 && $tgl <= 22 & $bln ==10)) {
    $hasil = "LIBRA";
}
// (8) Scorpius
if ( ($tgl >= 23 && $tgl <= 31 && $bln == 10) || ($tgl >= 1 && $tgl <= 21 & $bln ==11)) {
    $hasil = "SCORPIUS";
}
// (9) Sagittarius
if ( ($tgl >= 22 && $tgl <= 30 && $bln == 11) || ($tgl >= 1 && $tgl <= 21 & $bln ==12)) {
    $hasil = "SAGITTARIUS";
}
// (10) Capricorn
if ( ($tgl >= 22 && $tgl <= 31 && $bln == 12) || ($tgl >= 1 && $tgl <= 19 & $bln ==1)) {
    $hasil = "CAPRICORN";
}
// (11) Aquarius
if ( ($tgl >= 20 && $tgl <= 31 && $bln == 1) || ($tgl >= 1 && $tgl <= 18 & $bln ==2)) {
    $hasil = "AQUARIUS";
}
// (12) Pisces
if ( ($tgl >= 19 && $tgl <= 29 && $bln == 2) || ($tgl >= 1 && $tgl <= 20 & $bln ==3)) {
    $hasil = "PISCES";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zodiak - Cari Tau Zodiakmu Disini!</title>
</head>
<body>
    <h2>Cari tau zodiakmu disini</h2>

    <form action="" method="post">
        <label for="fname">Tanggal Lahir :</label><br>
  <input type="text" name="tgl" value="<?=$tgl?>"><br>
  <label for="lname">Bulan Lahir :</label><br>
  <input type="text" name="bln" value="<?=$bln?>"><br><br>
  <label for="lname">Hasil :</label><br>
  <input type="text" name="hasil" value="<?=$hasil?>"><br><br>
  <input type="submit" name="submit" value="Submit">
    </form>
<hr>
</br>
    <footer>
        <p align="center"> Copyright @ 2021 </p>
        <p align="center"> Alfian Reno P </p>
    </footer>
</body>
</html>

