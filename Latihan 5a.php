<?php
if (isset($_GET['angka'])) {
    $angka = $_GET['angka'];
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo "<br>";
    }
} else {
    echo "Parameter 'angka' tidak ditemukan di URL.";
}
?>
