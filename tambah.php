<?php 
include 'koneksi.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$tpb = $_POST['tpb'];
$= $_POST['tgl'];

if(!($nama=='' || $nim=='' || $tpb=='' || $tgl=='')){
	$sql = mysqli_query($koneksi,"INSERT INTO pendaftaran VALUES('$nama','$nim','$tpb','$tgl')");
}

if($sql){
	$result['status'] = "1";
	$result['msg'] = "sukses menambah Data";
}else{
	$result['status'] = "0";
	$result['msg'] = "gagal menambah Data";
}
echo json_encode($result);

?>