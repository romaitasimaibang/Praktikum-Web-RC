<?php 
include 'koneksi.php';

$nim = $_POST['nim'];
$sql = mysqli_query($koneksi,"DELETE FROM pendaftaran WHERE nim = '$nim' ");
if($sql){
	$result['status'] = "1";
	$result['msg'] = "sukses Menambah Data";
}else{
	$result['status'] = "0";
	$result['msg'] = "gagal Menambah Data";
}
echo json_encode($result);

?>