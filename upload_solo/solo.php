<html>
<head>
  <title>Solo</title>
</head>
<body>
  <style type="text/css">
    *{
      margin: 0;
      padding: 0;
      font-family: cursive;
    }

    header{
      background-image: url(hijau.jpg);
      height: 100vh;
      background-size: cover;
      background-position: center;
    }

    .body{
      background-image: url(hijau.jpg);
      height: 100vh;
      background-size: cover;
      background-position: center;
      color: white;
      padding-left: 20px;
    }
  </style>
  <header>
  <center>
    <br><br>
    <h1>Galeri Solo</h1><hr>
    <br><br>
    <a href="form1.php">Klik Untuk Tambah Gambar</a><br><br>
    <a href="http://localhost/projek1/gallery1.php">Klik Untuk Kembali</a><br><br>
    <table border="2" cellpadding="80">
    <tr>
      <th>Gambar</th>
      <th>Nama File</th>
      <th>Ukuran File</th>
      <th>Tipe File</th>
    </tr>
<?php

  // Load file koneksi.php
  include "koneksi.php";
  $query = "SELECT * FROM gambar"; // Tampilkan semua data gambar
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
  if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
      echo "<tr>";
      echo "<td><img src='images/".$data['nama']."' width='300' height='200'></td>";
      echo "<td>".$data['nama']."</td>";
      echo "<td>".$data['ukuran']."</td>";
      echo "<td>".$data['tipe']."</td>";
      echo "</tr>";
    }
  }
  else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
  }
?>
    </table>
  </center>
  </header>
</body>
</html>