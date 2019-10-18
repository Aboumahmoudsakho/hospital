<?php    
    session_start();
    $src=$_SESSION['src']; 
    $connexion = new PDO('mysql:host=localhost;dbname=hopital','sakho','1234');
    $traitement = $connexion->prepare("SELECT * FROM specialite WHERE codes =$src");
    $resultat = $traitement->execute();
    $affiche=$traitement->fetchAll();
    foreach ($affiche as $contenu);
 ?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">

  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-*black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
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
         </div>
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
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content container-fluid">
     <div class="row">
        <div class="col-xs-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Si vous voulez ajouter une nouveau medecin cliquer sur  ce bouton</h3>
            </div>
            <div class="box-body">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                  Ajout Medecin
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" title="Fermer">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Formulaire D'ajout</h4>
              </div>
              <div class="modal-body">
                  <form method="POST">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
                  <input class="form-control" type="text" name="nm"  placeholder="nom"><br><br>
                  <input class="form-control" type="text" name="prm"  placeholder="prenom"><br><br>
                  <select class="form-control" name="spt">
                    <option>Specialite</option>
                      <option  value="<?=$contenu['ids'] ;?>"><?=$contenu['libser'] ;?></option>
                  </select><br><br>
                  <button type="submit" class="btn btn-primary" name="ajout">Ajouter</button>
                  <?php 
                          if(isset($_POST['ajout']))
                          {
                              extract($_POST);
                              $connexion = new PDO('mysql:host=localhost;dbname=hopital','sakho','1234');
                          //preparation de la requette sql
                            $insertion = $connexion->prepare('INSERT INTO medecin VALUES(NULL,:nom,:prenom,:ids)');
                            //on lie chaque marqueur a une valeur
                            $insertion->bindvalue(':nom',$_POST['nm']);
                            $insertion->bindvalue(':prenom',$_POST['prm']);
                            $insertion->bindvalue(':ids',$_POST['spt']);
    

                            //execution de la requet prepare
                            $execution = $insertion->execute();
                            if ($resultat)
                                {
                                    echo "<script> 
                                            alert('un nouveau medecin est ajoute')
                                        ;</script>
                                        ";
                                }
                                else
                                {
                                    echo "<script> 
                                    alert('il y un erreur')
                                        ;</script>
                                ";
                                }
                        } 
                        ?>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fermer</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
          <!-- Main content -->
    <section class="content">
        
      <div class="row">
        <div class="col-xs-13">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Liste des medecin</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>Prenom</th>
                  <th>NOM</th>
                  <th>Specialite</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $traitement = $connexion->prepare("SELECT * FROM  medecin m,specialite s WHERE m.ids=s.ids and s.codes='$src'");
                    $resultat = $traitement->execute();
                    $affichage=$traitement->fetchAll();
                    foreach ($affichage as $contenu);
                ?>
                <tr>
                     <td><?=$contenu['prenom'] ?></td>
                     <td><?=$contenu['nom'] ?></td>
                     <td><?=$contenu['libser'] ?></td>
                </tr>
               
                </tbody>
                <tfoot>
                <tr>
                <th>Prenom</th>
                  <th>NOM</th>
                  <th>Specialite</th>
                </tr>
                </tfoot>
              </table>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   
    <!-- Main content -->
  <!-- Main Footer -->
      <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>
  <!-- Control Sidebar -->
  
    <!-- Tab panes -->
          <!-- /.tab-pane -->
      <!-- Stats tab content -->
                <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>