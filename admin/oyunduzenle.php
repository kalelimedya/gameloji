<?php include 'header.php'; 

		@$srg=$db->prepare("SELECT * FROM project WHERE id='{$_POST['id']}' OR id='{$_GET['id']}'");
		$srg->execute();
		$habercek=$srg->fetch(PDO::FETCH_ASSOC);
?>
	<div class="container-fluid">
		<h4>Oyun Güncelleme Sayfası</h4>
		<form action="../islemler/ajax.php" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<label>Oyun Başlığı:</label>
					<input type="text" name="title" class="form-control" required="" value="<?php echo $habercek['title'] ?>">
				</div>
				<div class="col-md-6">
					<label>Oyun Resmi:</label>
					<input type="file" name="image" class="form-control">
				</div>
			</div>
			<div class="row" style="margin-top: 15px;">
				
				<div class="col-md-6">
					<label>Oyun İçeriği:</label>
					<textarea id="editor" required="" name="gamestext"><?php echo $habercek['gamestext'] ?></textarea>
				</div>
				<div class="col-md-3">
					<label>Google Play Link:</label>
					<input type="text" name="play_link" class="form-control" required="" value="<?php echo $habercek['play_link'] ?>">
				</div>
				<div class="col-md-3">
					<label>App Store Link:</label>
					<input type="text" name="app_link" class="form-control" required="" value="<?php echo $habercek['app_link'] ?>">
				</div>
			</div>
			<div style="margin-top:15px;">
				<input type="hidden" name="id" value="<?php echo $habercek['id'] ?>">
				<button type="submit" class="btn btn-primary btn-block" name="oyunguncelle">Oyunu Güncelle</button>
			</div>
		</form>
	</div>
<?php include 'footer.php'; ?>