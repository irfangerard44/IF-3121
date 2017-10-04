<?php
include “koneksi.php”;
?>
<html>
<head>
<title> Pencarian </title>
</head>
<body>
<form method=”post”>
<input type=”text” name=”nt” placeholder=”cari….”/>
<input type=”submit” name=”cari2″ value=”cari”>
</form>
<table border=”1″ cellpadding=”5″ cellspacing=”5″>
<tr>
<th> No </th>
<th> id_tiket </th>
<th> nim </th>
<th> nama </th>
<th> email </th>
<th> prodi </th>
<th> problem </th>
</tr>
<?php
// jika belum di cari
if (!isset($_POST[‘cari2’])){
$no = 1;
$sql = “select * from tiket”;  // mengambil semua inputan
$query = mysqli_query($db_link,$sql);
while ($data = mysqli_fetch_array($query)){
?>
<tr>
<th><?php echo $no;?></th>
<th width=”20%”><?php echo $data[‘id_tiket’];?></th>
<th width=”20%”><?php echo $data[‘nim’];?></th>
<th width=”20%”><?php echo $data[‘nama’];?></th>
<th width=”20%”><?php echo $data[‘email’];?></th>
<th width=”20%”><?php echo $data[‘prodi’];?></th>
<th width=”20%”><?php echo $data[‘problem’];?></th>
</tr>
<?php
$no++;
}}
if(isset($_POST[‘cari2’])){
$no = 1;
$cari = $_POST[‘nt’];
$sql = “select * from tiket where id_tiket like ‘%$cari%’ or nim like ‘%$cari%’ or nama like ‘%$cari%’ or email like ‘%$cari%’or prodi like ‘%$cari%’ or problem like ‘%$cari%’”;
$query = mysqli_query($db_link,$sql);
while ($data = mysqli_fetch_array($query)){
?>
<tr>
<th><?php echo $no;?></th>
<th><?php echo $data[‘id_tiket’];?></th>
<th><?php echo $data[‘nim’];?></th>
<th><?php echo $data[‘nama’];?></th>
<th><?php echo $data[‘email’];?></th>
<th><?php echo $data[‘prodi’];?></th>
<th><?php echo $data[‘problem’];?></th>
<?php
$no++;
}}
?>
</tr>
</table>
</body>
</html>