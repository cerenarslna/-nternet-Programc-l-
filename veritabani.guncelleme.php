<?php 
include "hafta11.php";
//Veritabanından exec ile veri güncelleme
$guncelle=$db->exec("UPDATE deneme SET adi='irem' WHERE soyad='Benli'");
if($guncelle)
{
    echo "Güncelleme Başarılı";
}
else 
{
    echo "Güncelleme başarısız";
}



//Veritabanından prepare ile veri güncelleme
$sorgu=$db->prepare("UPDATE deneme SET
ad=?,
soyad=?
");
$guncelle=$sorgu->execute(array("çisem","Atıcı"));
if($guncelle)
{
    echo "Güncelleme basarılı";
}
else
{
    echo "Güncelleme başarısız";
}









?>