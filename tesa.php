<?php
function ubahStyle($teks, $kelasCss) {
    return "<span class='$kelasCss'>$teks</span>";
}
echo ubahStyle("Selamat datang!", "tulisan-keren");

?>
