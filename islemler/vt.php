<?php 
	ob_start();
	@session_start();
	$host="localhost";
	$vtname="yigitha4_com";
	$username="yigitha4_root";
	$password="y!ASD!qwe!";
	try {
		$db=new pdo("mysql:host=$host;dbname=$vtname;charset=utf8",$username,$password);
	} catch (Exception $e) {
		echo "Bağlantı başarısız";
		echo $e->getMessage();
	}

	$sorgu=$db->prepare("SELECT * FROM ayarlar");
	$sorgu->execute();
	$ayarcek=$sorgu->fetch(PDO::FETCH_ASSOC);

 ?>