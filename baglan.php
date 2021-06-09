<?php  
try{
	$db=new PDO("mysql:host=localhost;dbname=hastane_otomasyon;charset=utf8",'root','');
	//echo'veritabanı bağlantısı başarılı';
} catch(Exception $e)
{
	echo $e->getMessage();
}


?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
</body>
</html>