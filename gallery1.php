<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
</head>
<body>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background: #262626;
			font-family: sans-serif; 
		}

		.container{
			width: 1280px;
			margin: 80px auto 0;
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
		}

		.container .box1{
			position: relative;
			width: 300px;
			height: 200px;
			background: #ff0;
			margin: 10px;
			box-sizing: border-box;
			display: inline-block;
		}

		.container .box1 .image{
			position: relative;
			overflow: hidden;
		}

		.container .box1 .image img{
			max-width: 100%;
			transition: transform 2s;
		}

		.container .box1:hover .image img{
			transform: scale(1.2);
		}

		.container .box1 .content{
			position: absolute;
			top: 10px;
			left: 10px;
			bottom: 10px;
			right: 10px;
			background: rgba(0,0,0,.8);
			transform: scaleY(0);
			transition: transform .5s;
		}

		.container .box1:hover .content{
			transform: scaleY(1);

		}

		.container .box1 .content .details{
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			padding: 15px;
			color: #fff;
		}

		.container .box1 .content .details h2{
			margin: 0;
			padding: 0;
			color: #ff0;
		}

		.container .box1 .content .details p{
			margin: 10px 0 0;
			padding: 0;
		}

		.container .box2{
			position: relative;
			width: 300px;
			height: 193px;
			background: #ff0;
			margin: 10px;
			box-sizing: border-box;
			display: inline-block;
		}

		.container .box2 .image{
			position: relative;
			overflow: hidden;
		}

		.container .box2 .image img{
			max-width: 100%;
			transition: transform 2s;
		}

		.container .box2:hover .image img{
			transform: scale(1.2);
		}

		.container .box2 .content{
			position: absolute;
			top: 10px;
			left: 10px;
			bottom: 10px;
			right: 10px;
			background: rgba(0,0,0,.8);
			transform: scaleY(0);
			transition: transform .5s;
		}

		.container .box2:hover .content{
			transform: scaleY(1);

		}

		.container .box2 .content .details{
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			padding: 15px;
			color: #fff;
		}

		.container .box2 .content .details h2{
			margin: 0;
			padding: 0;
			font-size: 20px;
		}

		.container .box2 .content .details p{
			margin: 10px 0 0;
			padding: 0;
		}

		.container .box3{
			position: relative;
			width: 300px;
			height: 225px;
			background: #ff0;
			margin: 10px;
			box-sizing: border-box;
			display: inline-block;
		}

		.container .box3 .image{
			position: relative;
			overflow: hidden;
		}

		.container .box3 .image img{
			max-width: 100%;
			transition: transform 2s;
		}

		.container .box3:hover .image img{
			transform: scale(1.2);
		}

		.container .box3 .content{
			position: absolute;
			top: 10px;
			left: 10px;
			bottom: 10px;
			right: 10px;
			background: rgba(0,0,0,.8);
			transform: scaleY(0);
			transition: transform .5s;
		}

		.container .box3:hover .content{
			transform: scaleY(1);

		}

		.container .box3 .content .details{
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			padding: 15px;
			color: #fff;
		}

		.container .box3 .content .details h2{
			margin: 0;
			padding: 0;
			font-size: 20px;
		}

		.container .box3 .content .details p{
			margin: 10px 0 0;
			padding: 0;
		}

		.container .box4{
			position: relative;
			width: 300px;
			height: 184px;
			background: #ff0;
			margin: 10px;
			box-sizing: border-box;
			display: inline-block;
		}

		.container .box4 .image{
			position: relative;
			overflow: hidden;
		}

		.container .box4 .image img{
			max-width: 100%;
			transition: transform 2s;
		}

		.container .box4:hover .image img{
			transform: scale(1.2);
		}

		.container .box4 .content{
			position: absolute;
			top: 10px;
			left: 10px;
			bottom: 10px;
			right: 10px;
			background: rgba(0,0,0,.8);
			transform: scaleY(0);
			transition: transform .5s;
		}

		.container .box4:hover .content{
			transform: scaleY(1);

		}

		.container .box4 .content .details{
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			padding: 15px;
			color: #fff;
		}

		.container .box4 .content .details h2{
			margin: 0;
			padding: 0;
			font-size: 20px;
		}

		.container .box4 .content .details p{
			margin: 10px 0 0;
			padding: 0;
		}

		.container .box5{
			position: relative;
			width: 300px;
			height: 169px;
			background: #ff0;
			margin: 10px;
			box-sizing: border-box;
			display: inline-block;
		}

		.container .box5 .image{
			position: relative;
			overflow: hidden;
		}

		.container .box5 .image img{
			max-width: 100%;
			transition: transform 2s;
		}

		.container .box5:hover .image img{
			transform: scale(1.2);
		}

		.container .box5 .content{
			position: absolute;
			top: 10px;
			left: 10px;
			bottom: 10px;
			right: 10px;
			background: rgba(0,0,0,.8);
			transform: scaleY(0);
			transition: transform .5s;
		}

		.container .box5:hover .content{
			transform: scaleY(1);

		}

		.container .box5 .content .details{
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			padding: 15px;
			color: #fff;
		}

		.container .box5 .content .details h2{
			margin: 0;
			padding: 0;
			font-size: 20px;
		}

		.container .box5 .content .details p{
			margin: 10px 0 0;
			padding: 0;
		}

		.container .box6{
			position: relative;
			width: 300px;
			height: 168px;
			background: #ff0;
			margin: 10px;
			box-sizing: border-box;
			display: inline-block;
		}

		.container .box6 .image{
			position: relative;
			overflow: hidden;
		}

		.container .box6 .image img{
			max-width: 100%;
			transition: transform 2s;
		}

		.container .box6:hover .image img{
			transform: scale(1.2);
		}

		.container .box6 .content{
			position: absolute;
			top: 10px;
			left: 10px;
			bottom: 10px;
			right: 10px;
			background: rgba(0,0,0,.8);
			transform: scaleY(0);
			transition: transform .5s;
		}

		.container .box6:hover .content{
			transform: scaleY(1);

		}

		.container .box6 .content .details{
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			padding: 15px;
			color: #fff;
		}

		.container .box6 .content .details h2{
			margin: 0;
			padding: 0;
			font-size: 20px;
		}

		.container .box6 .content .details p{
			margin: 10px 0 0;
			padding: 0;
		}
		.container .box7{
			position: relative;
			width: 300px;
			height: 168px;
			background: #ff0;
			margin: 10px;
			box-sizing: border-box;
			display: inline-block;
		}

		.container .box7 .image{
			position: relative;
			overflow: hidden;
		}

		.container .box7 .image img{
			max-width: 100%;
			transition: transform 2s;
		}

		.container .box7:hover .image img{
			transform: scale(1.2);
		}

		.container .box7 .content{
			position: absolute;
			top: 10px;
			left: 10px;
			bottom: 10px;
			right: 10px;
			background: rgba(0,0,0,.8);
			transform: scaleY(0);
			transition: transform .5s;
		}

		.container .box7:hover .content{
			transform: scaleY(1);

		}

		.container .box7 .content .details{
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			padding: 15px;
			color: #fff;
		}

		.container .box7 .content .details h2{
			margin: 0;
			padding: 0;
			font-size: 20px;
		}

		.container .box7 .content .details p{
			margin: 10px 0 0;
			padding: 0;
		}

		.container .box8{
			position: relative;
			width: 300px;
			height: 180px;
			background: #ff0;
			margin: 10px;
			box-sizing: border-box;
			display: inline-block;
		}

		.container .box8 .image{
			position: relative;
			overflow: hidden;
		}

		.container .box8 .image img{
			max-width: 100%;
			transition: transform 2s;
		}

		.container .box8:hover .image img{
			transform: scale(1.2);
		}

		.container .box8 .content{
			position: absolute;
			top: 10px;
			left: 10px;
			bottom: 10px;
			right: 10px;
			background: rgba(0,0,0,.8);
			transform: scaleY(0);
			transition: transform .5s;
		}

		.container .box8:hover .content{
			transform: scaleY(1);

		}

		.container .box8 .content .details{
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			padding: 15px;
			color: #fff;
		}

		.container .box8 .content .details h2{
			margin: 0;
			padding: 0;
			font-size: 20px;
		}

		.container .box8 .content .details p{
			margin: 10px 0 0;
			padding: 0;
		}
	</style>
	<center>
		<h1 style="padding-top: 30px; color: #ff0; font-family: sans-serif;">Welcome to Gallery</h1>
		<p><a href="http://localhost/projek1/start.html" style="color: red"> Klik Untuk Kembali</p>
	</center>
	<div class="container">
		<div class="box1">
			<div class="image">
				<img src="jogja1.jpg">
			</div>
			<div class="content">
				<div class="details">
				<h2><a href="http://localhost/projek1/latihan_upload/jogja.php" style="color: #ff0"> Kota Yogyakarta</a></h2>
				<p>Adalah ibu kota dan pusat pemerintahan Provinsi Daerah Istimewa Yogyakarta, Indonesia.</p>
				</div>
			</div>
		</div>
		<div class="box2">
			<div class="image">
				<img src="solo1.jpeg">
			</div>
			<div class="content">
				<div class="details">
				<h2><a href="http://localhost/projek1/upload_solo/solo.php" style="color: #ff0"> Kota Solo</a></h2>
				<p>Disebut juga Kota Surakarta, adalah wilayah otonom dengan status Kota di bawah Provinsi Jawa Tengah, Indonesia.</p>
				</div>
			</div>
		</div>
		<div class="box3">
			<div class="image">
				<img src="karanganyar1.jpg">
			</div>
			<div class="content">
				<div class="details">
				<h2><a href="http://localhost/projek1/upload_karanganyar/kra.php" style="color: #ff0"> Kabupaten Karanganyar</a></h2>
				<p>Adalah salah satu kabupaten di Provinsi Jawa Tengah, Indonesia. Pusat administrasinya berlokasi di Karanganyar Kota, sekitar 14 km sebelah timur Kota Surakarta.</p>
				</div>
			</div>
		</div>
		<div class="box4">
			<div class="image">
				<img src="semarang1.jpg">
			</div>
			<div class="content">
				<div class="details">
				<h2><a href="http://localhost/projek1/upload_semarang/semarang.php" style="color: #ff0"> Kota Semarang</a></h2>
				<p>Adalah ibu kota Provinsi Jawa Tengah, Indonesia sekaligus kota metropolitan terbesar kelima di Indonesia setelah Jakarta, Surabaya, Medan, dan Bandung.</p>
				</div>
			</div>
		</div>
		<div class="box5">
			<div class="image">
				<img src="bandung1.jpg">
			</div>
			<div class="content">
				<div class="details">
				<h2><a href="http://localhost/projek1/upload_bdg/bdg.php" style="color: #ff0"> Kota Bandung</a></h2>
				<p>Adalah kota metropolitan terbesar di Provinsi Jawa Barat, Indonesia sekaligus menjadi ibu kota provinsi tersebut. Dan merupakan kota terbesar di wilayah Pulau Jawa bagian selatan.</p>
				</div>
			</div>
		</div>
		<div class="box6">
			<div class="image">
				<img src="seoul1.jpg">
			</div>
			<div class="content">
				<div class="details">
				<h2><a href="http://localhost/projek1/upload_seoul/seoul.php" style="color: #ff0"> Kota Seoul</a></h2>
				<p>Adalah ibu kota Korea Selatan yang telah berusia >600 tahun dan hingga tahun 1945 Seoul merupakan ibu kota dari seluruh wilayah Korea.</p>
				</div>
			</div>
		</div>
		<div class="box7">
			<div class="image">
				<img src="busan1.jpeg">
			</div>
			<div class="content">
				<div class="details">
				<h2><a href="http://localhost/projek1/upload_busan/busan.php" style="color: #ff0"> Kota Busan</a></h2>
				<p>Disebut juga Pusan yang sekarang namanya resmi menjadi Kota Metropolitan Busan. Memiliki populasi terbanyak kedua di Korea Selatan setelah Seoul.</p>
				</div>
			</div>
		</div>
		<div class="box8">
			<div class="image">
				<img src="itaewon1.jpg">
			</div>
			<div class="content">
				<div class="details">
				<h2><a href="http://localhost/projek1/upload_itaewon/itaewon.php" style="color: #ff0"> Itaewon</a></h2>
				<p>Adalah sebuah pemukiman (dong) di distrik Yongsan-gu, Kota Seoul, Korea Selatan.</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>