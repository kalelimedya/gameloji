<?php 
	include 'vt.php';
	include 'function.php';
	if (isset($_POST['contactadd'])) {
		$mail_host=$ayarcek["site_mail_host"];
		$site_mail=$ayarcek["site_mail_mail"];
		$site_mail_sifre=$ayarcek["site_mail_sifre"];
		$sorgu=$db->prepare("
		INSERT INTO contact SET
		name=:name,
		mail=:mail,
		business=:business,
		message=:message,
		tel=:tel
			");

		$sonuc=$sorgu->execute(array(
		'name'=>$_POST['name'],
		'mail'=>$_POST['email'],
		'business'=>$_POST['business'],
		'message'=>$_POST['message'],
		'tel'=>$_POST['tel']
		));
		if ($sonuc) {
			header("location:../contact.php?durum=ok");
		}
		else
		{
			header("location:../contact.php?durum=no");
		}
		exit;
	}
 ?>