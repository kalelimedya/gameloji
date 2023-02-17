<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Your function Code 
?>

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
			    require 'PHPMailer/src/Exception.php';
                                require 'PHPMailer/src/PHPMailer.php';
                                require 'PHPMailer/src/SMTP.php';
                                
                                
                                $mail = new PHPMailer(true);
                                try {
                                //Server settings
                                $mail->CharSet = 'UTF-8';
                                $mail->SMTPDebug = 0; // debug on - off
                                $mail->isSMTP(); 
                                $mail->Host = 'smtp.gmail.com'; // SMTP sunucusu örnek : mail.alanadi.com
                                $mail->SMTPAuth = true; // SMTP Doğrulama
                                $mail->Username = 'uscewyazilim@gmail.com'; // Mail kullanıcı adı
                                $mail->Password = 'jtddwpcezgvefakz'; // Mail şifresi
                                $mail->SMTPSecure = 'ssl'; // Şifreleme
                                $mail->Port = 465; // SMTP Port
                                $mail->SMTPOptions = array(
                                'ssl' => array(
                                'verify_peer' => false,
                                'verify_peer_name' => false,
                                'allow_self_signed' => true
                                )
                                );
                                
                                //Alıcılar
                                $mail->setfrom('uscewyazilim@gmail.com', 'Soru Sorun&Teklif Al');
                                $mail->addAddress('uscewyazilim@gmail.com');
                                $mail->addReplyTo('uscewyazilim@gmail.com');
                                //İçerik
                                $mail->isHTML(true);
                                $mail->Subject = 'Firma:'.$_POST['business'];
                                $mail->Body ="İsim ve Soyadı:".$_POST['name']."<br>".  "Mesaj:".$_POST['message']."<br> <br>"."Telefon Numarası:".$_POST['tel']."<br>"."Şirket:".$_POST['business'];
                                


								$mail->send();
                                echo "Mesajınız İletildi --> ".$_POST['mail']."<br>";
                                header("Location:../index.php?durum=ok");
								
                                } catch (Exception $e) {
                                echo 'Mesajınız İletilemedi. Hata: ', $mail->ErrorInfo;
                                header("Location:../index.php?durum=no");
                                }
		}
		else
		{
			header("location:../contact.php?durum=no");
		}
		exit;
	}
/********************************/
if (isset($_POST['oturumacma'])) {
	$sorgu=$db->prepare("SELECT * FROM kullanicilar WHERE kul_mail=:kul_mail AND kul_sifre=:kul_sifre");
	$sorgu->execute(array(
		'kul_mail' => guvenlik($_POST['kul_mail']),
		'kul_sifre' => md5($_POST['kul_sifre'])
	));
	$sonuc=$sorgu->rowcount();
	$kullanici=$sorgu->fetch(PDO::FETCH_ASSOC);

	if ($sonuc==0) {
		header("location:../admin/login.php?durum=no");
	} else {
		$_SESSION['kul_ad'] = $kullanici['kul_ad'];
		$_SESSION['kul_mail'] = $kullanici['kul_mail'];
		$_SESSION['kul_id'] = $kullanici['kul_id'];
		$_SESSION['kul_yetki'] = $kullanici['kul_yetki'];
		if (isset($_SESSION["kul_yetki"])) {
	        $kid=$_SESSION["kul_id"];
	        $kad=$_SESSION["kul_ad"];
    	}
		header("location:../admin/index.php?durum=ok");
	}
	exit;
}
/********************************/
if (isset($_POST['ayarkaydet'])) {
		$sorgu=$db->prepare("
		UPDATE ayarlar SET
		site_baslik=:site_baslik,
		site_aciklama=:site_aciklama,
		site_link=:site_link,
		site_sahip_mail=:site_sahip_mail,
		site_mail_sifre=:site_mail_sifre,
		site_mail_host=:site_mail_host,
		site_mail_sifre=:site_mail_sifre,
		site_mail_port=:site_mail_port,
		site_mail_mail=:site_mail_mail,
		site_konum=:site_konum,
		site_telefon=:site_telefon,
		footer_aciklama=:footer_aciklama,
		site_facebook=:site_facebook,
		site_twitter=:site_twitter,
		site_linkedin=:site_linkedin,
		site_instagram=:site_instagram,
		site_tanim=:site_tanim,
		site_keywords=:site_keywords,
		site_yazari=:site_yazari,
		github=:github,
		site_harita=:site_harita

		WHERE ayar_id=0
			");

		$sonuc=$sorgu->execute(array(
		'site_baslik'=>$_POST['site_baslik'],
		'site_aciklama'=>$_POST['site_aciklama'],
		'site_link'=>$_POST['site_link'],
		'site_sahip_mail'=>$_POST['site_sahip_mail'],
		'site_mail_sifre'=>$_POST['site_mail_sifre'],
		'site_mail_host'=>$_POST['site_mail_host'],
		'site_mail_sifre'=>$_POST['site_mail_sifre'],
		'site_mail_port'=>$_POST['site_mail_port'],
		'site_mail_mail'=>$_POST['site_mail_mail'],
		'site_konum'=>$_POST['site_konum'],
		'site_telefon'=>$_POST['site_telefon'],
		'footer_aciklama'=>$_POST['footer_aciklama'],
		'site_facebook'=>$_POST['site_facebook'],
		'site_twitter'=>$_POST['site_twitter'],
		'site_linkedin'=>$_POST['site_linkedin'],
		'site_instagram'=>$_POST['site_instagram'],
		'site_tanim'=>$_POST['site_tanim'],
		'site_keywords'=>$_POST['site_keywords'],
		'site_yazari'=>$_POST['site_yazari'],
		'github'=>$_POST['github'],
		'site_harita'=>$_POST['site_harita']
		));
		if ($_FILES['site_logo']['error']=="0") {
			$gecici_isim=$_FILES['site_logo']['tmp_name'];
			$dosya_ismi=rand(100000,999999).$_FILES['site_logo']['name'];
			move_uploaded_file($gecici_isim, "../dosyalar/$dosya_ismi");
			$sorgu=$db->prepare("
			UPDATE ayarlar SET
			site_logo=:site_logo 
			WHERE id=0
				");

			$sonuc=$sorgu->execute(array(
			'site_logo'=>$dosya_ismi
			));
		}
		if ($sonuc) {
			header("location:../admin/ayarlar.php?durum=ok");
		}
		else
		{
			header("location:../admin/ayarlar.php?durum=no");
		}
		exit;
	}
 ?>