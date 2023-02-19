<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Your function Code 
?>

<?php 
	include 'vt.php';
	include 'function.php';
	
		$captcha;
if (isset($_POST['g-recaptcha-response'])) {
    $captcha = $_POST['g-recaptcha-response'];
}
// Checking For correct reCAPTCHA
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=SECRETKEY&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
if (!$captcha || $response.success == false) {
    echo "Your CAPTCHA response was wrong.";
	header("location:iletisim.php?durum=no");
    exit ;
}

	
	
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
                                $mail->Host = 'mail.phinaps.com'; // SMTP sunucusu örnek : mail.alanadi.com
                                $mail->SMTPAuth = true; // SMTP Doğrulama
                                $mail->Username = 'deneme@phinaps.com'; // Mail kullanıcı adı
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
                                $mail->setfrom('deneme@phinaps.com');
                                $mail->addAddress('deneme@phinaps.com');
                                $mail->addReplyTo('deneme@phinaps.com');
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

		WHERE ayar_id=1
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
			move_uploaded_file($gecici_isim, "../images/$dosya_ismi");
			$sorgu=$db->prepare("
			UPDATE ayarlar SET
			site_logo=:site_logo 
			WHERE id=1
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
	/********************************/
	if (isset($_POST['bizesil'])) {
			$sorgu=$db->prepare("DELETE FROM contact WHERE id=:id");
		$sonuc=$sorgu->execute(array(
			'id' =>$_POST['id']
		));

		if ($sonuc) {
			header("location:../admin/bizeulas.php?durum=ok");
		} else {
			header("location:../admin/bizeulas.php?durum=no");
		}
	}
	/********************************/
	if (isset($_POST['blogsil'])) {
			$sorgu=$db->prepare("DELETE FROM blog WHERE id=:id");
		$sonuc=$sorgu->execute(array(
			'id' =>$_POST['id']
		));

		if ($sonuc) {
			header("location:../admin/blog.php?durum=ok");
		} else {
			header("location:../admin/blog.php?durum=no");
		}
	}
/**************************************/
if (isset($_POST['blogekle'])) {
		if ($_FILES['blog_img']['error']=="0") {
			if ($_FILES['blog_img']["type"]=="png" || "jpg") {
				if ($_FILES['blog_img']["size"]< 1024*1024) {
					$gecici_isim=$_FILES['blog_img']['tmp_name'];
					$dosya_ismi=rand(100000,999999).$_FILES['blog_img']['name'];
					move_uploaded_file($gecici_isim, "../images/$dosya_ismi");


					$sorgu=$db->prepare("
					INSERT INTO blog SET
					blog_header=:blog_header,
					blog_img=:blog_img,
					blog_text=:blog_text,
					blog_author=:blog_author,
					blog_seo=:blog_seo

						");

					$sonuc=$sorgu->execute(array(
					'blog_header'=>$_POST['blog_header'],
					'blog_img'=>$dosya_ismi,
					'blog_text'=>$_POST['blog_text'],
					'blog_author'=>$_POST['blog_author'],
					'blog_seo'=>seo($_POST['blog_header'])

					));

					if ($sonuc) {
						header("location:../admin/blog.php?durum=ok");
					}
					else
					{
						header("location:../admin/blog.php?durum=no");
					}
					exit;
				}
				else {
					header("Location:../admin/blog.php?durum=boyutbuyuk");
				}
			}
			else {
				header("Location:../admin/blog.php?durum=uzantiyanlis");
			}
		}
	}
/********************************/
if (isset($_POST['postguncelle'])) {
		if ($_FILES['blog_img']['error']=="0") {
			if ($_FILES['blog_img']["type"]=="png" || "jpg") {
				if ($_FILES['blog_img']["size"]< 1024*1024) {
					$gecici_isim=$_FILES['blog_img']['tmp_name'];
					$dosya_ismi=rand(100000,999999).$_FILES['blog_img']['name'];
					move_uploaded_file($gecici_isim, "../images/$dosya_ismi");
					$sorgu=$db->prepare("
					UPDATE blog SET
					blog_img=:blog_img 
					WHERE id={$_POST['id']}
						");
					$sonuc=$sorgu->execute(array(
					'blog_img'=>$dosya_ismi
					));

				}
				else {
					header("Location:../admin/blogduzenle.php?durum=boyutbuyuk");
				}
			}
			else {
				header("Location:../admin/blogduzenle.php?durum=uzantiyanlis");
			}

		}
					
					$sorgu=$db->prepare("
					UPDATE blog SET
					blog_header=:blog_header,
					blog_text=:blog_text,
					blog_author=:blog_author,
					blog_seo=:blog_header
					WHERE id={$_POST['id']}
						");

					$sonuc=$sorgu->execute(array(
					'blog_header'=>$_POST['blog_header'],
					'blog_text'=>$_POST['blog_text'],
					'blog_author'=>$_POST['blog_author'],
					'blog_seo'=>seo($_POST['blog_header'])

					));
					if ($sonuc) {
						header("Location:../admin/blogduzenle.php?id={$_POST['id']}&durum=ok");
					}
					else
					{
						header("Location:../admin/blogduzenle.php?id={$_POST['id']}&durum=no");
					}
					exit;
	}
/*******************************/
if (isset($_POST['blogsil'])) {
			$sorgu=$db->prepare("DELETE FROM blog WHERE id=:id");
		$sonuc=$sorgu->execute(array(
			'id' =>$_POST['id']
		));

		if ($sonuc) {
			header("location:../admin/blog.php?durum=ok");
		} else {
			header("location:../admin/blog.php?durum=no");
		}
	}
	/*******************************/
if (isset($_POST['oyunsil'])) {
			$sorgu=$db->prepare("DELETE FROM project WHERE id=:id");
		$sonuc=$sorgu->execute(array(
			'id' =>$_POST['id']
		));

		if ($sonuc) {
			header("location:../admin/oyunlar.php?durum=ok");
		} else {
			header("location:../admin/oyunlar.php?durum=no");
		}
	}
	/**************************************/
if (isset($_POST['oyunekle'])) {
		if ($_FILES['image']['error']=="0") {
			if ($_FILES['image']["type"]=="png" || "jpg") {
				if ($_FILES['image']["size"]< 1024*1024) {
					$gecici_isim=$_FILES['image']['tmp_name'];
					$dosya_ismi=rand(100000,999999).$_FILES['image']['name'];
					move_uploaded_file($gecici_isim, "../images/$dosya_ismi");


					$sorgu=$db->prepare("
					INSERT INTO project SET
					title=:title,
					image=:image,
					gamestext=:gamestext,
					play_link=:play_link,
					app_link=:app_link

						");

					$sonuc=$sorgu->execute(array(
					'title'=>$_POST['title'],
					'image'=>$dosya_ismi,
					'gamestext'=>$_POST['gamestext'],
					'play_link'=>$_POST['play_link'],
					'app_link'=>$_POST['app_link']

					));

					if ($sonuc) {
						header("location:../admin/oyunlar.php?durum=ok");
					}
					else
					{
						header("location:../admin/oyunlar.php?durum=no");
					}
					exit;
				}
				else {
					header("Location:../admin/oyunlar.php?durum=boyutbuyuk");
				}
			}
			else {
				header("Location:../admin/oyunlar.php?durum=uzantiyanlis");
			}
		}
	}
/********************************/
if (isset($_POST['oyunguncelle'])) {
		if ($_FILES['image']['error']=="0") {
			if ($_FILES['image']["type"]=="png" || "jpg") {
				if ($_FILES['image']["size"]< 1024*1024) {
					$gecici_isim=$_FILES['image']['tmp_name'];
					$dosya_ismi=rand(100000,999999).$_FILES['image']['name'];
					move_uploaded_file($gecici_isim, "../images/$dosya_ismi");
					$sorgu=$db->prepare("
					UPDATE project SET
					image=:image 
					WHERE id={$_POST['id']}
						");
					$sonuc=$sorgu->execute(array(
					'image'=>$dosya_ismi
					));

				}
				else {
					header("Location:../admin/oyunduzenle.php?durum=boyutbuyuk");
				}
			}
			else {
				header("Location:../admin/oyunduzenle.php?durum=uzantiyanlis");
			}

		}
					
					$sorgu=$db->prepare("
					UPDATE project SET
					title=:title,
					gamestext=:gamestext,
					play_link=:play_link,
					app_link=:app_link
					WHERE id={$_POST['id']}
						");

					$sonuc=$sorgu->execute(array(
					'title'=>$_POST['title'],
					'gamestext'=>$_POST['gamestext'],
					'play_link'=>$_POST['play_link'],
					'app_link'=>$_POST['app_link']

					));
					if ($sonuc) {
						header("Location:../admin/oyunduzenle.php?id={$_POST['id']}&durum=ok");
					}
					else
					{
						header("Location:../admin/oyunduzenle.php?id={$_POST['id']}&durum=no");
					}
					exit;
	}
	/**************************************/
if (isset($_POST['sliderekle'])) {
		if ($_FILES['slider_img']['error']=="0") {
			if ($_FILES['slider_img']["type"]=="png" || "jpg") {
				if ($_FILES['slider_img']["size"]< 1024*1024) {
					$gecici_isim=$_FILES['slider_img']['tmp_name'];
					$dosya_ismi=rand(100000,999999).$_FILES['slider_img']['name'];
					move_uploaded_file($gecici_isim, "../images/$dosya_ismi");


					$sorgu=$db->prepare("
					INSERT INTO slider SET
					slider_title=:slider_title,
					slider_img=:slider_img,
					blog_text=:blog_text

						");

					$sonuc=$sorgu->execute(array(
					'slider_title'=>$_POST['slider_title'],
					'slider_img'=>$dosya_ismi,
					'blog_text'=>$_POST['blog_text']

					));

					if ($sonuc) {
						header("location:../admin/slider.php?durum=ok");
					}
					else
					{
						header("location:../admin/slider.php?durum=no");
					}
					exit;
				}
				else {
					header("Location:../admin/slider.php?durum=boyutbuyuk");
				}
			}
			else {
				header("Location:../admin/slider.php?durum=uzantiyanlis");
			}
		}
	}
 ?>