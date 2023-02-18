<?php include 'header.php'; 
		$sorgu=$db->prepare("SELECT * FROM contact WHERE id={$_POST['id']}");
		$sorgu->execute();
		$sorgucek=$sorgu->fetch(PDO::FETCH_ASSOC);
?>
	<div class="container-fluid">
		<h4>Bize Ulaş Mesaj Görüntüleme Sayfası</h4>
		<div class="form-group col-md-7">
			<label>İsim:</label>
			<input type="text" name="name" class="form-control" value="<?php echo $sorgucek['name'] ?>" readonly>
		</div>
		<div class="form-group col-md-7">
			<label>E-Posta:</label>
			<input type="email" name="mail" class="form-control" value="<?php echo $sorgucek['mail'] ?>" readonly>
		</div>
		<div class="form-group col-md-7">
			<label>Şirket:</label>
			<input type="text" name="business" class="form-control" value="<?php echo $sorgucek['business'] ?>" readonly>
		</div>
		<div class="form-group col-md-7">
			<label>Telefon</label>
			<input type="email" name="tel" class="form-control" value="<?php echo $sorgucek['tel'] ?>" readonly>
		</div>
		<div class="form-group col-md-7">
			<label>Mesaj:</label>
			<textarea class="form-control" name="message" readonly><?php echo $sorgucek["message"] ?></textarea>
		</div>
	</div>
<?php include 'footer.php'; ?>