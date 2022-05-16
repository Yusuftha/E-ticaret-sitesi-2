<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Supplementler</title>
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
    

			.slide {
			    position: absolute;
			    left: 550px;
			    top:25px;
			    width: 300px;
			    text-align: left;
			    height: 100px;
			    color:white;
			    font-size: 40px;
			    -webkit-animation: slide 0.2s reverse;
			    -webkit-animation-delay: 1s;
			    animation: slide 0.5s reverse;
			    animation-delay: 1s;
			}

			@-webkit-keyframes slide {
			    100% { left: 0; }
			}

			@keyframes slide {
			    100% { left: 0; }
			}

			.slider {
			    position: absolute;
			    right: -600px;
			    top:80px;
			    width: 850px;
			    text-align: left;
			    height: 15px;
			    color:white;
			    font-size: 20px;
			    -webkit-animation: slider 0.2s forwards;
			    -webkit-animation-delay: 1s;
			    animation: slider 0.5s forwards;
			    animation-delay: 1s;
			}

			@-webkit-keyframes slider {
			    100% { right: 0; }

			}

			@keyframes slider {
			    100% { right: 0; }
			}
    	
    
		@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
		}
		@import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);
		.fa-2x {
		font-size: 2em;
		}
		.fa {
		position: relative;
		display: table-cell;
		width: 60px;
		height: 36px;
		text-align: center;
		vertical-align: middle;
		font-size:20px;
		}


		.main-menu:hover,nav.main-menu.expanded {
		width:250px;
		overflow:visible;
		}

		.main-menu {
		background:#e60000;
		text-align: left;
		position:absolute;
		top:90px;
		bottom:0;
		height:425px;
		left:0;
		width:10px;
		overflow:hidden;
		-webkit-transition:width .05s linear;
		transition:width .05s linear;
		-webkit-transform:translateZ(0) scale(1,1);
		z-index:1000;
		}

		.main-menu>ul {
		margin:7px 0;
		}

		.main-menu li {
		position:relative;
		display:block;
		width:250px;
		}

		.main-menu li>a {
		position:relative;
		display:table;
		border-collapse:collapse;
		border-spacing:0;
		color:#999;
		font-family: arial;
		font-size: 14px;
		text-decoration:none;
		-webkit-transform:translateZ(0) scale(1,1);
		-webkit-transition:all .1s linear;
		transition:all .1s linear;
		  
		}

		.main-menu .nav-icon {
		position:relative;
		display:table-cell;
		width:60px;
		height:36px;
		text-align:center;
		vertical-align:middle;
		font-size:18px;
		}

		.main-menu .nav-text {
		position:relative;
		display:table-cell;
		vertical-align:middle;
		width:190px;
		font-size: 18px;
		color: white;
		  font-family: 'Oswald', sans-serif;
		}

		.main-menu>ul.logout {
		position:absolute;
		left:0;
		bottom:0;
		}

		.no-touch .scrollable.hover {
		overflow-y:hidden;
		}

		.no-touch .scrollable.hover:hover {
		overflow-y:auto;
		overflow:visible;
		}

		a:hover,a:focus {
		text-decoration:none;
		}

		nav {
		-webkit-user-select:none;
		-moz-user-select:none;
		-ms-user-select:none;
		-o-user-select:none;
		user-select:none;
		}

		nav ul,nav li {
		outline:0;
		margin:0;
		margin-bottom:20px;
		margin-top: 30px;
		}
		.main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
		color:#fff;
		background-color:black;
		}
		.area {
		float: left;
		background: #e2e2e2;
		width: 100%;
		height: 100%;
		}
		@font-face {
		  font-family: 'Titillium Web';
		  font-style: normal;
		  font-weight: 300;
		  src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
		}
		#buton
		{
			background-color: #e60000;
			width: 90px;
			font-size: 17px;
			padding: 10px;
			color:white;
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
			font-size: 17px;
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
		#bar{
			background-color: #e60000;
			height: 50px;
			text-align: center;
			text-decoration: none;
			line-height: 50px;
			font-size: 18px;
		}
		#bar a{
			color:white;
			padding: 12px;
		}
		#bar1:hover
		{
			background-color: #009933;
			color:white;
			transition: 200ms;
		}
		#bar2:hover
		{
			background-color: #4dc3ff;
			color:white;
			transition: 200ms;
		}
		#bar3:hover
		{
			background-color:#74FFC2;
			color:white;
			transition: 200ms;
		}
		#bar4:hover
		{
			background-color:#0066cc;
			color:white;
			transition: 200ms;
		}
		#bar5:hover
		{
			background-color:#FFAA00;
			color:white;
			transition: 200ms;
		}
		#bar6:hover
		{
			background-color:#B222FA;
			color:white;
			transition: 200ms;
		}
		.uruncerceve
		{
			border: 1px solid #d9d9d9;
			border-collapse: collapse;
			height: 250px;
			text-decoration: none;
			color:black;
		}
		.uruncerceve:hover
		{
			transition: 400ms;
			border: 2px solid #e60000;
			overflow: hidden;
		}
		.ozelcerceve
		{
			padding: 15px;

		}
		.ozelsbuton
		{
			width: 200px;
			margin:0px auto;
			background-color: #e60000;
			border:none;
			border-radius: 45px;
			color:white;
			height: 40px;
			outline: none;
		}
		.ozelsbuton:hover
		{
			transition: 350ms;
			background-color: white;
			color:#e60000;
			border:1px solid #e60000;
		}
    </style>
