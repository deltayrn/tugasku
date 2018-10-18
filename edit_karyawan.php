<?php
session_start();
// error_reporting(E_ALL ^ E_NOTICE);
include "config.php";

$nama_id = $_POST['emp_nama'];
$tgl_lahir = $_POST['emp_tgl_lhr'];
$sex = $_POST['emp_gender'];
$jabatan = $_POST['emp_jabatan'];
$mulai_kerja = $_POST['emp_mulai_kerja'];
$id = $_POST['emp_id'];

$query = "
	UPDATE
		`karyawan`
	SET
		`nama_id` = '$nama_id',
		`tgl_lahir` = '$tgl_lahir',
		`sex` = '$sex',
		`jabatan` = '$jabatan',
		`mulai_kerja` = '$mulai_kerja'
	WHERE
		`no_id` = '$id'
";

$hasil=$conn->query($query);

$_SESSION['alert'] = true;
if ($hasil){
	$_SESSION['alert_class'] = 'success';
	$_SESSION['alert_text'] = 'Update Berhasil';
} else {
	$_SESSION['alert_class'] = 'danger';
	$_SESSION['alert_text'] = 'Update Gagal';
}
header("Location:index.php");
?>