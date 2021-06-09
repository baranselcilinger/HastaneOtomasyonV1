<?php include 'baglan.php'?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
<title>Başlıksız Belge</title>
</head>

<body>
			

	<table>
	<tr>
		<th>Hastane</th>
		</tr>
		<?php
		$hastane_sor=$db->query("SELECT * FROM hastane");
		
		
		while($hastane_cek =$hastane_sor->fetch(PDO::FETCH_ASSOC)){?>
			
		
		<tr>
			<td><?php echo $hastane_cek['hastane_id']?></td>
		<td><?php echo $hastane_cek['hastane_ad'];  ?></td>
			
		

		</tr>
		
		
		
		<?php
		}
		
		
		
		?>
		
		
		<tr><th>Doktor</th></tr>
		
		<?php
		$doktor_sor=$db->query("SELECT * FROM doktor");
		
		
		while($doktor_cek =$doktor_sor->fetch(PDO::FETCH_ASSOC)){?>
			
			
		
		<tr>
		<td><?php echo $doktor_cek['doktor_id']?></td>

		<td><?php echo $doktor_cek['doktor_ad'];  ?></td>
		

		</tr>
		<?php
		}
		
		
		
		?>
		
		
		
	</table>
	
	<div style="top: 525px;left: 660px;" class="login"><a href ="adminanasayfa.php"><button type="submit" class="button" id="üye">İşlem Sayfasına Git</button></a></div>
	
	
	
</body>
</html>