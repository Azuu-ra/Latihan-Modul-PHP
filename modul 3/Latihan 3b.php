<?php
//adi, isset() dan empty() adalah dua fungsi yang sering 
//digunakan dalam PHP untuk mengecek kondisi variabel. Keduanya kelihatannya mirip, 
//tapi ada perbedaan penting yang harus kita

//isset
//digunakan untuk cek apakah variabel sudah ada (terdefinisi) dan bukan null.
//Kalau variabel ada dan bukan null, maka fungsi ini bakal mengembalikan true. Sebaliknya, 
//kalau variabelnya belum didefinisikan atau null, maka hasilnya false.

$var1 = "Halo!";
$var2 = null;
$var3 = "";
$var4 = "Halo";
$var5 = 0;

echo isset($var1) ? "Var1 ada" : "Var1 tidak ada";  // Output: Var1 ada
echo "<br>";
echo isset($var2) ? "Var2 ada" : "Var2 tidak ada";  // Output: Var2 tidak ada


//isset($var1) itu true, karena variabel $var1 ada dan berisi teks "Halo!".
//isset($var2) itu false, karena $var2 nilainya null.

//empty(kosong)
//Nah, kalau empty() digunakan buat cek apakah variabel kosong atau tidak. 
//Maksudnya, variabel dianggap kosong kalau isinya salah satu dari ini:
//String kosong "",Angka 0,null,false,Array kosong []



echo empty($var3) ? "Var3 kosong" : "Var3 tidak kosong";  // Output: Var3 kosong
echo "<br>";
echo empty($var4) ? "Var4 kosong" : "Var4 tidak kosong";  // Output: Var4 tidak kosong
echo "<br>";
echo empty($var5) ? "Var5 kosong" : "Var5 tidak kosong";  // Output: Var5 kosong

//empty($var1) itu true, karena $var1 isinya adalah string kosong "".
//empty($var2) itu false, karena $var2 berisi "Halo", yang jelas bukan kosong.
//empty($var3) itu true, karena $var3 berisi angka 0, yang dianggap kosong oleh PHP.

?>