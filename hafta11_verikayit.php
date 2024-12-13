<?php 
include "hafta11.php";
//veritabanına exec kullanarak manuel veri eklemee
$kayit=$db->exec("INSERT INTO deneme SET
id='4',ad='Gelişim',soyad='Üniversitesi'");
if($kayit)
{
    echo "Kayıt işlemi başaılı";
}
else
{
    echo "Kayıt işlemi başarısız";
}


//Veritabanına prepare kullanarak veri ekleme
$sorgu=$db->prepare("INSERT INTO deneme SET
id=?,
ad=?,
soyad=?
" );
$kayit=$sorgu->execute(array("5","Tuğba","Saray Çetinkaya"));
if($kayit)
{
    echo "Kayıt İşlemi Başarılı";
}
else
{
    echo "Kayıt işlemi başarısız";
}



//veritabanına prepare kullanarak manuel veri ekleme
$sorgu=$db->prepare("INSERT INTO deneme SET
id=:id,
ad=:ad,
soyad=:soyad
");
$kayit=$sorgu->execute(array(
    "soyad"=>"Benli",
    "id"=>"8",
    "ad"=>"Sena Nur"));
    if($kayit)
    {
        echo "Kayıt işlemi başarılı";
    }
else
{
    echo "Kayıt işlemi başarısız";
}

?>