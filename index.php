<!DOCTYPE html>
<html>
<head>
	<title>Tugas Akhir Pemrograman Web</title>
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

		.title{
			position: absolute;
			top: 40%;
			left: 50%;
			transform: translate(-50%,-50%);
		}

		.title h1{
			color: #fff;
			font-size: 50px;
		}

		.button{
			position: absolute;
			top: 65%;
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

		ul{
			align-items: center;
		}

		li{
			list-style: none;
			display: inline-block;
		}

		.main{
			margin:10px;
			width: 600px;
			height: 520px;
			background-color: #fafafa;
			padding-top: 20px;
			border-radius: 10px;
			border: 1px solid #eeeeee;
		}

		.img{
			background-image: url(saya.jpg);
			background-color: #eaeaea;
			background-size: cover;
			border-radius: 100px;
			width: 150px;
			height: 150px;
			margin: 0 auto;
			border: 1px solid #eaeaea;
		}

		h1{
			text-align: center;
			font-size: 30px;
			margin: 0;
			font-weight: bold;
			color: #6944ff
		}

		.text{
			text-align: center;
			font-size: 15px;
			margin:0;
			color: #324e63;
		}

		p{
			margin: 0 auto;
			padding-top: 20px;
			width: 450px;
			height: auto;
			color: #324e63;
		}

		.btn2{
			border: 1px solid #000;
			padding: 5px 20px;
			color: #000;
			text-decoration: none;
			transition: 0.6s ease;
		}

		.btn2:hover{
			background-color: lightblue;
			color: #000;
		}

	</style>
	<header>
		<div class="title">
			<h1>WELCOME TO DESISKA'S WEB</h1>
		</div>
		</div>
		<center class="button">
			<a href="http://localhost/projek1/start.html" class="btn">Get Started</a>
			<?php
			echo "<br><br><br><br><br><br>";
			echo "<center>";
			echo ("Anda Pengunjung yang ke:");
			include ("counter.php");
			echo "$kunjungan[0]";
			echo "</center>";
			echo date("l, d-m-Y");
			?>
		</center>
		<br>
	</header>
</body>
</html>