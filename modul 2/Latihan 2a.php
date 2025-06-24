<html>
    <head>
<title> latihan </title>
    </head>
    <body>
        <table border="1" cellpadding ="3" cellspacing="0">
            <tr>
                <th>kolom 1</th>
                <th>kolom 2</th>
                <th>kolom 3</th>
                <th>kolom 4</th>
                <th>kolom 5</th>
            </tr>

            <?php
        for ($i = 1; $i <= 15; $i++) {
            echo "<tr>";
        for ($j = 1; $j <= 5; $j++) {
            echo "<td>no $i Baris $i Kolom $j</td>";
            }
            echo "</tr>";
        }
        ?>
            

        </table>
    </body>
</html>