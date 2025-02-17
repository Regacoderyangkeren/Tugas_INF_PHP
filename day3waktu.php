<?php
$jam = date("19.43.23");

if($jam >= date("00.00.00") && $jam < date("04.00.00")) {
    echo("Jam = Dini Hari($jam)");}

else if($jam >= date("04.00.00") && $jam < date("10.00.00")) {
    echo("Jam = Pagi Hari($jam)");}

else if($jam >= date("10.00.00") && $jam < date("15.00.00")) {
    echo("Jam = Siang Hari($jam)");}

else if($jam >= date("15.00.00") && $jam < date("18.00.00")) {
    echo("Jam = Sore Hari($jam)");}

else if($jam >= date("18.00.00") && $jam < date("23.59.59")) {
    echo("Jam = Malam Hari($jam)");}

else {
    echo "Itu jam berapa ege";}
?>
