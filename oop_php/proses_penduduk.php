
<?php 
include('koneksi.php');
$konek = new koneksi();

$action = $_GET['action'];
if($action=="update")
{
	$konek->update($_POST['no_kk'],$_POST['nik'],$_POST['nama_lengkap'],$_POST['jk'],$_POST['tgl_lahir'],$_POST['id_stat_hbkel'],$_POST['no_rt'],$_POST['id_penduduk']);
	header('location:tampil_data.php');
}
elseif($action=="delete")
{
	$id_penduduk = $_GET['id'];
	$konek->delete($id_penduduk);
	header('location:tampil_data.php');
}

?>