<?php include 'header.php'; ?>
	<div class="container-fluid">
		<div class="container-fluid">
			<h4>Kategori Ekleme Sayfası</h4>
			<form action="../yon/ajax.php" method="POST">
				<div class="form-group col-md-7">
					<label>Kategori İsmi:</label>
					<input type="text" name="k_isim" required="" class="form-control">
				</div>
				<div class="form-group col-md-7">
					<label>Kategori İngilizce İsmi::</label>
					<input type="text" name="k_name" required="" class="form-control">
				</div>
				<div class="form-group col-md-7">
					<button type="submit" class="btn btn-primary btn-block" name="kategoriekle">Kategoriyi Ekle</button>
				</div>
			</form>
		</div>
	</div>
<?php include 'footer.php'; ?>