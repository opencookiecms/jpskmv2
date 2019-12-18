<?php
    session_start();
    $userFname = $_SESSION['sess_userFirstName'];

    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_userFirstName']) || $role!="adminaduan" && $role!="superuser"){
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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "formaduan")) {
  $updateSQL = sprintf("UPDATE aduan SET aNama=%s, aNokp=%s, aAlamat=%s, aTel=%s, aTarikh=%s, aTerima=%s, aJawatan=%s, aSalinan=%s, aSumber=%s, aMasalah=%s, aKampung=%s, aMukim=%s, aSungai=%s, aDaerah=%s, aStatus=%s, aKod=%s, adKepada=%s, AduandateSuratMin=%s WHERE aduanId=%s",
                       GetSQLValueString($_POST['apengadu'], "text"),
                       GetSQLValueString($_POST['nokp'], "text"),
                       GetSQLValueString($_POST['alamat'], "text"),
                       GetSQLValueString($_POST['notel'], "int"),
                       GetSQLValueString($_POST['atarikh'], "date"),
                       GetSQLValueString($_POST['atarikhterima'], "date"),
                       GetSQLValueString($_POST['ajawatan'], "text"),
                       GetSQLValueString($_POST['asalinan'], "text"),
                       GetSQLValueString($_POST['asumber'], "text"),
                       GetSQLValueString($_POST['amasalah'], "text"),
                       GetSQLValueString($_POST['akampung'], "text"),
                       GetSQLValueString($_POST['amukim'], "text"),
                       GetSQLValueString($_POST['asungai'], "text"),
                       GetSQLValueString($_POST['adaerah'], "text"),
                       GetSQLValueString($_POST['astatus'], "text"),
                       GetSQLValueString($_POST['akodaduan'], "text"),
                       GetSQLValueString($_POST['aFor'], "text"),
					    GetSQLValueString($_POST['trisuratminit'], "text"),
                       GetSQLValueString($_POST['idd'], "int"));

  mysql_select_db($database_dbconn, $dbconn);
  $Result1 = mysql_query($updateSQL, $dbconn) or die(mysql_error());

  if($Result =mysql_query($updateSQL, $dbconn))
	{
        $SMessage = "Data berjaya dikemas kini Sila semak semula data yang telah dikemas kini" ;
        header("refresh:3;aduan");
      }
      else
      {
        $Emessage = "Data gagal dikemaskini";
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

$colname_aduanview = "-1";
if (isset($_GET['aduanId'])) {
  $colname_aduanview = $_GET['aduanId'];
}
mysql_select_db($database_dbconn, $dbconn);
$query_aduanview = sprintf("SELECT * FROM aduan WHERE aduanId= %s", GetSQLValueString($colname_aduanview, "int"));
$aduanview = mysql_query($query_aduanview, $dbconn) or die(mysql_error());
$row_aduanview = mysql_fetch_assoc($aduanview);
$totalRows_aduanview = mysql_num_rows($aduanview);

mysql_select_db($database_dbconn, $dbconn);
$query_collectuser = "SELECT * FROM users";
$collectuser = mysql_query($query_collectuser, $dbconn) or die(mysql_error());
$row_collectuser = mysql_fetch_assoc($collectuser);
$totalRows_collectuser = mysql_num_rows($collectuser);
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
          <li><a href="../pages/aduan"><i class="fa fa-circle-o text-yellow"></i> <span>Aduan</span></a></li>
          <li><a href="../pages/Oaduan"><i class="fa fa-circle-o text-blue"></i> <span>Status Aduan</span></a></li>
          <li><a href="../pages/l_aduan"><i class="fa fa-circle-o text-green"></i> <span>Laporan Aduan</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Kemaskini Aduan
          <small>Kemaskini</small>
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
                <h3 class="box-title">Kemaskini</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form action="<?php echo $editFormAction; ?>" method="POST" role="form" name="formaduan" class="form-horizontal">
                  <div class="box-body">
                    <?php
    								if(isset($Emessage)){
    									?>
    									<div class="alert alert-danger">
    										<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $Emessage; ?></strong>
    									</div>
    									<?php
    								}
    								else if(isset($SMessage)){
    									?>
    									<div class="alert alert-success">
    										<strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $SMessage; ?></strong>
    									</div>
    									<?php
    								}
    								?>
                   <div class="form-group">
                                         <div class="col-md-3">
                                           <label>ID</label>
                                           <input class="form-control" placeholder="id" name="idd" readonly value="<?php echo $row_aduanview['aduanId']; ?>">
                                           </div>
                                       </div>
                                       <div class="form-group">
                                         <div class="col-md-5">
                                           <label>Nama Pengadu</label>
                                           <input name="apengadu" class="form-control" value="<?php echo $row_aduanview['aNama']; ?>">
                                           </div>
                                           <div class="col-md-4">
                                           <label>No Kad Pengenalan</label>
                                           <input name="nokp" class="form-control" placeholder="No Kad Pengenalan" value="<?php echo $row_aduanview['aNokp']; ?>">
                                           </div>
                                       </div>



                                        <div class="form-group">
                                         <div class="col-md-5">
                                           <label>Alamat</label>
                                           <textarea class="form-control" placeholder="Alamat" name="alamat"><?php echo $row_aduanview['aAlamat']; ?></textarea>
                                           </div>
                                       </div>

                                       <div class="form-group">
                                         <div class="col-md-4">
                                              <label>No Tel</label>
                                              <input name="notel" class="form-control" placeholder="No Tel" value="<?php echo $row_aduanview['aTel']; ?>">
                                           </div>
                                           <div class="col-md-4">
                                           <label>Tarikh Aduan</label>
                                           <input name="atarikh" type="text" id="date" class="form-control" placeholder="Tarikh Aduan" value="<?php echo $row_aduanview['aTarikh']; ?>">
                                                                                   </div>
                                             <div class="col-md-4">
                                           <label>Tarikh surat akuan Aduan</label>
                                           <input name="atarikhterima" type="text" id="date2" class="form-control" placeholder="Tarikh Surat Akaun Aduan" value="<?php echo $row_aduanview['aTerima']; ?>">
                                           </div>
                                       </div>

                                            <div class="form-group">
                                         <div class="col-md-4">
                                             <label>Jawatan Pengadu</label>
                                           <select name="ajawatan" class="form-control">
                                             <option value="<?php echo $row_aduanview['aJawatan']; ?>"><?php echo $row_aduanview['aJawatan']; ?></option>
                                             <option value="Penghulu">Penghulu</option>
                                             <option value="Pengerusi JKK">Pengerusi JKK</option>
                                             <option value="Imam">Imam</option>
                                             <option value="Ketua Unit">Ketua Unit</option>
                                             <option value="JKK">JKK</option>
                                             <option value="Penduduk">Penduduk</option>
                                           </select>
                                           </div>
                                           <div class="col-md-4">
                                           <label>Salinan Aduan</label>
                                           <select name="asalinan" class="form-control">
                                             <option value="<?php echo $row_aduanview['aSalinan']; ?>"><?php echo $row_aduanview['aSalinan']; ?></option>
                                             <option value="Menteri Besar">Menteri Besar</option>
                                             <option value="Exco">Exco</option>
                                             <option value="ADUN">ADUN</option>
                                             <option value="Pegawai Daerah">Pegawai Daerah</option>
                                             <option value="PPSN">PPSN</option>
                                             <option value="Penghulu">Penghulu</option>
                                             <option value="SPRM">SPRM"</option>
                                             <option value="Persatuan Pengguna">Persatuan Pengguna</option>
                                           </select>
                                           </div>
                                             <div class="col-md-4">
                                           <label>Sumber</label>
                                           <select name="asumber" type="text" class="form-control">
                                             <option value="<?php echo $row_aduanview['aSumber']; ?>"><?php echo $row_aduanview['aSumber']; ?></option>
                                             <option value="Ibu Pejabat">Ibu Pejabat</option>
                                             <option value="Soalan Dewan">Soalan Dewan</option>
                                             <option value="Telefon">Telefon</option>
                                             <option value="Email">Email</option>
                                             <option value="Datang Sendiri">Datang Sendiri</option>
                                             <option value="Media Cetak">Media Cetak</option>
                                             <option value="Surat">Surat</option>
                                             <option value="Careline">Careline</option>
                                           </select>
                                           </div>
                                       </div>
                                       <div class="form-group">
                                       <div class="col-md-5">
                                         <label>Masalah</label>
                                           <textarea class="form-control" placeholder="Masalah Aduan" type="text" name="amasalah"><?php echo $row_aduanview['aMasalah']; ?></textarea>
                                       </div>

                                       </div>

                                       <div class="form-group">
                                          <div class="col-md-12" style="background-color:#CCC; padding-top:12px;">
                                            <p>Lokasi Kampung</p>
                                          </div>
                                        </div>

                                       <div class="form-group">
                                       <div class="col-md-4">
                                              <label>Kampung</label>
                                           <input name="akampung" type="text" class="form-control" placeholder="Kampung" value="<?php echo $row_aduanview['aKampung']; ?>">
                                           </div>
                                           <div class="col-md-4">
                                           <label>Mukim</label>
                                           <input name="amukim" type="text" class="form-control" placeholder="Mukim" value="<?php echo $row_aduanview['aMukim']; ?>">
                                           </div>
                                             <div class="col-md-4">
                                            <label>Sungai</label>
                                           <input name="asungai" type="text" class="form-control" placeholder="Sungai" value="<?php echo $row_aduanview['aSungai']; ?>">
                                           </div>

                                       </div>

                                           <div class="form-group">
                                       <div class="col-md-4">
                                             <label>Daerah</label>
                                           <input name="adaerah" type="text" class="form-control" placeholder="Daerah" value="<?php echo $row_aduanview['aDaerah']; ?>">
                                           </div>
                                           <div class="col-md-4">
                                           <label>Status</label>
                                           <select class="form-control" name="astatus">
                                               <option value="<?php echo $row_aduanview['aStatus']; ?>"><?php echo $row_aduanview['aStatus']; ?></option>
                                               <option value="Siasat">Siasat</option>
                                               <option value="Telah Disiasat">Telah Disiasat</option>
                                               <option value="Selesai">Selesai</option>


                                           </select>
                                           </div>
                                             <div class="col-md-4">
                                             <label>Kod Aduan</label>
                                           <input class="form-control" placeholder="sila masukkan kod aduan" type="text" name="akodaduan" value="<?php echo $row_aduanview['aKod']; ?>">
                                           </div>

                                       </div>
                                       <div class="form-group">
                                         <div class="col-md-4">
                                           <label>Kepada</label>

                                           <select class="form-control" name="aFor">

                                             <option value="<?php echo $row_aduanview['adKepada']; ?>"><?php echo $row_aduanview['adKepada']; ?></option>
                                               <?php do { ?>
                                               <option value="<?php echo $row_collectuser['userFname']; ?>"><?php echo $row_collectuser['userFname']; ?></option>
                                                   <?php } while ($row_collectuser = mysql_fetch_assoc($collectuser)); ?>
                                           </select>

                                           </div>
                                           <div class="col-md-3">
                                           <label>Tarikh Majukan Kepada Pengawai</label>
                                           <input class="form-control" name="trisuratminit" id="date9" type="text">
                                           </div>
                                       </div>

                                          <div class="box-footer">
                                       <div class="form-group">
                                       <div class="col-md-4">
                                       <button type="submit" class="btn btn-success">Simpan</button>
                                       <button type="reset" class="btn btn-warning">Reset semula</button>
                                       </div>
                                       </div>
                                       <input type="hidden" name="MM_update" value="formaduan">
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
