<html>
<head>
  <title>Galeri Semarang</title>
</head>
<body>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			font-family: Century Gothic;
		}

		header{
			background-image: url(city.jpg);
			height: 100vh;
			background-size: cover;
			background-position: center;
		}

		.body{
			background-image: url(city.jpg);
			height: 100vh;
			background-size: cover;
			background-position: center;
			color: white;
			padding-left: 20px;
		}

		.button{
			position: absolute;
			top: 54%;
			left: 50%;
			transform: translate(-50%,-50%);
			color: #fff;
		}

		.btn{
			border: 1px solid #fff;
			padding: 10px 30px;
			color: #fff;
			text-decoration: none;
			transition: 0.6s ease;
		}

		.btn:hover{
			background-color: #000;
			color: #fff;
		}
	</style>
	<header>
	<center>
  		<h1 style="padding-top: 19%">Silakan Upload Gambar</h1>
  		<form method="post" enctype="multipart/form-data" action="upload.php" class="button">
  		<br><br><br>
    	<input class="btn" type="file" name="gambar">
    	<input type="submit" value="Upload">
  		</form>
  	</center>
  	</header>
</body>
</html>