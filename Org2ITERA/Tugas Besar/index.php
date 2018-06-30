<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> 
	<link rel="stylesheet" href="css/style.css"> 
	<link rel="stylesheet" href="css/kanankiri.css"> 
	<script src="js/modernizr.js"></script> 
    <script src="js/jquery-2.1.1.js"></script>
    
    <script src="dist/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="dist/sweetalert.css">
    
	<title>Helpdesk Informatika</title>
</head>
<body>

 <?php
 include "conn.php";
 
			if(isset($_POST['input'])){
			 
				$id_tiket  = $_POST['id_tiket'];
				$tanggal   = $_POST['tanggal'];
				$pc_no     = $_POST['pc_no'];
                $nama      = $_POST['nama'];
                $email     = $_POST['email'];
                $departemen= $_POST['departemen'];
                $problem   = $_POST['problem'];
                $none      = "";
                $open      = "open";
                
    $laporan="<h4><b>Tiket Baru : $id_tiket</b></h4>";
    $laporan .="<br/>";
	$laporan .="<table width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"3\" cellspacing=\"0\">";
	$laporan .="<tr>";
	$laporan .="<td>Tanggal</td><td>:</td><td>$tanggal</td>";
	$laporan .="</tr>";
    $laporan .="<tr>";
	$laporan .="<td>PC NO</td><td>:</td><td>$pc_no</td>";
	$laporan .="</tr>";
    $laporan .="<tr>";
	$laporan .="<td>Nama</td><td>:</td><td>$nama</td>";
	$laporan .="</tr>";
    $laporan .="<tr>";
	$laporan .="<td>Departemen</td><td>:</td><td>$departemen</td>";
	$laporan .="</tr>";
    $laporan .="<tr>";
	$laporan .="<td>Problem</td><td>:</td><td>$problem</td>";
	$laporan .="</tr>";
    $laporan .="<tr>";
	$laporan .="<td>Status/td><td>:</td><td>$open</td>";
	$laporan .="</tr>";
    
                
    require_once("phpmailer/class.phpmailer.php");
    require_once("phpmailer/class.smtp.php");
    
    $sendmail = new PHPMailer();
    $sendmail->setFrom('hakkobiorichard@outlook.com','IT Helpdesk Tiket'); //email pengirim
    $sendmail->addReplyTo('hakkobiorichard@outlook.com','Hakko Bio Richard'); //email replay
    $sendmail->addAddress("$email","$nama"); //email tujuan
    //$sendmail->AddBCC("$email");
    $sendmail->Subject = "Tiket IT Helpdesk $id_tiket"; //subjek email
    $sendmail->Body=$laporan; //isi pesan dalam format laporan
    $sendmail->isHTML(true);
	if(!$sendmail->Send()) 
	{
		echo "Email gagal dikirim : " . $sendmail->ErrorInfo;  
	} 
	else 
	{ 
		//echo "Email berhasil terkirim!";  
	
				
				$cek = mysqli_query($koneksi, "SELECT * FROM tiket WHERE id_tiket='$id_tiket'");
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($koneksi, "INSERT INTO tiket(id_tiket, tanggal, pc_no, nama, email, departemen, problem, penanganan, status)
															VALUES('$id_tiket','$tanggal','$pc_no','$nama','$email','$departemen','$problem','$none','$open')") or die(mysqli_error());
						if($insert){
							echo '<script>sweetAlert({
	                                                   title: "Berhasil!", 
                                                        text: "Tiket Berhasil di kirim, tunggu IT datang!", 
                                                        type: "success"
                                                        });</script>';
						}else{
							echo '<script>sweetAlert({
	                                                   title: "Gagal!", 
                                                        text: "Tiket Gagal di kirim, silahakan coba lagi!", 
                                                        type: "error"
                                                        });</script>';
						}
				}else{
					echo '<script>sweetAlert({
	                                                   title: "Gagal!", 
                                                        text: "Tiket Sudah ada Sebelumnya!", 
                                                        type: "error"
                                                        });</script>';
				}
            }
		}
			?>
	<div id="kiri">
	<form class="cd-form floating-labels" method="POST" action="index.php">
		<fieldset>
			<legend>Helpdesk Informatika</legend>
            
            
            <li>Isi Ticket dengan baik agar jelas informasinya.</li><br />
            <li>Ticket diselesaikan oleh admin berdasarkan urutan antrian.</li><br />
            <li>Ticket tidak akan diproses jika ada informasi yang tidak valid</li><br />

			
            <input type="hidden" name="id_tiket" value="<?php echo date("dmYHis"); ?>" id="id_ticket"/>
            <input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>" id="tanggal"/>
			
			<div class="icon">
				<label class="cd-label" for="pc_no">NIM</label>
				<input class="company" type="text" name="pc_no" id="pc_no" autocomplete="off" required="required">
		    </div> 

		    <div class="icon">
		    	<label class="cd-label" for="nama">Nama</label>
				<input class="user" type="text" name="nama" id="nama" autocomplete="off" required="required">
		    </div> 
            
			
            <div class="icon">
		    	<label class="cd-label" for="nama">Email</label>
				<input class="email" type="email" name="email" id="email" autocomplete="off" required="email">
		    </div> 

		
				
		    <div class="icon">
		    	<label class="cd-label" for="cd-email">Departemen</label>
				<select class="email" name="departemen" id="departemen" required>
                <option value=""></option>
                <option value="PPIC">PPIC</option>
                <option value="Engineering">Engineering</option>
                <option value="Maintenance">Maintenance</option>
                <option value="Accounting">Accounting</option>
                <option value="HRD & GA">HRD & GA</option>
                <option value="Injection">Injection</option>
                <option value="QC">QC</option>
                <option value="Press">Press</option>
                <option value="Printing">Printing</option>
                </select>
		    </div>
            
            <div class="icon">
				<label class="cd-label" for="cd-textarea">Problem / Case</label>
      			<textarea class="message" name="problem" id="problem" required></textarea>
			</div>
            
           	<div>
            <a href="datatiket.php">Data Ticket</a>
		      	<input type="submit" onclick="notifikasi()" name="input" id="input" value="Send Message">
		    </div>
			
				
				
		</fieldset>
	</form>
	</div>
	
	<div id="kanan">
	<form class="cd-form floating-label" method="POST" action="index.php">
		<fieldset>
		<div class="icon">
				<label class="cd-label" for="id_ticket">Search Ticket</label>
				<input class="search" type="text" name="id_ticket" id="id_ticket" autocomplete="off" required="required">
				
				<div>
				<input type="submit" onclick="notifikasi()" name="input" id="input" value="Search Ticket">
				
		</fieldset>
	</form>
	</div>
	</div>
<br /><br />
<script src="js/main.js"></script> <!-- Resource jQuery -->

           <!-- <script>
  sweetAlert("Hello world!");
  </script> --> 
  
<script>
            $(document).ready(function() {
                  if (Notification.permission !== "granted")
                    Notification.requestPermission();
            });
             
            function notifikasi() {
                if (!Notification) {
                    alert('Browsermu tidak mendukung Web Notification.'); 
                    return;
                }
                if (Notification.permission !== "granted")
                    Notification.requestPermission();
                else {
                    var notifikasi = new Notification('IT Helpdesk Tiket', {
                        icon: 'img/logo.jpg',
                        body: "Tiket Baru dari <?php echo $nama; ?>",
                    });
                    notifikasi.onclick = function () {
                        window.open("http://tsuchiya-mfg.com");      
                    };
                    setTimeout(function(){
                        notifikasi.close();
                    }, 1000);
                }
            };
</script>
</body>
</html>