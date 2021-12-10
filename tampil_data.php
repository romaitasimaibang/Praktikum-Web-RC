<?php 
include 'koneksi.php';
$nim = $_POST['nim'];
$sql = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE nim = '$nim' ");
$result = mysqli_fetch_array($sql);
$result['nim'] = $nim;
echo json_encode($result);
?>