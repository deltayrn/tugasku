<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include "config.php";

// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST

$nama_id = $_POST['nama_id'];
$tgl_lahir = $_POST['tgl_lahir'];
$sex = $_POST['sex'];
$jabatan = $_POST['jabatan'];
$mulai_kerja = $_POST['mulai_kerja'];
// perintah SQL
$query="INSERT INTO karyawan (nama_id, tgl_lahir, sex, jabatan, mulai_kerja ) VALUES ('$nama_id' ,' $tgl_lahir','$sex','$jabatan','$mulai_kerja') " ;

$hasil=$conn->query($query);

$_SESSION['alert'] = true;
if ($hasil){
	$_SESSION['alert_class'] = 'success';
	$_SESSION['alert_text'] = 'Tambah Data Berhasil';
} else {
	$_SESSION['alert_class'] = 'danger';
	$_SESSION['alert_text'] = 'Tambah Data Gagal';
}
header("Location:index.php");

?>