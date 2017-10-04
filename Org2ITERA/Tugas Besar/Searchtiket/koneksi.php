<?php
$host = “localhost”;
$username = “root”;
$password = “”;
$db = “ticketing”; //Nama databasenya
$db_link = mysqli_connect($host,$username,$password,$db);
// Beri kondisi jika Database Connect
if (!$db_link){
echo “koneksi gagal”;
}
?>