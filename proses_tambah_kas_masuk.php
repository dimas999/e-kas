<?php
session_start();
require'connect.php';
require 'modules/db.php';

$id_kas    = $_POST['id_kas'];
$id_siswa_all = $_POST['id_siswa'];
$jumlah   = $_POST['jumlah'];
$keterangan=$_POST['keterangan'];
$tanggal_masuk = $_POST['tanggal_masuk'];


foreach($id_siswa_all as $id_siswa):
$query=mysqli_query($conn,"INSERT INTO kas_masuk VALUES (
'',
'$id_kas',
'$id_siswa',
'$jumlah',
'$keterangan',
'$tanggal_masuk'
)");

if($query==TRUE){
    updateUangKas();
    echo'berhasil menambahkan data uang kas';
}else{
    echo'gagal menambahkan data uang kas'.mysqli_error($conn);
}
endforeach;
echo'<a href="admin.php?page=kas_masuk">Kembali</a>';
