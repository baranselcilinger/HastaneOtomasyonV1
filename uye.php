<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hastane Otomasyon</title>
		<link rel="stylesheet" href="login.css">
</head>

<body>
	
	
	
	
	
	
		<h1>Üye Ol</h1>
	<form action="islem.php" method="post">
		
	<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div><b>Hastane Otomasyonu</b></div>
		</div>
		<br>
		<div class="login">
				<input type="text" name="kullanici_adsoyad" placeholder="Ad Soyad"><br><br>
			
				<input type="text" placeholder="Tc Kimlik No" name="kullanici_tc"><br>
				<input type="password" placeholder="Şifre" name="kullanici_password"><br><br>
				<input type="text" placeholder="Telefon No" name="kullanici_telefon"><br><br>

				
				<a href ="uye.php"><button name="kullanicikaydet" type="submit" class="button" id="giris">Üye Ol</button></a>
				

		</div>
	</form>
	<div style="top: 525px;left: 800px;" class="login"><a href ="index.php"><button type="submit" class="button" id="üye">Geri Çık</button></a></div>
	
	
	
	
</body>
</html>