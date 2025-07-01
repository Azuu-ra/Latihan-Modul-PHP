<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['angka'])) {
        $angka = $_POST['angka'];
        for ($i = 1; $i <= $angka; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $j . " ";
            }
            echo "<br>";
        }
    } else {
        echo "Input tidak boleh kosong.";
    }
}
?>

<form method="post" action="">
    Masukkan angka: <input type="number" name="angka">
    <input type="submit" value="Tampilkan">
</form>
