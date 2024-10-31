<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sayı Kontrolü</title>
</head>
<body>
    <h2>Sayının pozitif negatiflik ve çift tek olma durumu </h2>
    
<form name="form" action=" " method="post">
        <table>
<tr>
<td>Sayı Giriniz:</td>
<td><input type="text" name="sayi">
</td>


    <td><input type="submit" name="kontrol" value="Kontrol Et"></td>
</tr>
        </table>
</form>

</body>
</html>

<?php 
if(isset($_POST["kontrol"]))
{
    $ksayi=$_POST["sayi"];
    if($ksayi>0 && $ksayi%2==0)

{
    echo "Sayı hem pozitif hem de çifttir.";
}
else if($ksayi>0 && $ksayi%2==1)
{
    echo "Sayı hem pozitif hem de tektir.";
}
else if($ksayi<0 && $ksayi%2==0)
{
    echo"Sayı hem negatif hem de çifttir.";
}
else if($ksayi<0 && $ksayi%2==-1)
{
    echo "Sayı hem negatif hem de tektir.";
}
else 
{
    echo "Sayı değeri sıfırdır";
}
}







?>