<?php
// siapkan 2 angka awal
$a=0;
$b=1; 
// 2 angka awal yang akan di tampilkan
echo "$a $b";
for ($i=0; $i<10; $i++)
{
// hitung angka Fibonacci yang akan ditampilkan
$output=$b+$a;
echo " $output";
// angka Fibonacci untuk perhitungan berikutnya
$a=$b;
$b=$output;
}
// hasil:
// 0 1 1 2 3 5 8 13 21 34 55 89
?>