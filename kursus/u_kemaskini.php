

<?php
    session_start();
    $userFname = $_SESSION['sess_userFirstName'];

    $role = $_SESSION['sess_userrole'];

    if(!isset($_SESSION['sess_userFirstName']) || $role!="adminkursus"){
      header('Location: ../pages/login.php?err=2');
    }

?><?php require_once('../Connections/kcon.php'); ?>
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE users SET usrName=%s, usrIcNo=%s, Jawatan=%s, GredJawatan=%s, jmKhdir=%s WHERE usrId=%s",
                       GetSQLValueString($_POST['usrName'], "text"),
                       GetSQLValueString($_POST['usrIcNo'], "text"),
                       GetSQLValueString($_POST['Jawatan'], "text"),
                       GetSQLValueString($_POST['GredJawatan'], "text"),
                       GetSQLValueString($_POST['jmKhdir'], "int"),
                       GetSQLValueString($_POST['usrId'], "int"));

  mysql_select_db($database_kcon, $kcon);
  $Result1 = mysql_query($updateSQL, $kcon) or die(mysql_error());

  $updateGoTo = "kemaskini";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$get2 = $_GET ["usrId"];

mysql_select_db($database_kcon, $kcon);
$query_colectdata = "SELECT users.usrId, users.usrName, users.Jawatan, users.GredJawatan, users.jmKhdir, SUM(idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn) as sumalldats,SUM(idjps.jumlahHadir)  FROM idjps, users WHERE idjps.usrId=users.usrId AND users.usrId='$get2' GROUP BY idjps.usrId";
$colectdata = mysql_query($query_colectdata, $kcon) or die(mysql_error());
$row_colectdata = mysql_fetch_assoc($colectdata);
$totalRows_colectdata = mysql_num_rows($colectdata);

$colname_updaterecode = "-1";
if (isset($_GET['usrId'])) {
  $colname_updaterecode = $_GET['usrId'];
}
mysql_select_db($database_kcon, $kcon);
$query_updaterecode = sprintf("SELECT * FROM users WHERE usrId = %s", GetSQLValueString($colname_updaterecode, "int"));
$updaterecode = mysql_query($query_updaterecode, $kcon) or die(mysql_error());
$row_updaterecode = mysql_fetch_assoc($updaterecode);
$totalRows_updaterecode = mysql_num_rows($updaterecode);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | General Form Elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
   <link rel="stylesheet" href="../assets/jquery-ui-1.12.1/jquery-ui.css">

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
        <!-- Sidebar user panel -->
          <?php include '../pages/authmenu.php';?>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Kursus
          <small>Daftar Kursus</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Forms</a></li>
          <li class="active">General Elements</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-xs-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Borang Daftar Kursus</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <div class="box-body">
                <form method="post" name="form1" action="<?php echo $editFormAction; ?>" class="form-horizontal">
                                   	<div class="form-group">
                                     	<div class="col-md-3">
                                         	  <?php echo $row_updaterecode['usrId']; ?>
                                         </div>
                                     </div>
                                   	<div class="form-group">
                                     	<div class="col-md-5">
                                         	<label>Nama</label>
                                             <input class="form-control" type="text" name="usrName" value="<?php echo $row_updaterecode['usrName']; ?>" readonly>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                     	<div class="col-md-3">
                                         <label>No Kad Pengenalan</label>
                                         <input class="form-control" class="form-control" type="text" name="usrIcNo" value="<?php echo htmlentities($row_updaterecode['usrIcNo'], ENT_COMPAT, 'utf-8'); ?>" readonly>
                                         </div>
                                     </div>
                                      <div class="form-group">
                                     	<div class="col-md-3">
                                         <label>Jawatan</label>
                                          <input type="text" class="form-control" name="Jawatan" value="<?php echo htmlentities($row_updaterecode['Jawatan'], ENT_COMPAT, 'utf-8'); ?>"  readonly>
                                         </div>
                                     </div>
                                       <div class="form-group">
                                     	<div class="col-md-2">
                                         <label>Gred Jawatan</label>
                                         	 <input type="text" class="form-control" name="GredJawatan" value="<?php echo htmlentities($row_updaterecode['GredJawatan'], ENT_COMPAT, 'utf-8'); ?>" readonly>
                                         </div>
                                     </div>
                                          <div class="form-group">
                                     	<div class="col-md-2">

                                         <label>Untuk rujukan kedatangan hari</label>
                                         <input type="text" name="n1" id="n1" class="form-control" value="<?php echo $row_colectdata['sumalldats']; ?>" onkeyup="sync()" readonly>
                                         </div>
                                     </div>
                                       <div class="form-group">
                                     	<div class="col-md-2">

                                         <label>Jumlah Kehadiran (Sila rujuk Kedatangan hari)</label>
                                         <input type="text" class="form-control" id="jmKhdir" name="jmKhdir" value="<?php echo $row_colectdata['sumalldats']; ?>">
                                         </div>
                                     </div>










                                     <div class="box-footer">

                                         <input type="submit" class="btn btn-success" value="Kemaskini Rekod">

                                     <input type="hidden" name="MM_update" value="form1">
                                     <input type="hidden" name="usrId" value="<?php echo $row_updaterecode['usrId']; ?>">
                                   </form>
                                 </div>


                               </div>
                <!-- /.box -->
              </div>
              <!--/.col (left) -->
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
      <script src="../assets/jquery-ui-1.12.1/jquery-ui.js"></script>
   <script src="../assets/jquery-ui-1.12.1/ui.js"></script>
      <!-- Bootstrap 3.3.6 -->
      <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
      <!-- FastClick -->
      <script src="../assets/plugins/fastclick/fastclick.js"></script>
      <!-- AdminLTE App -->
      <script src="../assets/dist/js/app.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="../assets/dist/js/demo.js"></script>
      <script type="text/javascript">
  $('.datepicker').datepicker({
      format: 'mm/dd/yyyy',
      startDate: '-3d'
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
