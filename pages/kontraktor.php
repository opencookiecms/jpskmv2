<?php
    session_start();
    $userLname = $_SESSION['sess_userLastNames'];
	$userFname = $_SESSION['sess_userFirstName'];

    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_userFirstName']) || $role!="superuser" && $role!="adminkursus" && $role!="adminkontraktor" & $role!="user" && $role!="adminpengesyor" && $role!="specialuser" && $role!="adminaduan" ){
      header('Location: ../pages/login.php?err=2');
    }

?>
<?php require_once('../Connections/dbconn.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_dbconn, $dbconn);
$query_kontraktorview = "SELECT * FROM kontraktor";
$kontraktorview = mysql_query($query_kontraktorview, $dbconn) or die(mysql_error());
$row_kontraktorview = mysql_fetch_assoc($kontraktorview);
$totalRows_kontraktorview = mysql_num_rows($kontraktorview);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JPSKMSB | Aduan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../assets/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include '../include/headers.php';?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <?php include '../pages/authmenu.php';?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kontraktor
        <small>Senarai Nama Kontraktor</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <?php

              $role = $_SESSION['sess_userrole'];
              ?>
              <?php switch($role):

              case "superuser": ?>
              <a class="btn btn-success" href="a_kontraktor">
               <i class="ion ion-ios-paper-outline "></i> Tambah Kontraktor
             </a>

              <?php break; ?>
              <?php case "user": ?>

              <?php break; ?>
              <?php case "adminaduan": ?>

              <?php break; ?>
              <?php case "specialuser": ?>

              <?php case "adminkursus": ?>

              <?php break; ?>
              <?php case "adminpengesyor": ?>

              <?php break; ?>
              <?php case "adminkontraktor": ?>
              <a class="btn btn-success" href="a_kontraktor">
               <i class="ion ion-ios-paper-outline "></i> Tambah Kontraktor
             </a>
              <?php break; ?>
              <?php endswitch; ?>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table width="100%" class="table table-striped table-bordered table-hover" id="datatable">
      <thead>
          <tr>
            <th width="5%">Bil</th>
            <th width="12%">Gambar</th>
            <th width="25%">Nama Syarikat</th>
            <th width="22%">Nama Pengurus</th>
            <th width="11%">Status</th>
            <th width="10%">No Tel</th>
            <th width="25%">Tindakan</th>
          </tr>
      </thead>
      <tbody>
         <?php $bil = 0?>
       <?php do { ?>
          <tr class="odd gradeX">
                 <?php $bil+=1 ?>

                                           <td><?php echo $row_kontraktorview['kontraktorId']; ?></td>
                                           <td><a href="e_g_kontraktor?kontraktorId=<?php echo $row_kontraktorview['kontraktorId']; ?>" style="cursor:pointer"><img src="<?php echo $row_kontraktorview['konImage']; ?>"  style="width:100px; height:100px;"></a></td>
                                           <td><a href="Okontraktor?kontraktorId=<?php $strid=$row_kontraktorview['kontraktorId']; echo md5($strid); ?>"><?php echo $row_kontraktorview['konName']; ?></a></td>

                                           <td><?php echo $row_kontraktorview['konPengurus']; ?></td>

                                           <td>
                                           <?php

       									@session_start();
       									$RegDate = date($row_kontraktorview['sijilJPSSah']);
       									$endRegDate = date($row_kontraktorview['sijilJPSTamat']);
       									//$endofSijil = date("Y-m-d", strtotime(date("Y-m-d", strtotime($RegDate))." + 1 day"));
       									?>


                                           	<?php if (date("Y-m-d") < $endRegDate) { ?>
                                           	<span style="color:#FFF; background-color:#096; font-weight:bold; padding:5px;">Berdaftar</span>
                                               <?php } else{?>
                                           	<span style="color:#FFF; background-color:#F03; font-weight:bold; padding:5px;">Tidak Berdaftar</span>
                                               <?php } ?>

                                           </td>
                                           <td><?php echo $row_kontraktorview['NoTelPengurus']; ?></td>


                                          <td>
                                            <?php

                                            $role = $_SESSION['sess_userrole'];
                                            ?>
                                            <?php switch($role):

                                            case "superuser": ?>
                                            <!--menu restric-->
                                            <a href="e_kontraktor?kontraktorId=<?php echo $row_kontraktorview['kontraktorId']; ?>" class="btn btn-warning" role="button"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a href="../print/k_sijil_print?kontraktorId=<?php echo $row_kontraktorview['kontraktorId']; ?>" class="btn btn-primary" role="button">
                                              <i class="fa fa-print" aria-hidden="true"></i></a> <a href="kontraktordelete.php?kontraktorId=<?php echo $row_kontraktorview['kontraktorId']; ?>" class="btn btn-danger" role="button"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            <!--end-->
                                            <?php break; ?>
                                            <?php case "user": ?>
                                            <a href="../print/k_sijil_print?kontraktorId=<?php echo $row_kontraktorview['kontraktorId']; ?>" class="btn btn-primary" role="button"><i class="fa fa-print" aria-hidden="true"></i></a>
                                            <?php break; ?>
                                            <?php case "adminaduan": ?>
                                            <a href="../print/k_sijil_print?kontraktorId=<?php echo $row_kontraktorview['kontraktorId']; ?>" class="btn btn-primary" role="button"><i class="fa fa-print" aria-hidden="true"></i></a>
                                            <?php break; ?>
                                            <?php case "specialuser": ?>
                                             <a href="../print/k_sijil_print?kontraktorId=<?php echo $row_kontraktorview['kontraktorId']; ?>" class="btn btn-primary" role="button"><i class="fa fa-print" aria-hidden="true"></i></a>
                                            <?php break; ?>
                                            <?php case "adminkursus": ?>
                                             <a href="../print/k_sijil_print?kontraktorId=<?php echo $row_kontraktorview['kontraktorId']; ?>" class="btn btn-primary" role="button"><i class="fa fa-print" aria-hidden="true"></i></a>
                                            <?php break; ?>
                                            <?php case "adminpengesyor": ?>
                                             <a href="../print/k_sijil_print?kontraktorId=<?php echo $row_kontraktorview['kontraktorId']; ?>" class="btn btn-primary" role="button"><i class="fa fa-print" aria-hidden="true"></i></a>
                                            <?php break; ?>
                                            <?php case "adminkontraktor": ?>
                                            <a href="e_kontraktor?kontraktorId=<?php echo $row_kontraktorview['kontraktorId']; ?>" class="btn btn-warning" role="button"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a href="../print/k_sijil_print?kontraktorId=<?php echo $row_kontraktorview['kontraktorId']; ?>" class="btn btn-primary" role="button">
                                              <i class="fa fa-print" aria-hidden="true"></i></a> <a href="kontraktordelete.php?kontraktorId=<?php echo $row_kontraktorview['kontraktorId']; ?>" class="btn btn-danger" role="button"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            <?php break; ?>
                                            <?php endswitch; ?>
                                          </td>




                                             <?php } while ($row_kontraktorview = mysql_fetch_assoc($kontraktorview)); ?>
          </tr>



      </tbody>
      <tfoot>
<tr>
  <th width="5%">Bil</th>
  <th width="12%">Gambar</th>
  <th width="25%">Nama Syarikat</th>
  <th width="22%">Nama Pengurus</th>
  <th width="11%">Status</th>
  <th width="10%">No Tel</th>
  <th width="25%">Tindakan</th>
</tr>
</tfoot>
  </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.7
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
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

<!-- jQuery 2.2.3 -->
<script src="../assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->

<!-- page script -->
<script>
  $(function () {
    $("#datatable").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script>
    $(document).ready(function() {
        var url = window.location;
        var element = $('ul.sidebar-menu a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0; }).parent().addClass('active');
        if (element.is('li')) {
             element.addClass('active').parent().parent('li').addClass('active')
         }
    });
</script>

</body>
</html>