</head>
<body style="font-family: Oswald;">
			<?php 
				try
					{
	
					$veritabani = new PDO("mysql:host=localhost;dbname=fitkaldatabase;charset=utf8","root","");
	
					}catch(PDOException $mesaj){
	
	
						echo $mesaj->getmessage();
	
					}
			 ?>

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
		<div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="anasayfa.php">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                             <span class="glyphicon glyphicon-home"></span> ANASAYFA
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="hakkimizda.php">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            <span class="glyphicon glyphicon-briefcase"></span> HAKKIMIZDA
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="supplementler.php">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                           <span class="glyphicon glyphicon-ok-circle"></span> SUPPLEMENTLER
                        </span>
                       </a> 
                                            
                </li>
                <li class="has-subnav">
                    <a href="programlar.php">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                         <span class="glyphicon glyphicon-heart-empty"></span>  PROGRAMLAR
                        </span>
                    </a><br><br><br>
                   
                </li>
               
            <ul class="logout">
                <li>
                   <a href="cikis.php">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                           <span class="glyphicon glyphicon-log-out"></span>  ÇIKIŞ YAP
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
	
		<div class="row" id="bar">
			<div class="col-md-2" >
				<a href="?do=protein" style="text-decoration: none;" id="bar1"><img src="img/protein.png"> Protein Tozu</a>
				
				
			</div>

			<div class="col-md-2" >
				<a href="?do=amino" style="text-decoration: none;" id="bar2"><img src="img/Path.png"> Amino Asit</a>
			</div>

			<div class="col-md-2" >
				<a href="?do=kilo" style="text-decoration: none" id="bar3"><img src="img/gain.png"> Kilo Ve Hacim</a>
			</div>

			<div class="col-md-2" >
				<a href="?do=kreatin" style="text-decoration: none" id="bar4"><img src="img/guc.png"> Kreatin</a>
			</div>

			<div class="col-md-2" >
				<a href="?do=svitamin" style="text-decoration: none" id="bar5"><img src="img/vitamin.png"> Sporcu Vitaminleri</a>
			</div>

			<div class="col-md-2" >
				<a href="?do=performans" style="text-decoration: none" id="bar6"><img src="img/performans.png"> Performans ve Güç</a>
			</div>
		</div>
		<br><br>
			<?php 
				$do =@$_GET["do"];

				switch ($do) {
					case 'protein':
					?>
						<div class="row">
							<div class="col-md-1">
								
							</div>
							
							<div class="col-md-10">
								<div class="row">
									<h2 style="font-weight: bold">Protein Tozu</h2>
									<p style="text-align: justify;">
										Protein tozu spor yapıyorsanız her zaman elinizin altında bulunması gereken besin takviyelerinden biri. Protein tozu özellikle tüm seviyeden sporcular için egzersiz yaptıktan hemen sonra içilmesi gereken bir destektir. Spor yaptıktan sonra kaslarda hareket ve zorlanmaya bağlı olarak yıkımlar gerçekleşir. Bu yıkımları engellemek ve kas kütlesinin korunmasını sağlamak için protein almak gerekir. Bu aşamada protein ihtiyacını hemen yemeklerle karşılasanız bile yemeklerin sindirimi ve kaslara etki etmesi yaklaşık olarak otuz dakikayı bulacağı için kaslarda kütle kaybı meydana gelecektir. Bu süreci yaşamak adına spor yaptıktan hemen sonra sitemizden bulabileceğiniz kaliteli ve uygun fiyatlı protein tozlarına göz atabilirsiniz.
									</p>
									<br>
									<a href="?do=1">

										<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
										<img src="img/1.jpeg" class="img-responsive" style="width: 150px;height: 150px;margin: 0px auto">
										<?php 
											$veri = $veritabani->prepare("select * from urunler where urunid=?;");
											$veri ->execute(array("1"));
											$islem= $veri->fetch();
											?>
											<p style="height: 50px;">
												<?php 
													echo $islem["urunbaslik"];
												 ?>
											</p>
											<p style="color:black;font-size: 19px;font-weight: bold;">
												<?php 
													echo $islem["fiyat"];
													echo " TL";
												 ?>
											</p>
											<?php
										 ?>
										</div>
									</a>

									<a href="?do=2">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/2.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("2"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
									</div>
								</a>

									<a href="?do=3">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/3.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("3"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
									</div>
								</a>

								<a href="?do=4">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/4.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("4"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
									</div>
								</a>

								</div>
							</div>

							<div class="col-md-1">
								
							</div>
					</div>
					<?php
						break;
						case 'amino':
					?>
						<div class="row">
						<div class="col-md-1">
							
						</div>
					
						<div class="col-md-10">
							<div class="row">
								<h2 style="font-weight: bold">Amimo Asit</h2>
									<p style="text-align: justify;">
										Amino asitler, sporcuların en büyük yardımcıları arasındadır. Amino asit, proteinlerin en küçük yapı taşlarıdır. Aynı zamanda vücudun vitaminleri ve mineralleri de doğru ve sağlıklı şekilde kullanmasına destek olmaktadır. Vücudun daha sağlıklı şekilde gelişmesine ve sağlıklı kalmasına destek olan amino asitler, kasları geliştirmek için olmazsa olmaz besin faktörleri arasındadır. Amino asitler hem olimpiyatlardaki atletler için hem de spora yeni başlayan kişiler için aynı etkilere sahiptir. Her sporcunun amino asitlere ihtiyacı vardır. Amino asit; esasında proteinleri oluşturmak için gerekli olan organik ve doğal elementlerdir. Proteinlerin vücut tarafından parçalanması durumunda, geriye kalan yapılar amino asitlerdir.
									</p>
									<br>
								<a href="?do=5">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/5.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("5"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
									</div>
								</a>

								<a href="?do=6">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/6.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("6"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
									</div>
								</a>

								<a href="?do=7">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/7.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("7"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
									</div>
								</a>

								<a href="?do=8">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/8.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("8"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
									</div>
								</a>

							</div>
						</div>

						<div class="col-md-1">
							
						</div>
					</div>
					<?php		
							break;
							case 'kilo':
					?>
						<div class="row">
						<div class="col-md-1">
							
						</div>
						
						<div class="col-md-10">
							<div class="row">
								<h2 style="font-weight: bold">Karbonhidrat</h2>
									<p style="text-align: justify;">
										Karbonhidrat sporcular için en önemli besin ögelerinin başında gelir. Özellikle kilo almak isteyen, kas kütlesini geliştirmek isteyen sporcuların beslenme alışkanlığında olması gereken bir besin ögesidir. Karbonhidrat, yağ ve protein sağlıklı bir beslenmenin en önemli noktalarından biridir. Antrenmandan önce ya da antrenmandan sonra karbonhidratı dengeli şekilde tüketmeniz gerekir. Karbonhidratlar da tıpkı proteinler gibi kas yıkımını engelleyici bir yapıya sahip olduğu için önem teşkil eder. Bundan dolayı yalnızca protein tozu kullanmak değil, süreci karbonhidratla da desteklemeniz gerekir. Sitemiz üzerinden yüzde yüz orijinal ve en uygun fiyatlı karbonhidratları satın alabilirsiniz. Karbonhidrat tüketirken antrenmandan hemen sonra aceleyle almanıza gerek yoktur. Fakat kullanım zamanlarına dikkat etmeniz gerekmektedir.
									</p>
									<br>
								<a href="?do=9">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/9.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("9"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
									</div>
								</a>

								<a href="?do=10">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/10.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("10"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
									</div>
								</a>

								<a href="?do=11">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/11.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("11"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
									</div>
								</a>

								<a href="?do=12">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/12.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("12"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
									</div>
								</a>

							</div>
						</div>

						<div class="col-md-1">
							
						</div>
					</div>
					<?php		
								break;
								case 'kreatin':
					?>
					<div class="row">
						<div class="col-md-1">
							
						</div>
						
						<div class="col-md-10">
							<div class="row">
								<h2 style="font-weight: bold">Kreatin</h2>
									<p style="text-align: justify;">
										Vücudumuzun ürettiği doğal bir amino asittir. Görevi kaslara enerji doldurmak ve efor sarf edilen durumlarda kaslardaki enerjinin devamlılığını sağlamaktır. Özellikle sporcularda ani güç gerektiren durumlarda Kreatin ihtiyacı artar. Vücutta üretilen kreatin yeterli olmadığında dışarın takviye kreatin desteği almak gerekli olabilir. Kreatin kırmızı et ile alınabilen bir amino asittir. Kırmızı et tüketen insanlarda vücuda yeterli kreatin alınabilirken sporcularda et ile alınan kreatin yeterli olmamaktır. Bu nedenle sporcuların gıda takviyesi olarak kreatin desteği almaları gerekmektedir. Alınmadığında spor alanında tam bir performans sağlanamadığı gibi kaslarda güçsüzlük oluşabilir. Hangi spor dalında olursanız olun yaptığınız sporun daha verimli ve başarılı olması için vücuda gerekli bir amino asit olan kreatini düzenli olarak almanız gerekir.
									</p>
									<br>
								<a href="?do=13">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/13.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("13"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
									</div>
								</a>

								<a href="?do=14">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/14.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("14"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
									</div>
								</a>

								<a href="?do=15">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/15.png" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("15"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
									</div>
								</a>

								<a href="?do=16">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/16.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("16"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
									</div>
								</a>

							</div>
						</div>

						<div class="col-md-1">
							
						</div>
					</div>
					<?php				
							break;
							case 'svitamin':
					?>
						<div class="row">
						<div class="col-md-1">
							
						</div>
						
						<div class="col-md-10">
							<div class="row">
								<h2 style="font-weight: bold">Vitaminler</h2>
									<p style="text-align: justify;">
										Vitaminler yediğimiz gıdalar ile alabildiğimiz besin grubudur. Suda eriyen ve yağda eriyen vitaminler olarak iki gruba ayrılırlar. Suda eriyen vitaminler C ve B grubu vitaminleridir. Yağda eriyen vitaminler A,D,E ve K vitaminleridir. Her vitamin farklı gıdalarda bulunur. Ve Her vitamin grubunun farklı görevleri vardır.Vücut mekanizmasının işleyişinde her vitaminin ayrı bir görevi olduğundan tüm vitaminlerin düzenli olarak alınması gerekir. Vitamin eksikliği durumunda çeşitli hastalıklar ortaya çıkmaktadır.
									</p>
									<br>
								<a href="?do=17">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/17.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("17"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
									</div>
								</a>

								<a href="?do=18">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/18.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("18"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
									</div>
								</a>

								<a href="?do=19">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/19.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("19"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
									</div>
								</a>

								<a href="?do=20">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/20.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("20"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
									</div>
								</a>

							</div>
						</div>

						<div class="col-md-1">
							
						</div>
					</div>
					<?php
								break;
							case 'performans':
					?>
						<div class="row">
						<div class="col-md-1">
							
						</div>
						
						<div class="col-md-10">
							<div class="row">
								<h2 style="font-weight: bold">Performans</h2>
									<p style="text-align: justify;">
										Vücut geliştirme konusunda daha iyi bir görünüme sahip olmak için spor yapmanın faydasını bilmekteyiz. Yanlış spor yöntemleri ve yanlış gıda takviyeleri sonucunda ortaya olumsuz sonuçlar çıkmaktadır. Özellikle, spor yaparken kaybedilen enerjinin ve performansın sonucunda, bitkinlik ve yorgunluk hissedilir.Yapılan spor aktivitesi amacına ulaşamayınca, vücudun yavaş çalışmasına neden olur. Bu yüzden, istenilen atletik görüntüye kavuşmak biraz zaman alabilir. Performans ve güç takviyesi supplementleri kullanarak, vücudun yoğun antrenmanları sırasında ihtiyaç duyduğu, gücü ve performansı sağlayabilirsiniz.
									</p>
									<br>
								<a href="?do=21">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/21.png" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("21"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
									</div>
								</a>

								<a href="?do=22">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/22.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("22"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
									</div>
								</a>

								<a href="?do=23">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/23.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("23"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
									</div>
								</a>

								<a href="?do=24">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/24.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("24"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
									</div>
								</a>

							</div>
						</div>

						<div class="col-md-1">
							
						</div>
					</div>

					<?php
						break;
						case '1':

					?>
						<div class="container">
							<div class="row" >
								<div class="col-md-1">
									
								</div>
								<div class="col-md-10" style="border:1px solid #b3b3b3">
									<div class="row text-center ozelcerceve">
										<div class="col-md-10">
											<div class="col-md-4">
												<img src="img/1.jpeg" style="width: 250px;height: 250px;" id="foto">
											</div>

											<div class="col-md-8">
												<?php 
													$veri = $veritabani->prepare("select * from urunler where urunid=?;");
													$veri ->execute(array("1"));
													$islem= $veri->fetch();
												?>
													<p style="text-align: left;font-size: 22px;font-weight: bold;padding-left:30px" id="urunadi">
														<?php 
															echo $islem["urunbaslik"];
														 ?>
													</p>
													<p style="text-align: left;font-size: 15px;color:#a6a6a6;margin-top: -15px;padding-left: 30px">
														<?php 
															echo $islem["marka"];
														 ?>
													</p>
													<p>
														<h4 style="text-align: left;color: #595959;padding-left: 30px">Fiyat</h4>
													</p>
													<p style="text-align: left;font-size: 29px;color:#e60000;padding-left: 30px" id="urunfiyat">
														<?php 
															echo $islem["fiyat"];
															echo " TL";
														 ?>
													</p>
													<form style="float: left;padding-left: 20px" action="Supplementler.php" method="post">
														<input type="radio" name="aroma" value="cikolata"> <span style="color:#663300;font-size: 18px;font-weight: bold">Çikolata</span>
														<input type="radio" name="aroma" value="cilek"> <span style="color:#e6b800;font-size: 18px;font-weight: bold">Muz</span>
														<input type="radio" name="aroma" value="muz"> <span style="color:#b30059;font-size: 18px;font-weight: bold">Çilek</span>
														<br><br>
														<p style="float:left;padding-left: 10px">
															<label>Adet: </label>
															<select name="adet" style="width: 80px;border-color: #e60000;border-radius: 15px;padding-left: 5px;outline: none;margin-left: 0px" id="adetler">
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
															</select>
														</p>
														<br>
														<p style="margin-top: 30px;">
															<button class="ozelsbuton" style="float:left" type="submit" id="ekle">Sepete Ekle</button>
														</p>
														<?php 
																@$urun_adi = $_POST["urunadi"];								
																@$urun_fiyat = $_POST["urunfiyat"];								
																@$urun_aroma = $_POST["aroma"];								
																@$urun_adet = $_POST["adet"];
															if (isset($_POST["ekle"]))
															{
																 $ekle = $db->prepare("INSERT INTO sepet SET urunadi=?, fiyat=?, adet=?, aroma=?");
                       											 $ekle->execute([$urun_adi, $urun_fiyat, $sifre, $urun_adet, $urun_aroma]);

															}
														 ?>
													</form><br>
													
												<?php
												?>
											</div>
										</div>
										<div class="col-md-2">
											<table>
												<tr>
													<td style="font-size: 11px">Kargo ücreti yok</td>
													<td><img src="img/cargo.png"></td>
												</tr>
												<br>
												<tr>
													<td style="font-size: 11px">Aynı gün kargo</td>
													<td><img src="img/time.png"></td>
												</tr>
												<tr>
													<td style="font-size: 11px">Kapıda ödeme imkanı</td>
													<td><img src="img/nopay.png"></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="row text-center" style="padding: 5px">
										<h3 class="text-left" style="padding-left: 5px">DEĞERLER</h3>
										 <div class="col-md-2" style="height: 70px;background-color: #ff5050;color: white;padding: 15px;border-radius: 10px">
										 	Protein oranı:<br>
										 	<?php 
												echo $islem["proteinoran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #4dc3ff;color: white;padding: 15px;border-radius: 10px">
										 	Şeker oranı:<br>
										 	<?php 
												echo $islem["sekeroran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #008000;color: white;padding: 15px;border-radius: 10px">
										 	Karbonhidrat oranı:<br>
										 	<?php 
												echo $islem["karbonoran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #cc0099;color: white;padding: 15px;border-radius: 10px">
										 	Yağ oranı:<br>
										 	<?php 
												echo $islem["yagoran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #4d4dff;color: white;padding: 15px;border-radius: 10px">
										 	Servis miktarı:<br>
										 	<?php 
												echo $islem["servismiktar"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #cc5200;color: white;padding: 15px;border-radius: 10px">
										 	Servis sayısı:<br>
										 	<?php 
												echo $islem["servissayı"];
										 	?>
										 </div>
									</div>
									<div class="row">
										<h3 style="text-align: left;padding-left: 10px">YORUMLAR</h3>
									</div>
									<div class="row">
										<div class="col-md-1">
											<img src="img/yorum_icon.png" class="img-responsive" style="margin: 0px auto">
										</div>
										<div class="col-md-11" style="border:1px solid;">
											<textarea style="width: 500px;resize: none;padding: 5px;font-size: 15px" placeholder="Yorum Ekle..."></textarea>
											<button class="linkler">Gönder</button>
										</div>
										
									</div>
								</div>

								<div class="col-md-1">
									
								</div>
							</div>
						</div>
					<?php			
						break;
						case '2':
					?>
						<div class="container">
							<div class="row" >
								<div class="col-md-1">
									
								</div>
								<div class="col-md-10" style="border:1px solid #b3b3b3">
									<div class="row text-center ozelcerceve">
										<div class="col-md-10">
											<div class="col-md-4">
												<img src="img/2.jpeg" style="width: 250px;height: 250px;">
											</div>

											<div class="col-md-8">
												<?php 
													$veri = $veritabani->prepare("select * from urunler where urunid=?;");
													$veri ->execute(array("2"));
													$islem= $veri->fetch();
												?>
													<p style="text-align: left;font-size: 22px;font-weight: bold;padding-left:30px">
														<?php 
															echo $islem["urunbaslik"];
														 ?>
													</p>
													<p style="text-align: left;font-size: 15px;color:#a6a6a6;margin-top: -15px;padding-left: 30px">
														<?php 
															echo $islem["marka"];
														 ?>
													</p>
													<p>
														<h4 style="text-align: left;color: #595959;padding-left: 30px">Fiyat</h4>
													</p>
													<p style="text-align: left;font-size: 29px;color:#e60000;padding-left: 30px">
														<?php 
															echo $islem["fiyat"];
															echo " TL";
														 ?>
													</p>
													<form style="float: left;padding-left: 30px">
														<input type="radio" name="aroma" value="cikolata"> <span style="color:#663300;font-size: 18px;font-weight: bold">Çikolata</span>
														<input type="radio" name="aroma" value="cilek"> <span style="color:#e6b800;font-size: 18px;font-weight: bold">Muz</span>
														
													</form><br>
													<p style="margin-top: 30px;padding-left: 20px">
														<button class="ozelsbuton" style="float:left">Sepete Ekle</button>
													</p>
												<?php
												?>
											</div>
										</div>
										<div class="col-md-2">
											<table>
												<tr>
													<td style="font-size: 11px">Kargo ücreti yok</td>
													<td><img src="img/cargo.png"></td>
												</tr>
												<br>
												<tr>
													<td style="font-size: 11px">Aynı gün kargo</td>
													<td><img src="img/time.png"></td>
												</tr>
												<tr>
													<td style="font-size: 11px">Kapıda ödeme imkanı</td>
													<td><img src="img/nopay.png"></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="row text-center" style="padding: 5px">
										<h3 class="text-left" style="padding-left: 5px">DEĞERLER</h3>
										 <div class="col-md-2" style="height: 70px;background-color: #ff5050;color: white;padding: 15px;border-radius: 10px">
										 	Protein oranı:<br>
										 	<?php 
												echo $islem["proteinoran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #4dc3ff;color: white;padding: 15px;border-radius: 10px">
										 	Şeker oranı:<br>
										 	<?php 
												echo $islem["sekeroran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #008000;color: white;padding: 15px;border-radius: 10px">
										 	Karbonhidrat oranı:<br>
										 	<?php 
												echo $islem["karbonoran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #cc0099;color: white;padding: 15px;border-radius: 10px">
										 	Yağ oranı:<br>
										 	<?php 
												echo $islem["yagoran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #4d4dff;color: white;padding: 15px;border-radius: 10px">
										 	Servis miktarı:<br>
										 	<?php 
												echo $islem["servismiktar"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #cc5200;color: white;padding: 15px;border-radius: 10px">
										 	Servis sayısı:<br>
										 	<?php 
												echo $islem["servissayı"];
										 	?>
										 </div>
									</div>
									<div class="row">
										<h3 style="text-align: left;padding-left: 10px">YORUMLAR</h3>
									</div>
									
								</div>

								<div class="col-md-1">
									
								</div>
							</div>
						</div>
					<?php				
							
						break;
						case '3':
						?>
							<div class="container">
							<div class="row" >
								<div class="col-md-1">
									
								</div>
								<div class="col-md-10" style="border:1px solid #b3b3b3">
									<div class="row text-center ozelcerceve">
										<div class="col-md-10">
											<div class="col-md-4">
												<img src="img/3.jpeg" style="width: 250px;height: 250px;">
											</div>

											<div class="col-md-8">
												<?php 
													$veri = $veritabani->prepare("select * from urunler where urunid=?;");
													$veri ->execute(array("3"));
													$islem= $veri->fetch();
												?>
													<p style="text-align: left;font-size: 22px;font-weight: bold;padding-left:30px">
														<?php 
															echo $islem["urunbaslik"];
														 ?>
													</p>
													<p style="text-align: left;font-size: 15px;color:#a6a6a6;margin-top: -15px;padding-left: 30px">
														<?php 
															echo $islem["marka"];
														 ?>
													</p>
													<p>
														<h4 style="text-align: left;color: #595959;padding-left: 30px">Fiyat</h4>
													</p>
													<p style="text-align: left;font-size: 29px;color:#e60000;padding-left: 30px">
														<?php 
															echo $islem["fiyat"];
															echo " TL";
														 ?>
													</p>
													<form style="float: left;padding-left: 30px">
														<input type="radio" name="aroma" value="cikolata"> <span style="color:#663300;font-size: 18px;font-weight: bold">Çikolata</span>
														<input type="radio" name="aroma" value="cilek"> <span style="color:#e6b800;font-size: 18px;font-weight: bold">Muz</span>
														<input type="radio" name="aroma" value="muz"> <span style="color:#b30059;font-size: 18px;font-weight: bold">Çilek</span>
													</form><br>
													<p style="margin-top: 30px;padding-left: 20px">
														<button class="ozelsbuton" style="float:left">Sepete Ekle</button>
													</p>
												<?php
												?>
											</div>
										</div>
										<div class="col-md-2">
											<table>
												<tr>
													<td style="font-size: 11px">Kargo ücreti yok</td>
													<td><img src="img/cargo.png"></td>
												</tr>
												<br>
												<tr>
													<td style="font-size: 11px">Aynı gün kargo</td>
													<td><img src="img/time.png"></td>
												</tr>
												<tr>
													<td style="font-size: 11px">Kapıda ödeme imkanı</td>
													<td><img src="img/nopay.png"></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="row text-center" style="padding: 5px">
										<h3 class="text-left" style="padding-left: 5px">DEĞERLER</h3>
										 <div class="col-md-2" style="height: 70px;background-color: #ff5050;color: white;padding: 15px;border-radius: 10px">
										 	Protein oranı:<br>
										 	<?php 
												echo $islem["proteinoran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #4dc3ff;color: white;padding: 15px;border-radius: 10px">
										 	Şeker oranı:<br>
										 	<?php 
												echo $islem["sekeroran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #008000;color: white;padding: 15px;border-radius: 10px">
										 	Karbonhidrat oranı:<br>
										 	<?php 
												echo $islem["karbonoran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #cc0099;color: white;padding: 15px;border-radius: 10px">
										 	Yağ oranı:<br>
										 	<?php 
												echo $islem["yagoran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #4d4dff;color: white;padding: 15px;border-radius: 10px">
										 	Servis miktarı:<br>
										 	<?php 
												echo $islem["servismiktar"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #cc5200;color: white;padding: 15px;border-radius: 10px">
										 	Servis sayısı:<br>
										 	<?php 
												echo $islem["servissayı"];
										 	?>
										 </div>
									</div>
									<div class="row">
										<h3 style="text-align: left;padding-left: 10px">YORUMLAR</h3>
									</div>
									
								</div>

								<div class="col-md-1">
									
								</div>
							</div>
						</div>
						<?php	
							break;
							case '4':
							?>
								<div class="container">
							<div class="row" >
								<div class="col-md-1">
									
								</div>
								<div class="col-md-10" style="border:1px solid #b3b3b3">
									<div class="row text-center ozelcerceve">
										<div class="col-md-10">
											<div class="col-md-4">
												<img src="img/4.jpeg" style="width: 250px;height: 250px;">
											</div>

											<div class="col-md-8">
												<?php 
													$veri = $veritabani->prepare("select * from urunler where urunid=?;");
													$veri ->execute(array("4"));
													$islem= $veri->fetch();
												?>
													<p style="text-align: left;font-size: 22px;font-weight: bold;padding-left:30px">
														<?php 
															echo $islem["urunbaslik"];
														 ?>
													</p>
													<p style="text-align: left;font-size: 15px;color:#a6a6a6;margin-top: -15px;padding-left: 30px">
														<?php 
															echo $islem["marka"];
														 ?>
													</p>
													<p>
														<h4 style="text-align: left;color: #595959;padding-left: 30px">Fiyat</h4>
													</p>
													<p style="text-align: left;font-size: 29px;color:#e60000;padding-left: 30px">
														<?php 
															echo $islem["fiyat"];
															echo " TL";
														 ?>
													</p>
													<form style="float: left;padding-left: 30px">
														<input type="radio" name="aroma" value="cikolata"> <span style="color:#663300;font-size: 18px;font-weight: bold">Çikolata</span>
														<input type="radio" name="aroma" value="cilek"> <span style="color:#e6b800;font-size: 18px;font-weight: bold">Muz</span>
														<input type="radio" name="aroma" value="muz"> <span style="color:#b30059;font-size: 18px;font-weight: bold">Çilek</span>
													</form><br>
													<p style="margin-top: 30px;padding-left: 20px">
														<button class="ozelsbuton" style="float:left">Sepete Ekle</button>
													</p>
												<?php
												?>
											</div>
										</div>
										<div class="col-md-2">
											<table>
												<tr>
													<td style="font-size: 11px">Kargo ücreti yok</td>
													<td><img src="img/cargo.png"></td>
												</tr>
												<br>
												<tr>
													<td style="font-size: 11px">Aynı gün kargo</td>
													<td><img src="img/time.png"></td>
												</tr>
												<tr>
													<td style="font-size: 11px">Kapıda ödeme imkanı</td>
													<td><img src="img/nopay.png"></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="row text-center" style="padding: 5px">
										<h3 class="text-left" style="padding-left: 5px">DEĞERLER</h3>
										 <div class="col-md-2" style="height: 70px;background-color: #ff5050;color: white;padding: 15px;border-radius: 10px">
										 	Protein oranı:<br>
										 	<?php 
												echo $islem["proteinoran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #4dc3ff;color: white;padding: 15px;border-radius: 10px">
										 	Şeker oranı:<br>
										 	<?php 
												echo $islem["sekeroran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #008000;color: white;padding: 15px;border-radius: 10px">
										 	Karbonhidrat oranı:<br>
										 	<?php 
												echo $islem["karbonoran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #cc0099;color: white;padding: 15px;border-radius: 10px">
										 	Yağ oranı:<br>
										 	<?php 
												echo $islem["yagoran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #4d4dff;color: white;padding: 15px;border-radius: 10px">
										 	Servis miktarı:<br>
										 	<?php 
												echo $islem["servismiktar"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #cc5200;color: white;padding: 15px;border-radius: 10px">
										 	Servis sayısı:<br>
										 	<?php 
												echo $islem["servissayı"];
										 	?>
										 </div>
									</div>
									<div class="row">
										<h3 style="text-align: left;padding-left: 10px">YORUMLAR</h3>
									</div>
									
								</div>

								<div class="col-md-1">
									
								</div>
							</div>
						</div>
							<?php	
								break;
								case '5':
							?>
							<div class="container">
							<div class="row" >
								<div class="col-md-1">
									
								</div>
								<div class="col-md-10" style="border:1px solid #b3b3b3">
									<div class="row text-center ozelcerceve">
										<div class="col-md-10">
											<div class="col-md-4">
												<img src="img/5.jpeg" style="width: 250px;height: 250px;">
											</div>

											<div class="col-md-8">
												<?php 
													$veri = $veritabani->prepare("select * from urunler where urunid=?;");
													$veri ->execute(array("5"));
													$islem= $veri->fetch();
												?>
													<p style="text-align: left;font-size: 22px;font-weight: bold;padding-left:30px">
														<?php 
															echo $islem["urunbaslik"];
														 ?>
													</p>
													<p style="text-align: left;font-size: 15px;color:#a6a6a6;margin-top: -15px;padding-left: 30px">
														<?php 
															echo $islem["marka"];
														 ?>
													</p>
													<p>
														<h4 style="text-align: left;color: #595959;padding-left: 30px">Fiyat</h4>
													</p>
													<p style="text-align: left;font-size: 29px;color:#e60000;padding-left: 30px">
														<?php 
															echo $islem["fiyat"];
															echo " TL";
														 ?>
													</p>
													<form style="float: left;padding-left: 30px">
														<input type="radio" name="aroma" value="kola"> <span style="color:#663300;font-size: 18px;font-weight: bold">Kola</span>
														<input type="radio" name="aroma" value="ananas"> <span style="color:#e6b800;font-size: 18px;font-weight: bold">Ananas</span>
														
													</form><br>
													<p style="margin-top: 30px;padding-left: 20px">
														<button class="ozelsbuton" style="float:left">Sepete Ekle</button>
													</p>
												<?php
												?>
											</div>
										</div>
										<div class="col-md-2">
											<table>
												<tr>
													<td style="font-size: 11px">Kargo ücreti yok</td>
													<td><img src="img/cargo.png"></td>
												</tr>
												<br>
												<tr>
													<td style="font-size: 11px">Aynı gün kargo</td>
													<td><img src="img/time.png"></td>
												</tr>
												<tr>
													<td style="font-size: 11px">Kapıda ödeme imkanı</td>
													<td><img src="img/nopay.png"></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="row text-center" style="padding: 5px">
										<h3 class="text-left" style="padding-left: 5px">DEĞERLER</h3>
										 
										 <div class="col-md-4" style="height: 70px;background-color: #cc0099;color: white;padding: 15px;border-radius: 10px">
										 	Servis başı fiyat:<br>
										 	<?php 
												echo $islem["servisbasifiyat"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #4d4dff;color: white;padding: 15px;border-radius: 10px">
										 	Servis miktarı:<br>
										 	<?php 
												echo $islem["servismiktar"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #cc5200;color: white;padding: 15px;border-radius: 10px">
										 	Servis sayısı:<br>
										 	<?php 
												echo $islem["servissayı"];
										 	?>
										 </div>
									</div>
									<div class="row">
										<h3 style="text-align: left;padding-left: 10px">YORUMLAR</h3>
									</div>
									
								</div>

								<div class="col-md-1">
									
								</div>
							</div>
						</div>
							<?php		
								break;
								case '6':
							?>
								<div class="container">
							<div class="row" >
								<div class="col-md-1">
									
								</div>
								<div class="col-md-10" style="border:1px solid #b3b3b3">
									<div class="row text-center ozelcerceve">
										<div class="col-md-10">
											<div class="col-md-4">
												<img src="img/6.jpeg" style="width: 250px;height: 250px;">
											</div>

											<div class="col-md-8">
												<?php 
													$veri = $veritabani->prepare("select * from urunler where urunid=?;");
													$veri ->execute(array("6"));
													$islem= $veri->fetch();
												?>
													<p style="text-align: left;font-size: 22px;font-weight: bold;padding-left:30px">
														<?php 
															echo $islem["urunbaslik"];
														 ?>
													</p>
													<p style="text-align: left;font-size: 15px;color:#a6a6a6;margin-top: -15px;padding-left: 30px">
														<?php 
															echo $islem["marka"];
														 ?>
													</p>
													<p>
														<h4 style="text-align: left;color: #595959;padding-left: 30px">Fiyat</h4>
													</p>
													<p style="text-align: left;font-size: 29px;color:#e60000;padding-left: 30px">
														<?php 
															echo $islem["fiyat"];
															echo " TL";
														 ?>
													</p>
													<form style="float: left;padding-left: 30px">
														<input type="radio" name="aroma" value="kola"> <span style="color:#663300;font-size: 18px;font-weight: bold">Kola</span>
														<input type="radio" name="aroma" value="ananas"> <span style="color:#e6b800;font-size: 18px;font-weight: bold">Ananas</span>
														
													</form><br>
													<p style="margin-top: 30px;padding-left: 20px">
														<button class="ozelsbuton" style="float:left">Sepete Ekle</button>
													</p>
												<?php
												?>
											</div>
										</div>
										<div class="col-md-2">
											<table>
												<tr>
													<td style="font-size: 11px">Kargo ücreti yok</td>
													<td><img src="img/cargo.png"></td>
												</tr>
												<br>
												<tr>
													<td style="font-size: 11px">Aynı gün kargo</td>
													<td><img src="img/time.png"></td>
												</tr>
												<tr>
													<td style="font-size: 11px">Kapıda ödeme imkanı</td>
													<td><img src="img/nopay.png"></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="row text-center" style="padding: 5px">
										<h3 class="text-left" style="padding-left: 5px">DEĞERLER</h3>
										 
										 <div class="col-md-4" style="height: 70px;background-color: #cc0099;color: white;padding: 15px;border-radius: 10px">
										 	Servis başı fiyat:<br>
										 	<?php 
												echo $islem["servisbasifiyat"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #4d4dff;color: white;padding: 15px;border-radius: 10px">
										 	Servis miktarı:<br>
										 	<?php 
												echo $islem["servismiktar"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #cc5200;color: white;padding: 15px;border-radius: 10px">
										 	Servis sayısı:<br>
										 	<?php 
												echo $islem["servissayı"];
										 	?>
										 </div>
									</div>
									<div class="row">
										<h3 style="text-align: left;padding-left: 10px">YORUMLAR</h3>
									</div>
									
								</div>

								<div class="col-md-1">
									
								</div>
							</div>
						</div>
							<?php		
									break;
							case '7':
							?>
								<div class="container">
							<div class="row" >
								<div class="col-md-1">
									
								</div>
								<div class="col-md-10" style="border:1px solid #b3b3b3">
									<div class="row text-center ozelcerceve">
										<div class="col-md-10">
											<div class="col-md-4">
												<img src="img/7.jpeg" style="width: 250px;height: 250px;">
											</div>

											<div class="col-md-8">
												<?php 
													$veri = $veritabani->prepare("select * from urunler where urunid=?;");
													$veri ->execute(array("7"));
													$islem= $veri->fetch();
												?>
													<p style="text-align: left;font-size: 22px;font-weight: bold;padding-left:30px">
														<?php 
															echo $islem["urunbaslik"];
														 ?>
													</p>
													<p style="text-align: left;font-size: 15px;color:#a6a6a6;margin-top: -15px;padding-left: 30px">
														<?php 
															echo $islem["marka"];
														 ?>
													</p>
													<p>
														<h4 style="text-align: left;color: #595959;padding-left: 30px">Fiyat</h4>
													</p>
													<p style="text-align: left;font-size: 29px;color:#e60000;padding-left: 30px">
														<?php 
															echo $islem["fiyat"];
															echo " TL";
														 ?>
													</p>
													<br>
													<p style="margin-top: 30px;padding-left: 20px">
														<button class="ozelsbuton" style="float:left">Sepete Ekle</button>
													</p>
												<?php
												?>
											</div>
										</div>
										<div class="col-md-2">
											<table>
												<tr>
													<td style="font-size: 11px">Kargo ücreti yok</td>
													<td><img src="img/cargo.png"></td>
												</tr>
												<br>
												<tr>
													<td style="font-size: 11px">Aynı gün kargo</td>
													<td><img src="img/time.png"></td>
												</tr>
												<tr>
													<td style="font-size: 11px">Kapıda ödeme imkanı</td>
													<td><img src="img/nopay.png"></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="row text-center" style="padding: 5px">
										<h3 class="text-left" style="padding-left: 5px">DEĞERLER</h3>
										 
										 <div class="col-md-4" style="height: 70px;background-color: #cc0099;color: white;padding: 15px;border-radius: 10px">
										 	Servis başı fiyat:<br>
										 	<?php 
												echo $islem["servisbasifiyat"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #4d4dff;color: white;padding: 15px;border-radius: 10px">
										 	Servis miktarı:<br>
										 	<?php 
												echo $islem["servismiktar"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #cc5200;color: white;padding: 15px;border-radius: 10px">
										 	Servis sayısı:<br>
										 	<?php 
												echo $islem["servissayı"];
										 	?>
										 </div>
									</div>
									<div class="row">
										<h3 style="text-align: left;padding-left: 10px">YORUMLAR</h3>
									</div>
									
								</div>

								<div class="col-md-1">
									
								</div>
							</div>
						</div>
							<?php			
							break;
							case '8':
								?>
								<div class="container">
							<div class="row" >
								<div class="col-md-1">
									
								</div>
								<div class="col-md-10" style="border:1px solid #b3b3b3">
									<div class="row text-center ozelcerceve">
										<div class="col-md-10">
											<div class="col-md-4">
												<img src="img/8.jpeg" style="width: 250px;height: 250px;">
											</div>

											<div class="col-md-8">
												<?php 
													$veri = $veritabani->prepare("select * from urunler where urunid=?;");
													$veri ->execute(array("8"));
													$islem= $veri->fetch();
												?>
													<p style="text-align: left;font-size: 22px;font-weight: bold;padding-left:30px">
														<?php 
															echo $islem["urunbaslik"];
														 ?>
													</p>
													<p style="text-align: left;font-size: 15px;color:#a6a6a6;margin-top: -15px;padding-left: 30px">
														<?php 
															echo $islem["marka"];
														 ?>
													</p>
													<p>
														<h4 style="text-align: left;color: #595959;padding-left: 30px">Fiyat</h4>
													</p>
													<p style="text-align: left;font-size: 29px;color:#e60000;padding-left: 30px">
														<?php 
															echo $islem["fiyat"];
															echo " TL";
														 ?>
													</p>
													<form style="float: left;padding-left: 30px">
														
														<input type="radio" name="aroma" value="karpuz"> <span style="color:#b30059;font-size: 18px;font-weight: bold">Karpuz</span>
														
													</form><br>
													<p style="margin-top: 30px;padding-left: 20px">
														<button class="ozelsbuton" style="float:left">Sepete Ekle</button>
													</p>
												<?php
												?>
											</div>
										</div>
										<div class="col-md-2">
											<table>
												<tr>
													<td style="font-size: 11px">Kargo ücreti yok</td>
													<td><img src="img/cargo.png"></td>
												</tr>
												<br>
												<tr>
													<td style="font-size: 11px">Aynı gün kargo</td>
													<td><img src="img/time.png"></td>
												</tr>
												<tr>
													<td style="font-size: 11px">Kapıda ödeme imkanı</td>
													<td><img src="img/nopay.png"></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="row text-center" style="padding: 5px">
										<h3 class="text-left" style="padding-left: 5px">DEĞERLER</h3>
										 
										 <div class="col-md-4" style="height: 70px;background-color: #cc0099;color: white;padding: 15px;border-radius: 10px">
										 	Servis başı fiyat:<br>
										 	<?php 
												echo $islem["servisbasifiyat"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #4d4dff;color: white;padding: 15px;border-radius: 10px">
										 	Servis miktarı:<br>
										 	<?php 
												echo $islem["servismiktar"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #cc5200;color: white;padding: 15px;border-radius: 10px">
										 	Servis sayısı:<br>
										 	<?php 
												echo $islem["servissayı"];
										 	?>
										 </div>
									</div>
									<div class="row">
										<h3 style="text-align: left;padding-left: 10px">YORUMLAR</h3>
									</div>
									
								</div>

								<div class="col-md-1">
									
								</div>
							</div>
						</div>
								<?php
								break;
								case '9':
									?>
									<div class="container">
							<div class="row" >
								<div class="col-md-1">
									
								</div>
								<div class="col-md-10" style="border:1px solid #b3b3b3">
									<div class="row text-center ozelcerceve">
										<div class="col-md-10">
											<div class="col-md-4">
												<img src="img/9.jpeg" style="width: 250px;height: 250px;">
											</div>

											<div class="col-md-8">
												<?php 
													$veri = $veritabani->prepare("select * from urunler where urunid=?;");
													$veri ->execute(array("9"));
													$islem= $veri->fetch();
												?>
													<p style="text-align: left;font-size: 22px;font-weight: bold;padding-left:30px">
														<?php 
															echo $islem["urunbaslik"];
														 ?>
													</p>
													<p style="text-align: left;font-size: 15px;color:#a6a6a6;margin-top: -15px;padding-left: 30px">
														<?php 
															echo $islem["marka"];
														 ?>
													</p>
													<p>
														<h4 style="text-align: left;color: #595959;padding-left: 30px">Fiyat</h4>
													</p>
													<p style="text-align: left;font-size: 29px;color:#e60000;padding-left: 30px">
														<?php 
															echo $islem["fiyat"];
															echo " TL";
														 ?>
													</p>
													<form style="float: left;padding-left: 30px">
														<input type="radio" name="aroma" value="cikolata"> <span style="color:#663300;font-size: 18px;font-weight: bold">Çikolata</span>
														<input type="radio" name="aroma" value="cilek"> <span style="color:#e6b800;font-size: 18px;font-weight: bold">Muz</span>
														<input type="radio" name="aroma" value="muz"> <span style="color:#b30059;font-size: 18px;font-weight: bold">Çilek</span>
													</form><br>
													<p style="margin-top: 30px;padding-left: 20px">
														<button class="ozelsbuton" style="float:left">Sepete Ekle</button>
													</p>
												<?php
												?>
											</div>
										</div>
										<div class="col-md-2">
											<table>
												<tr>
													<td style="font-size: 11px">Kargo ücreti yok</td>
													<td><img src="img/cargo.png"></td>
												</tr>
												<br>
												<tr>
													<td style="font-size: 11px">Aynı gün kargo</td>
													<td><img src="img/time.png"></td>
												</tr>
												<tr>
													<td style="font-size: 11px">Kapıda ödeme imkanı</td>
													<td><img src="img/nopay.png"></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="row text-center" style="padding: 5px">
										<h3 class="text-left" style="padding-left: 5px">DEĞERLER</h3>
										 <div class="col-md-2" style="height: 70px;background-color: #ff5050;color: white;padding: 15px;border-radius: 10px">
										 	Protein oranı:<br>
										 	<?php 
												echo $islem["proteinoran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #4dc3ff;color: white;padding: 15px;border-radius: 10px">
										 	Şeker oranı:<br>
										 	<?php 
												echo $islem["sekeroran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #008000;color: white;padding: 15px;border-radius: 10px">
										 	Karbonhidrat oranı:<br>
										 	<?php 
												echo $islem["karbonoran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #cc0099;color: white;padding: 15px;border-radius: 10px">
										 	Yağ oranı:<br>
										 	<?php 
												echo $islem["yagoran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #4d4dff;color: white;padding: 15px;border-radius: 10px">
										 	Servis miktarı:<br>
										 	<?php 
												echo $islem["servismiktar"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #cc5200;color: white;padding: 15px;border-radius: 10px">
										 	Servis sayısı:<br>
										 	<?php 
												echo $islem["servissayı"];
										 	?>
										 </div>
									</div>
									<div class="row">
										<h3 style="text-align: left;padding-left: 10px">YORUMLAR</h3>
									</div>
									
								</div>

								<div class="col-md-1">
									
								</div>
							</div>
						</div>
								<?php
								break;
								case '10':
								?>
								<div class="container">
							<div class="row" >
								<div class="col-md-1">
									
								</div>
								<div class="col-md-10" style="border:1px solid #b3b3b3">
									<div class="row text-center ozelcerceve">
										<div class="col-md-10">
											<div class="col-md-4">
												<img src="img/10.jpeg" style="width: 250px;height: 250px;">
											</div>

											<div class="col-md-8">
												<?php 
													$veri = $veritabani->prepare("select * from urunler where urunid=?;");
													$veri ->execute(array("10"));
													$islem= $veri->fetch();
												?>
													<p style="text-align: left;font-size: 22px;font-weight: bold;padding-left:30px">
														<?php 
															echo $islem["urunbaslik"];
														 ?>
													</p>
													<p style="text-align: left;font-size: 15px;color:#a6a6a6;margin-top: -15px;padding-left: 30px">
														<?php 
															echo $islem["marka"];
														 ?>
													</p>
													<p>
														<h4 style="text-align: left;color: #595959;padding-left: 30px">Fiyat</h4>
													</p>
													<p style="text-align: left;font-size: 29px;color:#e60000;padding-left: 30px">
														<?php 
															echo $islem["fiyat"];
															echo " TL";
														 ?>
													</p>
													<form style="float: left;padding-left: 30px">
														<input type="radio" name="aroma" value="cikolata"> <span style="color:#663300;font-size: 18px;font-weight: bold">Çikolata</span>
														<input type="radio" name="aroma" value="cilek"> <span style="color:#e6b800;font-size: 18px;font-weight: bold">Muz</span>
														<input type="radio" name="aroma" value="muz"> <span style="color:#b30059;font-size: 18px;font-weight: bold">Çilek</span>
													</form><br>
													<p style="margin-top: 30px;padding-left: 20px">
														<button class="ozelsbuton" style="float:left">Sepete Ekle</button>
													</p>
												<?php
												?>
											</div>
										</div>
										<div class="col-md-2">
											<table>
												<tr>
													<td style="font-size: 11px">Kargo ücreti yok</td>
													<td><img src="img/cargo.png"></td>
												</tr>
												<br>
												<tr>
													<td style="font-size: 11px">Aynı gün kargo</td>
													<td><img src="img/time.png"></td>
												</tr>
												<tr>
													<td style="font-size: 11px">Kapıda ödeme imkanı</td>
													<td><img src="img/nopay.png"></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="row text-center" style="padding: 5px">
										<h3 class="text-left" style="padding-left: 5px">DEĞERLER</h3>
										 <div class="col-md-2" style="height: 70px;background-color: #ff5050;color: white;padding: 15px;border-radius: 10px">
										 	Protein oranı:<br>
										 	<?php 
												echo $islem["proteinoran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #4dc3ff;color: white;padding: 15px;border-radius: 10px">
										 	Şeker oranı:<br>
										 	<?php 
												echo $islem["sekeroran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #008000;color: white;padding: 15px;border-radius: 10px">
										 	Karbonhidrat oranı:<br>
										 	<?php 
												echo $islem["karbonoran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #cc0099;color: white;padding: 15px;border-radius: 10px">
										 	Yağ oranı:<br>
										 	<?php 
												echo $islem["yagoran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #4d4dff;color: white;padding: 15px;border-radius: 10px">
										 	Servis miktarı:<br>
										 	<?php 
												echo $islem["servismiktar"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #cc5200;color: white;padding: 15px;border-radius: 10px">
										 	Servis sayısı:<br>
										 	<?php 
												echo $islem["servissayı"];
										 	?>
										 </div>
									</div>
									<div class="row">
										<h3 style="text-align: left;padding-left: 10px">YORUMLAR</h3>
									</div>
									
								</div>

								<div class="col-md-1">
									
								</div>
							</div>
						</div>
								<?php	
									break;
							case '11':
							?>
								<div class="container">
							<div class="row" >
								<div class="col-md-1">
									
								</div>
								<div class="col-md-10" style="border:1px solid #b3b3b3">
									<div class="row text-center ozelcerceve">
										<div class="col-md-10">
											<div class="col-md-4">
												<img src="img/11.jpeg" style="width: 250px;height: 250px;">
											</div>

											<div class="col-md-8">
												<?php 
													$veri = $veritabani->prepare("select * from urunler where urunid=?;");
													$veri ->execute(array("11"));
													$islem= $veri->fetch();
												?>
													<p style="text-align: left;font-size: 22px;font-weight: bold;padding-left:30px">
														<?php 
															echo $islem["urunbaslik"];
														 ?>
													</p>
													<p style="text-align: left;font-size: 15px;color:#a6a6a6;margin-top: -15px;padding-left: 30px">
														<?php 
															echo $islem["marka"];
														 ?>
													</p>
													<p>
														<h4 style="text-align: left;color: #595959;padding-left: 30px">Fiyat</h4>
													</p>
													<p style="text-align: left;font-size: 29px;color:#e60000;padding-left: 30px">
														<?php 
															echo $islem["fiyat"];
															echo " TL";
														 ?>
													</p>
													<form style="float: left;padding-left: 30px">
														<input type="radio" name="aroma" value="bisküvi"> <span style="color:#ffbf80;font-size: 18px;font-weight: bold">Bisküvi</span>
														<input type="radio" name="aroma" value="cilek"> <span style="color:#e6b800;font-size: 18px;font-weight: bold">Muz</span>
														
													</form><br>
													<p style="margin-top: 30px;padding-left: 20px">
														<button class="ozelsbuton" style="float:left">Sepete Ekle</button>
													</p>
												<?php
												?>
											</div>
										</div>
										<div class="col-md-2">
											<table>
												<tr>
													<td style="font-size: 11px">Kargo ücreti yok</td>
													<td><img src="img/cargo.png"></td>
												</tr>
												<br>
												<tr>
													<td style="font-size: 11px">Aynı gün kargo</td>
													<td><img src="img/time.png"></td>
												</tr>
												<tr>
													<td style="font-size: 11px">Kapıda ödeme imkanı</td>
													<td><img src="img/nopay.png"></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="row text-center" style="padding: 5px">
										<h3 class="text-left" style="padding-left: 5px">DEĞERLER</h3>
										 <div class="col-md-2" style="height: 70px;background-color: #ff5050;color: white;padding: 15px;border-radius: 10px">
										 	Protein oranı:<br>
										 	<?php 
												echo $islem["proteinoran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #4dc3ff;color: white;padding: 15px;border-radius: 10px">
										 	Şeker oranı:<br>
										 	<?php 
												echo $islem["sekeroran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #008000;color: white;padding: 15px;border-radius: 10px">
										 	Karbonhidrat oranı:<br>
										 	<?php 
												echo $islem["karbonoran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #cc0099;color: white;padding: 15px;border-radius: 10px">
										 	Yağ oranı:<br>
										 	<?php 
												echo $islem["yagoran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #4d4dff;color: white;padding: 15px;border-radius: 10px">
										 	Servis miktarı:<br>
										 	<?php 
												echo $islem["servismiktar"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #cc5200;color: white;padding: 15px;border-radius: 10px">
										 	Servis sayısı:<br>
										 	<?php 
												echo $islem["servissayı"];
										 	?>
										 </div>
									</div>
									<div class="row">
										<h3 style="text-align: left;padding-left: 10px">YORUMLAR</h3>
									</div>
									
								</div>

								<div class="col-md-1">
									
								</div>
							</div>
						</div>
							<?php
								break;
								case '12':
									?>
									<div class="container">
							<div class="row" >
								<div class="col-md-1">
									
								</div>
								<div class="col-md-10" style="border:1px solid #b3b3b3">
									<div class="row text-center ozelcerceve">
										<div class="col-md-10">
											<div class="col-md-4">
												<img src="img/12.jpeg" style="width: 250px;height: 250px;">
											</div>

											<div class="col-md-8">
												<?php 
													$veri = $veritabani->prepare("select * from urunler where urunid=?;");
													$veri ->execute(array("12"));
													$islem= $veri->fetch();
												?>
													<p style="text-align: left;font-size: 22px;font-weight: bold;padding-left:30px">
														<?php 
															echo $islem["urunbaslik"];
														 ?>
													</p>
													<p style="text-align: left;font-size: 15px;color:#a6a6a6;margin-top: -15px;padding-left: 30px">
														<?php 
															echo $islem["marka"];
														 ?>
													</p>
													<p>
														<h4 style="text-align: left;color: #595959;padding-left: 30px">Fiyat</h4>
													</p>
													<p style="text-align: left;font-size: 29px;color:#e60000;padding-left: 30px">
														<?php 
															echo $islem["fiyat"];
															echo " TL";
														 ?>
													</p>
													<form style="float: left;padding-left: 30px">
														<input type="radio" name="aroma" value="cikolata"> <span style="color:#663300;font-size: 18px;font-weight: bold">Çikolata</span>
														
														<input type="radio" name="aroma" value="muz"> <span style="color:#b30059;font-size: 18px;font-weight: bold">Çilek</span>
													</form><br>
													<p style="margin-top: 30px;padding-left: 20px">
														<button class="ozelsbuton" style="float:left">Sepete Ekle</button>
													</p>
												<?php
												?>
											</div>
										</div>
										<div class="col-md-2">
											<table>
												<tr>
													<td style="font-size: 11px">Kargo ücreti yok</td>
													<td><img src="img/cargo.png"></td>
												</tr>
												<br>
												<tr>
													<td style="font-size: 11px">Aynı gün kargo</td>
													<td><img src="img/time.png"></td>
												</tr>
												<tr>
													<td style="font-size: 11px">Kapıda ödeme imkanı</td>
													<td><img src="img/nopay.png"></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="row text-center" style="padding: 5px">
										<h3 class="text-left" style="padding-left: 5px">DEĞERLER</h3>
										 <div class="col-md-2" style="height: 70px;background-color: #ff5050;color: white;padding: 15px;border-radius: 10px">
										 	Protein oranı:<br>
										 	<?php 
												echo $islem["proteinoran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #4dc3ff;color: white;padding: 15px;border-radius: 10px">
										 	Şeker oranı:<br>
										 	<?php 
												echo $islem["sekeroran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #008000;color: white;padding: 15px;border-radius: 10px">
										 	Karbonhidrat oranı:<br>
										 	<?php 
												echo $islem["karbonoran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #cc0099;color: white;padding: 15px;border-radius: 10px">
										 	Yağ oranı:<br>
										 	<?php 
												echo $islem["yagoran"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #4d4dff;color: white;padding: 15px;border-radius: 10px">
										 	Servis miktarı:<br>
										 	<?php 
												echo $islem["servismiktar"];
										 	?>
										 </div>
										 <div class="col-md-2" style="height: 70px;background-color: #cc5200;color: white;padding: 15px;border-radius: 10px">
										 	Servis sayısı:<br>
										 	<?php 
												echo $islem["servissayı"];
										 	?>
										 </div>
									</div>
									<div class="row">
										<h3 style="text-align: left;padding-left: 10px">YORUMLAR</h3>
									</div>
									
								</div>

								<div class="col-md-1">
									
								</div>
							</div>
						</div>
									<?php
									break;
									case '13':
								?>
								<div class="container">
							<div class="row" >
								<div class="col-md-1">
									
								</div>
								<div class="col-md-10" style="border:1px solid #b3b3b3">
									<div class="row text-center ozelcerceve">
										<div class="col-md-10">
											<div class="col-md-4">
												<img src="img/13.jpeg" style="width: 250px;height: 250px;">
											</div>

											<div class="col-md-8">
												<?php 
													$veri = $veritabani->prepare("select * from urunler where urunid=?;");
													$veri ->execute(array("13"));
													$islem= $veri->fetch();
												?>
													<p style="text-align: left;font-size: 22px;font-weight: bold;padding-left:30px">
														<?php 
															echo $islem["urunbaslik"];
														 ?>
													</p>
													<p style="text-align: left;font-size: 15px;color:#a6a6a6;margin-top: -15px;padding-left: 30px">
														<?php 
															echo $islem["marka"];
														 ?>
													</p>
													<p>
														<h4 style="text-align: left;color: #595959;padding-left: 30px">Fiyat</h4>
													</p>
													<p style="text-align: left;font-size: 29px;color:#e60000;padding-left: 30px">
														<?php 
															echo $islem["fiyat"];
															echo " TL";
														 ?>
													</p>
													<br>
													<p style="margin-top: 30px;padding-left: 20px">
														<button class="ozelsbuton" style="float:left">Sepete Ekle</button>
													</p>
												<?php
												?>
											</div>
										</div>
										<div class="col-md-2">
											<table>
												<tr>
													<td style="font-size: 11px">Kargo ücreti yok</td>
													<td><img src="img/cargo.png"></td>
												</tr>
												<br>
												<tr>
													<td style="font-size: 11px">Aynı gün kargo</td>
													<td><img src="img/time.png"></td>
												</tr>
												<tr>
													<td style="font-size: 11px">Kapıda ödeme imkanı</td>
													<td><img src="img/nopay.png"></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="row text-center" style="padding: 5px">
										<h3 class="text-left" style="padding-left: 5px">DEĞERLER</h3>
										 
										 <div class="col-md-4" style="height: 70px;background-color: #cc0099;color: white;padding: 15px;border-radius: 10px">
										 	Servis başı fiyat:<br>
										 	<?php 
												echo $islem["servisbasifiyat"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #4d4dff;color: white;padding: 15px;border-radius: 10px">
										 	Servis miktarı:<br>
										 	<?php 
												echo $islem["servismiktar"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #cc5200;color: white;padding: 15px;border-radius: 10px">
										 	Servis sayısı:<br>
										 	<?php 
												echo $islem["servissayı"];
										 	?>
										 </div>
									</div>
									<div class="row">
										<h3 style="text-align: left;padding-left: 10px">YORUMLAR</h3>
									</div>
									
								</div>

								<div class="col-md-1">
									
								</div>
							</div>
						</div>
								<?php		
									break;
									case '14':
								?>
									<div class="container">
							<div class="row" >
								<div class="col-md-1">
									
								</div>
								<div class="col-md-10" style="border:1px solid #b3b3b3">
									<div class="row text-center ozelcerceve">
										<div class="col-md-10">
											<div class="col-md-4">
												<img src="img/14.jpeg" style="width: 250px;height: 250px;">
											</div>

											<div class="col-md-8">
												<?php 
													$veri = $veritabani->prepare("select * from urunler where urunid=?;");
													$veri ->execute(array("14"));
													$islem= $veri->fetch();
												?>
													<p style="text-align: left;font-size: 22px;font-weight: bold;padding-left:30px">
														<?php 
															echo $islem["urunbaslik"];
														 ?>
													</p>
													<p style="text-align: left;font-size: 15px;color:#a6a6a6;margin-top: -15px;padding-left: 30px">
														<?php 
															echo $islem["marka"];
														 ?>
													</p>
													<p>
														<h4 style="text-align: left;color: #595959;padding-left: 30px">Fiyat</h4>
													</p>
													<p style="text-align: left;font-size: 29px;color:#e60000;padding-left: 30px">
														<?php 
															echo $islem["fiyat"];
															echo " TL";
														 ?>
													</p>
													<br>
													<p style="margin-top: 30px;padding-left: 20px">
														<button class="ozelsbuton" style="float:left">Sepete Ekle</button>
													</p>
												<?php
												?>
											</div>
										</div>
										<div class="col-md-2">
											<table>
												<tr>
													<td style="font-size: 11px">Kargo ücreti yok</td>
													<td><img src="img/cargo.png"></td>
												</tr>
												<br>
												<tr>
													<td style="font-size: 11px">Aynı gün kargo</td>
													<td><img src="img/time.png"></td>
												</tr>
												<tr>
													<td style="font-size: 11px">Kapıda ödeme imkanı</td>
													<td><img src="img/nopay.png"></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="row text-center" style="padding: 5px">
										<h3 class="text-left" style="padding-left: 5px">DEĞERLER</h3>
										 
										 <div class="col-md-4" style="height: 70px;background-color: #cc0099;color: white;padding: 15px;border-radius: 10px">
										 	Servis başı fiyat:<br>
										 	<?php 
												echo $islem["servisbasifiyat"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #4d4dff;color: white;padding: 15px;border-radius: 10px">
										 	Servis miktarı:<br>
										 	<?php 
												echo $islem["servismiktar"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #cc5200;color: white;padding: 15px;border-radius: 10px">
										 	Servis sayısı:<br>
										 	<?php 
												echo $islem["servissayı"];
										 	?>
										 </div>
									</div>
									<div class="row">
										<h3 style="text-align: left;padding-left: 10px">YORUMLAR</h3>
									</div>
									
								</div>

								<div class="col-md-1">
									
								</div>
							</div>
						</div>
								<?php
									break;
									case '15':
								?>
									<div class="container">
							<div class="row" >
								<div class="col-md-1">
									
								</div>
								<div class="col-md-10" style="border:1px solid #b3b3b3">
									<div class="row text-center ozelcerceve">
										<div class="col-md-10">
											<div class="col-md-4">
												<img src="img/15.png" style="width: 250px;height: 250px;">
											</div>

											<div class="col-md-8">
												<?php 
													$veri = $veritabani->prepare("select * from urunler where urunid=?;");
													$veri ->execute(array("15"));
													$islem= $veri->fetch();
												?>
													<p style="text-align: left;font-size: 22px;font-weight: bold;padding-left:30px">
														<?php 
															echo $islem["urunbaslik"];
														 ?>
													</p>
													<p style="text-align: left;font-size: 15px;color:#a6a6a6;margin-top: -15px;padding-left: 30px">
														<?php 
															echo $islem["marka"];
														 ?>
													</p>
													<p>
														<h4 style="text-align: left;color: #595959;padding-left: 30px">Fiyat</h4>
													</p>
													<p style="text-align: left;font-size: 29px;color:#e60000;padding-left: 30px">
														<?php 
															echo $islem["fiyat"];
															echo " TL";
														 ?>
													</p>
													<br>
													<p style="margin-top: 30px;padding-left: 20px">
														<button class="ozelsbuton" style="float:left">Sepete Ekle</button>
													</p>
												<?php
												?>
											</div>
										</div>
										<div class="col-md-2">
											<table>
												<tr>
													<td style="font-size: 11px">Kargo ücreti yok</td>
													<td><img src="img/cargo.png"></td>
												</tr>
												<br>
												<tr>
													<td style="font-size: 11px">Aynı gün kargo</td>
													<td><img src="img/time.png"></td>
												</tr>
												<tr>
													<td style="font-size: 11px">Kapıda ödeme imkanı</td>
													<td><img src="img/nopay.png"></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="row text-center" style="padding: 5px">
										<h3 class="text-left" style="padding-left: 5px">DEĞERLER</h3>
										 
										 <div class="col-md-4" style="height: 70px;background-color: #cc0099;color: white;padding: 15px;border-radius: 10px">
										 	Servis başı fiyat:<br>
										 	<?php 
												echo $islem["servisbasifiyat"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #4d4dff;color: white;padding: 15px;border-radius: 10px">
										 	Servis miktarı:<br>
										 	<?php 
												echo $islem["servismiktar"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #cc5200;color: white;padding: 15px;border-radius: 10px">
										 	Servis sayısı:<br>
										 	<?php 
												echo $islem["servissayı"];
										 	?>
										 </div>
									</div>
									<div class="row">
										<h3 style="text-align: left;padding-left: 10px">YORUMLAR</h3>
									</div>
									
								</div>

								<div class="col-md-1">
									
								</div>
							</div>
						</div>
								<?php		
									break;
								case '16':
								?>
								<div class="container">
							<div class="row" >
								<div class="col-md-1">
									
								</div>
								<div class="col-md-10" style="border:1px solid #b3b3b3">
									<div class="row text-center ozelcerceve">
										<div class="col-md-10">
											<div class="col-md-4">
												<img src="img/16.jpeg" style="width: 250px;height: 250px;">
											</div>

											<div class="col-md-8">
												<?php 
													$veri = $veritabani->prepare("select * from urunler where urunid=?;");
													$veri ->execute(array("16"));
													$islem= $veri->fetch();
												?>
													<p style="text-align: left;font-size: 22px;font-weight: bold;padding-left:30px">
														<?php 
															echo $islem["urunbaslik"];
														 ?>
													</p>
													<p style="text-align: left;font-size: 15px;color:#a6a6a6;margin-top: -15px;padding-left: 30px">
														<?php 
															echo $islem["marka"];
														 ?>
													</p>
													<p>
														<h4 style="text-align: left;color: #595959;padding-left: 30px">Fiyat</h4>
													</p>
													<p style="text-align: left;font-size: 29px;color:#e60000;padding-left: 30px">
														<?php 
															echo $islem["fiyat"];
															echo " TL";
														 ?>
													</p>
													<br>
													<p style="margin-top: 30px;padding-left: 20px">
														<button class="ozelsbuton" style="float:left">Sepete Ekle</button>
													</p>
												<?php
												?>
											</div>
										</div>
										<div class="col-md-2">
											<table>
												<tr>
													<td style="font-size: 11px">Kargo ücreti yok</td>
													<td><img src="img/cargo.png"></td>
												</tr>
												<br>
												<tr>
													<td style="font-size: 11px">Aynı gün kargo</td>
													<td><img src="img/time.png"></td>
												</tr>
												<tr>
													<td style="font-size: 11px">Kapıda ödeme imkanı</td>
													<td><img src="img/nopay.png"></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="row text-center" style="padding: 5px">
										<h3 class="text-left" style="padding-left: 5px">DEĞERLER</h3>
										 
										 <div class="col-md-4" style="height: 70px;background-color: #cc0099;color: white;padding: 15px;border-radius: 10px">
										 	Servis başı fiyat:<br>
										 	<?php 
												echo $islem["servisbasifiyat"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #4d4dff;color: white;padding: 15px;border-radius: 10px">
										 	Servis miktarı:<br>
										 	<?php 
												echo $islem["servismiktar"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #cc5200;color: white;padding: 15px;border-radius: 10px">
										 	Servis sayısı:<br>
										 	<?php 
												echo $islem["servissayı"];
										 	?>
										 </div>
									</div>
									<div class="row">
										<h3 style="text-align: left;padding-left: 10px">YORUMLAR</h3>
									</div>
									
								</div>

								<div class="col-md-1">
									
								</div>
							</div>
						</div>
								<?php		
									break;
									case '17':
									?>
									<div class="container">
							<div class="row" >
								<div class="col-md-1">
									
								</div>
								<div class="col-md-10" style="border:1px solid #b3b3b3">
									<div class="row text-center ozelcerceve">
										<div class="col-md-10">
											<div class="col-md-4">
												<img src="img/17.jpeg" style="width: 250px;height: 250px;">
											</div>

											<div class="col-md-8">
												<?php 
													$veri = $veritabani->prepare("select * from urunler where urunid=?;");
													$veri ->execute(array("17"));
													$islem= $veri->fetch();
												?>
													<p style="text-align: left;font-size: 22px;font-weight: bold;padding-left:30px">
														<?php 
															echo $islem["urunbaslik"];
														 ?>
													</p>
													<p style="text-align: left;font-size: 15px;color:#a6a6a6;margin-top: -15px;padding-left: 30px">
														<?php 
															echo $islem["marka"];
														 ?>
													</p>
													<p>
														<h4 style="text-align: left;color: #595959;padding-left: 30px">Fiyat</h4>
													</p>
													<p style="text-align: left;font-size: 29px;color:#e60000;padding-left: 30px">
														<?php 
															echo $islem["fiyat"];
															echo " TL";
														 ?>
													</p>
													<br>
													<p style="margin-top: 30px;padding-left: 20px">
														<button class="ozelsbuton" style="float:left">Sepete Ekle</button>
													</p>
												<?php
												?>
											</div>
										</div>
										<div class="col-md-2">
											<table>
												<tr>
													<td style="font-size: 11px">Kargo ücreti yok</td>
													<td><img src="img/cargo.png"></td>
												</tr>
												<br>
												<tr>
													<td style="font-size: 11px">Aynı gün kargo</td>
													<td><img src="img/time.png"></td>
												</tr>
												<tr>
													<td style="font-size: 11px">Kapıda ödeme imkanı</td>
													<td><img src="img/nopay.png"></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="row text-center" style="padding: 5px">
										<h3 class="text-left" style="padding-left: 5px">DEĞERLER</h3>
										 
										 <div class="col-md-4" style="height: 70px;background-color: #cc0099;color: white;padding: 15px;border-radius: 10px">
										 	Servis başı fiyat:<br>
										 	<?php 
												echo $islem["servisbasifiyat"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #4d4dff;color: white;padding: 15px;border-radius: 10px">
										 	Servis miktarı:<br>
										 	<?php 
												echo $islem["servismiktar"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #cc5200;color: white;padding: 15px;border-radius: 10px">
										 	Servis sayısı:<br>
										 	<?php 
												echo $islem["servissayı"];
										 	?>
										 </div>
									</div>
									<div class="row">
										<h3 style="text-align: left;padding-left: 10px">YORUMLAR</h3>
									</div>
									
								</div>

								<div class="col-md-1">
									
								</div>
							</div>
						</div>
									<?php	
									break;
									case '18':
								?>
									<div class="container">
							<div class="row" >
								<div class="col-md-1">
									
								</div>
								<div class="col-md-10" style="border:1px solid #b3b3b3">
									<div class="row text-center ozelcerceve">
										<div class="col-md-10">
											<div class="col-md-4">
												<img src="img/18.jpeg" style="width: 250px;height: 250px;">
											</div>

											<div class="col-md-8">
												<?php 
													$veri = $veritabani->prepare("select * from urunler where urunid=?;");
													$veri ->execute(array("18"));
													$islem= $veri->fetch();
												?>
													<p style="text-align: left;font-size: 22px;font-weight: bold;padding-left:30px">
														<?php 
															echo $islem["urunbaslik"];
														 ?>
													</p>
													<p style="text-align: left;font-size: 15px;color:#a6a6a6;margin-top: -15px;padding-left: 30px">
														<?php 
															echo $islem["marka"];
														 ?>
													</p>
													<p>
														<h4 style="text-align: left;color: #595959;padding-left: 30px">Fiyat</h4>
													</p>
													<p style="text-align: left;font-size: 29px;color:#e60000;padding-left: 30px">
														<?php 
															echo $islem["fiyat"];
															echo " TL";
														 ?>
													</p>
													<br>
													<p style="margin-top: 30px;padding-left: 20px">
														<button class="ozelsbuton" style="float:left">Sepete Ekle</button>
													</p>
												<?php
												?>
											</div>
										</div>
										<div class="col-md-2">
											<table>
												<tr>
													<td style="font-size: 11px">Kargo ücreti yok</td>
													<td><img src="img/cargo.png"></td>
												</tr>
												<br>
												<tr>
													<td style="font-size: 11px">Aynı gün kargo</td>
													<td><img src="img/time.png"></td>
												</tr>
												<tr>
													<td style="font-size: 11px">Kapıda ödeme imkanı</td>
													<td><img src="img/nopay.png"></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="row text-center" style="padding: 5px">
										<h3 class="text-left" style="padding-left: 5px">DEĞERLER</h3>
										 
										 <div class="col-md-4" style="height: 70px;background-color: #cc0099;color: white;padding: 15px;border-radius: 10px">
										 	Servis başı fiyat:<br>
										 	<?php 
												echo $islem["servisbasifiyat"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #4d4dff;color: white;padding: 15px;border-radius: 10px">
										 	Servis miktarı:<br>
										 	<?php 
												echo $islem["servismiktar"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #cc5200;color: white;padding: 15px;border-radius: 10px">
										 	Servis sayısı:<br>
										 	<?php 
												echo $islem["servissayı"];
										 	?>
										 </div>
									</div>
									<div class="row">
										<h3 style="text-align: left;padding-left: 10px">YORUMLAR</h3>
									</div>
									
								</div>

								<div class="col-md-1">
									
								</div>
							</div>
						</div>
								<?php
								break;
								case '19':
									?>
									<div class="container">
							<div class="row" >
								<div class="col-md-1">
									
								</div>
								<div class="col-md-10" style="border:1px solid #b3b3b3">
									<div class="row text-center ozelcerceve">
										<div class="col-md-10">
											<div class="col-md-4">
												<img src="img/19.jpeg" style="width: 250px;height: 250px;">
											</div>

											<div class="col-md-8">
												<?php 
													$veri = $veritabani->prepare("select * from urunler where urunid=?;");
													$veri ->execute(array("19"));
													$islem= $veri->fetch();
												?>
													<p style="text-align: left;font-size: 22px;font-weight: bold;padding-left:30px">
														<?php 
															echo $islem["urunbaslik"];
														 ?>
													</p>
													<p style="text-align: left;font-size: 15px;color:#a6a6a6;margin-top: -15px;padding-left: 30px">
														<?php 
															echo $islem["marka"];
														 ?>
													</p>
													<p>
														<h4 style="text-align: left;color: #595959;padding-left: 30px">Fiyat</h4>
													</p>
													<p style="text-align: left;font-size: 29px;color:#e60000;padding-left: 30px">
														<?php 
															echo $islem["fiyat"];
															echo " TL";
														 ?>
													</p>
													<br>
													<p style="margin-top: 30px;padding-left: 20px">
														<button class="ozelsbuton" style="float:left">Sepete Ekle</button>
													</p>
												<?php
												?>
											</div>
										</div>
										<div class="col-md-2">
											<table>
												<tr>
													<td style="font-size: 11px">Kargo ücreti yok</td>
													<td><img src="img/cargo.png"></td>
												</tr>
												<br>
												<tr>
													<td style="font-size: 11px">Aynı gün kargo</td>
													<td><img src="img/time.png"></td>
												</tr>
												<tr>
													<td style="font-size: 11px">Kapıda ödeme imkanı</td>
													<td><img src="img/nopay.png"></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="row text-center" style="padding: 5px">
										<h3 class="text-left" style="padding-left: 5px">DEĞERLER</h3>
										 
										 <div class="col-md-4" style="height: 70px;background-color: #cc0099;color: white;padding: 15px;border-radius: 10px">
										 	Servis başı fiyat:<br>
										 	<?php 
												echo $islem["servisbasifiyat"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #4d4dff;color: white;padding: 15px;border-radius: 10px">
										 	Servis miktarı:<br>
										 	<?php 
												echo $islem["servismiktar"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #cc5200;color: white;padding: 15px;border-radius: 10px">
										 	Servis sayısı:<br>
										 	<?php 
												echo $islem["servissayı"];
										 	?>
										 </div>
									</div>
									<div class="row">
										<h3 style="text-align: left;padding-left: 10px">YORUMLAR</h3>
									</div>
									
								</div>

								<div class="col-md-1">
									
								</div>
							</div>
						</div>
								<?php
								break;
								case '20':
								?>
								<div class="container">
							<div class="row" >
								<div class="col-md-1">
									
								</div>
								<div class="col-md-10" style="border:1px solid #b3b3b3">
									<div class="row text-center ozelcerceve">
										<div class="col-md-10">
											<div class="col-md-4">
												<img src="img/20.jpeg" style="width: 250px;height: 250px;">
											</div>

											<div class="col-md-8">
												<?php 
													$veri = $veritabani->prepare("select * from urunler where urunid=?;");
													$veri ->execute(array("20"));
													$islem= $veri->fetch();
												?>
													<p style="text-align: left;font-size: 22px;font-weight: bold;padding-left:30px">
														<?php 
															echo $islem["urunbaslik"];
														 ?>
													</p>
													<p style="text-align: left;font-size: 15px;color:#a6a6a6;margin-top: -15px;padding-left: 30px">
														<?php 
															echo $islem["marka"];
														 ?>
													</p>
													<p>
														<h4 style="text-align: left;color: #595959;padding-left: 30px">Fiyat</h4>
													</p>
													<p style="text-align: left;font-size: 29px;color:#e60000;padding-left: 30px">
														<?php 
															echo $islem["fiyat"];
															echo " TL";
														 ?>
													</p>
													<br>
													<p style="margin-top: 30px;padding-left: 20px">
														<button class="ozelsbuton" style="float:left">Sepete Ekle</button>
													</p>
												<?php
												?>
											</div>
										</div>
										<div class="col-md-2">
											<table>
												<tr>
													<td style="font-size: 11px">Kargo ücreti yok</td>
													<td><img src="img/cargo.png"></td>
												</tr>
												<br>
												<tr>
													<td style="font-size: 11px">Aynı gün kargo</td>
													<td><img src="img/time.png"></td>
												</tr>
												<tr>
													<td style="font-size: 11px">Kapıda ödeme imkanı</td>
													<td><img src="img/nopay.png"></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="row text-center" style="padding: 5px">
										<h3 class="text-left" style="padding-left: 5px">DEĞERLER</h3>
										 
										 <div class="col-md-4" style="height: 70px;background-color: #cc0099;color: white;padding: 15px;border-radius: 10px">
										 	Servis başı fiyat:<br>
										 	<?php 
												echo $islem["servisbasifiyat"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #4d4dff;color: white;padding: 15px;border-radius: 10px">
										 	Servis miktarı:<br>
										 	<?php 
												echo $islem["servismiktar"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #cc5200;color: white;padding: 15px;border-radius: 10px">
										 	Servis sayısı:<br>
										 	<?php 
												echo $islem["servissayı"];
										 	?>
										 </div>
									</div>
									<div class="row">
										<h3 style="text-align: left;padding-left: 10px">YORUMLAR</h3>
									</div>
									
								</div>

								<div class="col-md-1">
									
								</div>
							</div>
						</div>
								<?php	
									break;
									case '21':
									?>
									<div class="container">
							<div class="row" >
								<div class="col-md-1">
									
								</div>
								<div class="col-md-10" style="border:1px solid #b3b3b3">
									<div class="row text-center ozelcerceve">
										<div class="col-md-10">
											<div class="col-md-4">
												<img src="img/21.png" style="width: 250px;height: 250px;">
											</div>

											<div class="col-md-8">
												<?php 
													$veri = $veritabani->prepare("select * from urunler where urunid=?;");
													$veri ->execute(array("21"));
													$islem= $veri->fetch();
												?>
													<p style="text-align: left;font-size: 22px;font-weight: bold;padding-left:30px">
														<?php 
															echo $islem["urunbaslik"];
														 ?>
													</p>
													<p style="text-align: left;font-size: 15px;color:#a6a6a6;margin-top: -15px;padding-left: 30px">
														<?php 
															echo $islem["marka"];
														 ?>
													</p>
													<p>
														<h4 style="text-align: left;color: #595959;padding-left: 30px">Fiyat</h4>
													</p>
													<p style="text-align: left;font-size: 29px;color:#e60000;padding-left: 30px">
														<?php 
															echo $islem["fiyat"];
															echo " TL";
														 ?>
													</p>
													<br>
													<p style="margin-top: 30px;padding-left: 20px">
														<button class="ozelsbuton" style="float:left">Sepete Ekle</button>
													</p>
												<?php
												?>
											</div>
										</div>
										<div class="col-md-2">
											<table>
												<tr>
													<td style="font-size: 11px">Kargo ücreti yok</td>
													<td><img src="img/cargo.png"></td>
												</tr>
												<br>
												<tr>
													<td style="font-size: 11px">Aynı gün kargo</td>
													<td><img src="img/time.png"></td>
												</tr>
												<tr>
													<td style="font-size: 11px">Kapıda ödeme imkanı</td>
													<td><img src="img/nopay.png"></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="row text-center" style="padding: 5px">
										<h3 class="text-left" style="padding-left: 5px">DEĞERLER</h3>
										 
										 <div class="col-md-4" style="height: 70px;background-color: #cc0099;color: white;padding: 15px;border-radius: 10px">
										 	Servis başı fiyat:<br>
										 	<?php 
												echo $islem["servisbasifiyat"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #4d4dff;color: white;padding: 15px;border-radius: 10px">
										 	Servis miktarı:<br>
										 	<?php 
												echo $islem["servismiktar"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #cc5200;color: white;padding: 15px;border-radius: 10px">
										 	Servis sayısı:<br>
										 	<?php 
												echo $islem["servissayı"];
										 	?>
										 </div>
									</div>
									<div class="row">
										<h3 style="text-align: left;padding-left: 10px">YORUMLAR</h3>
									</div>
									
								</div>

								<div class="col-md-1">
									
								</div>
							</div>
						</div>
									<?php	
									break;
									case '22':
									?>
									<div class="container">
							<div class="row" >
								<div class="col-md-1">
									
								</div>
								<div class="col-md-10" style="border:1px solid #b3b3b3">
									<div class="row text-center ozelcerceve">
										<div class="col-md-10">
											<div class="col-md-4">
												<img src="img/22.jpeg" style="width: 250px;height: 250px;">
											</div>

											<div class="col-md-8">
												<?php 
													$veri = $veritabani->prepare("select * from urunler where urunid=?;");
													$veri ->execute(array("22"));
													$islem= $veri->fetch();
												?>
													<p style="text-align: left;font-size: 22px;font-weight: bold;padding-left:30px">
														<?php 
															echo $islem["urunbaslik"];
														 ?>
													</p>
													<p style="text-align: left;font-size: 15px;color:#a6a6a6;margin-top: -15px;padding-left: 30px">
														<?php 
															echo $islem["marka"];
														 ?>
													</p>
													<p>
														<h4 style="text-align: left;color: #595959;padding-left: 30px">Fiyat</h4>
													</p>
													<p style="text-align: left;font-size: 29px;color:#e60000;padding-left: 30px">
														<?php 
															echo $islem["fiyat"];
															echo " TL";
														 ?>
													</p>
													<br>
													<p style="margin-top: 30px;padding-left: 20px">
														<button class="ozelsbuton" style="float:left">Sepete Ekle</button>
													</p>
												<?php
												?>
											</div>
										</div>
										<div class="col-md-2">
											<table>
												<tr>
													<td style="font-size: 11px">Kargo ücreti yok</td>
													<td><img src="img/cargo.png"></td>
												</tr>
												<br>
												<tr>
													<td style="font-size: 11px">Aynı gün kargo</td>
													<td><img src="img/time.png"></td>
												</tr>
												<tr>
													<td style="font-size: 11px">Kapıda ödeme imkanı</td>
													<td><img src="img/nopay.png"></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="row text-center" style="padding: 5px">
										<h3 class="text-left" style="padding-left: 5px">DEĞERLER</h3>
										 
										 <div class="col-md-4" style="height: 70px;background-color: #cc0099;color: white;padding: 15px;border-radius: 10px">
										 	Servis başı fiyat:<br>
										 	<?php 
												echo $islem["servisbasifiyat"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #4d4dff;color: white;padding: 15px;border-radius: 10px">
										 	Servis miktarı:<br>
										 	<?php 
												echo $islem["servismiktar"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #cc5200;color: white;padding: 15px;border-radius: 10px">
										 	Servis sayısı:<br>
										 	<?php 
												echo $islem["servissayı"];
										 	?>
										 </div>
									</div>
									<div class="row">
										<h3 style="text-align: left;padding-left: 10px">YORUMLAR</h3>
									</div>
									
								</div>

								<div class="col-md-1">
									
								</div>
							</div>
						</div>
									<?php
									break;
									case '23':
									?>
									<div class="container">
							<div class="row" >
								<div class="col-md-1">
									
								</div>
								<div class="col-md-10" style="border:1px solid #b3b3b3">
									<div class="row text-center ozelcerceve">
										<div class="col-md-10">
											<div class="col-md-4">
												<img src="img/23.jpeg" style="width: 250px;height: 250px;">
											</div>

											<div class="col-md-8">
												<?php 
													$veri = $veritabani->prepare("select * from urunler where urunid=?;");
													$veri ->execute(array("23"));
													$islem= $veri->fetch();
												?>
													<p style="text-align: left;font-size: 22px;font-weight: bold;padding-left:30px">
														<?php 
															echo $islem["urunbaslik"];
														 ?>
													</p>
													<p style="text-align: left;font-size: 15px;color:#a6a6a6;margin-top: -15px;padding-left: 30px">
														<?php 
															echo $islem["marka"];
														 ?>
													</p>
													<p>
														<h4 style="text-align: left;color: #595959;padding-left: 30px">Fiyat</h4>
													</p>
													<p style="text-align: left;font-size: 29px;color:#e60000;padding-left: 30px">
														<?php 
															echo $islem["fiyat"];
															echo " TL";
														 ?>
													</p>
													<br>
													<p style="margin-top: 30px;padding-left: 20px">
														<button class="ozelsbuton" style="float:left">Sepete Ekle</button>
													</p>
												<?php
												?>
											</div>
										</div>
										<div class="col-md-2">
											<table>
												<tr>
													<td style="font-size: 11px">Kargo ücreti yok</td>
													<td><img src="img/cargo.png"></td>
												</tr>
												<br>
												<tr>
													<td style="font-size: 11px">Aynı gün kargo</td>
													<td><img src="img/time.png"></td>
												</tr>
												<tr>
													<td style="font-size: 11px">Kapıda ödeme imkanı</td>
													<td><img src="img/nopay.png"></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="row text-center" style="padding: 5px">
										<h3 class="text-left" style="padding-left: 5px">DEĞERLER</h3>
										 
										 <div class="col-md-4" style="height: 70px;background-color: #cc0099;color: white;padding: 15px;border-radius: 10px">
										 	Servis başı fiyat:<br>
										 	<?php 
												echo $islem["servisbasifiyat"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #4d4dff;color: white;padding: 15px;border-radius: 10px">
										 	Servis miktarı:<br>
										 	<?php 
												echo $islem["servismiktar"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #cc5200;color: white;padding: 15px;border-radius: 10px">
										 	Servis sayısı:<br>
										 	<?php 
												echo $islem["servissayı"];
										 	?>
										 </div>
									</div>
									<div class="row">
										<h3 style="text-align: left;padding-left: 10px">YORUMLAR</h3>
									</div>
									
								</div>

								<div class="col-md-1">
									
								</div>
							</div>
						</div>
									<?php
										break;
										case '24':
										?>
										<div class="container">
							<div class="row" >
								<div class="col-md-1">
									
								</div>
								<div class="col-md-10" style="border:1px solid #b3b3b3">
									<div class="row text-center ozelcerceve">
										<div class="col-md-10">
											<div class="col-md-4">
												<img src="img/24.jpeg" style="width: 250px;height: 250px;">
											</div>

											<div class="col-md-8">
												<?php 
													$veri = $veritabani->prepare("select * from urunler where urunid=?;");
													$veri ->execute(array("24"));
													$islem= $veri->fetch();
												?>
													<p style="text-align: left;font-size: 22px;font-weight: bold;padding-left:30px">
														<?php 
															echo $islem["urunbaslik"];
														 ?>
													</p>
													<p style="text-align: left;font-size: 15px;color:#a6a6a6;margin-top: -15px;padding-left: 30px">
														<?php 
															echo $islem["marka"];
														 ?>
													</p>
													<p>
														<h4 style="text-align: left;color: #595959;padding-left: 30px">Fiyat</h4>
													</p>
													<p style="text-align: left;font-size: 29px;color:#e60000;padding-left: 30px">
														<?php 
															echo $islem["fiyat"];
															echo " TL";
														 ?>
													</p>
													<br>
													<p style="margin-top: 30px;padding-left: 20px">
														<button class="ozelsbuton" style="float:left">Sepete Ekle</button>
													</p>
												<?php
												?>
											</div>
										</div>
										<div class="col-md-2">
											<table>
												<tr>
													<td style="font-size: 11px">Kargo ücreti yok</td>
													<td><img src="img/cargo.png"></td>
												</tr>
												<br>
												<tr>
													<td style="font-size: 11px">Aynı gün kargo</td>
													<td><img src="img/time.png"></td>
												</tr>
												<tr>
													<td style="font-size: 11px">Kapıda ödeme imkanı</td>
													<td><img src="img/nopay.png"></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="row text-center" style="padding: 5px">
										<h3 class="text-left" style="padding-left: 5px">DEĞERLER</h3>
										 
										 <div class="col-md-4" style="height: 70px;background-color: #cc0099;color: white;padding: 15px;border-radius: 10px">
										 	Servis başı fiyat:<br>
										 	<?php 
												echo $islem["servisbasifiyat"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #4d4dff;color: white;padding: 15px;border-radius: 10px">
										 	Servis miktarı:<br>
										 	<?php 
												echo $islem["servismiktar"];
										 	?>
										 </div>
										 <div class="col-md-4" style="height: 70px;background-color: #cc5200;color: white;padding: 15px;border-radius: 10px">
										 	Servis sayısı:<br>
										 	<?php 
												echo $islem["servissayı"];
										 	?>
										 </div>
									</div>
									<div class="row">
										<h3 style="text-align: left;padding-left: 10px">YORUMLAR</h3>
									</div>
									
								</div>

								<div class="col-md-1">
									
								</div>
							</div>
						</div>
										<?php	
											break;
						default:
					?>
						<div class="row">
							
						<div class="col-md-1">
							
						</div>
						
						<div class="col-md-10">
							<div class="row" style="height: 40px;background-color: #bfbfbf;margin-bottom: 5px;">
								<form style="float: right;line-height: 40px;padding-right: 5px">
									<select name="alfabetik" style="width: 150px">
										<option>Alfabetik Sırala</option>
										<option value="1">A'dan Z'ye</option>
										<option value="2">Z'den A'ya</option>
									</select>
								</form>
								<form style="float: right;line-height: 40px">
									<select name="fiyat" style="width: 150px">
										<option>Fiyata Göre Sırala</option>
										<option value="1">Yüksek Fiyat</option>
										<option value="2">Ucuz Fiyat</option>
									</select>
								</form>
								<form style="float: right;line-height: 40px">
									<select name="markalar" style="width: 150px">
										<option>Markalar</option>
										<option value="1">Hardline</option>
										<option value="2">Optimum</option>
										<option value="3">Weider</option>
										<option value="4">Muscletech</option>
										<option value="5">Olimp</option>
										<option value="6">Big Joy</option>
										<option value="7">Nutrend</option>
										<option value="8">ESN</option>
										<option value="9">Reflex</option>
										<option value="10">Nature's Supreme</option>
									</select>
								</form>

							</div>
							<div class="row">

								<a href="?do=1">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/1.jpeg" class="img-responsive" style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("1"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
								</div>

								</a>

								<a href="?do=2">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/2.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("2"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
									</div>
								</a>

								<a href="?do=3">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/3.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("3"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
								</div>
								</a>

								<a href="?do=4">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/4.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("4"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
								</div>
								</a>

							</div>
						</div>

						<div class="col-md-1">
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-1">
							
						</div>
						
						<div class="col-md-10">
							<div class="row">
								<a href="?do=5">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/5.jpeg" class="img-responsive" style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("5"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
								</div>
								</a>

								<a href="?do=6">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/6.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("6"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
								</div>

								</a>
								<a href="?do=7">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/7.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("7"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
								</div>
								</a>

								<a href="?do=8">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/8.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("8"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
								</div>
								</a>

							</div>
						</div>

						<div class="col-md-1">
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-1">
							
						</div>
						
						<div class="col-md-10">
							<div class="row">
								<a href="?do=9">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/9.jpeg" class="img-responsive" style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("9"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
								</div>
								</a>

								<a href="?do=10">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/10.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("10"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
								</div>
								</a>

								<a href="?do=11">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/11.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("11"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
								</div>
								</a>

								<a href="?do=12">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/12.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("12"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
								</div>
								</a>

							</div>
						</div>

						<div class="col-md-1">
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-1">
							
						</div>
						
						<div class="col-md-10">
							<div class="row">
								<a href="?do=13">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/13.jpeg" class="img-responsive" style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("13"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
								</div>
								</a>

								<a href="?do=14">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/14.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("14"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
								</div>
								</a>

								<a href="?do=15">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/15.png" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("15"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
								</div>
								</a>

								<a href="?do=16">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/16.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("16"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
								</div>
								</a>

							</div>
						</div>

						<div class="col-md-1">
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-1">
							
						</div>
						
						<div class="col-md-10">
							<div class="row">
								<a href="?do=17">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/17.jpeg" class="img-responsive" style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("17"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
								</div>
								</a>

								<a href="?do=18">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/18.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("18"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
								</div>
								</a>

								<a href="?do=19">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/19.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("19"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
								</div>
								</a>

								<a href="?do=20">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/20.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("20"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
								</div>
								</a>

							</div>
						</div>

						<div class="col-md-1">
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-1">
							
						</div>
						
						<div class="col-md-10">
							<div class="row">
								<a href="?do=21">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/21.png" class="img-responsive" style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("21"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
								</div>
								</a>

								<a href="?do=22">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/22.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("22"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
								</div>
								</a>

								<a href="?do=23">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/23.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("23"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
								</div>
								</a>

								<a href="?do=24">
									<div class="col-md-3 text-center uruncerceve" style="font-size: 13px;line-height:30px">
									<img src="img/24.jpeg" class="img-responsive"  style="width: 150px;height: 150px;margin: 0px auto">
									<?php 
										$veri = $veritabani->prepare("select * from urunler where urunid=?;");
										$veri ->execute(array("24"));
										$islem= $veri->fetch();
										?>
										<p style="height: 50px;">
											<?php 
												echo $islem["urunbaslik"];
											 ?>
										</p>
										<p style="color:black;font-size: 19px;font-weight: bold;">
											<?php 
												echo $islem["fiyat"];
												echo " TL";
											 ?>
										</p>
										<?php
									 ?>
								</div>
								</a>

							</div>
						</div>

						<div class="col-md-1">
							
						</div>
					</div>
					<?php	
						break;

				}
			 ?>
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

