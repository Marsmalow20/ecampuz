<?php
    include "koneksi.php";

    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE instansi SET nama = '$nama', alamat = '$alamat' WHERE kode = '$kode'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        echo "
            <script>
                alert('Data telah berhasil diubah!');
                window.location.href = 'list_instansi.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
                window.location.href = 'edit_instansi.php?kode=" . $kode . "';
            </script>
        ";
    }
?>