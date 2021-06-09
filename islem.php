<?php
ob_start();
session_start();
include 'baglan.php';




if(isset($_POST['kullanicikaydet']))
{
$kullanici_tc=isset($_POST['kullanici_tc'])? $_POST['kullanici_tc']:null;
$kullanici_adsoyad=isset($_POST['kullanici_adsoyad'])? $_POST['kullanici_adsoyad']:null;
$kullanici_password=isset($_POST['kullanici_password'])? $_POST['kullanici_password']:null;
	$kullanici_telefon=isset($_POST['kullanici_telefon'])? $_POST['kullanici_telefon']:null;

	
	//veritabanı ekleme işlemi
	
	$sorgu=$db->prepare('INSERT INTO kullanici SET 
	kullanici_tc=?,
	kullanici_adsoyad=?,
	kullanici_password=?,
	kullanici_telefon=?
	');
	
	$ekle=$sorgu->execute([
		$kullanici_tc,$kullanici_adsoyad,$kullanici_password,$kullanici_telefon
	]);
	if($ekle)
	{
		header('location:index.php?durum=basarili');
	}
	else{
		$hata=$sorgu->errorInfo();
		echo'mysql hatası'.$hata[2];
	}
	

}



if(isset($_POST['hastaneekle']))
{
$hastane_ad=isset($_POST['hastane_ad'])? $_POST['hastane_ad']:null;


	
	//veritabanı ekleme işlemi
	
	$sorgu=$db->prepare('INSERT INTO hastane SET 
	hastane_ad=?

	');
	
	$ekle=$sorgu->execute([
		$hastane_ad
	]);
	if($ekle)
	{
		header('location:adminliste.php?durum=basarili');
	}
	else{
		$hata=$sorgu->errorInfo();
		echo'mysql hatası'.$hata[2];
	}
	

}








if(isset($_POST['doktorekle']))
{
$doktor_ad=isset($_POST['doktor_ad'])? $_POST['doktor_ad']:null;


	
	//veritabanı ekleme işlemi
	
	$sorgu=$db->prepare('INSERT INTO doktor SET 
	doktor_ad=?

	');
	
	$ekle=$sorgu->execute([
		$doktor_ad
	]);
	if($ekle)
	{
		header('location:adminliste.php?durum=basarili');
	}
	else{
		$hata=$sorgu->errorInfo();
		echo'mysql hatası'.$hata[2];
	}
	

}



if(isset($_POST['giris_yap']))
{
	$kullanici_tc=$_POST['kullanici_tc'];
	$kullanici_password=$_POST['kullanici_password'];
	
	
	$kullanicisor=$db->prepare("SELECT * FROM kullanici WHERE kullanici_tc=:kullanici_tc and kullanici_password=:kullanici_password");
	$kullanicisor->execute([
		'kullanici_tc'=> $kullanici_tc,
		'kullanici_password' =>$kullanici_password
		
		
	]);

	$say=$kullanicisor->rowCount();
	if($say==1)
	{
		$_SESSION['userkullanici_tc']=$kullanici_tc;
		header('location:anasayfa.php?durum=girisbasarili');
		exit;
	}
	else
	{
		header('location:index.php?durum=basarisizgiris');
		exit;
	}
}



if(isset($_POST['giris_yap_admin']))
{
	$admin_tc=$_POST['admin_tc'];
	$admin_password=$_POST['admin_password'];
	
	
	$kullanicisor=$db->prepare("SELECT * FROM kullanici_admin WHERE admin_tc=:admin_tc and admin_password=:admin_password");
	$kullanicisor->execute([
		'admin_tc'=> $admin_tc,
		'admin_password' =>$admin_password
		
		
	]);

	$say=$kullanicisor->rowCount();
	if($say==1)
	{
		$_SESSION['useradmin_tc']=$admin_tc;
		header('location:adminanasayfa.php?durum=girisbasarili');
		exit;
	}
	else
	{
		header('location:admin.php?durum=basarisizgiris');
		exit;
	}
}











if(isset($_POST['randevu_kaydet'])){
	
	$randevu_sehir=isset($_POST['sehir']) ? $_POST['sehir']:null;
	$randevu_hastane=isset($_POST['hastane']) ? $_POST['hastane']:null;
	$randevu_doktor=isset($_POST['doktor']) ? $_POST['doktor']:null;
	$randevu_tarih=isset($_POST['tarih']) ? $_POST['tarih']:null;
	$randevu_klinik=isset($_POST['klinik']) ? $_POST['klinik']:null;
	$randevu_saat=isset($_POST['saat']) ? $_POST['saat']:null;

	$hasta_id=isset($_POST['kullanici_id']) ? $_POST['kullanici_id']:null;
	
$kaydet=$db->prepare("INSERT INTO randevu SET 
randevu_sehir=?,
randevu_hastane=?,
randevu_doktor=?,
randevu_tarih=?,
randevu_klinik=?,
randevu_saat=?,

randevu_hasta_id=?
");
	
	
	$insert=$kaydet->execute([
		
		$randevu_sehir,$randevu_hastane,$randevu_doktor,$randevu_tarih,$randevu_klinik,$randevu_saat,$hasta_id
	]);
	
	if($insert)
	{
		header("location:anasayfa.php?=kayit_basarili");
	}
	else
	{
		header("location:anasayfa.php?=kayit_basarisiz");
	}
	
	
	
	
	
	
}









?>

