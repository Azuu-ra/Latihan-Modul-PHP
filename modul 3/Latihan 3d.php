<br>function faktorial($a) <br>{
    $hasil = 1;
    <br>for ($i = 1; $i <= $a; $i++) {
        $hasil *= $i;
    }
    <br>return $hasil;
}

<br>$angka = 5;
<br>$hasil = faktorial($angka);
<br>
<br>
<?php

function faktorial($a) {
    $hasil = 1;
    for ($i = 1; $i <= $a; $i++) {
        $hasil *= $i;
    }
    return $hasil;
}

$angka = 5;
$hasil = faktorial($angka);


echo "Faktorial dari $angka = $hasil";
?>
<br>
<br>
<br>Fungsi faktorial($a): Fungsi ini menerima parameter angka $a dan menghitung faktorialnya menggunakan perulangan (loop for).
<br>Perulangan: Variabel $hasil mulai dari 1, kemudian dikalikan dengan angka dari 1 sampai $a.
<br>Misalnya, jika $a = 5, maka perulangan akan mengalikan 1 × 2 × 3 × 4 × 5 = 120.
<br>Output: Hasil dari perhitungan faktorial ditampilkan dengan format Faktorial dari 5 = 120.