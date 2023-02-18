<?php include 'header.php'; 

	$sorgu=$db->prepare("SELECT * FROM contact");
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
				<th>Şirket</th>
				<th>Mesaj</th>
				<th>Telefon</th>
				<th></th>
			</tr>
			<?php while ($bizecek=$sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
				<tr>
					<td><?php echo $say++; ?></td>
					<td><?php echo $bizecek["name"]; ?></td>
					<td><?php echo $bizecek["mail"]; ?></td>
					<td><?php echo $bizecek["business"]; ?></td>
					<td><?php echo $bizecek["message"]; ?></td>
					<td><?php echo $bizecek["tel"]; ?></td>
					<td>
						<div class="row">
							<div class="col-md-4">
								<form action="../islemler/ajax.php" method="POST">
									<input type="hidden" name="id" value="<?php echo $bizecek['id'] ?>">
									<button type="submit" class="btn btn-danger btn-circle" name="bizesil"><i class="fa fa-trash"></i></button>
								</form>
							</div>
							<div class="col-md-4">
								<form action="bizeulasgor.php" method="POST">
									<input type="hidden" name="id" value="<?php echo $bizecek['id'] ?>">
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