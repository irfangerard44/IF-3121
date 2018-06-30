<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>aset/admin/css/homepage.css"></link>
	<link rel="stylesheet" href="<?=base_url();?>aset/admin/css/reset.css"> 
	<link rel="stylesheet" href="<?=base_url();?>aset/admin/css/style1.css"> 
	<link rel="stylesheet" href="<?=base_url();?>aset/admin/css/kanankiri.css"> 
	<!--script src="js/modernizr.js"></script--> 
    <script src="<?=base_url();?>aset/admin/js/jquery-2.1.1.js"></script>
    
    <script src="<?=base_url();?>aset/admin/js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="<?=base_url();?>aset/admin/css/sweetalert.css">
    
	<title>Helpdesk Informatika</title>
</head>
<body>

  
  <div id="main">

  
      
      <section id="content">
        <!--start container-->
        <div class="container">
            <div id="table-datatables">
              <h4 class="header"></h4>
              
              <br /><br />
              <div class="row">
                <div class="col s12 m12">
                  <table id="lookup" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
	  
                        <th>id tiket</th>
	                    <th>nim</th>
                        <th>nama</th>
                        <th>email</th>
                        <th>tanggal</th>
                        <th>prodi</th>
                        <th>Problem</th>
						<th>penanganan</th>
                        <th>Status</th>
                        
	   
	  
                         </tr>
						 </thead>
						 <tbody>
						 <?php
						$no = 0;
							foreach($isi as $baris){
						?>
						<tr>
						<td><?php echo $baris->id_tiket; ?></td>
						<td><?php echo $baris->nim; ?></td>
						<td><?php echo $baris->nama; ?></td>
						<td><?php echo $baris->email; ?></td>
						<td><?php echo $baris->tanggal; ?></td>
						<td><?php echo $baris->prodi ?></td>
						<td><?php echo $baris->problem; ?></td>
						<td><?php echo $baris->penanganan; ?></td>
						<td><?php echo $baris->status; ?></td>
						</tr>
                    </tbody>
					<?php
					}
					?>
                  </table>
                </div>
              </div>
            </div> 
            

                 
                    
                   

           
          </div>

        </div>
        <!--end container-->

      </section>
      <!-- END CONTENT -->
    </div>
    <!-- END WRAPPER -->

  </div>
 
  <!-- START FOOTER -->
 <?php //include "footer.php"; ?>
    <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->
    <!-- jQuery Library -->
	<script type="text/javascript" src="<?=base_url();?>aset/admin/js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="<?=base_url();?>aset/admin/js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="<?=base_url();?>aset/admin/js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?=base_url();?>aset/admin/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="<?=base_url();?>aset/admin/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>aset/admin/js/plugins/data-tables/data-tables-script.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="<?=base_url();?>aset/admin/js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?=base_url();?>aset/admin/js/plugins.js"></script>   
    
   
</body>
</html>