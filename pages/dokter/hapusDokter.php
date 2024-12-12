<?php
include("../../config/koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id = $_POST["id"];

    $query = "DELETE FROM dokter WHERE id = $id";

    // Eksekusi query
    if (mysqli_query($mysqli, $query)) {
       
        echo '<script>';
        echo 'alert("Data dokter berhasil dihapus!");';
        echo 'window.location.href = "../../dokter.php";';
        echo '</script>';
        exit();
    } else {
        // pesan error
        echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
    }
}

// Tutup koneksi
mysqli_close($mysqli);
?>