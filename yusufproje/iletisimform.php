<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>İletişim</title>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" />
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stil.css">
    <style type="text/css">
    	*{
    		padding: 0;
  			margin: 0;
    	}
    	.linkler
    	{
    		color: #e60000;
    		padding: 10px;
    		margin-right: 5px;

    		text-decoration: none;
    	}
    	.linkler:hover
    	{
    		background-color: #e60000;
    		color: white;
    		transition: 500ms;
    		text-decoration: none;
    	}

		#buton
		{
			background-color: #e60000;
			width: 90px;
			font-size: 17px;
			padding: 10px;

			outline: none;
			border:none;
			margin: 0px auto;

		}
		#buton:hover
		{
			background-color: white;
			color: #e60000;
			
			transition: 500ms;
		}
		#buton2
		{
			background-color: #e60000;
			width: 100px;
			font-size: 15px;
			padding: 10px;
			color: white;
			outline: none;
			border:none;
			margin: 0px auto;

		}
		#buton2:hover
		{
			background-color: white;
			color: #e60000;
			border:1px solid black;
			transition: 500ms;
		}
		.formtasarim
		{
			width: 300px;
			height: 35px;
			font-size: 15px;
			padding: 10px;
		}
		#buton3
		{
			background-color: #e60000;
			font-size: 20px;
			width: 300px;
			height: 40px;
			border: none;
			color: white;
		}
		#buton3:hover
		{
			background-color: white;
			font-size: 20px;
			width: 300px;
			height: 45px;
			border:1px solid black;
			color: #e60000;
			transition: 500ms;
		}
    </style>
