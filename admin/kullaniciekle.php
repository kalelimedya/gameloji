<?php include 'header.php'; ?>
	<div class="container-fluid">
		<h4>Yeni Kullanıcı Ekle</h4>
		<?php if(@$_GET["durum"]=="ok") { ?>
			<div class="alert alert-success alert-dismissible">
				<strong>Yeni kayıt başarıyla eklendi.</strong>
			</div>
		<?php } ?>
		<?php if(@$_GET["durum"]=="kayitmevcut") { ?>
			<div class="alert alert-danger alert-dismissible">
				<strong>Bu E-Postayla bu kayıt mevcuttur.</strong>
			</div>
		<?php } ?>
		<form action="../yon/ajax.php" method="POST">
			<div class="row">
				<div class="col-md-6">
					<label>E-Posta:</label>
					<input type="email" name="kul_mail" class="form-control" required="">
				</div>
				<div class="col-md-6">
					<label>Kullanıcı Adı:</label>
					<input type="text" name="kul_ad" class="form-control" required="">
				</div>
			</div>
			<div class="row" style="margin-top: 10px;">
				<div class="col-md-6">
					<label>Şifre:</label>
					<input type="password" name="kul_sifre" class="form-control" required="">
				</div>
				<div class="col-md-6">
					<label>Doğum Tarihi:</label>
					<input type="date" name="kul_dogum" class="form-control" required="">
				</div>
			</div>
			<div class="row" style="margin-top: 10px;">
				<div class="col-md-6">
					<label>Adres:</label>
					<input type="text" name="kul_adres" class="form-control" required="">
				</div>
				<div class="col-md-6">
					<label>Sözleşme Onayı:</label>
					<select name="kul_soz" required="" class="form-control">
						<option value="1">Onaylıyorum</option>
						<option value="0">Onaylamıyorum</option>
					</select>
				</div>
			</div>
			<div style="margin-top: 20px;">
				<button type="submit" name="kullaniciekle" class="btn btn-primary btn-block">Kullanıcı Ekle</button>
			</div>
		</form>
	</div>
<?php include 'footer.php'; ?>