<html>
<head>
    <title>tugas 1</title>
</head>
<body>
    <h3>Pengulangan untuk mencari kategori bilangan :</h3>
    <ul>
        <?php
        for ($i = 1; $i <= 20; $i++) {
            $jenis = "";

            
            if ($i % 2 == 0) {
                $jenis .= "bilangan genap";
            } else {
                $jenis .= "bilangan ganjil";
            }

            
            $prima = true;
            if ($i == 1) {
                $prima = false;
            } else {
                for ($j = 2; $j <= sqrt($i); $j++) {
                    if ($i % $j == 0) {
                        $prima = false;
                        break;
                    }
                }
            }

            if ($prima) {
                $jenis .= " sekaligus bilangan prima";
            }

            echo "<li>Angka $i adalah $jenis</li>";
        }
        ?>
    </ul>
</body>
</html>
