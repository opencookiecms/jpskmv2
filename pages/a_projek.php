<?php
    session_start();
    $userFname = $_SESSION['sess_userFirstName'];

    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_userFirstName']) || $role!="specialuser" && $role!="superuser"){
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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formprojek")) {
  $insertSQL = sprintf("INSERT INTO projek (PTajuk, PKodvot, PKTawaran, PNosebutharga, PNorujukan, PNoinden, PKospterima, Pkosdipinda, kos_bq, p_belanja, p_baki, p_tanggung, p_bayar, PTempoh, Ptahun, Ptarikhmula, Ptarikhakhir, Pstatus, p_penyelia, p_j_penyelia, p_jurutera, p_j_jurutera, cat_id, kon_id) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['prtajuk'], "text"),
                       GetSQLValueString($_POST['KodVot'], "text"),
                       GetSQLValueString($_POST['prtawaran'], "text"),
                       GetSQLValueString($_POST['prsebutharga'], "text"),
                       GetSQLValueString($_POST['Prujukan'], "text"),
                       GetSQLValueString($_POST['prInden'], "text"),
                       GetSQLValueString($_POST['prkosdtr'], "double"),
                       GetSQLValueString($_POST['prkosdpda'], "double"),
                       GetSQLValueString($_POST['p_bq'], "double"),
                       GetSQLValueString($_POST['p_belanja'], "double"),
                       GetSQLValueString($_POST['p_baki'], "double"),
                       GetSQLValueString($_POST['p_tanggung'], "double"),
                       GetSQLValueString($_POST['p_bayaran'], "double"),
                       GetSQLValueString($_POST['prtempoh'], "text"),
                       GetSQLValueString($_POST['prtahun'], "int"),
                       GetSQLValueString($_POST['prtmula'], "date"),
                       GetSQLValueString($_POST['prtakhir'], "date"),
                       GetSQLValueString($_POST['prstatus'], "text"),
                       GetSQLValueString($_POST['penyelia'], "text"),
                       GetSQLValueString($_POST['jawatan1'], "text"),
                       GetSQLValueString($_POST['jurutera_daerah'], "text"),
                       GetSQLValueString($_POST['Jawatan2'], "text"),
                       GetSQLValueString($_POST['catkservice'], "int"),
                       GetSQLValueString($_POST['kontratorkservice'], "int"));

  mysql_select_db($database_dbconn, $dbconn);
  $Result1 = mysql_query($insertSQL, $dbconn) or die(mysql_error());

  $insertGoTo = "projek";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_dbconn, $dbconn);
$query_konselect = "SELECT * FROM kontraktor";
$konselect = mysql_query($query_konselect, $dbconn) or die(mysql_error());
$row_konselect = mysql_fetch_assoc($konselect);
$totalRows_konselect = mysql_num_rows($konselect);

mysql_select_db($database_dbconn, $dbconn);
$query_catselect = "SELECT * FROM projekatergori";
$catselect = mysql_query($query_catselect, $dbconn) or die(mysql_error());
$row_catselect = mysql_fetch_assoc($catselect);
$totalRows_catselect = mysql_num_rows($catselect);

mysql_select_db($database_dbconn, $dbconn);
$query_indeno = "SELECT * FROM jpskm_inden";
$indeno = mysql_query($query_indeno, $dbconn) or die(mysql_error());
$row_indeno = mysql_fetch_assoc($indeno);
$totalRows_indeno = mysql_num_rows($indeno);

mysql_select_db($database_dbconn, $dbconn);
$query_rujukan = "SELECT * FROM jpskm_rujukan";
$rujukan = mysql_query($query_rujukan, $dbconn) or die(mysql_error());
$row_rujukan = mysql_fetch_assoc($rujukan);
$totalRows_rujukan = mysql_num_rows($rujukan);

mysql_select_db($database_dbconn, $dbconn);
$query_sebutharga = "SELECT * FROM jpskm_sebutharga";
$sebutharga = mysql_query($query_sebutharga, $dbconn) or die(mysql_error());
$row_sebutharga = mysql_fetch_assoc($sebutharga);
$totalRows_sebutharga = mysql_num_rows($sebutharga);

mysql_select_db($database_dbconn, $dbconn);
$query_vip = "SELECT * FROM orangpenting";
$vip = mysql_query($query_vip, $dbconn) or die(mysql_error());
$row_vip = mysql_fetch_assoc($vip);
$totalRows_vip = mysql_num_rows($vip);

mysql_select_db($database_dbconn, $dbconn);
$query_vip2 = "SELECT * FROM orangpenting";
$vip2 = mysql_query($query_vip2, $dbconn) or die(mysql_error());
$row_vip2 = mysql_fetch_assoc($vip2);
$totalRows_vip2 = mysql_num_rows($vip2);

