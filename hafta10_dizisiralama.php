<?php
// echo"<h3>Dizilerde Sıralama</h3>";
// $iller=array(
//     "Ankara"=>6,
//     "İstanbul"=>34,
//     "izmir"=>35,
//     "Sivas"=>58,
//     "Balıkesir"=>10,
//     "Kocaeli"=>41,
//     "Kırklareli"=>39
// );
// echo "<h5>Dizi elemanlarını anahtar değerlerini koruyarak küçükten büyüğe sıralama</h5>";
// echo"<pre>";
// asort($iller);
// print_r($iller);
// echo"</pre>";
// echo"<h5>dizi elemanlarını anahtar değerlerini koruyarak büyükten küçüğe sıralama</h5>";
// echo"<pre>";
// arsort($iller);
// print_r($iller);
// echo"</pre>";




$sayi=array(
    "1"=>10,
    "2"=>30,
    "3"=>5,
    "4"=>85,
    "5"=>120,

);
echo"<h5>dizi elemanlarını küçükten büyüğe doğru sıralama</h5>";
echo"<pre>";
sort($sayi);
print_r($sayi);
echo"</pre>";

echo"<h5>dizi elemanlarını büyükten küçüğe doğru sıralama</h5>";
echo"<pre>";
rsort($sayi);
print_r($sayi);
echo"</pre>";

echo"<h5>dizi elemanlarını rastgele doğru sıralama</h5>";
echo"<pre>";
shuffle($sayi);
print_r($sayi);
echo"</pre>";

echo"<h5>dizi elemanlarını indis değerlerine göre küçükten büyüğe doğru sıralama</h5>";
echo"<pre>";
ksort($sayi);
print_r($sayi);
echo"</pre>";

echo"<h5>dizi elemanlarını indis değerlerine göre büyükten küçüğe doğru sıralama</h5>";
echo"<pre>";
krsort($sayi);
print_r($sayi);
echo"</pre>";

?>  