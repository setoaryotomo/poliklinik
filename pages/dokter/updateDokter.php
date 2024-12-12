<?php
include("../../config/koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $no_hp = $_POST["no_hp"];
    $poli = $_POST["poli"];

    $query = "UPDATE dokter SET 
        nama = '$nama', 
        alamat = '$alamat',
        no_hp = '$no_hp',
        id_poli = $poli
        WHERE id = '$id'";

    // Eksekusi query
    if (mysqli_query($mysqli, $query)) {
        
        echo '<script>';
        echo 'alert("Data dokter berhasil diubah!");';
        echo 'window.location.href = "../../dokter.php";';
        echo '</script>';
        exit();
    } else {
     
        echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
    }
}


mysqli_close($mysqli);
?>