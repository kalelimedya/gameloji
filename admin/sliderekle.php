<?php include 'header.php'; ?>
	<div class="container-fluid">
		<h4>Slider Ekleme Sayfası</h4>
		<form action="../islemler/ajax.php" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<label>Slider Başlığı:</label>
					<input type="text" name="slider_title" class="form-control" required="">
				</div>
				<div class="col-md-6">
					<label>Slider Resmi:</label>
					<input type="file" name="slider_img" class="form-control" required="">
				</div>
			</div>
			<div class="row" style="margin-top: 15px;">
				
				<div class="col-md-12">
					<label>Slider İçeriği:</label>
					<textarea id="editor" required="" name="slider_text"></textarea>
				</div>
			</div>
			<div style="margin-top:15px;">
				<button type="submit" class="btn btn-primary btn-block" name="sliderekle">Slider Ekle</button>
			</div>
		</form>
	</div>
<?php include 'footer.php'; ?>