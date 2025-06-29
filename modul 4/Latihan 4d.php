<?php
$data = array(
    array("negara" => "Indonesia", "ibukota" => "D.K.I. Jakarta", "kode" => "+62"),
    array("negara" => "Singapura", "ibukota" => "Singapura", "kode" => "+65"),
    array("negara" => "Malaysia", "ibukota" => "Kuala Lumpur", "kode" => "+60"),
    array("negara" => "Brunei", "ibukota" => "Bandar Seri Begawan", "kode" => "+673"),
    array("negara" => "Thailand", "ibukota" => "Bangkok", "kode" => "+66"),
    array("negara" => "Laos", "ibukota" => "Vientiane", "kode" => "+856"),
    array("negara" => "Filipina", "ibukota" => "Manila", "kode" => "+63"),
    array("negara" => "Myanmar", "ibukota" => "Naypyidaw", "kode" => "+95")
);

echo "<h2>Data Negara ASEAN</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Negara</th><th>Ibukota</th><th>Kode Telepon</th></tr>";

foreach ($data as $d) {
    echo "<tr>";
    echo "<td>" . $d["negara"] . "</td>";
    echo "<td>" . $d["ibukota"] . "</td>";
    echo "<td>" . $d["kode"] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
