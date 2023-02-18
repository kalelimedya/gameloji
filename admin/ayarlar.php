<?php include 'header.php'; ?>

<div class="container-fluid">
	<h4>Ayarlar</h4>
		<form action="../islemler/ajax.php" method="POST" enctype="multipart/form-data">
			<div class="row">
					<div class="col-lg-4">
						<label>Site Başlık:</label>
						<input type="text" name="site_baslik" value="<?php echo $ayarcek['site_baslik'] ?>" class="form-control">
					</div>
					<div class="col-lg-4">
						<label>Site Açıklama:</label>
						<input type="text" name="site_aciklama" value="<?php echo $ayarcek['site_aciklama'] ?>" class="form-control">
					</div>
					<div class="col-lg-4">
						<label>Site Link:</label>
						<input type="text" name="site_link" value="<?php echo $ayarcek['site_link'] ?>" class="form-control">
					</div>
				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-lg-6">
						<label>Site Sahip Mail:</label>
						<input type="email" name="site_sahip_mail" value="<?php echo $ayarcek['site_sahip_mail'] ?>" class="form-control">
					</div>
					<div class="col-lg-6">
						<label>Site Mail Host:</label>
						<input type="text" name="site_mail_host" value="<?php echo $ayarcek['site_mail_host'] ?>" class="form-control">
					</div>				
				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-lg-4">
						<label>Site Mail Şifre:</label>
						<input type="password" name="site_mail_sifre" value="<?php echo $ayarcek['site_mail_sifre'] ?>" class="form-control">
					</div>
					<div class="col-lg-4">
						<label>Site Mail Port:</label>
						<input type="text" name="site_mail_port" value="<?php echo $ayarcek['site_mail_port'] ?>" class="form-control">
					</div>
					<div class="col-lg-4">
						<label>Site Mail:</label>
						<input type="email" name="site_mail_mail" value="<?php echo $ayarcek['site_mail_mail'] ?>" class="form-control">
					</div>
				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-lg-4">
						<label>Site Konum:</label>
						<input type="text" name="site_konum" value="<?php echo $ayarcek['site_konum'] ?>" class="form-control">
					</div>
					<div class="col-lg-4">
						<label>Site Telefon:</label>
						<input type="text" name="site_telefon" value="<?php echo $ayarcek['site_telefon'] ?>" class="form-control">
					</div>
					<div class="col-lg-4">
						<label>Site Footer:</label>
						<input type="text" name="footer_aciklama" value="<?php echo $ayarcek['footer_aciklama'] ?>" class="form-control">
					</div>
				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-lg-3">
						<label>Facebook:</label>
						<input type="text" name="site_facebook" value="<?php echo $ayarcek['site_facebook'] ?>" class="form-control">
					</div>
					<div class="col-lg-3">
						<label>Twitter:</label>
						<input type="text" name="site_twitter" value="<?php echo $ayarcek['site_twitter'] ?>" class="form-control">
					</div>
					<div class="col-lg-3">
						<label>Linkedin:</label>
						<input type="text" name="site_linkedin" value="<?php echo $ayarcek['site_linkedin'] ?>" class="form-control">
					</div>
					<div class="col-lg-3">
						<label>Instagram:</label>
						<input type="text" name="site_instagram" value="<?php echo $ayarcek['site_instagram'] ?>" class="form-control">
					</div>
				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-lg-4">
						<label>Site Tanım:</label>
						<input type="text" name="site_tanim" value="<?php echo $ayarcek['site_tanim'] ?>" class="form-control">
					</div>
					<div class="col-lg-4">
						<label>Site Keywords:</label>
						<input type="text" name="site_keywords" value="<?php echo $ayarcek['site_keywords'] ?>" class="form-control">
					</div>
					<div class="col-lg-4">
						<label>Yazar:</label>
						<input type="text" name="site_yazari" value="<?php echo $ayarcek['site_yazari'] ?>" class="form-control">
					</div>
				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-lg-6">
						<label>Site Harita Linki:</label>
						<input type="text" name="site_harita" value="<?php echo $ayarcek['site_harita'] ?>" class="form-control">
					</div>
					<div class="col-lg-6">
						<label>Site Logo</label>
						<input type="file" name="site_logo" class="form-control-file">
					</div>
				</div>
				<div style="margin-top:20px;margin-bottom: 20px;">
					<button type="submit" class="btn btn-primary btn-block" name="ayarkaydet">Güncelle</button>
				</div>
		</form>
</div>
<?php include 'footer.php'; ?>