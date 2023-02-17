<?php include 'header.php'; 
		$sorgu=$db->prepare("SELECT * FROM bizeulas WHERE b_id={$_POST['b_id']}");
		$sorgu->execute();
		$sorgucek=$sorgu->fetch(PDO::FETCH_ASSOC);
?>
	<div class="container-fluid">
		<h4>Bize Ulaş Mesaj Görüntüleme Sayfası</h4>
		<div class="form-group col-md-7">
			<label>İsim:</label>
			<input type="text" name="b_isim" class="form-control" value="<?php echo $sorgucek['b_isim'] ?>" readonly>
		</div>
		<div class="form-group col-md-7">
			<label>E-Posta:</label>
			<input type="email" name="b_mail" class="form-control" value="<?php echo $sorgucek['b_mail'] ?>" readonly>
		</div>
		<div class="form-group col-md-7">
			<label>Konu:</label>
			<input type="text" name="b_konu" class="form-control" value="<?php echo $sorgucek['b_konu'] ?>" readonly>
		</div>
		<div class="form-group col-md-7">
			<label>Mesaj:</label>
			<textarea class="form-control" name="b_mesaj" readonly><?php echo $sorgucek["b_mesaj"] ?></textarea>
		</div>
	</div>
<?php include 'footer.php'; ?>