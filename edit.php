<?php 
include 'koneksi.php';

// $id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$tpb = $_POST['tpb'];
$tgl = $_POST['tgl'];

if (!($nama=='' || $nim=='' || $tpb=='' || $tgl=='')) {
	$sql = mysqli_query($koneksi,"UPDATE pendaftaran SET nama ='$nama', tpb ='$tpb', tgl ='$tgl' WHERE nim ='$nim' ");
}

if($sql){
	$result['status'] = "1";
	$result['msg'] = "sukses Ubah Data";
}else{
	$result['status'] = "0";
	$result['msg'] = "gagal Ubah Data";
}
echo json_encode($result);


?>