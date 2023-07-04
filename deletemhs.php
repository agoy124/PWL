<?php
    include "koneksi.php";
    
    // Memeriksa apakah parameter 'npm' ada dalam URL
    if (isset($_GET['n'])) {
        $npm = $_GET['n'];
        
        // Menghapus baris data pengguna dari tabel berdasarkan id yang diberikan
        $result = mysqli_query($mysqli, "DELETE FROM tblmhs WHERE npm='$npm'");
        
        if ($result) {
            echo "Data terhapus.\n";
            echo "<a href='tampilmhs.php'>Kembali</a>";
        } else {
            echo "Terjadi kesalahan saat menghapus data.";
        }
    } else {
        echo "Parameter 'npm' tidak ditemukan dalam URL.";
    }
?>
