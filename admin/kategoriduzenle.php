<?php include 'header.php'; 
	$sorgu=$db->prepare("SELECT * FROM kategoriler WHERE k_id={$_POST['k_id']}");
	$sorgu->execute();
	$sorgucek=$sorgu->fetch(PDO::FETCH_ASSOC);
?>
	<div class="container-fluid">
		<div class="container-fluid">
			<h4>Kategori Güncelleme Sayfası</h4>
			<form action="../yon/ajax.php" method="POST">
				<div class="form-group col-md-7">
					<label>Kategori İsmi:</label>
					<input type="text" name="k_isim" required="" class="form-control" value="<?php echo $sorgucek['k_isim'] ?>">
				</div>
				<div class="form-group col-md-7">
					<label>Kategori İngilizce İsmi::</label>
					<input type="text" name="k_name" required="" class="form-control" value="<?php echo $sorgucek['k_name'] ?>">
				</div>
				<div class="form-group col-md-7">
					<input type="hidden" name="k_id" value="<?php echo $sorgucek['k_id'] ?>">
					<button type="submit" class="btn btn-primary btn-block" name="kategoriduzenle">Kategoriyi Güncelle</button>
				</div>
			</form>
		</div>
	</div>
<?php include 'footer.php'; ?>