<?php 
include "hafta11.php";
$kayit=$db->exec("INSERT INTO deneme SET
id='10',ad='Mehmet',soyad='Atıcı'");
if($kayit)
{
    echo"Kayıt gerçekleştirildi. ID değeri :".$db->lastInsertId();
}

?>