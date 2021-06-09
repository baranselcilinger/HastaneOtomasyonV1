<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hastane Otomasyon</title>
	<link rel="stylesheet" href="login.css">
	
</head>

<body>
	<form action="islem.php" method="post">
	<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div><b>Hastane Otomasyonu</b></div>
		</div>
		<br>
		<div class="login">
				<input type="text" placeholder="Tc Kimlik No" name="kullanici_tc"><br>
				<input type="password" placeholder="Şifre" name="kullanici_password"><br><br>
				<button type="sumbit" class="button" id="giris" name="giris_yap">Giriş Yapın</button>
				

		</div>
	</form>
	<div style="top: 415px;left: 800px;" class="login"><a href ="uye.php"><button type="submit" class="button" id="üye">Üye Ol</button></a></div>
	
</body>
</html>