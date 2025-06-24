
<br>function pangkat($angka, $pangkat) <br>{
    return $angka ** $pangkat;
}
<br>$angka = 5;
<br>$pangkat = 4;
<br>$hasil = pangkat($angka, $pangkat);

<br>echo "$angka pangkat $pangkat = $hasil";
<br>
<br>
<?php

function pangkat($angka, $pangkat) {
    return $angka ** $pangkat;
}

$angka = 5;
$pangkat = 4;
$hasil = pangkat($angka, $pangkat);

echo "$angka pangkat $pangkat = $hasil";
?>
<br>
<br>1.Fungsi pangkat($angka, $pangkat): Fungsi ini menerima dua parameter yaitu angka dan pangkat. 
  Kemudian menggunakan operator ** untuk menghitung angka yang dipangkatkan.
<br>2.$angka ** $pangkat: Di sini, operator ** digunakan untuk menghitung hasil pangkat. 
  Misalnya, 5 ** 4 akan menghasilkan 625.
<br> 3.Output: Program ini akan menampilkan hasil seperti 5 pangkat 4 = 625 di layar.