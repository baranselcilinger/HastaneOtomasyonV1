<?php include'header.php';?>

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
		<th>Klinik</th>
		<th>Doktor</th>
		<th>İl</th>
		<th>Tarih</th>
		<th>Saat</th>
		</tr>
		
		<?php
		$randevu_sor=$db->prepare("SELECT*FROM randevu
		INNER JOIN kullanici ON randevu.randevu_hasta_id=kullanici.kullanici_id WHERE kullanici_tc=:kullanici_tc
		");
		
		$randevu_sor->execute([
			'kullanici_tc'=>$_SESSION['userkullanici_tc']
			
		]);
		while($randevu_cek =$randevu_sor->fetch(PDO::FETCH_ASSOC)){?>
			
			
		
		
		
		
		
		
		
		<tr>
		<td><?php echo $randevu_cek['randevu_hastane'];  ?></td>
		<td><?php echo $randevu_cek['randevu_klinik'];  ?></td>
		<td><?php echo $randevu_cek['randevu_doktor'];  ?></td>
		<td><?php echo $randevu_cek['randevu_sehir'];  ?></td>
		<td><?php echo $randevu_cek['randevu_tarih'];  ?></td>
		<td><?php echo $randevu_cek['randevu_saat']; ?></td>

		</tr>
		<?php
		}
		
		
		
		?>
		
		
		
	</table>
	
	
	
	
	
</body>
</html>