<?php
include("ayar.php");

$tutar = $_POST["tutar"];
$kartNumara = $_POST["kart_numara"];
$ccv = $_POST["ccv"];
$skt = $_POST["skt"];

if($tutar == "" || $kartNumara ==""|| $ccv == "" ||$skt == ""){
    echo json_encode(array('response'=>false));
}else {
    $sorgu = mysqli_query($baglan,"insert into odeme_al (tutar,kart_numara,ccv,skt) values ('$tutar','$kartNumara','$ccv','$skt')");
     echo json_encode(array('response' => true));
}


?>