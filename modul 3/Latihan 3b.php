<?php
echo "isset() dan empty() adalah dua fungsi yang sering"."<br>".
"digunakan dalam PHP untuk mengecek kondisi variabel. Keduanya kelihatannya mirip,"."<br>".
"tapi ada perbedaan penting yang harus kita"."<br><br>";

echo "isset"."<br>".
"digunakan untuk cek apakah variabel sudah ada (terdefinisi) dan bukan null."."<br>".
"Kalau variabel ada dan bukan null, maka fungsi ini bakal mengembalikan true. Sebaliknya,"."<br>".
"kalau variabelnya belum didefinisikan atau null, maka hasilnya false."."<br>";

$var1 = "Halo!";
$var2 = null;

echo isset($var1) ? "Var1 ada" : "Var1 tidak ada";  // Output: Var1 ada
echo "<br>";
echo isset($var2) ? "Var2 ada" : "Var2 tidak ada";  // Output: Var2 tidak ada


echo "<br>"."isset($var1) itu true, karena variabel $var1 ada dan berisi teks 'Halo!'." . "<br>" .
"isset($var2) itu false, karena $var2 nilainya null."."<br><br>";

echo "empty(kosong)"."Nah, kalau empty() digunakan buat cek apakah variabel kosong atau tidak."."<br>"."
Maksudnya, variabel dianggap kosong kalau isinya salah satu dari ini:"."<br>".
"String kosong ".",Angka 0,null,false,Array kosong []"."<br><br>";

$var3 = "";
$var4 = "Halo";
$var5 = 0;


echo empty($var3) ? "Var3 kosong" : "Var3 tidak kosong";  // Output: Var3 kosong
echo "<br>";
echo empty($var4) ? "Var4 kosong" : "Var4 tidak kosong";  // Output: Var4 tidak kosong
echo "<br>";
echo empty($var5) ? "Var5 kosong" : "Var5 tidak kosong";  // Output: Var5 kosong

echo "<br>"."empty($var1) itu true, karena $var1 isinya adalah string kosong ( )"."<br>".
"empty($var2) itu false, karena $var2 berisi 'Halo', yang jelas bukan kosong."." <br>".
"empty($var3) itu true, karena $var3 berisi angka 0, yang dianggap kosong oleh PHP.";

?>