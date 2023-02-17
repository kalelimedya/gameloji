<?php include 'header.php';
	$sorgu=$db->prepare("SELECT * FROM hakkimizda");
	$sorgu->execute();
	$sorgucek=$sorgu->fetch(PDO::FETCH_ASSOC);
?>
	<form action="../yon/ajax.php" method="POST">
		<div class="container-fluid">
			<h4>Hakkımızda</h4>
			<div class="row">
				<div class="col-md-6">
					<label>Hakkımızda Türkçe:</label>
					<textarea id="editor" name="hakkimizda_icerik_tr" class="form-control" style="height: auto;"><?php echo $sorgucek["hakkimizda_icerik_tr"] ?></textarea>
				</div>
				<div class="col-md-6">
					<label>Hakkımızda İngilizce:</label>
					<textarea id="editor2" name="hakkimizda_icerik_en" class="form-control" style="height: auto;"><?php echo $sorgucek["hakkimizda_icerik_en"] ?></textarea>
				</div>
			</div>
			<div style="margin-top:10px;margin-bottom:10px;">
				<button name="hakkimizdakaydet" class="btn btn-primary btn-block">Güncelle</button>
			</div>
		</div>
	</form>
<?php include 'footer.php'; ?>