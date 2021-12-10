<?php
$password = "";
$nama_data_base="pendaftaran";

$koneksi= mysqli_connect("localhost", "root", $password, $nama_data_base);

if (!$koneksi){
    die('gagal melakukan koneksi');
}
?>