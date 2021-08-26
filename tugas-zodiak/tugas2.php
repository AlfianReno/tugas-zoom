<?php 


$tgl = @$_POST['tgl'];
$bln = @$_POST['bln'];
$hasil = @$_POST['hasil'];

switch ($bln) {
    case 1: //JANUARI

        if ( $tgl >= 1 && $tgl <= 12) {
            $hasil = 'Sagitarius';
        }
        if ( $tgl >= 13 && $tgl <= 31) {
            $hasil = 'Capricorn';
        }
        
        break;

    case 2: //FEBRUARI
        
        if ( $tgl >= 1 && $tgl <= 11) {
            $hasil = 'Capricorn';
        }
        if ( $tgl >= 12 && $tgl <= 28) {
            $hasil = 'Aquarius';
        }
        

        break;


    case 3: //MARET
        
        if ( $tgl >= 1 && $tgl <= 13) {
            $hasil = 'Aquarius';
        }
        if ( $tgl >= 14 && $tgl <= 31) {
            $hasil = 'Pisces';
        }
        break;

    case 4: //APRIL
        
        if ( $tgl >= 1 && $tgl <= 13) {
            $hasil = 'Pisces';
        }
        if ( $tgl >= 14 && $tgl <= 30) {
            $hasil = 'Aries';
        }
        break;

    case 5: //MEI
        
        if ( $tgl >= 1 && $tgl <= 13) {
            $hasil = 'Aries';
        }
        if ( $tgl >= 14 && $tgl <= 31) {
            $hasil = 'Taurus';
        }
        break;

    case 6: //JUNI
        
        if ( $tgl >= 1 && $tgl <= 13) {
            $hasil = 'Taurus';
        }
        if ( $tgl >= 14 && $tgl <= 30) {
            $hasil = 'Gemini';
        }
        break;

    case 7: //JULI
        
        if ( $tgl >= 1 && $tgl <= 13) {
            $hasil = 'Gemini';
        }
        if ( $tgl >= 14 && $tgl <= 31) {
            $hasil = 'Cancer';
        }
        break;

    case 8: //AGUSTUS
        
        if ( $tgl >= 1 && $tgl <= 13) {
            $hasil = 'Cancer';
        }
        if ( $tgl >= 14 && $tgl <= 31) {
            $hasil = 'Leo';
        }
        break;

    case 9: //SEPTEMBER
        
        if ( $tgl >= 1 && $tgl <= 12) {
            $hasil = 'Leo';
        }
        if ( $tgl >= 13 && $tgl <= 30) {
            $hasil = 'Virgo';
        }
        break;

    case 10: //OKTOBER
        
        if ( $tgl >= 1 && $tgl <= 13) {
            $hasil = 'Virgo';
        }
        if ( $tgl >= 14 && $tgl <= 31) {
            $hasil = 'Libra';
        }
        break;

    case 11: //NOVEMBER
        
        if ( $tgl >= 1 && $tgl <= 12) {
            $hasil = 'Libra';
        }
        if ( $tgl >= 13 && $tgl <= 30) {
            $hasil = 'Scorpio';
        }
        break;

    case 12: //DESEMBER
        
        if ( $tgl >= 1 && $tgl <= 13) {
            $hasil = 'Scorpio';
        }
        if ( $tgl >= 14 && $tgl <= 31) {
            $hasil = 'Sagittarius';
        }
        break;
        
    default:
    $hasil = 'BELUM ADA';
    break;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zodiak - Cari Tau Zodiakmu Disini!</title>
    <link rel="stylesheet" href="style.css">
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
<h3>*Mesin pencari zodiak diatas menggunakan jenis zodiak sidereal </br>
    sumber : https://id.wikipedia.org/wiki/Zodiak atau bisa melihat tabel di bawah ini.
</h3>
    <div class="tabel">
    <table border="2">
  <tr>
    <th>Nama</th>
    <th>Zodiak sidereal
(Jyotisha) (2021, UTC)</th>
  </tr>
  <tr>
    <td>Aries</td>
    <td>14 April – 14 Mei</td>
  </tr>
  <tr>
    <td>Taurus</td>
    <td>14 Mei – 14 Juni</td>
  </tr>
  <tr>
    <td>Gemini</td>
    <td>14 Juni – 14 Juli</td>
  </tr>
  <tr>
    <td>Cancer</td>
    <td>14 Juli – 14 Agustus</td>
  </tr>
  <tr>
    <td>Leo</td>
    <td>14 Agustus – 13 September</td>
  </tr>
  <tr>
    <td>Virgo</td>
    <td>13 September – 14 Oktober</td>
  </tr>
  <tr>
    <td>Libra</td>
    <td>14 Oktober – 13 November</td>
  </tr>
  <tr>
    <td>Scorpio</td>
    <td>13 November – 14 Desember</td>
  </tr>
  <tr>
    <td>Sagitarius</td>
    <td>14 Desember – 13 Januari</td>
  </tr>
  <tr>
    <td>Capricorn</td>
    <td>13 Januari – 12 Februari</td>
  </tr>
  <tr>
    <td>Aquarius</td>
    <td>12 Februari – 14 Maret</td>
  </tr>
  <tr>
    <td>Pisces</td>
    <td>14 Maret – 14 April</td>
  </tr>
</table>
    </div>
    </br>
<hr>
</br>
    <footer>
        <p align="center"> Copyright @ 2021 </p>
        <p align="center"> Alfian Reno P </p>
    </footer>
</body>
</html>