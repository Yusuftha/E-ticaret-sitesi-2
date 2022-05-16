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
			<p style="text-align: center;font-size: 60px">İLETİŞİM</p>
			<div class="col-md-3">
				<h1>Linkler</h1>
				<br><br>
				<a href="hakkimizda.php" style="color:#333333;text-decoration: none;"><span class="glyphicon glyphicon-chevron-right"></span> Hakkımızda</a> <br> <br> <br>
				<a href="iletisim.php" style="color:#333333;text-decoration: none;"><span class="glyphicon glyphicon-chevron-right"></span> İletişim</a> <br> <br> <br>
				<a href="sss.php" style="color:#333333;text-decoration: none;"><span class="glyphicon glyphicon-chevron-right"></span> Sıkça Sorulan Sorular (S.S.S)</a> <br> <br> <br>
				<a href="iletisimform.php" style="color:#333333;text-decoration: none;"><span class="glyphicon glyphicon-chevron-right"></span> İletişim Formu</a> <br> <br>
			</div>
			<div class="col-md-9" style="background-color: #e6e6e6;" align="left">
				<div class="row" style="padding: 10px">
					<div class="col-md-6">
						<h4><span class="glyphicon glyphicon-earphone"></span> Telefon Numarası: (0216) 544 34 00 <h5 align="justify">Hafta içi ve hafta sonu saat 09:00 ile 23:30 arasında siz değerli müşterilerimize kaliteli ve kesintisiz destek vermektedir.</h5></h4> <br>
						<h4><span class="glyphicon glyphicon-envelope"></span> Mail Adresi: info@fitkal.com</h4> <br>
						<h4><span class="glyphicon glyphicon-map-marker"></span> Armağanevler Mahallesi Sırt Sokak No 141 Ümraniye İstanbul</h4> <br>
						<h4>Genel Olarak Bir Şikayetiniz Var İse Butona Tıklayarak İletişime Geçebilirsiniz</h4><br><br>
						<form action="iletisimform.php">
							<input type="submit" name="" value="İletişim Formu" id="buton2">
						</form>
					</div>

					<div class="col-md-6">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3010.601163907803!2d29.107595315414155!3d41.012101979300404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac8937cd4b1fb%3A0x991dcd7804bf9f6f!2zQXJtYcSfYW4gRXZsZXIsIFPEsXJ0IFNrLiBObzoxNDEsIDM0NzYwIMOcbXJhbml5ZS_EsHN0YW5idWw!5e0!3m2!1str!2str!4v1582136126289!5m2!1str!2str" width="450" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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

