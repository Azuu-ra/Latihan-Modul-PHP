<?php
if (isset($_GET['nama']) && isset($_GET['umur']) && isset($_GET['alamat'])) {
    echo "<h3>Detail Data</h3>";
    echo "Nama: " . htmlspecialchars($_GET['nama']) . "<br>";
    echo "Umur: " . htmlspecialchars($_GET['umur']) . "<br>";
    echo "Alamat: " . htmlspecialchars($_GET['alamat']) . "<br>";
    echo "<a href='Latihan 5b.php'>Kembali</a>";
} else {
    echo "Data tidak lengkap.";
}
?>
