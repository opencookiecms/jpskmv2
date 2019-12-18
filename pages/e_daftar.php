<?php
    session_start();
    $userLname = $_SESSION['sess_userLastNames'];
	$userFname = $_SESSION['sess_userFirstName'];

    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_userFirstName']) || $role!="superuser"){
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "formUser")) {
  $updateSQL = sprintf("UPDATE users SET userFname=%s, userName=%s, usersTel=%s, usersEmail=%s, usersPassword=%s, UserJawatan=%s, userRole=%s WHERE usersId=%s",
                       GetSQLValueString($_POST['nama'], "text"),
                       GetSQLValueString($_POST['username'], "text"),
                       GetSQLValueString($_POST['notel'], "int"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['password'], "text"),
                       GetSQLValueString($_POST['jawatan'], "text"),
                       GetSQLValueString($_POST['group'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_dbconn, $dbconn);
  $Result1 = mysql_query($updateSQL, $dbconn) or die(mysql_error());

  $updateGoTo = "pengguna";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_userviewid = "-1";
if (isset($_GET['usersId'])) {
  $colname_userviewid = $_GET['usersId'];
}
mysql_select_db($database_dbconn, $dbconn);
$query_userviewid = sprintf("SELECT * FROM users WHERE usersId = %s", GetSQLValueString($colname_userviewid, "int"));
$userviewid = mysql_query($query_userviewid, $dbconn) or die(mysql_error());
$row_userviewid = mysql_fetch_assoc($userviewid);
$totalRows_userviewid = mysql_num_rows($userviewid);
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
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menu Utama</li>
        <li><a href="../adminpanel/adminpanel"><i class="fa fa-circle-o text-red"></i> <span>Halaman Utama</span></a></li>
        <li><a href="../pages/pengguna"><i class="fa fa-circle-o text-yellow"></i> <span>Senarai Pengguna</span></a></li>
        <li class="active"><a href="../pages/daftar"><i class="fa fa-circle-o text-blue"></i> <span>Daftar Pengguna</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Pengguna
        <small>Daftar</small>
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
              <h3 class="box-title">Pendaftaran</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="<?php echo $editFormAction; ?>" role="form" name="formUser" class="form-horizontal">
              <div class="box-body">
                                               <div class="form-group">
                                          	<div class="col-md-1">
                                              <label>id</label>
                                              <input name="id" class="form-control" value="<?php echo $row_userviewid['usersId']; ?>" readonly>
                                              </div>
                                              </div>
                                          <div class="form-group">
                                          	<div class="col-md-4">
                                              <label>Nama</label>
                                              <input class="form-control" name="nama" value="<?php echo $row_userviewid['userFname']; ?>">
                                              </div>

                                      </div>




                                          <div class="form-group">
                                           <div class="col-md-3">
                                             <div id="frmCheckUsername">
                                             <label>Username</label>
                                         <input class="form-control" name="username" type="text" id="username" class="demoInputBox" onBlur="checkAvailability()" value="<?php echo $row_userviewid['userName']; ?>">
                                             </div>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                         <p></p>
                                         <div class="col-md-4">
                                           <span id="user-availability-status"></span>
                                         </div>
                                         </div>
                                           <div class="form-group">
                                          	<div class="col-md-3">
                                              <label>Kata Laluan</label>
                                              <input class="form-control" placeholder="Sila masukkan kata laluan" name="password" type="password" value="<?php echo $row_userviewid['usersPassword']; ?>">
                                              </div>
                                          </div>

                                          <div class="form-group">
                                          	<div class="col-md-3">
                                             		 <label>No Tel</label>
                                             		 <input  name="notel" type="text" class="form-control" placeholder="xxx-xxxxxxx" value="<?php echo $row_userviewid['usersTel']; ?>">
                                              </div>
                                              <div class="col-md-4">
                                              <label>Email</label>
                                              <input name="email" type="email" class="form-control"  placeholder="jps@jps.com.my" value="<?php echo $row_userviewid['usersEmail']; ?>">

                                          </div>
                                          </div>





                                      <div class="form-group">
                                          <div class="col-md-2">
                                             		 <label>Jawatan</label>
                                              <input name="jawatan" class="form-control" value="<?php echo $row_userviewid['UserJawatan']; ?>">

                                              </div>



                                      </div>

                                              <div class="form-group">
                                          <div class="col-md-2">
                                             		<label>Akses Level</label>
                                                 <select name="group" class="form-control">
                                              	<option value="<?php echo $row_userviewid['userRole']; ?>"><?php echo $row_userviewid['userRole']; ?></option>
                                              	<option value="superuser">superuser</option>
                                                  <option value="specialuser">specialuser</option>
                                                  <option value="user">user</option>
                                                  <option value="adminaduan">adminaduan</option>
                                                  <option value="adminpengesyor">adminpengesyor</option>
  												<option value="adminkursus">adminkursus</option>
                          <option value="adminkontraktor">adminkontraktor</option>


                                              </select>
                                              </div>



                                      </div>

                                      <div class="box-footer">
                                          <div class="form-group">
                                          <div class="col-md-4">
                                          <button type="submit" class="btn btn-success">Simpan</button>
                                          <button type="reset" class="btn btn-warning">Reset semula</button>
                                          <input type="hidden" name="MM_insert" value="formaduan">
                                          </div>
                                          </div>
                                          <input type="hidden" name="MM_insert" value="formUser">
                                          <input type="hidden" name="MM_insert" value="formUser">
                                          <input type="hidden" name="MM_update" value="formUser">
                                        </div>
                                      </div>
                                      </form>
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
<!-- Bootstrap 3.3.6 -->
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<script>
  function checkAvailability() {
    $("#loaderIcon").show();
    jQuery.ajax({
      url: "useravailabel.php",
      data:'username='+$("#username").val(),
      type: "POST",
      success:function(data){
        $("#user-availability-status").html(data);
        $("#loaderIcon").hide();
      },
      error:function (){}
    });
  }
</script>
</body>
</html>
