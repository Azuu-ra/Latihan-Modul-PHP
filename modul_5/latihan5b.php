<?php
$data = [
    ["nama" => "Andi", "umur" => 20, "alamat" => "Jambi"],
    ["nama" => "Budi", "umur" => 21, "alamat" => "Palembang"],
    ["nama" => "Citra", "umur" => 19, "alamat" => "Jakarta"]
];

foreach ($data as $d) {
    $url = "latihan5c.php?nama=" . urlencode($d['nama']) . 
           "&umur=" . urlencode($d['umur']) . 
           "&alamat=" . urlencode($d['alamat']);
    echo "<a href='$url'>{$d['nama']}</a><br>";
}
?>
