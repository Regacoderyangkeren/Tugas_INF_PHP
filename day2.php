1 + 2 = 
<br>
<?php
$angka1 = 3;
$angka2 = 5;
$penjumlahan = $angka1 + $angka2;
$x = $angka1 * $angka2;
$bagi = $angka2 / $angka1;
$kurang = $angka1 - $angka2;

echo $angka1 . " + " . $angka2 . " = " . $penjumlahan;
echo "<br> $angka1 x $angka2 = $x";
echo "<br> $angka2 : $angka1 = $bagi";
echo "<br> $angka1 - $angka2 = $kurang";
echo "<br> $angka2<sup> $angka1 </sup> = "; //"sup" itu perpangkatan
echo pow($angka2, $angka1); //"pow" itu "power" atau perpangkatan di PHP
echo "<br>";
echo pow(3,5); //angka pertama (3) itu angka basis, dan angka kedua (5) itu angka eksponen
?>