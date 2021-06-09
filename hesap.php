<?php include 'header.php';	?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
<title>Başlıksız Belge</title>
	
</head>

<body>
	<div class="hesabim_content"> 
		<div class="label">
		<label>ADI SOYADI</label>
			<input type="text" placeholder="<?php echo $kullanicicek['kullanici_adsoyad']; ?>">
		</div><br>
		
			
			<div class="label">
		<label>TC NO</label>
			<input type="text" placeholder="<?php echo $kullanicicek['kullanici_tc']; ?>">
		</div><br>
		
		<div class="label">
		<label>TEL NO</label>
			<input type="text" placeholder="<?php echo $kullanicicek['kullanici_telefon']; ?>">
		</div><br>
			
	</div>
	
	
	
	
	
	
</body>
</html>