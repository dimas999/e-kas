<?php
require 'connect.php';

$id_kelas         = $_POST['id_kelas'];
$nama             = $_POST['nama'];
$nominal_uang_kas = $_POST['nominal_uang_kas'];
$deskripsi        = $_POST['deskripsi'];

if ( !empty($nama) && !empty($nominal_uang_kas) && !empty($deskripsi) ) {

    $query = mysqli_query($conn, "UPDATE kelas SET nama='$nama', nominal_uang_kas='$nominal_uang_kas',deskripsi='$deskripsi'
  WHERE id_kelas='$id_kelas'");
    if ( $query == TRUE ) {
        echo "Berhasil mengubah data kelas<br>Kembali ke<a href='admin.php?page=kelas'>halaman kelas</a>";
    } else {
        echo('Gagal mengubah data!').mysqli_error($conn);
    }
        
} else {
    die('Tidak boleh ada data yang kosong!');
}

?>