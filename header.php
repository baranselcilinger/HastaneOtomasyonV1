<?php 
ob_start();
session_start();
include 'baglan.php';

$kullanicisor=$db->prepare("SELECT * FROM kullanici WHERE kullanici_tc=:kullanici_tc");
$kullanicisor->execute([
	'kullanici_tc'=> $_SESSION['userkullanici_tc']
	
]);
$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

if($say==0)
{
	header('location:index.php?İzinsiz ');
	exit;
}


?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<html>
<title>Hastane Otomasyonu</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1 {font-family: "Raleway", Arial, sans-serif}
h1 {letter-spacing: 6px}
.w3-row-padding img {margin-bottom: 12px}
</style>
<body>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

<!-- Header -->
<header class="w3-panel w3-center w3-opacity">
  <h1 class="w3-xlarge">HASTANE OTOMASYONU</h1>
  
  <div class="w3-padding-32">
    <div class="w3-bar w3-border">
      <a href="anasayfa.php" class="w3-bar-item w3-button">Anasayfa</a>
      <a href="hesap.php" class="w3-bar-item w3-button">Hesap Bilgileri</a>
      <a href="randevu.php" class="w3-bar-item w3-button">Randevu Bilgileri</a>
     <a href="logout.php" class="w3-bar-item w3-button"><div class="cikis"> Çıkış Yap</div></a>
    </div>
  </div>
</header>
	
	
	
	
	
	
	
</body>
</html>



<?php




?>