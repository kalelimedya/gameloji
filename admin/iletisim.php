<?php include 'header.php';
	$sorgu=$db->prepare("SELECT * FROM iletisim");
	$sorgu->execute();
	$sorgucek=$sorgu->fetch(PDO::FETCH_ASSOC);
?>
	<form action="../yon/ajax.php" method="POST">
		<div class="container-fluid">
			<h4>Hakkımızda</h4>
			<div class="row">
				<div class="col-md-3">
					<label>İletişim Başlık:</label>
					<input type="text" name="i_bas" value="<?php echo $sorgucek['i_bas'] ?>" class="form-control">
				</div>
				<div class="col-md-3">
					<label>İletişim Alt Başlık:</label>
					<input type="text" name="i_alt_bas" value="<?php echo $sorgucek['i_alt_bas'] ?>" class="form-control">
				</div>
				<div class="col-md-3">
					<label>İletişim Açıklama:</label>
					<input type="text" name="i_ack" value="<?php echo $sorgucek['i_ack'] ?>" class="form-control">
				</div>
				<div class="col-md-3">
					<label>İletişim Telefon:</label>
					<input type="text" name="i_cep" value="<?php echo $sorgucek['i_cep'] ?>" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label>İletişim Mail:</label>
					<textarea id="editor" name="i_mail" class="form-control" style="height: auto;"><?php echo $sorgucek["i_mail"] ?></textarea>
				</div>
				<div class="col-md-6">
					<label>İletişim Adres:</label>
					<textarea id="editor2" name="i_adr" class="form-control" style="height: auto;"><?php echo $sorgucek["i_adr"] ?></textarea>
				</div>
			</div>
			<div style="margin-top:10px;margin-bottom:10px;">
				<button name="iletisimkaydet" class="btn btn-primary btn-block">Güncelle</button>
			</div>
		</div>
	</form>
<?php include 'footer.php'; ?>