<html>
    <head>
        <style>
            .ubah {
                font-size: 28px;
                font-family: Arial, sans-serif;
                color: #1A0547;
                font-style: italic;
                font-weight: bolder;
            }
            </style>
            </head>
            <body>
                
                <?php
                $teks = "Hello World! Here I come!";
                $kelas = "ubah";
function ubahStyle($teks, $kelasCss) {
    return "<span class='$kelasCss'>$teks</span>";
}

echo ubahStyle($teks, $kelas);

?>

</body>
</html>
