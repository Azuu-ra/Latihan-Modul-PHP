<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar - Contoh 2</title>
</head>
<body>
    <h1>Contoh Penggunaan PHP Dasar</h1>
    
    <?php
    // Menampilkan pesan
    echo "<p>Ini adalah contoh penggunaan PHP di dalam HTML.</p>";

    // Variabel
    $nama = "Rava";
    $usia = 2;

    // Menampilkan variabel
    echo "<p>Nama saya adalah: " . $nama . "</p>";
    echo "<p>Usia saya: " . $usia . " tahun.</p>";

    // Pengkondisian if-else
    if ($usia < 5) {
        echo "<p>Anda masih sangat muda!</p>";
    } else {
        echo "<p>Anda sudah cukup besar!</p>";
    }

    // Pengulangan while
    echo "<h2>Perulangan While:</h2>";
    $count = 1;
    echo "<ul>";
    while ($count <= 5) {
        echo "<li>Perulangan ke: $count</li>";
        $count++;
    }
    echo "</ul>";

    // Fungsi untuk menghitung luas persegi panjang
    function hitungLuas($panjang, $lebar) {
        return $panjang * $lebar;
    }

    // Menampilkan hasil perhitungan
    $panjang = 10;
    $lebar = 5;
    $luas = hitungLuas($panjang, $lebar);
    echo "<p>Luas persegi panjang dengan panjang $panjang dan lebar $lebar adalah: $luas</p>";
    ?>

</body>
</htm
