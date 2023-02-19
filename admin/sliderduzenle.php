<?php include 'header.php'; 
	@$srg=$db->prepare("SELECT * FROM slider WHERE slider_id='{$_POST['slider_id']}' OR slider_id='{$_GET['slider_id']}'");
		$srg->execute();
		$habercek=$srg->fetch(PDO::FETCH_ASSOC);
?>
	<div class="container-fluid">
		<h4>Slider Ekleme Sayfası</h4>
		<form action="../islemler/ajax.php" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<label>Slider Başlığı:</label>
					<input type="text" name="slider_title" class="form-control" required="" value="<?php echo $habercek['slider_title'] ?>">
				</div>
				<div class="col-md-6">
					<label>Slider Resmi:</label>
					<input type="file" name="slider_img" class="form-control">
				</div>
			</div>
			<div class="row" style="margin-top: 15px;">
				
				<div class="col-md-12">
					<label>Slider İçeriği:</label>
					<textarea id="editor" required="" name="slider_text"><?php echo $habercek['slider_text'] ?></textarea>
				</div>
			</div>
			<div style="margin-top:15px;">
				<input type="hidden" name="slider_id" value="<?php echo $habercek['slider_id'] ?>">
				<button type="submit" class="btn btn-primary btn-block" name="sliderduzenle">Slider Güncelle</button>
			</div>
		</form>
	</div>
<?php include 'footer.php'; ?>