<?php
include ("conn.php");
date_default_timezone_set('Asia/Jakarta');

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username) && empty($password)) {
	header('');
} else if (empty($username)) {
	header('');
} else if (empty($password)) {
	header('');
}

$q = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");
$row = mysqli_fetch_array ($q);

if (mysqli_num_rows($q) == 1) {
    $_SESSION['user_id'] = $row['user_id'];
	$_SESSION['username'] = $username;
	$_SESSION['fullname'] = $row['fullname'];
	$_SESSION['level'] = $row['level'];

	header('location:admin/index.php');
} else {
	header('');
}
?>