<html>  
<head>  
    <title>Gallery</title>  
</head>  
<body>  
    <?php  
    //koneksi ke database  
    $conn = mysql_connect('localhost', 'userdb', 'password');  
    mysql_select_db('galeri');  
    //membaca data dari database  
    $result = mysql_query("select * from foto");  
    //menampilkan foto  
    ?>  
    <table>  
        <tr>  
        <?php  
        $i = 1;  
        while($row = mysql_fetch_array($result)){  
        ?>  
            <td>  
                <a href="upload/<?php echo $row['nama_file'];?>">  
                <img src="upload/<?php echo $row['nama_file'];?>" alt="" width="200" border="0"/>  
                </a>  
                <br/><?php echo $row['deskripsi'];?>  
            </td>  
        <?php  
            if($i % 3 == 0){  
                echo '</tr><tr>';  
            }  
            $i++;  
        }  
        ?>  
        </tr>  
    </table>  
</body>  
</html>