</head>
<body style="font-family: Oswald;">
	<div class="container-fluid">
		<div class="row" style="background-color: white;line-height: 50px;text-align: center ">
			<div class="col-md-2">
				<a href="anasayfa.php"><img src="img/yenilogo.png" class="img-responsive" style="padding: 10px;margin: 0px auto"></a>
			</div>

			<div class="col-md-7">
				<form action="arama.php" method="post">
					<input type="text" name="ara" style="height: 30px;width: 500px;margin:0px auto;padding: 5px" placeholder="Ara">
					
					<button type="submit" style="width: 50px;height: 30px;line-height: 25px;margin-left:0px;border:none;background-color: #e60000;color:white">Ara</button>
					
				</form>
				
			</div>

			<div class="col-md-3" style="color:white; text-align: right;">
				<a href="#" id="ism" style="color:#e60000">
					<?php
    				    if (isset($_SESSION['user']))
    				    {
					        echo $_SESSION['user']['ad_soyad'];
					    }
					?>
				</a>
				<a href="sepet.php" class="linkler text-right"><span class="glyphicon glyphicon-shopping-cart"></span> SEPET</a>
				<a href="uyegiris.php" class="linkler" style="text-decoration: none"><span class="glyphicon glyphicon-user"></span> ÜYE GİRİŞİ</a>
			</div>
		</div>
		
	
		<div class="row">
			<p style="text-align: center;font-size: 60px">İLETİŞİM FORMU</p>
			<div class="col-md-3">
				<h1>Linkler</h1>
				<br><br>
				<a href="hakkimizda.php" style="color:#333333;text-decoration: none;"><span class="glyphicon glyphicon-chevron-right"></span> Hakkımızda</a> <br> <br> <br>
				<a href="iletisim.php" style="color:#333333;text-decoration: none;"><span class="glyphicon glyphicon-chevron-right"></span> İletişim</a> <br> <br> <br>
				<a href="sss.php" style="color:#333333;text-decoration: none;"><span class="glyphicon glyphicon-chevron-right"></span> Sıkça Sorulan Sorular (S.S.S)</a> <br> <br> <br>
				<a href="iletisimform.php" style="color:#333333;text-decoration: none;"><span class="glyphicon glyphicon-chevron-right"></span> İletişim Formu</a> <br> <br>
			</div>
			<div class="col-md-9" style="background-color: #e6e6e6;" align="left">
				<div class="row" style="padding: 10px;">
					<div class="col-md-6">
						<h3>Bize Ulaşın</h3>
						<p style="text-align:justify;">
							Bize ileteceğiniz mesajlar teknik ekibimiz tarafından dikkatlice okunup, 3-5 iş günü içerisinde Email üzerinden
							dönüş yapılır. Rahatsız olduğunuz bir konu veya bize vermek istediğiniz mesajlarınızı hiç çekinmeden bize iletebilirsiniz.
						</p>
						<br><br>
						<div class="row">
							<img src="img/iletisimfoto.png" class="img-responsive">
						</div>
					</div>
					<div class="col-md-6">
						<form method="post" action="#">
							<input type="text" name="adsoyad" id="kulad" placeholder="Ad Soyad" class="formtasarim"><br><br>
							<input type="text" name="mail" id="email" placeholder="Email" class="formtasarim"><br><br>
							<input type="text" name="konu" id="konuu" placeholder="Konu" class="formtasarim"><br><br>
							<textarea name="mesaj" style="width:300px;height:200px; resize: none;padding: 10px;"placeholder="Mesaj"></textarea>
							<br><br>
							<input type="submit" name="" value="Gönder" id="buton3">
						</form>
						<?php 

			                $veritabani = new PDO("mysql:host=localhost;dbname=fitkaldatabase;charset-utf8","root");

			                @$adsoyad = $_POST["adsoyad"];
			                @$email = $_POST["mail"];
			                @$konu = $_POST["konu"];
			                @$mesaj = $_POST["mesaj"];
			                
			                              

			                 if ($adsoyad=="" || $email=="" || $konu=="" || $mesaj=="")
			                 {
			                    ?>
			                         <p>
			                             <h4 style="text-align: center;padding-top: 10px;">Lütfen boş alan bırakmayınız</h4>
			                        </p>
			                    <?php

			                    
			                 }
			                 else
			                {
			                     $ekle = $veritabani->prepare("INSERT INTO sikayetler SET AdSoyad=?, Email=?, Konu=?, Mesaj=?");
			                        $ekle->execute([$adsoyad, $email, $konu, $mesaj]);
			                        if ($ekle) {
			                            echo "<head>"."<meta http-equiv=\"refresh\" content=\"3;URL=iletisimform.php\">"."</head>";
			                             ?>
			                                <p>
			                                    <h4 style="text-align: center;padding-top: 10px;color:#00cc00">Mesajınız Alınmıştır</h4>
			                                </p>
			                             <?php 
			                           
			                         }

			                         else
			                         {
			                            echo "KAYIT BAŞARISIZ";
			                         }
			                }
			             ?>
					</div>
				</div>
				
			</div>
			
		</div>
		<br><br><br><br>
	<div class="row" style="background-color: white;padding: 15px">
		<div class="col-md-3">
			<a href="anasayfa.php"><img src="img/yenilogo.png" class="img-responsive" style="padding: 10px; margin: 0px auto;"></a>
		</div>

		<div class="col-md-3">
			<h5 style="color:black;text-align: center;">MENÜ</h5>
			<a href="coksatan.php" style="color: black;text-decoration: none; padding-left: 10px;font-size: 10px">En Çok Satanlar</a><br><br>
			<a href="populer.php" style="color: black;text-decoration: none; padding-left: 10px;font-size: 10px">En Popüler Olanlar</a><br><br>
			<a href="indirim.php" style="color: black;text-decoration: none; padding-left: 10px;font-size: 10px">İndirimde Olanlar</a><br>
		</div>
		<div class="col-md-3" style="text-align: center; color: black;font-size: 10px">
			<h5 style="text-align: center;">BİZE ULAŞIN</h5>
			<p align="left" style="padding: 10px">
				<span class="glyphicon glyphicon-earphone"> </span> (0216) 544 34 00 <br><br>
				<span class="glyphicon glyphicon-envelope"> </span> info@fitkal.com <br><br>
				<span class="glyphicon glyphicon-map-marker"> </span> Armağanevler Mahallesi Sırt Sokak No 141 Ümraniye İstanbul <br><br>
				<a href="iletisim.php">Daha Fazla</a>
			</p>
		</div>
		
		<div class="col-md-3">
			<h5 style="text-align: center; color: black;">BİLGİLER</h5>
			<a href="hakkimizda.php" style="color: black;text-decoration: none; padding-left: 10px; font-size: 10px">Hakkımızda</a><br><br>
			<a href="sss.php" style="color: black;text-decoration: none; padding-left: 10px; font-size: 10px">Sıkça Sorulan Sorular (S.S.S)</a><br><br>
			<a href="markalar.php" style="color: black;text-decoration: none; padding-left: 10px; font-size: 10px">Markalar</a><br>
		</div>
	</div>
	<div class="row">
		<img src="img/footerimg.png" class="img-responsive" style="margin: 0px auto">
	</div>
	</div>
</body>

</html>

