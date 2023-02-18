<?php include 'header.php'; 

		@$srg=$db->prepare("SELECT * FROM blog WHERE id='{$_POST['id']}' OR id='{$_GET['id']}'");
		$srg->execute();
		$habercek=$srg->fetch(PDO::FETCH_ASSOC);
?>
	<div class="container-fluid">
		<h4>Haberi Güncelleme Sayfası</h4>
		<form action="../islemler/ajax.php" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<label>Post Başlığı:</label>
					<input type="text" name="blog_header" class="form-control" required="" value="<?php echo $habercek['blog_header'] ?>">
				</div>
				<div class="col-md-6">
					<label>Post Resmi:</label>
					<input type="file" name="blog_img" class="form-control">
					<img src="../images/<?php echo $habercek['blog_img'] ?>" style="width: 200px;">
				</div>
			</div>
			<div class="row" style="margin-top: 15px;">
				<div class="col-md-6">
					<label>Post İçeriği:</label>
					<textarea id="editor" name="blog_text" required=""><?php echo $habercek['blog_text'] ?></textarea>
				</div>
				<div class="col-md-6">
					<label>Post Yazarı:</label>
					<input type="text" name="blog_author" class="form-control" required="" value="<?php echo $habercek['blog_author'] ?>">
				</div>
			</div>	
			<div style="margin-top:15px;">
				<input type="hidden" name="id" value="<?php echo $habercek['id'] ?>">
				<button type="submit" class="btn btn-primary btn-block" name="postguncelle">Post'u Güncelle</button>
			</div>
		</form>
	</div>
<?php include 'footer.php'; ?>