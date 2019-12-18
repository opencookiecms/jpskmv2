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

$colname_kondaerah = "-1";
if (isset($_GET['konDaerah'])) {
  $colname_kondaerah = $_GET['konDaerah'];
}
mysql_select_db($database_dbconn, $dbconn);
$query_kondaerah = sprintf("SELECT * FROM kontraktor WHERE kontraktor.konDaerah=%s ORDER BY kontraktor.kontraktorId ", GetSQLValueString($colname_kondaerah, "text"));
$kondaerah = mysql_query($query_kondaerah, $dbconn) or die(mysql_error());
$row_kondaerah = mysql_fetch_assoc($kondaerah);
$totalRows_kondaerah = mysql_num_rows($kondaerah);

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

	  session_start();
		  $userFname = $_SESSION['sess_userFirstName'];

		  $role = $_SESSION['sess_userrole'];
		  if(!isset($_SESSION['sess_userFirstName']) || $role!="adminkontraktor" && $role!="superuser"){
			header('Location: ../pages/login.php?err=2');
		  }

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
        <small>Senarai Kontraktor Mengikut Daerah</small>
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
              <a class="btn btn-success" href="../pages/a_kontraktor">
               <i class="ion ion-ios-paper-outline "></i> Tambah Kontraktor
             </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form name="search" class="form-horizontal" method="get" action="l_d_kontraktor?konDaerah=<?php echo $row_kondaerah['konDaerah']; ?>">
             <div class="form-group">
             <div class="col-md-5">
             <label>Sila Kontraktor Mengikut Daerah</label>
             <select type="text" name="konDaerah" class="form-control">
             <option value="Yan">Yan</option>
             <option value="Baling">Baling</option>
             <option value="Sik">Sik</option>
             <option value="Kuala Muda">Kuala Muda</option>
             <option value="Kedah">Kedah</option>
             <select>
             </div>
             </div>
             <div class="form-group">
             <div class="col-md-3">
             <input type="submit" value="Cari" name="search" class="btn btn-success"/>
             </div>
             </div>
           </form>
           <a class="btn btn-primary" href="../print/kn_d_print?konDaerah=<?php echo $row_kondaerah['konDaerah']; ?>" target="_blank">Cetak</a>
           <p>
           <div class="form-group">

                <table width="100%" class="table table-striped table-bordered table-hover tableg" id="dataTables-example">
                 <thead>
                 <tr>
                   <td>Bil</td>
                   <td>Nama Syarikat</td>
                   <td>No Sijil Pendaftaran</td>
                   <td>Tarih Sijil Tamat</td>
                   <td>Prestasi Kontraktor</td>
                   <td>Daerah</td>
                   <td>No Tel HP</td>
                   <td>No Tel. Pejabat</td>
                 </tr>
                  </thead>
                  <thead>
                 <tr>
                   <td>#</td>
                   <td>Nama Pengurus</td>
                   <td>No Kad Pengenalan</td>
                   <td>Nama Bank</td>
                   <td></td>
                   <td>Status</td>
                   <td></td>
                   <td>No Faksimili</td>
            		</tr>
                 </thead>
                 		<?php $bil=0 ?>
                         <?php do { ?>
                         <?php $bil +=1 ?>
                 <tr>

                   <td rowspan="2"><?php echo $bil ?></td>
                   <td><span style="font-weight:bold"><?php echo $row_kondaerah['konName']; ?></span></td>
                   <td><?php echo $row_kondaerah['sijilNoPendaftaran']; ?></td>
                   <td><?php echo $row_kondaerah['sijilJPSTamat']; ?></td>
                   <td><?php echo $row_kondaerah['konPrestasi']; ?></td>
                   <td><?php echo $row_kondaerah['konDaerah']; ?></td>
                   <td><?php echo $row_kondaerah['NoTelPengurus']; ?></td>
                   <td><?php echo $row_kondaerah['konTel']; ?></td>
            		</tr>

                  <tr>

                   <td><?php echo $row_kondaerah['konPengurus']; ?></td>
                   <td><?php echo $row_kondaerah['NoKPpengurus']; ?></td>
                   <td><?php echo $row_kondaerah['konBank']; ?></td>
                   <td></td>
                   <td><?php

 									@session_start();
 									$RegDate = date($row_kondaerah['sijilJPSSah']);
 									$endRegDate = date($row_kondaerah['sijilJPSTamat']);
 									//$endofSijil = date("Y-m-d", strtotime(date("Y-m-d", strtotime($RegDate))." + 1 day"));
 									?>


                                     	<?php if (date("Y-m-d") < $endRegDate) { ?>
                                     	<span style="color:#FFF; background-color:#096; font-weight:bold; padding:5px;">Berdaftar</span>
                                         <?php } else{?>
                                     	<span style="color:#FFF; background-color:#F03; font-weight:bold; padding:5px;">Tidak Berdaftar</span>
                                         <?php } ?>
 </td>
                   <td></td>
                   <td><?php echo $row_kondaerah['koFax']; ?></td>

        		     </tr>
    <?php } while ($row_kondaerah = mysql_fetch_assoc($kondaerah)); ?>
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
<script src="../assets/dist/js/demo.js"></script>
<!-- page script -->

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
<script>
  $(function () {
    $("#example1").DataTable();
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
</body>
</html>
