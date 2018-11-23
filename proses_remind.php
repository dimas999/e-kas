<?php
session_start();
require 'connect.php';
require 'modules/db.php';

if ( isset($_GET['data']) ) {
    $data = $_GET['data'];
}

$siswa_telat = query("SELECT siswa.nama, siswa.no_hp FROM siswa INNER JOIN kelas ON siswa.id_kelas = kelas.id_kelas WHERE siswa.id_kelas = '{$_SESSION['id_kelas']}' AND siswa.id_siswa NOT IN ('{$data}')");
foreach($siswa_telat as $siswa):
    echo $siswa['nama']."<br>";
    echo $siswa['no_hp']."<br>";
endforeach;