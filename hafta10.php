<?php

//dizilerde ekle çııkar fonksiyonları
/*echo"<h3>Array_unshift() kullanımı</h3>"."<br>";
$diller=array("PHP","C#");
array_unshift($diller,"Javascript","Python");
print_r($diller);
echo "<h3>Array_shift() kullanımı</h3>"."<br>";
array_shift($diller);
print_r($diller);
echo"<h3>Array_push() kullanımı </h3>";
array_push($diller,"Vue","Laravel");
print_r($diller);
echo"<h3>Array_pop kullanımı</h3>";
array_pop($diller);
print_r($diller);
echo"<h3>Unset kullanımı</h3>";
unset($diller["2"]);
print_r($diller);






//dizi birleştirme
echo"<h3> Dizi elemanlarını birleştirme</h3>";
$marmara_bolge=array("Balıkesir","İstanbul","Bursa");
$ege_bolge=array("izmir","Manisa","Aydın");
$tum_iller=array_merge($marmara_bolge,$ege_bolge);
echo"<pre>";
print_r($tum_iller);
echo"</pre>";





//dizideki ortak elemanı bulma
echo"<h3>Dizideki ortak eleman</h3>";
$dizi1=array("Araba","Kalem","Ev");
$dizi2=array("Araba","kalem","masa");
$dizi3=array("Kalem","Araba","Sandalye");
$dizi4=array("Masa","Kalem","Araba");
$ortak_bul=array_intersect($dizi1,$dizi2,$dizi3,$dizi4);
echo"<pre>";
print_r($ortak_bul);
echo"</pre>";




//dizi elemanlarını tek seferde çıktı alma
echo"<h3> İmplode kullanımı </h3>";
$programlamadilleri=array("PHP","HTML","CSS","Javascript");
$duzenle=implode(" | ",$programlamadilleri);
echo $duzenle;




//dizi elemanlarından rastgele seçim
echo"<h3> diziden rastgele eleman seçme</h3>";
$sehir=array("Balıkesir","İstanbul","İzmir","Van","SİVAS","Muğla");
$rastgele=array_rand($sehir);
echo $sehir[$rastgele];


//dizi elemanlarını tersine çevirme
echo"<h3>dizi elemanlarını tersine çevirme</h3>";
$isim=array("Aysima","Yunus","Demir","Yıldız","Aysu","Halil");
$ters_cevir=array_reverse($isim);
echo"ilk hali"."<br>";
echo"<pre>";
print_r($isim);
echo"</pre>";
echo"Ters hali"."<br>";
echo"<pre>";
print_r($ters_cevir);
echo"</pre>";

*/



//dizi sayıcıları
echo"<h3>dizi sayıcıları</h3>";
$sayi=array(0,2,4,1,1,3,5,6);
echo"Eleman sayısı: ".count($sayi)."<br>"."dizideki elemanlarının çarpım sonucu:".array_product($sayi)."<br>"."dizideki elemanlarının toplam sayısı:".array_sum($sayi)."<br>"."dizideki tekrar eden elemanlar:";
print_r(array_count_values($sayi));




?>