<?php 
	include 'vt.php';
	include 'function.php';
	if (isset($_POST['iletisimkaydet'])) {
		$sorgu=$db->prepare("
		UPDATE iletisim SET
		i_bas=:i_bas,
		i_alt_bas=:i_alt_bas,
		i_ack=:i_ack,
		i_adr=:i_adr,
		i_mail=:i_mail,
		i_cep=:i_cep
		WHERE i_id=1
			");

		$sonuc=$sorgu->execute(array(
		'i_bas'=>$_POST['i_bas'],
		'i_alt_bas'=>$_POST['i_alt_bas'],
		'i_ack'=>$_POST['i_ack'],
		'i_adr'=>$_POST['i_adr'],
		'i_mail'=>$_POST['i_mail'],
		'i_cep'=>$_POST['i_cep']
		));
		if ($sonuc) {
			header("location:../admin/iletisim.php?durum=ok");
		}
		else
		{
			header("location:../admin/iletisim.php?durum=no");
		}
		exit;
	}
 ?>