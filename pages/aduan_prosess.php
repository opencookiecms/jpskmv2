<?php require_once('../Connections/dbconn.php'); ?>
<?php
require('../PHPMailer/PHPMailerAutoload.php');

session_start();
$username = $_SESSION['sess_username'];
$userLname = $_SESSION['sess_userLastNames'];
$userFname = $_SESSION['sess_userFirstName'];


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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "formupdate")) {
  $updateSQL = sprintf("UPDATE aduan SET aStatus=%s, AduandateSiasat=%s, AduanKatAduan=%s,
     AduanLatitud=%s, AduanLongitud=%s, AduanPenting=%s, atindakan=%s, AduanTahap=%s,
     AduanCadang=%s, AduanKos=%s, AduanPenyiasat=%s, AduanPenyemak=%s, tarikhSemak=%s,
     aduanPengesyor=%s, syorTelefon=%s WHERE aduanId=%s",

  GetSQLValueString($_POST['astatus'], "text"),
  //GetSQLValueString($_POST['TSuratDiminitkan'], "text"),
  GetSQLValueString($_POST['TsrtSiasat'], "text"),
  GetSQLValueString($_POST['KetAduan'], "text"),
  GetSQLValueString($_POST['LatN'], "text"),
  GetSQLValueString($_POST['LonE'], "text"),
  GetSQLValueString($_POST['Pnting'], "text"),
  GetSQLValueString($_POST['tindakanagensi'], "text"),
  GetSQLValueString($_POST['adRisau'], "text"),
  GetSQLValueString($_POST['AdCadang'], "text"),
  GetSQLValueString($_POST['AdAggKos'], "text"),
  GetSQLValueString($_POST['PPenyiasat'], "text"),
  GetSQLValueString($_POST['Ppenyemak'], "text"),
  GetSQLValueString($_POST['tdisemak'], "text"),
  GetSQLValueString($_POST['Pengesyor'], "text"),
  GetSQLValueString($_POST['syortel'], "text"),
  GetSQLValueString($_POST['adID'], "int"));

  mysql_select_db($database_dbconn, $dbconn);
  $Result1 = mysql_query($updateSQL, $dbconn) or die(mysql_error());
////////////////////////////////////////Email process///////////////////////////////////////////////////////////////////////////
//phpmailer//

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$maduan = $_POST['amasalah'];
//$emailaduan = $_POST['ppp'];
//$aduanNo = $_POST['akodaduan'];
$apengadu = $_POST['apengadu'];
$ppyiasat = $_POST['PPenyiasat'];
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp-mail.outlook.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'jpskmsb@outlook.my';                 // SMTP username
$mail->Password = 'bskmjps12';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('jpskmsb@outlook.my', 'Mailer');
$mail->addAddress('syed.m.afiq@outlook.com', 'Joe User');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "$apengadu";
$mail->Body    = "Maslah $maduan Pengawai Penyiasat $ppyiasat";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
////////////////////////////////////////////////////////////////////////////////////////////////////////
  $updateGoTo = "aduan";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}


mysql_select_db($database_dbconn, $dbconn);
$query_kolekdatauser = "SELECT * FROM users WHERE userName='$username'";
$kolekdatauser = mysql_query($query_kolekdatauser, $dbconn) or die(mysql_error());
$row_kolekdatauser = mysql_fetch_assoc($kolekdatauser);
$totalRows_kolekdatauser = mysql_num_rows($kolekdatauser);

mysql_select_db($database_dbconn, $dbconn);
$query_kolekdatauser1 = "SELECT * FROM users";
$kolekdatauser1 = mysql_query($query_kolekdatauser1, $dbconn) or die(mysql_error());
$row_kolekdatauser1 = mysql_fetch_assoc($kolekdatauser1);
$totalRows_kolekdatauser1 = mysql_num_rows($kolekdatauser1);

