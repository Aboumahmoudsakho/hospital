<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Top Navigation</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class=" layout-top-nav">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../../index2.html" class="navbar-brand"><b><?= $_SESSION['prenom'] ;?></b><?= $_SESSION['nom'] ;?></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="specialite.php">Specialite</a></li>
            <li><a href="medecin.php">Medecin</a></li>
            <li><a href="rv.php">Rendez-vous</a></li>
          </ul>
       
      <!-- Main content -->
      <!-- /.content -->
      
    </div>
   
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
          <!-- Main content -->
    
    <!-- /.container -->
  </div>
  
  <!-- /.content-wrapper -->
  <section class="content">
        <div class="callout callout-info">
          <h4><strong>Medecin</strong></h4>

          <p>Dans le partie <b>medecin</b> vous avez la possiblite d'ajouter des medecins insi que de voir les medecins qui se trouve 
           dans ton service insi que leur que specialite 
          .</p>
        </div>
        <div class="callout callout-info">
          <h4><strong>Specialite</strong></h4>

          <p>Dans le partie <b>specialite</b> vous avez la possiblite d'ajouter des specialites insi que de voir les specialites qui se trouve 
           dans ton service
          .</p>
        </div>
      </div>
      <div class="callout callout-info">
          <h4><strong>Rendez-vous</strong></h4>

          <p>Dans le partie <b>rendez-vous</b> vous avez la possiblite d'ajouter des rendez-vous insi que de voir la listes de touts les rendez-vous qui se trouve 
           dans ton service
          .</p>
        </div>    <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>  
    
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
