<!DOCTYPE html>
<html>
<head>
	<title>Üye ol</title>
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
    	#kutu
    	{
    		position: absolute;
    		top: 20%;
    		left: 35%;
    		background-color: white;
    		border:1px solid #4d4d4d;
    		height: 550px;
    		width: 400px
    	}
    	#kulad
    	{
    		width: 200px;
    		height: 40px;
    		padding: 0px;
    		font-size: 17px;
    		outline: none;
    		border:none;
    		border-bottom: 2px solid black;
    	}
    	#sifre
    	{
    		width: 200px;
    		height: 40px;
    		padding: 0px;
    		font-size: 17px;
    		outline: none;
    		border:none;
    		border-bottom: 2px solid black;
    	}
    	#buton
    	{
    		width: 200px;
    		padding: 4px;
    		font-size: 17px;
    		background-color: black;
    		border:none;
    		outline: none;
    		color:white;
    	}
    	#buton:hover
    	{
    		transition: 500ms;
    		border:none;
    		border: 1px solid black;
    		background-color: white;
    		
    		outline: none;
    		color:black;
    	}
    </style>
   
</head>
<body style="background-color:  #e6e6e6;font-family: oswald">


	<div class="row" style="margin: 0px auto">
        <div class="row" align="center">
            <img src="img/yenilogo.png" class="img-responsive" style="margin-top: 15px;"> 
        </div>
		<div class="col-md-4">
			 
		</div>

		<div class="col-md-4" id="kutu">
			<h2 align="center">Üye Olun</h2>
			<hr style="background-color: black">
			<form method="post" action="#">
                <input type="text" name="adsoyad" id="kulad" placeholder="Ad Soyad"><br><br>
				<input type="text" name="mail" id="kulad" placeholder="Email"><br><br>
				<input type="password" name="sfr" id="sifre" placeholder="Şifre"><br><br>
                <input type="password" name="sfrt" id="kulad" placeholder="Şİfre Tekrar"><br><br>
                <input type="text" name="tel" id="kulad" placeholder="Telefon Numarası"><br><br><br><br>
                <input type="submit" name="gonder" id="buton" value="Giriş"><br>
				<a href="uyegiris.php" style="color: black;text-decoration: none;font-size: 12px;float: right;">Zaten Üye Misin?</a>
			</form>
            <?php 

                $veritabani = new PDO("mysql:host=localhost;dbname=fitkaldatabase;charset-utf8","root");

                @$adsoyad = $_POST["adsoyad"];
                @$email = $_POST["mail"];
                @$sifre = $_POST["sfr"];
                @$sifret = $_POST["sfrt"];
                @$telefon = $_POST["tel"];
                              

                 if ($adsoyad=="" || $email=="" || $sifre=="" || $sifret=="" || $telefon=="")
                 {
                    ?>
                         <p>
                             <h4 style="text-align: center;padding-top: 10px;">Lütfen boş alan bırakmayınız</h4>
                        </p>
                    <?php

                    
                 }
                 else
                {
                    if($sifre!=$sifret)
                    {
                       ?>
                         <p>
                             <h4 style="text-align: center;padding-top: 10px;">Şifreler Aynı Değil, Kontrol Ediniz.</h4>
                        </p>
                    <?php
                    }
                    else
                    {
                        $ekle = $veritabani->prepare("INSERT INTO kullanicilar SET ad_soyad=?, mail=?, sifre=?, sifre_tekrar=?, telefon_no=?");
                        $ekle->execute([$adsoyad, $email, $sifre, $sifret, $telefon]);
                        if ($ekle) {
                            echo "<head>"."<meta http-equiv=\"refresh\" content=\"3;URL=anasayfa.php\">"."</head>";
                             ?>
                                <p>
                                    <h4 style="text-align: center;padding-top: 10px;color:#00cc00">KAYIT BAŞARILI</h4>
                                </p>
                             <?php 
                           
                         }

                         else
                         {
                            echo "KAYIT BAŞARISIZ";
                         }
                    }
                    
                }
             ?>
		</div>

		<div class="col-md-4">
			 
		</div>
	</div>
</body>
</html>