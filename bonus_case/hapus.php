<?php
    include "koneksi.php";

    $kode = $_GET['kode'];

    $sql = "DELETE FROM instansi WHERE kode = '$kode'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        echo "
            <script>
                alert('Data telah berhasil dihapus!');
                window.location.href = 'list_instansi.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal dihapus!');
                window.location.href = 'list_instansi.php';
            </script>
        ";
    }
?>