<html> 
    <head>
        <meta charset="utf-8">
</head>
    <body>
        <form name="form" action="" method="post">
     <table>
        <tr>
        <td>Adı:</td><td><input type="text" name="adi"></td></tr>
        <tr><td>Soyad:</td><td><input type="text" name="sadi"></td></tr>
        <tr><td>Tc Kimlik Numarası:</td><td><input type="text" name="tcno"></td></tr>
        <tr><td>Eğitim Durumu</td><td>
    <select>
    <option>Hazırlık</option>
        <option>Önlisans</option>
        <option>Lisans</option>
        <option>Yüksek Lisans</option>
    </select></td></tr>
    <tr><td>Cinsiyet</td><td><input type="radio" name="kadin">Kadın <input type="radio" name="erkek">Erkek</td></tr>
        <tr><td><input type="submit" name="gonder" value="Kaydet"></td>
</tr>
</table>
        
</form>
</body>
</html>
<?php
if(isset($_POST["gonder"]))
{
    $kadi=$_POST["adi"];
    $ksoyadi=$_POST["sadi"];
    echo "Merhaba".$kadi." ".$ksoyadi;
}
?>