<?php include 'header.php'; 

	$sorgu=$db->prepare("SELECT * FROM haberler");
	$sorgu->execute();
	$say=1;
?>
	<div class="container-fluid">
		<div class="row" style="margin-bottom: 20px;">
			<div class="col-md-6">
				<h4>Haber İçerikleri</h4>
			</div>
			<div class="col-md-6 text-right">
				<a class="btn btn-primary btn-circle" href="haberekle.php"><i class="fa fa-plus"></i></a>
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
					<td><img src="../news/<?php echo $habercek['h_resim'] ?>" style="width: 200px;"></td>
					<td><?php echo $habercek["h_baslik"]; ?></td>
					<td><?php echo $habercek["h_tarih"]; ?></td>
					<td>
						<?php echo substr($habercek["h_metin"],0,50) ?>
					</td>
					<td>
						<div class="row">
							<div class="col-md-4">
								<form action="../yon/ajax.php" method="POST">
									<input type="hidden" name="h_id" value="<?php echo $habercek['h_id'] ?>">
									<button type="submit" class="btn btn-danger btn-circle" name="habersil"><i class="fa fa-trash"></i></button>
								</form>
							</div>
							<div class="col-md-4">
								<form action="haberduzenle.php" method="POST">
									<input type="hidden" name="h_seo" value="<?php echo $habercek['h_seo'] ?>">
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