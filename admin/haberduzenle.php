<?php include 'header.php'; 
		$sorgu=$db->prepare("SELECT * FROM kategoriler");
		$sorgu->execute();

		$srg=$db->prepare("SELECT * FROM haberler WHERE h_seo='{$_POST['h_seo']}'");
		$srg->execute();
		$habercek=$srg->fetch(PDO::FETCH_ASSOC);
?>
	<div class="container-fluid">
		<h4>Haberi Güncelleme Sayfası</h4>
		<form action="../yon/ajax.php" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<label>Haber Başlığı:</label>
					<input type="text" name="h_baslik" class="form-control" required="" value="<?php echo $habercek['h_baslik'] ?>">
				</div>
				<div class="col-md-6">
					<label>Haber Resmi:</label>
					<input type="file" name="h_resim" class="form-control">
					<img src="../news/<?php echo $habercek['h_resim'] ?>" style="width: 200px;">
				</div>
			</div>
			<div class="row" style="margin-top: 15px;">
				<div class="col-md-6">
					<label>Haber Metni Türkçe:</label>
					<textarea id="editor" name="h_metin" required=""><?php echo $habercek['h_metin'] ?></textarea>
				</div>
				<div class="col-md-6">
					<label>Haber Metni İngilizce:</label>
					<textarea id="editor2" name="h_metin_ing" required=""><?php echo $habercek['h_metin_ing'] ?></textarea>
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
						<option value="<?php echo $habercek['k_id'] ?>"><?php echo $habercek['k_isim'] ?></option>
						<?php while($kategoricek=$sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
							<option value="<?php echo $kategoricek['k_id'] ?>" required><?php echo $kategoricek['k_isim'] ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="col-md-3">
					<label>Öne Çıkar</label>
					<select name="k_onecikar" class="form-control">
						<?php if ($habercek["k_onecikar"]==1) { ?>
								<option value="1" selected="">Evet</option>
								<option value="0">Hayır</option>
						<?php } else { ?>
								<option value="0" selected="">Hayır</option>
								<option value="1">Evet</option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div style="margin-top:15px;">
				<input type="hidden" name="h_id" value="<?php echo $habercek['h_id'] ?>">
				<button type="submit" class="btn btn-primary btn-block" name="haberiguncelle">Haberi Güncelle</button>
			</div>
		</form>
	</div>
<?php include 'footer.php'; ?>