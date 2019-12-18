<?php
session_start();
$userLname = $_SESSION['sess_userLastNames'];
$userFname = $_SESSION['sess_userFirstName'];

$role = $_SESSION['sess_userrole'];
if(!isset($_SESSION['sess_userFirstName']) || $role!="superuser" && $role!="adminkursus" && $role!="user" && $role!="specialuser" &&$role!="adminpengesyor" & $role!="adminkontraktor" && $role!="adminaduan"){
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

$colname_konvieweer = "-1";
if (isset($_GET['kontraktorId'])) {
  $strid = $_GET['kontraktorId'];
  $colname_konvieweer = $strid;
}
mysql_select_db($database_dbconn, $dbconn);
$query_konvieweer = sprintf("SELECT * FROM kontraktor WHERE md5(kontraktorId)= '$strid'", GetSQLValueString($colname_konvieweer, "int"));
$konvieweer = mysql_query($query_konvieweer, $dbconn) or die(mysql_error());
$row_konvieweer = mysql_fetch_assoc($konvieweer);
$totalRows_konvieweer = mysql_num_rows($konvieweer);

mysql_select_db($database_dbconn, $dbconn);
$query_sejarah = "SELECT kontraktor.konName,  projek.PTajuk, projek.Ptarikhmula, projek.Ptarikhakhir, projekatergori.category, projek.Pstatus FROM projek,kontraktor, projekatergori WHERE projek.kon_id=kontraktor.kontraktorId and projek.cat_id=projekatergori.catId and md5(kontraktorId)='$strid' ORDER BY projek.ProjekID";
$sejarah = mysql_query($query_sejarah, $dbconn) or die(mysql_error());
$row_sejarah = mysql_fetch_assoc($sejarah);
$totalRows_sejarah = mysql_num_rows($sejarah);
?>

<?php

@session_start();
$RegDate = date($row_konvieweer['sijilJPSSah']);
$endRegDate = date($row_konvieweer['sijilJPSTamat']);
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
  <link href="../assets/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">

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
            <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
        <?php

        $role = $_SESSION['sess_userrole'];
        ?>
        <?php switch($role):

          case "superuser": ?>
          <ul class="sidebar-menu">
            <li class="header">Menu Utama</li>
            <li><a href="../adminpanel/adminpanel"><i class="fa fa-circle-o text-red"></i> <span>Halaman Utama</span></a></li>
            <li><a href="../pages/kontraktor"><i class="fa fa-circle-o text-yellow"></i> <span>Senarai kontraktor</span></a></li>
            <li class="active"><a href="../pages/l_d_kontraktor"><i class="fa fa-circle-o text-green"></i> <span>Maklumat Syarikat</span></a></li>
            <li><a href="../pages/p_s_kontraktor"><i class="fa fa-circle-o text-blue"></i> <span>Pengesahan Sijil</span></a></li>
          </ul>

          <?php break; ?>
          <?php case "user": ?>
          <ul class="sidebar-menu">
            <li><a href="../upanel/user_panel"><i class="fa fa-circle-o text-red"></i> <span>Halaman Utama</span></a></li>
            <li><a href="../pages/kontraktor"><i class="fa fa-circle-o text-yellow"></i> <span>Senarai kontraktor</span></a></li>
          </ul>
          <?php break; ?>
          <?php case "adminaduan": ?>
          <ul class="sidebar-menu">
            <li><a href="../upanel/user_panel"><i class="fa fa-circle-o text-red"></i> <span>Halaman Utama</span></a></li>
            <li><a href="../pages/kontraktor"><i class="fa fa-circle-o text-yellow"></i> <span>Senarai kontraktor</span></a></li>
          </ul>
          <?php break; ?>
          <?php case "specialuser": ?>
          <ul class="sidebar-menu">
            <li><a href="../upanel/user_panel"><i class="fa fa-circle-o text-red"></i> <span>Halaman Utama</span></a></li>
            <li><a href="../pages/kontraktor"><i class="fa fa-circle-o text-yellow"></i> <span>Senarai kontraktor</span></a></li>
          </ul>
          <?php break; ?>
          <?php case "adminkursus": ?>
          <ul class="sidebar-menu">
            <li class="header">Menu Utama</li>
            <li><a href="../kursus/index.php"><i class="fa fa-circle-o text-red"></i> <span>Halaman Utama</span></a></li>
            <li><a href="../pages/kontraktor"><i class="fa fa-circle-o text-yellow"></i> <span>Senarai kontraktor</span></a></li>
          </ul>
          <?php break; ?>
          <?php case "adminpengesyor": ?>
          <ul class="sidebar-menu">
            <li><a href="../upanel/user_panel"><i class="fa fa-circle-o text-red"></i> <span>Halaman Utama</span></a></li>
            <li><a href="../pages/kontraktor"><i class="fa fa-circle-o text-yellow"></i> <span>Senarai kontraktor</span></a></li>
          </ul>
          <?php break; ?>
          <?php case "adminkontraktor": ?>
          <ul class="sidebar-menu">
            <li class="header">Menu Utama</li>
            <li><a href="../upanel/user_panel"><i class="fa fa-circle-o text-red"></i> <span>Halaman Utama</span></a></li>
            <li><a href="../pages/kontraktor"><i class="fa fa-circle-o text-yellow"></i> <span>Senarai kontraktor</span></a></li>
            <li class="active"><a href="../pages/l_d_kontraktor"><i class="fa fa-circle-o text-green"></i> <span>Maklumat Syarikat</span></a></li>
            <li><a href="../pages/p_s_kontraktor"><i class="fa fa-circle-o text-blue"></i> <span>Pengesahan Sijil</span></a></li>
          </ul>
          <?php break; ?>
          <?php endswitch; ?>

        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Kontraktor
            <small>Maklumat Kontraktor</small>
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
                    <a class="btn btn-success">
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
                    <a class="btn btn-success">
                      <i class="ion ion-ios-paper-outline "></i> Tambah Kontraktor
                    </a>
                    <?php break; ?>
                    <?php endswitch; ?>

                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <!-- Custom Tabs -->
                    <div class="nav-tabs-custom">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Maklumat Syarikat</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Maklumat Rakan Konsi</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Sijil</a></li>
                        <li><a href="#tab_4" data-toggle="tab">Sejarah Projek</a></li>


                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                          <table class="table table-bordered">

                            <tr>
                              <td colspan="9" style="background-color:#FFC">Maklumat Syarikat</td>
                            </tr>
                            <tr>
                              <td colspan="9"><?php if (date("Y-m-d") < $endRegDate) { ?>
                                <span style="font-weight:bold; background-color:#093; color:#FFF; font-size:18px; padding:5px;" >Berdaftar</span>
                              <?php } else{?>
                                <span style="font-weight:bold;background-color:#F33; color:#FFF; font-size:18px; padding:5px;">Tidak Berdaftar</span>
                              <?php } ?></td>
                            </tr>
                            <tr>
                              <th colspan="2">Nama Syarikat:</th>
                              <td colspan="2"><?php echo $row_konvieweer['konName']; ?></td>
                              <th>Gambar:</th>
                              <td colspan="4"><img src="<?php echo $row_konvieweer['konImage']; ?>"  style="width:30%"></td>
                            </tr>
                            <tr>
                              <th>Alamat</th>
                              <td colspan="9"><?php echo $row_konvieweer['KonAlamat']; ?></td>
                            </tr>
                            <tr>
                              <th>Alamat1</th>
                              <td colspan="8"><?php echo $row_konvieweer['konAlamatExtS']; ?></td>
                            </tr>
                            <tr>
                              <th>Alamat2</th>
                              <td colspan="8"><?php echo $row_konvieweer['konAlamatExtD']; ?></td>
                            </tr>
                            <tr>
                              <th>Poskod:</th>
                              <td><?php echo $row_konvieweer['konPoskod']; ?></td>
                              <th>Bandar:</th>
                              <td><?php echo $row_konvieweer['konBandar']; ?></td>
                              <th>Daerah:</th>
                              <td><?php echo $row_konvieweer['konDaerah']; ?></td>
                              <th>Negeri:</th>
                              <td colspan="2"><?php echo $row_konvieweer['konNegeri']; ?></td>

                            </tr>
                            <tr>
                              <th>No Telefon Pejabat</th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['konTel']; ?></td>
                              <td colspan="8" class="tg-yw4l">&nbsp;</td>
                            </tr>
                            <tr>
                              <th>Nama Pengurus</th>
                              <td colspan="2"><?php echo $row_konvieweer['konPengurus']; ?></td>
                              <th>No Kad Pengenalan</th>
                              <td colspan="2"><?php echo $row_konvieweer['NoKPpengurus']; ?></td>
                              <th>No Tel</th>
                              <td colspan="3"><?php echo $row_konvieweer['NoTelPengurus']; ?></td>
                            </tr>
                            <tr>
                              <th colspan="9"><center>SSM</center></th>
                            </tr>
                            <tr>
                              <th>No Pendaftaran SSM:</th>
                              <td><?php echo $row_konvieweer['daftarSSM']; ?></td>
                              <th>Tempoh Sah Dari:</th>
                              <td><?php echo $row_konvieweer['daftarHSSM']; ?></td>
                              <th>Hingga:</th>
                              <td><?php echo $row_konvieweer['daftarTSSM']; ?></td>
                            </tr>
                            <tr>
                              <th colspan="9"><center>GST (Cukai Barang Dan Perkhidmatan)</center></th>
                            </tr>
                            <tr>
                              <th>No Pendaftaran GST:</th>
                              <td><?php echo $row_konvieweer['daftarGST']; ?></td>
                              <th>Tempoh Sah Dari:</th>
                              <td><?php echo $row_konvieweer['dateDGST']; ?></td>
                              <th>Hingga:</th>
                              <td><?php echo $row_konvieweer['dateTGST']; ?></td>
                            </tr>

                          </table>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                          <table class="table table-bordered">
                            <tr>
                              <td colspan="9"  style="background-color:#FFC">Maklumat Rakan Konsi<br></td>
                            </tr>
                            <tr>
                              <th>Rakan Konsi (1)</th>
                              <td colspan="2"><?php echo $row_konvieweer['RKsatu']; ?></td>
                              <th>No Kad Pengenalan</th>
                              <td colspan="2"><?php echo $row_konvieweer['RKsatuNokp']; ?></td>
                              <th>No Tel</th>
                              <td colspan="3"><?php echo $row_konvieweer['RKsatuNotel']; ?></td>

                            </tr>
                            <tr>
                              <th>Rakan Konsi (2)</th>
                              <td colspan="2"><?php echo $row_konvieweer['RKdua']; ?></td>
                              <th>No Kad Pengenalan</th>
                              <td colspan="2"><?php echo $row_konvieweer['RKduaNokp']; ?></td>
                              <th>No Tel</th>
                              <td colspan="3"><?php echo $row_konvieweer['RKduaNotel']; ?></td>
                            </tr>
                            <tr>
                              <th>Rakan Konsi (3)</th>
                              <td colspan="2"><?php echo $row_konvieweer['RKtiga']; ?></td>
                              <th>No Kad Pengenalan</th>
                              <td colspan="2"><?php echo $row_konvieweer['RKtigaNokp']; ?></td>
                              <th>No Tel</th>
                              <td colspan="3"><?php echo $row_konvieweer['RKtigaNotel']; ?></td>
                            </tr>
                            <tr>
                              <th>Rakan Konsi (4)</th>
                              <td colspan="2"><?php echo $row_konvieweer['RKempat']; ?></td>
                              <th>No Kad Pengenalan</th>
                              <td colspan="2"><?php echo $row_konvieweer['RKempatNokp']; ?></td>
                              <th>No Tel</th>
                              <td colspan="3"><?php echo $row_konvieweer['RKempatNotel']; ?></td>
                            </tr>
                            <tr>
                              <th>Email:</th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['konEmail']; ?><br></td>
                              <th>No Fax:<br></th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['koFax']; ?></td>
                              <th>Bank</th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['konBank']; ?></td>
                              <th>No Akaun:<br></th>
                              <td class="tg-yw4l" colspan="3"><?php echo $row_konvieweer['konAkaunBank']; ?></td>
                            </tr>

                            <tr>
                              <td colspan="9" style="background-color:#FFC">Kawasan Operasi Syarikat</td>
                            </tr>

                            <tr>
                              <th>Kawasan Operasi</th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['konKawOperasi']; ?></td>
                              <th>Status Kontraktor</th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['KonStatus']; ?></td>
                              <th>Prestasi Kontraktor<br></th>
                              <td colspan="5" class="tg-yw4l"><?php echo $row_konvieweer['konPrestasi']; ?></td>
                            </tr>

                          </table>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_3">
                          <table class="table table-bordered">

                            <td colspan="9" style="background-color:#FFC">Status Pendaftaran Syarikat<br></td>
                          </tr>
                          <tr>
                            <th>Status Pendaftaran<br></th>
                            <td class="tg-yw4l"><?php echo $row_konvieweer['spStatusPendaftaran']; ?></td>
                            <td class="tg-yw4l" colspan="8"><?php echo $row_konvieweer['spNoSiri']; ?></td>
                          </tr>
                          <tr>
                            <th>Permohonan Baru<br></td>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['spPBaharu']; ?></td>
                              <th>Pembaharuan</th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['spPembaharuan']; ?></td>
                              <th>Lain-Lain</th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['spLainLain']; ?></td>
                              <th>Kategori<br></th>
                              <td colspan="3" class="tg-yw4l"><?php echo $row_konvieweer['spKategori']; ?></td>
                            </tr>
                            <tr>
                              <td colspan="9" style="background-color:#FFC">Maklumat Pemohon</td>
                            </tr>
                            <tr>
                              <th>Tarikh Permohonan</th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['spDateMohon']; ?></td>
                              <th>Cas Perkhidmatan</th>
                              <td>RM:<?php echo $row_konvieweer['spCaj']; ?></td>
                              <th>No Resit</th>
                              <td colspan="4"><?php echo $row_konvieweer['spNoResit']; ?></td>

                            </tr>
                            <tr>
                              <th>No Sijil Pendaftaran<br></th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['spNoSijil']; ?></td>
                              <th>Tarikh Sijil Dikeluarkan<br></th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['spDateKeluar']; ?></td>
                              <th>Tarikh Tamat Sijil<br></th>
                              <td colspan="4"><?php echo $row_konvieweer['spDateTamat']; ?></td>
                            </tr>
                            <tr>
                              <td colspan="9" style="background-color:#FFC">Disemak Oleh</td>
                            </tr>
                            <tr>
                              <th>Disemak Olah<br></th>
                              <td colspan="2"><?php echo $row_konvieweer['spDisemak']; ?></td>
                              <th>DiSahkan Oleh</th>
                              <td colspan="2"><?php echo $row_konvieweer['spDisah']; ?></td>
                              <th>Diluluskan Oleh</th>
                              <td colspan="2"><?php echo $row_konvieweer['spLulus']; ?></td>

                            </tr>
                            <tr>
                              <th>Jawatan Penyemak</th>
                              <td colspan="2"><?php echo $row_konvieweer['spJwtnPenyemak']; ?></td>
                              <th>Jawatan Pengurus</th>
                              <td colspan="2"><?php echo $row_konvieweer['spJwtnSah']; ?></td>
                              <th>Jawatan Penglulus</th>
                              <td colspan="2"><?php echo $row_konvieweer['spJwtnLulus']; ?></td>

                            </tr>
                            <tr>
                              <th>Status Sijil<br></th>
                              <td colspan="9" class="tg-yw4l"><?php echo $row_konvieweer['spStatusSijil']; ?></td>
                            </tr>
                            <tr>
                              <td colspan="9" style="background-color:#FFC">1) Lembaga Pembangunan Industri Pembinaan Malaysia (LPIPM)</td>
                            </tr>
                            <tr>
                              <td class="tg-9hbo" colspan="10">a) Sijil Perakuan Pendaftaran Kontraktro (PPK)</td>
                            </tr>
                            <tr>
                              <th>No Pendaftaran<br></th>
                              <td colspan="2"><?php echo $row_konvieweer['sijilNoPendaftaran']; ?></td>
                              <th>Tempoh Sah Dari</th>
                              <td colspan="1"><?php echo $row_konvieweer['sijilSah']; ?></td>
                              <th>Hingga</th>
                              <td colspan="3" class="tg-yw4l"><?php echo $row_konvieweer['sijilTamat']; ?></td>
                            </tr>
                            <tr>
                              <th>Gred_1<br></th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['sijilPPKGredOne']; ?></td>
                              <th>Kategori</th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['sijilPPKCatOne']; ?></td>
                              <th>Pengkususan</th>
                              <td colspan="5" class="tg-yw4l"><?php echo $row_konvieweer['sijilPPKKhuOne']; ?></td>
                            </tr>
                            <tr>
                              <th>Gred_1_2</th>
                              <th><?php echo $row_konvieweer['sijilPPKGredTwo']; ?></th>
                              <th>Kategori</th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['sijilPPKCatTwo']; ?></td>
                              <th>Pengkususan</th>
                              <td colspan="5" class="tg-yw4l"><?php echo $row_konvieweer['sijilPPKKhuTwo']; ?></td>
                            </tr>
                            <tr>
                              <th>Gred_1_3</th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['sijilPPKGredThree']; ?></td>
                              <th>Kategori</th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['sijilPPKCatThree']; ?></td>
                              <th>Pengkususan</th>
                              <td colspan="5" class="tg-yw4l"><?php echo $row_konvieweer['sijilPPKKhuThree']; ?></td>
                            </tr>
                            <tr>
                              <td class="tg-9hbo" colspan="10">b) Sijil Perolehan Kerja Kerajaan (SPKK)</td>
                            </tr>
                            <tr>
                              <th>No Pendaftaran</th>
                              <td colspan="2"><?php echo $row_konvieweer['sijilSPKKNo']; ?></td>
                              <th>Tempoh Sah Dari</th>
                              <td colspan="1"><?php echo $row_konvieweer['sijilSPKKsah']; ?></td>
                              <th>Hingga</th>
                              <td colspan="3"><?php echo $row_konvieweer['sijilSPKKTamat']; ?></td>
                            </tr>
                            <tr>
                              <th>Gred_2_1</th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['sijilSPPKGredOne']; ?></td>
                              <th>Kategori</th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['sijilSPPKCatOne']; ?></td>
                              <th>Pengkususan</th>
                              <td colspan="5" class="tg-yw4l"><?php echo $row_konvieweer['sijilSPPKKhuOne']; ?></td>
                            </tr>
                            <tr>
                              <th>Gred_2_2</th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['sijilSPPKGredTwo']; ?></td>
                              <th>Kategori</th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['sijilSPPKCatTwo']; ?></td>
                              <th>Pengkususan</th>
                              <td colspan="5" class="tg-yw4l"><?php echo $row_konvieweer['sijilSPPKKhuTwo']; ?></td>
                            </tr>
                            <tr>
                              <th>Gred_2_3</th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['sijilSPPKGredThree']; ?></td>
                              <th>Kategori</th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['sijilSPPKCatThree']; ?></td>
                              <th>Pengkususan</th>
                              <td colspan="5" class="tg-yw4l"><?php echo $row_konvieweer['sijilSPPKKhuThree']; ?></td>
                            </tr>
                            <tr>
                              <td colspan="9" style="background-color:#FFC">2) Pusat Khidmat Kontraktor (PPK)</td>
                            </tr>
                            <tr>
                              <td class="tg-9hbo" colspan="10">a) Sijil Taraf Bumiputra (STB)</td>
                            </tr>
                            <tr>
                              <th>No Pendaftaran<br></th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['sijiSTBNo']; ?></td>
                              <th>Tempoh Sah Dari</th>
                              <td ><?php echo $row_konvieweer['sijilSTBSah']; ?></td>
                              <th>Hingga</th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['sijilSTBTamat']; ?></td>
                              <th>Gred Pendaftaran<br></th>
                              <td colspan="2"><?php echo $row_konvieweer['sijilSTBGred']; ?></td>

                            </tr>
                            <tr>
                              <td class="tg-achz" colspan="10">Jabatan Pengairan dan Saliran (JPS)</td>
                            </tr>
                            <tr>
                              <td class="tg-9hbo" colspan="10">a) Sijil Perakuan Pendaftaran Pembekal/Kontraktor(SPPPK)</td>
                            </tr>
                            <tr>
                              <th>No Pendaftaran</th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['sijilJPSNo']; ?></td>
                              <th>Tempoh Sah Dari</th>
                              <td class="tg-yw4l"><?php echo $row_konvieweer['sijilJPSSah']; ?></td>
                              <th>Hingga</td>
                                <td class="tg-yw4l"><?php echo $row_konvieweer['sijilJPSTamat']; ?></td>
                                <th>Gred Pendaftaran</th>
                                <td colspan="2"><?php echo $row_konvieweer['sijilJPSKate']; ?></td>

                              </tr>

                            </table>
                          </div>
                          <div class="tab-pane" id="tab_4">
                            <table class="table table-bordered">

                              <tr>
                                <th>Bil</th>
                                <th>Projek</th>
                                <th>Tarikh Mula</th>
                                <th>Tarikh Siap</th>
                                <th>Kategori</th>
                                <th>Status</th>
                              </tr>
                              <?php $bil = 0 ?>
                              <?php do { ?>
                                <tr>
                                  <?php $bil+=1 ?>


                                  <td><?php echo $bil ?></td>
                                  <td><?php echo $row_sejarah['PTajuk']; ?></td>
                                  <td><?php echo $row_sejarah['Ptarikhmula']; ?></td>
                                  <td><?php echo $row_sejarah['Ptarikhakhir']; ?></td>
                                  <td><?php echo $row_sejarah['category']; ?></td>
                                  <td><?php echo $row_sejarah['Pstatus']; ?></td>
                                <?php } while ($row_sejarah = mysql_fetch_assoc($sejarah)); ?>
                              </tr>



                            </table>
                          </div>
                          <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                      </div>
                      <!-- nav-tabs-custom -->

                    </div>
                    <!-- /.box -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- /.content -->

              </section>
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
          <script src="../assets/js/jquery-1.12.4.js"></script>
          <script src="../assets/jquery-ui-1.12.1/jquery-ui.js"></script>
          <script>
          $( function() {
            $( "#tabs" ).tabs();
          } );
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
        <?php
        mysql_free_result($konvieweer);

        mysql_free_result($sejarah);
        ?>
