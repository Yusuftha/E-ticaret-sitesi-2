<!DOCTYPE html>
<html>
<head>
	<title>Giriş</title>
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
    		top: 25%;
    		left: 35%;
    		background-color: white;
    		border:1px solid #4d4d4d;
    		height: 400px;
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
			<h2 align="center">Giriş Yapın</h2>
			<hr style="background-color: black">
			<form method="post">
				<input type="text" name="kad" id="kulad" placeholder="Email"><br>
				<input type="password" name="sfr" id="sifre" placeholder="Şifre"><br><br><br><br>
				<input type="submit" name="gonder" id="buton" value="Giriş"><br><br><br>
				<a href="uyeol.php" style="color: black;text-decoration: none;font-size: 12px;float: right;">Henüz Üye Değil Misin?</a>
			</form>
            <?php 
                session_start();

                @$veritabani = new PDO("mysql:host=localhost;dbname=fitkaldatabase;charset-utf8","root");
                @$kullanici=$_POST["kad"];
                @$sifre=$_POST["sfr"];

                if ($kullanici=="" || $sifre=="")
                {
                    ?>
                         <p>
                             <h4 style="text-align: center;padding-top: 25px;">Lütfen boş alan bırakmadan giriş yapınız</h4>
                        </p>
                    <?php
                }
                else
                {
                    $atama=$veritabani->query("SELECT * FROM kullanicilar WHERE mail = '$kullanici' AND sifre = '$sifre'")->fetch();
                        if ($atama)
                        {
                            $_SESSION['user'] = $atama;
                            header("location:anasayfa.php");
                        }
                         else
                        {
                            ?>
                                 <p>
                                     <h4 style="text-align: center;padding-top: 10px;color:#e60000">Hatalı Giriş</h4>
                                </p>
                            <?php
                        }
                }
               
             ?>
		</div>

		<div class="col-md-4">
			 
		</div>
	</div>
</body>
</html>
 
                
               