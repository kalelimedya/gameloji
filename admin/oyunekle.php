<?php include 'header.php'; ?>
	<div class="container-fluid">
		<h4>Oyun Ekleme Sayfası</h4>
		<form action="../islemler/ajax.php" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<label>Oyun Başlığı:</label>
					<input type="text" name="title" class="form-control" required="">
				</div>
				<div class="col-md-6">
					<label>Oyun Resmi:</label>
					<input type="file" name="image" class="form-control" required="">
				</div>
			</div>
			<div class="row" style="margin-top: 15px;">
				
				<div class="col-md-6">
					<label>Oyun İçeriği:</label>
					<textarea id="editor" required="" name="gamestext"></textarea>
				</div>
				<div class="col-md-3">
					<label>Google Play Link:</label>
					<input type="text" name="play_link" class="form-control" required="">
				</div>
				<div class="col-md-3">
					<label>App Store Link:</label>
					<input type="text" name="app_link" class="form-control" required="">
				</div>
			</div>
			<div style="margin-top:15px;">
				<button type="submit" class="btn btn-primary btn-block" name="oyunekle">Post Ekle</button>
			</div>
		</form>
	</div>
<?php include 'footer.php'; ?>