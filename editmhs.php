<h1>Ubah Data</h1>
<table>
   <form method="post">
      <?php
         include "koneksi.php";
         $npm = $_GET["n"];
         $sql = "SELECT * FROM tblmhs WHERE npm = '$npm'";
         $exe = mysqli_query($mysqli, $sql);
         while($fet=mysqli_fetch_assoc($exe)) {
      ?>
         <tbody>
            <tr>
            <th>NPM</th>
               <td><input type="text" class="form-control" name="tnpm" value="<?php echo $fet['npm']; ?>"></td>
            </tr>
            <tr>
            <th>Nama</th>
               <td><input type="text" class="form-control" name="tnama" value="<?php echo $fet['nama']; ?>"></td>
            </tr>
            <tr>
            <th>alamat</th>
               <td><input type="text" class="form-control" name="talamat" value="<?php echo $fet['alamat']; ?>"></td>
            </tr>
            <tr>
            <th>No Telp</th>
               <td><input type="text" class="form-control" name="tnotelp" value="<?php echo $fet['no_telp']; ?>"></td>
            </tr>
            <tr>
               <td colspan="2">
               <a href="tampilmhs.php"><button type="button">Back</button></a>
               <input type="submit" name="submit" class="btn btn-sm btn-primary pull-right" value="Update">
               </td>
            </tr>
         </tbody>
      <?php 
      }             
      ?>
   </form>
</table>
      <?php
         if(isset($_REQUEST['submit'])) {
            $npm   = $_POST['tnpm'];
            $nama   = $_POST['tnama'];
            $alamat   = $_POST['talamat'];
            $no_telp   = $_POST['tnotelp'];
            $sql   = "UPDATE tblmhs SET nama = '$nama',  alamat = '$alamat',  no_telp = '$no_telp' WHERE npm='$npm'";
            $result   = mysqli_query($mysqli, $sql);
            
            if($result) {
               echo "Data updated successfully!";
            } else {
               echo "Error : " . mysqli_error($mysqli);
            }
         }

         $result = mysqli_query($mysqli, "SELECT * FROM tblmhs");
        
         echo "<table width='100%' border=1>";
         echo "<tr>";
         echo "<th>NPM</th> <th>Nama</th> <th>Alamat</th> <th>No Telepon</th>";
         echo "</tr>";
            while($user_data = mysqli_fetch_array($result)) {         
                echo "<tr>";
                echo "<td>".$user_data['npm']."</td>";
                echo "<td>".$user_data['nama']."</td>";
                echo "<td>".$user_data['alamat']."</td>";  
                echo "<td>".$user_data['no_telp']."</td></tr>";  
            }
         echo"</table>";
         ?>