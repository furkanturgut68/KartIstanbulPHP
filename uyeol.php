<?php
include("ayar.php");


$isim = $_POST["isim"]; 
$soyad = $_POST["soyad"];
$tc = $_POST["tc"];
$mail = $_POST["mail_adres"];
$sifre = $_POST["sifre"];
$dogum = $_POST["dogum_tarihi"];
$telefon = $_POST["telefon"];

$kontrol = mysqli_query($baglan,"select * from uye_ol where mail_adres= '$mail' and tc='$tc'");
$deger = mysqli_num_rows($kontrol);

if($mail == "" || $sifre == "" || $telefon == "" ){

    echo json_encode(array('response' => false));

} else if($deger < 1){
  $ekle = mysqli_query($baglan,"insert into uye_ol (isim,soyad,tc,mail_adres,sifre,dogum_tarihi,telefon) values ('$isim','$soyad','$tc','$mail','$sifre','$dogum','$telefon')");
        echo json_encode(array('response' => true));
}else {
    echo json_encode(array('response' => false));

}


        
?>