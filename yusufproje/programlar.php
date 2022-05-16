<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Programlar</title>
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
			width: 90px;
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
		#boyinput,#kiloinput
		{
			width: 200px;
			height: 30px;
			font-size: 18px;
			background-color: #e6e6e6;
			border: none;
			outline: none;
			border-bottom: 2px solid black;
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
       <div class="row">
			<div class="col-md-1">
				
			</div>

			<div class="col-md-10">
				<div class="row">
					<div class="col-md-4">
						<h3 style="background-color: #e60000;width: 100%;margin-bottom: 0px;text-align: center;color: white;padding: 10px">299TL/Aylık</h3>
						<img src="img/price1.jpg" class="img-responsive" align="center">
						<div style="background-color: #e6e6e6;height: 380px"><br>
							<h3 align="center">Uzaktan Eğitim</h3><br>
								<p style="text-align: center">
									Kişiye Özel Beslenme Programı<br> <br> 
									Kişiye Özel Antrenman Programı<br><br> 
									Full Paket <br>	<br>
								
								</p>
								<p style="text-align: center;margin-top: 65px">
									<a href="#" id="buton2">Satın Al</a>
								</p>

						</div>
					</div>

			<div class="col-md-4">
						<h3 style="background-color: #e60000;width: 100%;margin-bottom: 0px;text-align: center;color: white;padding: 10px">149TL/Aylık</h3>
						<img src="img/price2.jpg" class="img-responsive">
						<div style="background-color: #e6e6e6;height: 380px"><br>
							<h3 align="center">Yağ Yakımı</h3><br>
								<p style="text-align: center">
									Kişiye Özel Beslenme Programı<br><br> 
									Kişiye Özel Antrenman Programı <br><br> 
									Kilo Verme Garantisi <br><br>
													
														
								</p>
								<p style="text-align: center;margin-top: 65px">
									<a href="#" id="buton2">Satın Al</a>
								</p>
						</div>
					</div>

					<div class="col-md-4">
						<h3 style="background-color: #e60000;width: 100%;margin-bottom: 0px;text-align: center;color: white;padding: 10px">199TL/Aylık</h3>
						<img src="img/price3.jpg" class="img-responsive">
						<div style="background-color: #e6e6e6;height: 380px" align="center"><br>
							<h3 align="center">Antrenman Programı</h3><br>
								<p style="text-align: center;">
									Kişiye Özel Beslenme Programı <br> <br>
									Vücut Tipinize Göre Antrenman Programı <br> <br>
									Whatsapp Hattı <br> <br>
									
								</p>
								<p style="text-align: center;margin-top: 65px">
									<a href="#" id="buton2">Satın Al</a>
								</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-1">
				
			</div>
		</div>
		<br><br><br><br><br>


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
				<span class="glyphicon glyphicon-map-marker"> </span>  Armağanevler Mahallesi Sırt Sokak No 141 Ümraniye İstanbul <br><br>
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
