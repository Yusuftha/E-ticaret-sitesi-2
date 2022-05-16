<?php 

$veritabani = new PDO("mysql:host=localhost;dbname=fitkaldatabase;charset-utf8","root");

$adsoyad = $_POST["adsoyad"];
$email = $_POST["mail"];
$sifre = $_POST["sfr"];
$sifret = $_POST["sfrt"];
$telefon = $_POST["tel"];
	if ($adsoyad || $mail || $sifre || $sifret || $telefon)
	{
		echo "Lütfen boş alan bırakmayınız.";
	}

 $ekle = $veritabani->prepare("INSERT INTO kullanicilar SET ad_soyad=?, mail=?, sifre=?, sifre_tekrar=?, telefon_no=?");
 $ekle->execute([$adsoyad, $email, $sifre, $sifret, $telefon]);

 if ($ekle) {
 	echo "kayıt başarılı";
 }
 else
 {
 	echo "kayıt başarısız";
 }
 ?>