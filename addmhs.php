<?php
    include "koneksi.php";
?>
<style>
    table{
        text-align: left;
    }
</style>
<table>
<form action="#" method="post">
    <tr>
        <th>NPM</th>
            <td><input type="text" class="form-control" name="tnpm"></td>
    </tr>
    <tr>
        <th>Nama</th>
            <td><input type="text" class="form-control" name="tnama"></td>
    </tr>
    <tr>
        <th>alamat</th>
            <td><input type="text" class="form-control" name="talamat"></td>
    </tr>
    <tr>
        <th>No Telp</th>
            <td><input type="text" class="form-control" name="tnotelp"></td>
    </tr>
    <tr>
        <td colspan="2">
            <a href="tampilmhs.php"><button type="button">Back</button></a>
            <input type="submit" name="bok" class="btn btn-sm btn-primary pull-right" value="Simpan">
        </td>
    </tr>
</form>
</table>

<?php
if(isset($_POST['bok'])) {
     $npm = $_POST['tnpm'];
     $nama = $_POST['tnama'];
     $alamat = $_POST['talamat'];
     $no_telp = $_POST['tnotelp'];
     
     // include database connection file
     include_once("koneksi.php");
             
     // Insert user data into table
     $result = mysqli_query($mysqli, "insert into tblmhs(npm, nama, alamat, no_telp) VALUES('$npm','$nama','$alamat','$no_telp')");
     
     // Show message when user added
     echo "User added successfully. <a href='tampilmhs.php'>Lihat Tampilan</a>";
 }
 ?>