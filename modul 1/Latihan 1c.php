<!DOCTYPE html>
<html>
<head>
    <title>Latihan 1c</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            display: inline-block;
            text-align: center;
            line-height: 50px;
            margin: 2px;
            font-weight: bold;
        }
        .baris {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

<?php
$a = "A";
$b = "B";
$c = "C";
?>

<div class="baris">
    <div class="kotak"><?= $a ?></div>
</div>

<div class="baris">
    <div class="kotak"><?= $a ?></div>
    <div class="kotak"><?= $b ?></div>
</div>

<div class="baris">
    <div class="kotak"><?= $a ?></div>
    <div class="kotak"><?= $b ?></div>
    <div class="kotak"><?= $c ?></div>
</div>

</body>
</html>
