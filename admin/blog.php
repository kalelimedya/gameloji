<?php include 'header.php'; 

	$sorgu=$db->prepare("SELECT * FROM blog");
	$sorgu->execute();
	$say=1;
?>
	<div class="container-fluid">
		<div class="row" style="margin-bottom: 20px;">
			<div class="col-md-6">
				<h4>Post İçerikleri</h4>
			</div>
			<div class="col-md-6 text-right">
				<a class="btn btn-primary btn-circle" href="blogekle.php"><i class="fa fa-plus"></i></a>
			</div>
		</div>
		<table class="table table-hover table-bordered">
			<tr>
				<th>ID</th>
				<th>Resim</th>
				<th>Başlık</th>
				<th>Tarih</th>
				<th>İçerik</th>
				<th></th>
			</tr>
			<?php while ($habercek=$sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
				<tr>
					<td><?php echo $say++; ?></td>
					<td><img src="../images/<?php echo $habercek['blog_img'] ?>" style="width: 200px;"></td>
					<td><?php echo $habercek["blog_header"]; ?></td>
					<td><?php echo $habercek["blog_date"]; ?></td>
					<td>
						<?php echo substr($habercek["blog_text"],0,50) ?>
					</td>
					<td>
						<div class="row">
							<div class="col-md-4">
								<form action="../islemler/ajax.php" method="POST">
									<input type="hidden" name="id" value="<?php echo $habercek['id'] ?>">
									<button type="submit" class="btn btn-danger btn-circle" name="blogsil"><i class="fa fa-trash"></i></button>
								</form>
							</div>
							<div class="col-md-4">
								<form action="blogduzenle.php" method="POST">
									<input type="hidden" name="id" value="<?php echo $habercek['id'] ?>">
									<button type="submit" class="btn btn-success btn-circle"><i class="fa fa-edit"></i></button>
								</form>
							</div>
						</div>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>
<?php include 'footer.php'; ?>