<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include "config.php";

$id = $_POST['emp_id'];
$query = "
	DELETE FROM
		`karyawan`
	WHERE
		`no_id` = '$id'
";

$hasil=$conn->query($query);

$_SESSION['alert'] = true;
if ($hasil){
	$_SESSION['alert_class'] = 'success';
	$_SESSION['alert_text'] = 'Hapus Data Berhasil';
} else {
	$_SESSION['alert_class'] = 'danger';
	$_SESSION['alert_text'] = 'Hapus Data Gagal';
}
header("Location:index.php");
?>