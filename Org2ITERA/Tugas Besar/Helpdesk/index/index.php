<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/homepage.css"></link>
	<link rel="stylesheet" href="css/reset.css"> 
	<link rel="stylesheet" href="css/style.css"> 
	<link rel="stylesheet" href="css/kanankiri.css"> 
	<!--script src="js/modernizr.js"></script--> 
    <script src="js/jquery-2.1.1.js"></script>
    
    <script src="dist/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="dist/sweetalert.css">
    
	<title>Helpdesk Informatika</title>
</head>
<body>
<header>
		<h1 class="judul">HELPDESK</h1>
		 &nbsp;
		<p class="deskripsi">"Institut Teknologi Sumatera"</p>
	</header>
	<!-- akhir bagian header template -->
	
	<div class="wrap">
		<!-- bagian menu		 -->
		<nav class="menu">
			<ul>
				<li>
					<a href="#">LOGIN</a>
				</li>
				<li>
					<a href="#">Create Ticket</a>
				</li>
				<li>
					<a href="#">Search Ticket</a>
				</li>
				<li>
					<a href="#">Home</a>
				</li>
			</ul>
		</nav>

 <?php
 include "conn.php";
 
			if(isset($_POST['input'])){
			 
				$id_tiket  = $_POST['id_tiket'];
				$tanggal   = $_POST['tanggal'];
				$pc_no     = $_POST['pc_no'];
                $nama      = $_POST['nama'];
                $email     = $_POST['email'];
                $prodi     = $_POST['prodi'];
                $problem   = $_POST['problem'];
                $none      = "";
                $open      = "open";
                
   
    
                
    
		//echo "Email berhasil terkirim!";  
	
				
				$cek = mysqli_query($koneksi, "SELECT * FROM tiket WHERE id_tiket='$id_tiket'");
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($koneksi, "INSERT INTO tiket(id_tiket, tanggal, nim, nama, email, prodi, problem, penanganan, status)
															VALUES('$id_tiket','$tanggal','$nim','$nama','$email','$prodi','$problem','$none','$open')") or die(mysqli_error());
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
			?>
	<div id="kiri">
	<form class="cd-form floating-labels" method="POST" action="coba.php">
		<fieldset>
			<br></br>
			<h2>Ticketing</h2>
            <br></br>
            
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
		    	<label class="cd-label" for="cd-email">Prodi</label>
				<select class="email" name="prodi" id="prodi" required>
                <option value=""></option>
							<option value="Teknik Informatika">Teknik Informatika</option>
							<option value="Teknik Elektro">Teknik Elektro</option>
							<option value="FISIKA">Fisika</option>
							<option value="Teknik Geofisika">Teknik Geofisika</option>
							<option value="Teknik Geomatika">Teknik Geomatika</option>
							<option value="Teknik Sipil">Teknik Sipil</option>
							<option value="Perencanaan Wilayah dan Kota">Perencanaan Wilayah dan Kota</option>
							<option value="Teknik Arsitektur">Teknik Arsitektur</option>
							<option value="Teknik Lingkungan">Teknik Lingkungan</option>
							<option value="Teknik Geologi">Teknik Geologi</option>
							<option value="Teknik Mesin">Teknik Mesin</option>
							<option value="Matematika">Matematika</option>
							<option value="Teknik Industri">Teknik Industri</option>
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