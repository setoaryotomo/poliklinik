<?php
include '../../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nama_poli = $_POST["nama_poli"];
    $keterangan = $_POST["keterangan"];

    $check = "SELECT * FROM poli WHERE nama_poli = '$nama_poli'";
    $data = mysqli_query($mysqli,$check);

    if (mysqli_num_rows($data)>0) {
        echo '<script>alert("Poli sudah ada");window.location.href = "../../poli.php";</script>';
    }
    else {
            $query = "INSERT INTO poli (nama_poli, keterangan) VALUES ('$nama_poli', '$keterangan')";
            

            if (mysqli_query($mysqli, $query)) {
                
                echo '<script>';
                echo 'alert("Data poli berhasil ditambahkan!");';
                echo 'window.location.href = "../../poli.php";';
                echo '</script>';
                exit();
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
            }
    }
}

mysqli_close($mysqli);
?>