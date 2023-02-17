<?php include 'header.php'; 
		$sorgu=$db->prepare("SELECT * FROM kategoriler");
		$sorgu->execute();
?>
	<div class="container-fluid">
		<h4>Haber Ekleme Sayfası</h4>
		<form action="../yon/ajax.php" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<label>Haber Başlığı:</label>
					<input type="text" name="h_baslik" class="form-control" required="">
				</div>
				<div class="col-md-6">
					<label>Haber Resmi:</label>
					<input type="file" name="h_resim" class="form-control" required="">
				</div>
			</div>
			<div class="row" style="margin-top: 15px;">
				<div class="col-md-6">
					<label>Haber Metni Türkçe:</label>
					<textarea id="editor" name="h_metin" required=""></textarea>
				</div>
				<div class="col-md-6">
					<label>Haber Metni İngilizce:</label>
					<textarea id="editor2" name="h_metin_ing" required=""></textarea>
				</div>
			</div>	
			<div class="row" style="margin-top: 15px;">
				<div class="col-md-6">
					<label>Haber Yazarı:</label>
					<input type="text" name="h_yazar" class="form-control" required="" value="Yiğithan Gümüş" readonly="">
				</div>
				<div class="col-md-3">
					<label>Kategori:</label>
					<select name="k_id" class="form-control">
						<?php while($kategoricek=$sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
							<option value="<?php echo $kategoricek['k_id'] ?>" required><?php echo $kategoricek['k_isim'] ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="col-md-3">
					<label>Öne Çıkar</label>
					<select name="k_onecikar" class="form-control">
						<option value="1">Evet</option>
						<option value="0">Hayır</option>
					</select>
				</div>
			</div>
			<div style="margin-top:15px;">
				<button type="submit" class="btn btn-primary btn-block" name="haberekle">Haberi Ekle</button>
			</div>
		</form>
	</div>
<?php include 'footer.php'; ?>