mysql_select_db($database_dbconn, $dbconn);
$query_kolekdatauser2 = "SELECT * FROM users";
$kolekdatauser2 = mysql_query($query_kolekdatauser2, $dbconn) or die(mysql_error());
$row_kolekdatauser2 = mysql_fetch_assoc($kolekdatauser2);
$totalRows_kolekdatauser2 = mysql_num_rows($kolekdatauser2);

$colname_updateview = "-1";
if (isset($_GET['aduanId'])) {
  $colname_updateview = $_GET['aduanId'];
}
mysql_select_db($database_dbconn, $dbconn);
$query_updateview = sprintf("SELECT * FROM aduan WHERE aduanId = %s", GetSQLValueString($colname_updateview, "int"));
$updateview = mysql_query($query_updateview, $dbconn) or die(mysql_error());
$row_updateview = mysql_fetch_assoc($updateview);
$totalRows_updateview = mysql_num_rows($updateview);


$role = $_SESSION['sess_userrole'];
if(!isset($_SESSION['sess_userFirstName']) || $role!="user" && $role!="adminpengesyor"){
  header('Location: ../pages/login.php?err=2');
}

include('../Connections/fecthmysqld.php');

//Get all country data
$query = $db->query("SELECT * FROM users WHERE userRole='adminpengesyor'");

//Count total number of rows
$rowCount = $query->num_rows;
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
    <link rel="stylesheet" href="../assets/jquery-ui-1.12.1/jquery-ui.css">
  <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script type="text/javascript">
  $(document).ready(function(){
      $('#pegawai').on('change',function(){
          var uFname = $(this).val();
          if(uFname){
              $.ajax({
                  type:'POST',
                  url:'../include/dropdatasyor.php',
                  data:'usersId='+uFname,
                  success:function(html){
                      $('#ppp').html(html);

                  }
              });
          }else{
              $('#ppp').html('<option value="">Tiada Email</option>');

          }
      });

      $('#ppp').on('change',function(){
          var uTel = $(this).val();
          if(uTel){
              $.ajax({
                  type:'POST',
                  url:'../include/dropdatasyor.php',
                  data:'usersTel='+uTel,
                  success:function(html){
                      $('#city').html(html);
                  }
              });
          }else{

          }
      });
  });
  </script>
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
          Aduan
          <small>Senarai Aduan</small>
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
                  <a class="btn btn-success" href="../pages/a_aduan">
                    <i class="ion ion-ios-paper-outline "></i> Tambah Aduan
                  </a>

                  <?php break; ?>
                  <?php case "user": ?>

                  <?php break; ?>
                  <?php case "adminaduan": ?>
                  <a class="btn btn-success" href="../pages/a_aduan">
                    <i class="ion ion-ios-paper-outline "></i> Tambah Aduan
                  </a>
                  <?php break; ?>
                  <?php case "specialuser": ?>

                  <?php case "adminkursus": ?>

                  <?php break; ?>
                  <?php case "adminpengesyor": ?>

                  <?php break; ?>
                  <?php case "adminkontraktor": ?>

                  <?php break; ?>
                  <?php endswitch; ?>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <?php

                  $role = $_SESSION['sess_userrole'];
                  ?>
                  <?php switch($role):

                    case "superuser": ?>
                    <a class="btn btn-success" href="../pages/a_aduan">
                      <i class="ion ion-ios-paper-outline "></i> Tambah Aduan
                    </a>

                    <?php break; ?>
                    <?php case "user": ?>
                      <?php include '../include/aduanpsiasat.php';?>
                    <?php break; ?>
                    <?php case "adminaduan": ?>

                    <?php break; ?>
                    <?php case "specialuser": ?>

                    <?php case "adminkursus": ?>

                    <?php break; ?>
                    <?php case "adminpengesyor": ?>

                    <?php break; ?>
                    <?php case "adminkontraktor": ?>

                    <?php break; ?>
                    <?php endswitch; ?>
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
      <script src="../assets/jquery-ui-1.12.1/ui.js"></script>
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
        <script type="text/javascript">
        $('.datepicker').datepicker({
          format: 'mm/dd/yyyy',
          startDate: '-3d'
        });
        </script>

      </body>
      </html>
