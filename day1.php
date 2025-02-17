<html>

    <head>
        <title> PHP - Rega </title>
        <style>
            /* CSS buat Perkenalan */
            .perkenalkan{
                color: blueviolet;
                font-size: 50pt;
                background-color: burlywood;
                font-family:'Times New Roman', Times, serif;
            }

            /* CSS buat nama */
            .namaku{
                color: midnightblue;
                font-size: 30pt;
                background-color: burlywood;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }

            /* CSS buat Walkes*/
            .walkes{
                color: darkviolet;
                font-size: 30pt;
                background-color: burlywood;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }

            /* CSS buat kelas*/
            .kelas{
                color: blue;
                font-size: 30pt;
                background-color: burlywood;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }

        </style>
    </head>

<body>
    <?php
    echo "<div class = 'perkenalkan'>";
    echo "nama : ";
    echo "<br> <div class = 'namaku'>";
    echo "Aryarega <br>";

    /*
    dari komentar yang saye tahu
    ini komentar yang bisa berbaris - baris
    keren banget ndak si?
    */

    $kelas = "X PPLG 1";
    $walkes = "Bu Yunita";
    echo "<div class = 'walkes'>";
    echo "Wali kelas = $walkes Suciyati <br>";
    echo "wali kelas = ". $walkes ." Seciyati <br>";
    ?>

    Kami dari
    <?php
    echo "<div class = 'kelas'>";
    echo "kelas ";
    echo $kelas;
    ?>

</body>

</html>