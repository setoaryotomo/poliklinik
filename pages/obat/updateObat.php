<?php
include("../../config/koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id = $_POST["id"];
    $nama_obat = $_POST["nama_obat"];
    $kemasan = $_POST["kemasan"];
    $harga = $_POST["harga"];


    $query = "UPDATE obat SET 
        nama_obat = '$nama_obat', 
        kemasan = '$kemasan', 
        harga = '$harga' 
        WHERE id = '$id'";

   
    if (mysqli_query($mysqli, $query)) {
       
        echo '<script>';
        echo 'alert("Data obat berhasil diubah!");';
        echo 'window.location.href = "../../obat.php";';
        echo '</script>';
        exit();
    } else {
       
        echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
    }
}

// Tutup koneksi
mysqli_close($mysqli);
?>