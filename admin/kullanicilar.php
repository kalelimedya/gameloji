<?php include 'header.php'; 

	$sorgu=$db->prepare("SELECT * FROM kullanicilar");
	$sorgu->execute();
	$say=1;
?>
	<div class="container-fluid">
		<div class="row" style="margin-bottom: 20px;">
			<div class="col-md-6">
				<h4>Kayıtlı Kullanıcılar</h4>
			</div>
			<div class="col-md-6 text-right">
				<a class="btn btn-primary btn-circle" href="kullaniciekle.php"><i class="fa fa-plus"></i></a>
			</div>
		</div>
		<table class="table table-hover table-bordered">
			<tr>
				<th>ID</th>
				<th>İsim</th>
				<th>Mail</th>
				<th>Takma Adı</th>
				<th>Yetkisi</th>
				<th>Doğum Tarihi</th>
				<th>Onay</th>
				<th></th>
			</tr>
			<?php while ($kullcek=$sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
				<tr>
					<td><?php echo $say++; ?></td>
					<td><?php echo $kullcek["kul_isim"]; ?></td>
					<td><?php echo $kullcek["kul_mail"]; ?></td>
					<td><?php echo $kullcek["kul_ad"]; ?></td>
					<td><?php 
						if (@$kullcek["kul_yetki"]==0) {
							echo "Kullanıcı";
						} else if (@$kullcek["kul_yetki"]==1) {
							echo "Yetkili";
						}
					?>
					</td>
					<td><?php echo $kullcek["kul_dogum"]; ?></td>
					<td><?php echo $kullcek["kul_soz"]; ?></td>
					<td>
						<div class="row">
							<div class="col-md-4">
								<form action="../yon/ajax.php" method="POST">
									<input type="hidden" name="kul_id" value="<?php echo $kullcek['kul_id'] ?>">
									<button type="submit" class="btn btn-danger btn-circle" name="kullanicisil"><i class="fa fa-trash"></i></button>
								</form>
							</div>
							<div class="col-md-4">
								<form action="kullaniciduzenle.php" method="POST">
									<input type="hidden" name="kul_id" value="<?php echo $kullcek['kul_id'] ?>">
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