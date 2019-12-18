
<?php
session_start();
$userFname = $_SESSION['sess_userFirstName'];

$role = $_SESSION['sess_userrole'];

if(!isset($_SESSION['sess_userFirstName']) || $role!="adminkursus"){
  header('Location: ../pages/login.php?err=2');
}

?>

<?php require_once('../Connections/kcon.php'); ?>
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

$get2 = $_GET ["kusId"];

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formkehadiranadd")) {
  $insertSQL = sprintf("INSERT INTO idjps (Kehadiran, jumlahHadir, hari, usrId, kusId) VALUES (%s, %s, %s, %s, %s)",
  GetSQLValueString($_POST['pDatang'], "text"),
  GetSQLValueString($_POST['pJumlah'], "int"),
  GetSQLValueString($_POST['pHari'], "int"),
  GetSQLValueString($_POST['pKehadiran'], "int"),
  GetSQLValueString($_POST['kurId'], "int"));

  mysql_select_db($database_kcon, $kcon);
  $Result1 = mysql_query($insertSQL, $kcon) or die(mysql_error());

  $insertGoTo = "kursus.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_kcon, $kcon);
$query_Recordset1 = "SELECT * FROM users";
$Recordset1 = mysql_query($query_Recordset1, $kcon) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

mysql_select_db($database_kcon, $kcon);
$query_viewkursus = "SELECT kursus.kusId, kursus.KusName, kursus.KusBegin, kursus.kusEnd, kursus.kusTempat, kursus.kusTahun, kursus.kurHari, users.usrName, users.usrIcNo, users.Jawatan, users.userUnit, users.GredJawatan, idjps.dayone, idjps.daytwo, idjps.daythree, idjps.dayfour, idjps.dayfive, idjps.daysix, idjps.daysvn FROM kursus, users, idjps WHERE idjps.usrId=users.usrId AND idjps.kusId=kursus.kusId AND kursus.kusId='$get2'";
$viewkursus = mysql_query($query_viewkursus, $kcon) or die(mysql_error());
$row_viewkursus = mysql_fetch_assoc($viewkursus);
$totalRows_viewkursus = mysql_num_rows($viewkursus);

$colname_collecckr = "-1";
if (isset($_GET['kusId'])) {
  $colname_collecckr = $_GET['kusId'];
}
mysql_select_db($database_kcon, $kcon);
$query_collecckr = sprintf("SELECT * FROM kursus WHERE kusId = %s", GetSQLValueString($colname_collecckr, "int"));
$collecckr = mysql_query($query_collecckr, $kcon) or die(mysql_error());
$row_collecckr = mysql_fetch_assoc($collecckr);
$totalRows_collecckr = mysql_num_rows($collecckr);

$kosong = 0;
if(isset($_REQUEST['submit']))
{
  $checkadd = $_REQUEST["checkadd"];
  $h=implode(",",$checkadd);
  $hari=$row_viewkursus['kurHari'];

  foreach ($checkadd as $hk) {
    mysql_query("INSERT INTO `idjps` (usrId,kusId,dayone,daytwo,daythree,dayfour,dayfive,daysix,daysvn) VALUES ('$hk','$get2','$kosong','$kosong','$kosong','$kosong','$kosong','$kosong','$kosong')");

    $insertGoTo = "kursus.php";
    if (isset($_SERVER['QUERY_STRING'])) {
      $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
      $insertGoTo .= $_SERVER['QUERY_STRING'];
    }
    header(sprintf("Location: %s", $insertGoTo));
  }





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
          Kursus
          <small>Senarai Nama Individu</small>
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

                <style type="text/css">
                .tg  {border-collapse:collapse;border-spacing:0;border-color:#999;border:none;}
                .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
                .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;}
                .tg .tg-ox40{font-weight:bold;font-size:12px;vertical-align:top}
                .tg .tg-k6pi{font-size:12px}
                .tg .tg-dx8v{font-size:12px;vertical-align:top}
                .tg .tg-3sk9{font-weight:bold;font-size:12px}
                </style>

                <table class="tg">
                  <tr>
                    <td class="tg-ox40">Tajuk Kursus<br></td>
                    <td colspan="3" class="tg-k6pi"><?php echo $row_viewkursus['KusName']; ?></td>
                  </tr>
                  <tr>
                    <td class="tg-3sk9">Tarikh Mula<br></td>
                    <td class="tg-k6pi"><?php echo $row_viewkursus['KusBegin']; ?></td>
                    <td class="tg-ox40">Tarikh Akhir<br></td>
                    <td class="tg-k6pi"><?php echo $row_viewkursus['kusEnd']; ?></td>
                  </tr>
                  <tr>
                    <td class="tg-3sk9">Tempat</td>
                    <td colspan="3" class="tg-k6pi"><?php echo $row_viewkursus['kusTempat']; ?></td>
                  </tr>
                  <tr>
                    <td class="tg-ox40">Tahun</td>
                    <td class="tg-dx8v"><?php echo $row_viewkursus['kusTahun']; ?></td>
                    <td class="tg-ox40">Hari</td>
                    <td class="tg-dx8v"><?php echo $row_viewkursus['kurHari']; ?></td>
                  </tr>
                </table>
                <br>



              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <form method="post">
                  <table width="100%" class="table table-striped table-bordered table-hover" id="example1">
                    <thead>
                      <tr>
                        <th>Bil</th>
                        <th>Nama Peserta</th>
                        <th>Jawatan</th>
                        <th>Gred Jawatan</th>
                        <th>Unit</th>
                        <th>Kehadiran</th>


                      </tr>
                    </thead>
                    <tbody>
                      <?php $bil = 0 ?>
                      <?php do { ?><tr class="odd gradeX">
                        <?php $bil +=1 ?>

                        <td><?php echo $bil ?></td>
                        <td><?php echo $row_Recordset1['usrName']; ?></td>
                        <td><?php echo $row_Recordset1['Jawatan']; ?></td>
                        <td><?php echo $row_Recordset1['GredJawatan']; ?></td>
                        <td><?php echo $row_Recordset1['userUnit']; ?></td>
                        <td><input type='checkbox' name='checkadd[<?php echo $bil ?>]' value='<?php echo $row_Recordset1['usrId']; ?>'><?php echo $row_Recordset1['usrId']; ?></td>




                      <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>

                    </tr>
                  </tbody>

                </table>

                <input type="submit" name="submit" value="Kemaskini"/>
                <!-- /.table-responsive -->
              </form>


            </div>
            <!-- /.panel-body -->
            <!--modal section-->

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
