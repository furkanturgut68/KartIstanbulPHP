<?php

include("ayar.php");

$telefon = "5511833244";//$_POST["telefon"];
$sifre = "furkan123";//$_POST["sifre"];

$sorgu = mysqli_query($baglan,"select * from uye_ol where telefon='$telefon' and sifre = '$sifre'");

$deger = mysqli_num_rows($sorgu);

if($sifre == "" || $telefon == ""  ){

    echo json_encode(array('response' => false));

} else if($deger == 1){
  
      echo json_encode(array('response' => true));
      
}else {
    echo json_encode(array('response' => false));

}




?>