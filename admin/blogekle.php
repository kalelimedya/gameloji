<?php include 'header.php'; ?>
	<div class="container-fluid">
		<h4>Post Ekleme Sayfası</h4>
		<form action="../islemler/ajax.php" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<label>Post Başlığı:</label>
					<input type="text" name="blog_header" class="form-control" required="">
				</div>
				<div class="col-md-6">
					<label>Post Resmi:</label>
					<input type="file" name="blog_img" class="form-control" required="">
				</div>
			</div>
			<div class="row" style="margin-top: 15px;">
				
				<div class="col-md-6">
					<label>Post İçeriği:</label>
					<textarea id="editor" required="" name="blog_text"></textarea>
				</div>
				<div class="col-md-6">
					<label>Post Yazarı:</label>
					<input type="text" name="blog_author" class="form-control" required="">
				</div>
			</div>
			<div style="margin-top:15px;">
				<button type="submit" class="btn btn-primary btn-block" name="blogekle">Post Ekle</button>
			</div>
		</form>
	</div>
<?php include 'footer.php'; ?>