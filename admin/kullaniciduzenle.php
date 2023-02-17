<?php include 'header.php'; 
	$sorgu=$db->prepare("SELECT * FROM kullanicilar WHERE kul_id={$_POST['kul_id']}");
	$sorgu->execute();
	$sorgucek=$sorgu->fetch(PDO::FETCH_ASSOC);
?>
	<div class="container-fluid">
		<h4>Kullanıcı Düzenle</h4>
		<?php if(@$_GET["durum"]=="ok") { ?>
			<div class="alert alert-success alert-dismissible">
				<strong>Kullanıcı bilgileri başarıyla güncellendi.</strong>
			</div>
		<?php } ?>
		<form action="../yon/ajax.php" method="POST">
			<div class="row">
				<div class="col-md-6">
					<label>E-Posta:</label>
					<input type="email" name="kul_mail" class="form-control" required="" value="<?php echo $sorgucek['kul_mail'] ?>">
				</div>
				<div class="col-md-6">
					<label>Kullanıcı Adı:</label>
					<input type="text" name="kul_ad" class="form-control" required="" value="<?php echo $sorgucek['kul_ad'] ?>">
				</div>
			</div>
			<div class="row" style="margin-top: 10px;">
				<div class="col-md-6">
					<label>Şifre:</label>
					<input type="password" name="kul_sifre" class="form-control" readonly="">
				</div>
				<div class="col-md-6">
					<label>Doğum Tarihi:</label>
					<input type="date" name="kul_dogum" class="form-control" required="" value="<?php echo $sorgucek['kul_dogum'] ?>">
				</div>
			</div>
			<div class="row" style="margin-top: 10px;">
				<div class="col-md-6">
					<label>Adres:</label>
					<input type="text" name="kul_adres" class="form-control" required="" value="<?php echo $sorgucek['kul_adres'] ?>">
				</div>
				<div class="col-md-6">
					<label>Sözleşme Onayı:</label>
					<select name="kul_soz" required="" class="form-control" readonly>
						<option value="1">Onaylıyorum</option>
						<option value="0">Onaylamıyorum</option>
					</select>
				</div>
			</div>
			<div style="margin-top: 20px;">
				<input type="hidden" name="kul_id" value="<?php echo $sorgucek['kul_id'] ?>">
				<button type="submit" name="kullaniciduzenle" class="btn btn-primary btn-block">Kullanıcıyı Düzenle</button>
			</div>
		</form>
	</div>
<?php include 'footer.php'; ?>