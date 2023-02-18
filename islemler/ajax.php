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
                                $mail->SMTPDebug = 1; // debug on - off
                                $mail->isSMTP(); 
                                $mail->Host = 'mail.kalelimedya.com'; // SMTP sunucusu örnek : mail.alanadi.com
                                $mail->SMTPAuth = true; // SMTP Doğrulama
                                $mail->Username = 'erenekmekci@kalelimedya.com'; // Mail kullanıcı adı
                                $mail->Password = 'aliveli4950'; // Mail şifresi
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
                                $mail->setfrom('erenekmekci@kalelimedya.com');
                                $mail->addAddress('erenekmekci@kalelimedya.com');
                                $mail->addReplyTo('erenekmekci@kalelimedya.com');
                                //İçerik
                                $mail->isHTML(true);
                                $mail->Subject = 'Firma:'.$_POST['business'];
                                $mail->Body ="İsim ve Soyadı:".$_POST['name']."<br>".  "Mesaj:".$_POST['message']."<br> <br>"."Telefon Numarası:".$_POST['tel']."<br>"."Şirket:".$_POST['business'];
                                


								$mail->send();
                                echo "Mesajınız İletildi --> ".$_POST['mail']."<br>";
                                header("Location:../index.php?durum=ok");
								
                                } catch (Exception $e) {
                                echo 'Mesajınız İletilemedi. Hata: ', $mail->ErrorInfo;
                                
                                }
		}
		else
		{
			header("location:../contact.php?durum=no");
		}
		exit;
	}
 ?>