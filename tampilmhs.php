<?php
    include "koneksi.php";
    $result = mysqli_query($mysqli, "SELECT * FROM tblmhs");
?>

<html>
<head>
    <style>
        body{
            margin: 5%;
            text-align: justify;
        }

        body table{
            margin-left: auto;
            margin-right: auto;
        }

        body tr{
            margin-left: auto;
            margin-right: auto;
        }
    </style>    
    <title>Homepage</title>
</head>
 
<body>
    <center><h1>Welcome</h1></center>
    <table width='60%' border=1>
        <tr>
            <th>NPM</th> <th>Nama</th> <th>Alamat</th> <th>No Telepon</th> <th>Aksi</th>
        </tr>
            <?php
            while($user_data = mysqli_fetch_array($result)) {         
                echo "<tr>";
                echo "<td>".$user_data['npm']."</td>";
                echo "<td>".$user_data['nama']."</td>";
                echo "<td>".$user_data['alamat']."</td>";  
                echo "<td>".$user_data['no_telp']."</td>";  
                echo "<td><a href='editmhs.php?n=".$user_data['npm']."'>Edit</a>" ; 
                echo "<a href='deletemhs.php?n=".$user_data['npm']."'>Delete</a></td></tr>"; 
            }
            ?>
    </table>
    <br><br>
    <tr>
        <td>
            <a href="addmhs.php"><button type="button">Tambah Baru</button></a>
        </td>
    </tr>
</body>
</html>
