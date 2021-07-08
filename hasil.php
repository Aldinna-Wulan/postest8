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

			<form action="index.php" method="POST">
				<div class="input-group">
				<h2>
					<?php
						if (isset($_POST['submit'])){
							$x = $_POST['in_bil'];
							$b = 1 ;
							$a ;
							if( $x==0 || $x==1 ) {
								$b=0;
							}

							for ($a=2 ; $a<=$x-1 ; $a++){
								if($x%$a==0){
									$b=0;
									break;
								}
							}
							if($b==1){
								echo $x.	" Merupakan Bilangan Prima" ;
							}
							else{
								echo $x.	" Bukan Merupakan Bilangan Prima ";
							}
						}
					?>
					</h2>
					<input class="col-md-12 form-control text-white btn-success" type="submit" value="cek lagi">
				</div>
			</form>
		</div>
	</div>
	<footer class="col-md-12 btn-success">
		<p>Copyright &copy; Aldinna Wulan Anggraini | 2000018105 </p>
	</footer>
</body>
</html>