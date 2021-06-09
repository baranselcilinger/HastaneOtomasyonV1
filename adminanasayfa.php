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
				<input type="text" name="hastane_ad" placeholder="Hastane Ekle"><br><br>
							<a href ="adminanasayfa.php"><button name="hastaneekle" type="submit" class="button" id="giris">Hastane Ekle</button></a>

			
				<input type="text" placeholder="Doktor Ekle" name="doktor_ad"><br>
								<a href ="adminanasayfa.php"><button name="doktorekle" type="submit" class="button" id="giris">Doktor Ekle</button></a>


				
				

		</div>
	</form>
	<div style="top: 525px;left: 660px;" class="login"><a href ="adminliste.php"><button type="submit" class="button" id="üye">Listeye Dön</button></a></div>
	
	
	
	
</body>
</html>