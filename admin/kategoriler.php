<?php include 'header.php'; 

	$sorgu=$db->prepare("SELECT * FROM kategoriler");
	$sorgu->execute();
	$say=1;
?>
	<div class="container-fluid">
		<div class="row" style="margin-bottom: 20px;">
			<div class="col-md-6">
				<h4>Haber İçerikleri</h4>
			</div>
			<div class="col-md-6 text-right">
				<a class="btn btn-primary btn-circle" href="kategoriekle.php"><i class="fa fa-plus"></i></a>
			</div>
		</div>
		<table class="table table-hover table-bordered">
			<tr>
				<th>ID</th>
				<th>Kategori İsim</th>
				<th></th>
			</tr>
			<?php while ($kategoricek=$sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
				<tr>
					<td><?php echo $say++; ?></td>
					<td><?php echo $kategoricek["k_isim"] ?></td>
					<td>
						<div class="row">
							<div class="col-md-4">
								<form action="../yon/ajax.php" method="POST">
									<input type="hidden" name="k_id" value="<?php echo $kategoricek['k_id'] ?>">
									<button type="submit" class="btn btn-danger btn-circle" name="kategorisil"><i class="fa fa-trash"></i></button>
								</form>
							</div>
							<div class="col-md-4">
								<form action="kategoriduzenle.php" method="POST">
									<input type="hidden" name="k_id" value="<?php echo $kategoricek['k_id'] ?>">
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