<html>
<head>
    <meta charset="UTF-8">
    <title>Latihan 2c</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
        }
        .clear {
            clear: both;
        }

        .ganjil {
            background-color: #003;
            color: #fff;
        }

        .genap {
            background-color: #999;
            color: #000;
        }
    </style>
</head>
<body>

<?php
$baris = 5;

for ($i = 1; $i <= $baris; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        // tentukan kelas berdasarkan baris (ganjil/genap)
        $kelas = ($i % 2 == 0) ? "genap" : "ganjil";
        echo "<div class='kotak $kelas'>$j</div>";
    }
    echo "<div class='clear'></div>";
}
?>

</body>
</html>
