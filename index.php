<!DOCTYPE html>
<html>
<head>
	<title>POSTEST PERTEMUAN 8</title>
	<link rel="stylesheet" type="text/css" href="bilprima.css">
</head>
<body>

	<div class="container">
		
		<header>
			<h1 class="text-success">CEK BILANGAN PRIMA</h1>
		</header>

		<div class="form">

			<div class="header-form col-md-12 btn-success">
				<h3 class="text-white">INPUT BILANGAN</h3>
			</div>

			<form action="hasil.php" method="POST">
				<div class="input-group">
					<input class="col-md-12 form-control" type="number" name="in_bil" placeholder="Masukkan bilangan ..." required>
					<input class="col-md-12 form-control text-white btn-success" type="submit" name="submit" value="Submit">
				</div>
			</form>

		</div>
	</div>
	<footer class="col-md-12 btn-success">
        <p>Copyright &copy; Aldinna Wulan Anggraini | 2000018105 </p>
	</footer>
</body>
</html>
