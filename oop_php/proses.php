<?php
include('koneksi.php');
$konek = new koneksi();
require_once './helper/fungsi-validasi.php';

$peraturan = [
    'no_kk' => ['required','numeric'],
    'nik' => ['required', 'numeric'],
    'nama_lengkap' => ['required'],
    'tgl_lahir' => ['required'],
    'no_rt' => ['required', 'numeric']
];

$errors = validasi($peraturan);

if (count($errors) > 0) {
    $old = $_REQUEST;
    $queryString = http_build_query([
        'errors' => $errors,
        'old' => $old
    ]);
    
    header("Location: tambah_data.php?{$queryString}");
    die();
}
else
{
	$konek->tambah($_POST['no_kk'],$_POST['nik'],$_POST['nama_lengkap'],$_POST['jk'],$_POST['tgl_lahir'],$_POST['id_stat_hbkel'],$_POST['no_rt']);
	header('location:tambah.php');
}
