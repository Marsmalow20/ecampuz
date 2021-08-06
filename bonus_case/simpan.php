<?php
    include "koneksi.php";

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO instansi VALUES('', '$nama', '$alamat')";
    $query = mysqli_query($con, $sql);

    if ($query) {
        echo "
            <script>
                alert('Data telah berhasil ditambahkan!');
                window.location.href = 'list_instansi.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
                window.location.href = 'tambah_instansi.php';
            </script>
        ";
    }
?>