mysql_select_db($database_dbconn, $dbconn);
$query_vip3 = "SELECT * FROM orangpenting";
$vip3 = mysql_query($query_vip3, $dbconn) or die(mysql_error());
$row_vip3 = mysql_fetch_assoc($vip3);
$totalRows_vip3 = mysql_num_rows($vip3);

mysql_select_db($database_dbconn, $dbconn);
$query_vip4 = "SELECT * FROM orangpenting";
$vip4 = mysql_query($query_vip4, $dbconn) or die(mysql_error());
$row_vip4 = mysql_fetch_assoc($vip4);
$totalRows_vip4 = mysql_num_rows($vip4);

mysql_select_db($database_dbconn, $dbconn);
$query_kodvot = "SELECT * FROM jpskm_kotvot";
$kodvot = mysql_query($query_kodvot, $dbconn) or die(mysql_error());
$row_kodvot = mysql_fetch_assoc($kodvot);
$totalRows_kodvot = mysql_num_rows($kodvot);
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
          <li><a href="../pages/projek"><i class="fa fa-circle-o text-yellow"></i> <span>Lihat Projek</span></a></li>
          <li><a href="../pages/Lprojek"><i class="fa fa-circle-o text-aqua"></i> <span>Laporan Projek</span></a></li>
          <li><a href="../pages/Pprojek"><i class="fa fa-circle-o text-green"></i> <span>Peruntukan Projek</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Projek
          <small>Perseketuan</small>
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
                <h3 class="box-title">Borang Projek</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <div class="box-body">
              <form method="POST" action="<?php echo $editFormAction; ?>" role="form" name="formprojek" class="form-horizontal">
                     <div class="form-group">
                       <div class="col-lg-12">
                         <label>Tajuk Projek</label>
                         <textarea class="form-control" name="prtajuk" placeholder="Sila Nyatakan Tajuk Projek" required ></textarea>
                       </div>
                       <div class="form-group"> </div>
                       <div class="col-md-3">
                         <label>Kaedah Tawaran</label>
                         <input class="form-control" placeholder="Kaedah tawaran" name="prtawaran">
                       </div>
                       <div class="col-md-3">
                         <label>No. Sebut Harga</label>
                         <select class="form-control" placeholder="No Sebut Harga" name="prsebutharga">
                           <option value=""></option>
                           <?php do { ?>
                           <option value="<?php echo $row_sebutharga['Nosebutharga']; ?>"><?php echo $row_sebutharga['Nosebutharga']; ?></option>
                           <?php } while ($row_sebutharga = mysql_fetch_assoc($sebutharga)); ?>
                         </select>
                       </div>
                       <div class="col-md-3">
                         <label>No Inden</label>
                         <select class="form-control" name="prInden">
                           <option value=""></option>
                           <?php do { ?>
                           <option value="<?php echo $row_indeno['IndenNo']; ?>"><?php echo $row_indeno['IndenNo']; ?></option>
                           <?php } while ($row_indeno = mysql_fetch_assoc($indeno)); ?>
                         </select>
                       </div>
                       <div class="col-md-3">
                         <label>Kod Vot</label>

                           <select class="form-control" placeholder="kod vot" type="text" name="KodVot">
                             <option value=""></option>
                             <?php do { ?>
                             <option value="<?php echo $row_kodvot['KodVot']; ?>"><?php echo $row_kodvot['KodVot']; ?></option>
                             <?php } while ($row_kodvot = mysql_fetch_assoc($kodvot)); ?>
                           </select>

                       </div>
                     </div>
                     <div class="form-group">
                       <div class="col-md-3">
                         <label>No Rujukan</label>
                         <select class="form-control" name="Prujukan">
                           <option value=""></option>
                           <?php do { ?>
                           <option value="<?php echo $row_rujukan['NoRujukan']; ?>"><?php echo $row_rujukan['NoRujukan']; ?></option>
                           <?php } while ($row_rujukan = mysql_fetch_assoc($rujukan)); ?>
                         </select>
                       </div>
                       <div class="col-md-4">
                         <label>Kos Peruntukan diterima/anggaran (RM)</label>
                         <input class="form-control" placeholder="Kos anggaran diterima" type="text" name="prkosdtr">
                       </div>
                       <div class="col-md-4">
                         <label>Kos Peruntukan Dipinda/Anggaran (RM)</label>
                         <input class="form-control" placeholder="Kos anggaran dipinda" type="text" name="prkosdpda">
                       </div>
                     </div>
                     <div class="form-group">
                       <div class="col-md-3">
                         <label>Tempoh</label>
                         <input class="form-control" placeholder="Tempoh Projek" type="text" name="prtempoh" id="date1">
                       </div>
                       <div class="col-md-3">
                         <label>Tahun</label>
                         <input class="form-control" placeholder="Tahun" type="text" name="prtahun">
                       </div>
                     </div>
                     <div class="form-group">
                       <div class="col-md-3">
                         <label>Tarikh Mula</label>
                         <input class="form-control" placeholder="Projek Mula" type="text" name="prtmula" id="date2">
                       </div>
                       <div class="col-md-3">
                         <label>Tarikh Akhir</label>
                         <input class="form-control" placeholder="Projek Akhir" type="text" name="prtakhir" id="date3">
                       </div>
                     </div>
                     <div class="form-group">
                       <div class="col-md-3">
                         <label>Kos BQ Ditawarkan</label>
                         <input class="form-control" placeholder="RM:" type="text" name="p_bq">
                       </div>
                       <div class="col-md-3">
                         <label>Perbelanjaan</label>
                         <input class="form-control" placeholder="Perbelanjaan Sehingga Kini" type="text" name="p_belanja">
                       </div>
                       <div class="col-md-3">
                         <label>Baki Belum Belanja</label>
                         <input class="form-control" placeholder="Baki Belum Belanja" type="text" name="p_baki">
                       </div>
                     </div>
                     <div class="form-group">
                       <div class="col-md-3">
                         <label>Nilai Tanggungan</label>
                         <input class="form-control" placeholder="Nilai Tanggunan Perbelanjaan" type="text" name="p_tanggung">
                       </div>
                       <div class="col-md-3">
                         <label>Bayaran Terkini</label>
                         <input class="form-control" placeholder="Bayaran Terkini" type="text" name="p_bayaran">
                       </div>
                     </div>
                     <div class="form-group">
                       <div class="col-md-3">
                         <label>Status</label>
                         <select class="form-control" name="prstatus">
                           <option value=""></option>
                           <option value="Semakan">Semakan</option>
                           <option value="Mula">Mula</option>
                           <option value="Tamat">Tamat</option>
                           <option value="Tutup">Tutup</option>
                           <option value="Buka">Buka</option>
                         </select>
                       </div>
                       <div class="col-md-3">
                         <label>Kontraktor</label>
                         <select class="form-control" name="kontratorkservice">
                           <option value=""></option>
                           <?php do { ?>
                           <option value="<?php echo $row_konselect['kontraktorId']; ?>"><?php echo $row_konselect['konName']; ?> </option>
                           <?php } while ($row_konselect = mysql_fetch_assoc($konselect)); ?>
                         </select>
                       </div>
                       <div class="col-md-3">
                         <label>Jenis Peruntukan</label>
                         <select class="form-control" name="catkservice">
                           <option value=""></option>
                           <?php do { ?>
                           <option value="<?php echo $row_catselect['catId']; ?>"><?php echo $row_catselect['category']; ?> </option>
                           <?php } while ($row_catselect = mysql_fetch_assoc($catselect)); ?>
                         </select>
                       </div>
                     </div>
                     <div class="form-group">
                       <div class="col-md-12" style="background-color:#CCC; padding-top:12px;">
                         <p>Maklumat Jurutera dan Penyelia Projek</p>
                       </div>
                     </div>
                     <div class="form-group">
                    	  <div class="col-md-3">
                         <label>Pegawai Penyelia Kerja</label>

                           <select name="penyelia" class="form-control">
                             <option value=""></option>
                               <?php do { ?>
                             <option value="<?php echo $row_vip['NamaO']; ?>"><?php echo $row_vip['NamaO']; ?></option>
                              <?php } while ($row_vip = mysql_fetch_assoc($vip)); ?>
                           </select>

                         </div>
                            	  <div class="col-md-3">
                         <label>Jurutera Daerah</label>

                           <select name="jurutera_daerah" class="form-control">
                             <option value=""></option>
                               <?php do { ?>
                             <option value="<?php echo $row_vip2['NamaO']; ?>"><?php echo $row_vip2['NamaO']; ?></option>
                              <?php } while ($row_vip2 = mysql_fetch_assoc($vip2)); ?>
                           </select>

                         </div>
                     </div>
                           <div class="form-group">
                    	  <div class="col-md-3">
                         <label>Jawatan</label>

                           <select name="jawatan1" class="form-control">
                             <option value=""></option>
                               <?php do { ?>
                             <option value="<?php echo $row_vip3['JawatanO']; ?>"><?php echo $row_vip3['JawatanO']; ?></option>
                              <?php } while ($row_vip3 = mysql_fetch_assoc($vip3)); ?>
                           </select>

                         </div>
                            	  <div class="col-md-3">
                         <label>Jurutera Daerah</label>

                           <select name="Jawatan2" class="form-control">
                             <option value=""></option>
                               <?php do { ?>
                             <option value="<?php echo $row_vip4['JawatanO']; ?>"><?php echo $row_vip4['JawatanO']; ?></option>
                              <?php } while ($row_vi4p = mysql_fetch_assoc($vip4)); ?>
                           </select>

                         </div>
                     </div>
                     <div class="box-footer">
                     <button type="submit" class="btn btn-success">Simpan</button>
                     <button type="reset" class="btn btn-danger">Reset Semula</button>
                     <input type="hidden" name="MM_insert" value="formaduan">
                     <input type="hidden" name="MM_insert" value="formprojek">
                   </form>
                 </div>
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
