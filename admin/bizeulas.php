<?php include 'header.php'; 

	$sorgu=$db->prepare("SELECT * FROM bizeulas");
	$sorgu->execute();
	$say=1;
?>
	<div class="container-fluid">
		<div class="row" style="margin-bottom: 20px;">
			<div class="col-md-6">
				<h4>Bize Ulaş</h4>
			</div>
			<div class="col-md-6 text-right">
				
			</div>
		</div>
		
			<?php if(@$_GET["durum"]=="ok") { ?>
				<div class="alert alert-danger">
					<strong>
						Kayıt silme başarılı!
					</strong>
				</div>
			<?php } ?>
		
		<table class="table table-hover table-bordered">
			<tr>
				<th>ID</th>
				<th>İsim</th>
				<th>Mail</th>
				<th>Konu</th>
				<th>Mesaj</th>
				<th></th>
			</tr>
			<?php while ($bizecek=$sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
				<tr>
					<td><?php echo $say++; ?></td>
					<td><?php echo $bizecek["b_isim"]; ?></td>
					<td><?php echo $bizecek["b_mail"]; ?></td>
					<td><?php echo $bizecek["b_konu"]; ?></td>
					<td><?php echo $bizecek["b_mesaj"]; ?></td>
					<td>
						<div class="row">
							<div class="col-md-4">
								<form action="../yon/ajax.php" method="POST">
									<input type="hidden" name="b_id" value="<?php echo $bizecek['b_id'] ?>">
									<button type="submit" class="btn btn-danger btn-circle" name="bizesil"><i class="fa fa-trash"></i></button>
								</form>
							</div>
							<div class="col-md-4">
								<form action="bizeulasgor.php" method="POST">
									<input type="hidden" name="b_id" value="<?php echo $bizecek['b_id'] ?>">
									<button type="submit" class="btn btn-secondary btn-circle"><i class="fa fa-eye"></i></button>
								</form>
							</div>
						</div>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>
<?php include 'footer.php'; ?>