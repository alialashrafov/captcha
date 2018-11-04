<!DOCTYPE html>
<html>
<head>
	<title>Captcha Test</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/captcha/assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h3>Personel Kayit</h3>
			<hr>
			<form action="http://localhost/captcha/captchatest/validate" method="post">
				<div class="form-group">
				<label for="">Adiniz Soyadiniz</label>
				<input type="text" name="personel_adi" class="form-control">
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Dogrulama Kodu</label>
						<input type="text" name="captcha" class="form-control">
					</div>
				</div>
				<div class="col-md-5" style="height: 74px; line-height: 74px;">
					<?php echo $captcha['image']; ?>
				</div>
			</div>				
			<button class="btn btn-success" type="submit">Kaydet</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>