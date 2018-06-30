<!DOCTYPE html>
<html lang="en">


<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Login | HelpDesk</title>

  
 
  <meta name="msapplication-TileColor" content="#5fb79b">
  <!--<link rel="stylesheet" href="../../aset/admin/css/materialize.css" type="text/css">
  <link rel="stylesheet" href="../../aset/admin/css/style.css" type="text/css">
  <link rel="stylesheet" href="../../aset/admin/css/page-center.css" type="text/css">-->
  <link rel="stylesheet" href=" <?=base_url();?>aset/admin/css/materialize.css" type="text/css"  >
  <link rel="stylesheet" href="<?=base_url();?>aset/admin/css/style.css" type="text/css"  >
  <link rel="stylesheet" href="<?=base_url();?>aset/admin/css/page-center.css" type="text/css" >
  <link rel="stylesheet" href="<?=base_url();?>aset/admin/css/prism.css" type="text/css" >
  <link rel="stylesheet" href="<?=base_url();?>aset/admin/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="light-blue">
    <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" action="<?=base_url();?>index.php/login/proclogin" method="POST" name="formku" id="formku">
        <div class="row">
          <div class="input-field col s12 center">
            <p class="center login-form-text">Login Helpdesk</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" name="username" type="text" autocomplete="off" autofocus>
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" name="password" type="password" autocomplete="off">
            <label for="password">Password</label>
          </div>
        </div>
        
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light col s12" name="login" id="login">Login</button>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="page-register.html">Register Now!</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="page-forgot-password.html">Forgot password ?</a></p>
          </div>          
        </div>
      </form>
    </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="<?=base_url();?>aset/admin/js/jquery-1.11.2.min.js"></script>
  <!-- materialize js -->
  <script type="text/javascript" src="<?=base_url();?>aset/admin/js/materialize.js"></script>
  <!-- prism -->
  <script type="text/javascript" src="<?=base_url();?>aset/admin/js/prism.js"></script>
<!--scrollbar-->
  <script type="text/javascript" src="<?=base_url();?>aset/admin/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

 <!-- plugins.js - Some Specific JS codes for Plugin Settings-->
  <script type="text/javascript" src="<?=base_url();?>aset/admin/js/plugins.js"></script>

</body>

</html>