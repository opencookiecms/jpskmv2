<?php
session_start();
$userLname = $_SESSION['sess_userLastNames'];
$userFname = $_SESSION['sess_userFirstName'];

$role = $_SESSION['sess_userrole'];
if(!isset($_SESSION['sess_userFirstName']) || $role!="adminkontraktor" && $role!="superuser"){
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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "conformupdate")) {


  $updateSQL = sprintf("UPDATE kontraktor SET konName=%s, KonAlamat=%s, konAlamatExtS=%s, konAlamatExtD=%s, konPoskod=%s, konBandar=%s, konDaerah=%s, konNegeri=%s, konTel=%s, konPengurus=%s, NoKPpengurus=%s, NoTelPengurus=%s, RKsatu=%s, RKsatuNokp=%s, RKsatuNotel=%s, RKdua=%s, RKduaNokp=%s, RKduaNotel=%s, RKtiga=%s, RKtigaNokp=%s, RKtigaNotel=%s, RKempat=%s, RKempatNokp=%s, RKempatNotel=%s, konEmail=%s, koFax=%s, konBank=%s, konAkaunBank=%s, konKawOperasi=%s, konPrestasi=%s, spPBaharu=%s, spPembaharuan=%s, spLainLain=%s, spKategori=%s, spDateMohon=%s, spCaj=%s, spNoResit=%s, spNoSijil=%s, spDateKeluar=%s, spDateTamat=%s, spDisemak=%s, spJwtnPenyemak=%s, spDisah=%s, spJwtnSah=%s, spLulus=%s, spJwtnLulus=%s, sijilNoPendaftaran=%s, sijilSah=%s, sijilTamat=%s, sijilPPKGredOne=%s, sijilPPKCatOne=%s, sijilPPKKhuOne=%s, sijilPPKGredTwo=%s, sijilPPKCatTwo=%s, sijilPPKKhuTwo=%s, sijilPPKGredThree=%s, sijilPPKCatThree=%s, sijilPPKKhuThree=%s, sijilSPKKNo=%s, sijilSPKKsah=%s, sijilSPKKTamat=%s, sijilSPPKGredOne=%s, sijilSPPKCatOne=%s, sijilSPPKKhuOne=%s, sijilSPPKGredTwo=%s, sijilSPPKCatTwo=%s, sijilSPPKKhuTwo=%s, sijilSPPKGredThree=%s, sijilSPPKCatThree=%s, sijilSPPKKhuThree=%s, sijiSTBNo=%s, sijilSTBSah=%s, sijilSTBTamat=%s, sijilSTBGred=%s, daftarSSM=%s, daftarHSSM=%s, daftarTSSM=%s, daftarGST=%s,dateDGST=%s,dateTGST=%s, sijilJPSNo=%s, sijilJPSSah=%s, sijilJPSTamat=%s, sijilJPSKate=%s WHERE kontraktorId=%s",
  GetSQLValueString($_POST['konNama'], "text"),

  GetSQLValueString($_POST['KoonAlamat'], "text"),
  GetSQLValueString($_POST['KoonAlamatexts'], "text"),
  GetSQLValueString($_POST['KoonAlamatextd'], "text"),
  GetSQLValueString($_POST['koonPoskod'], "int"),
  GetSQLValueString($_POST['koonBandar'], "text"),
  GetSQLValueString($_POST['koonDaerah'], "text"),
  GetSQLValueString($_POST['koonNegeri'], "text"),
  GetSQLValueString($_POST['koonTelPej'], "text"),
  GetSQLValueString($_POST['koonPengurus'], "text"),
  GetSQLValueString($_POST['koonKPPen'], "text"),
  GetSQLValueString($_POST['koonTelPengurus'], "text"),
  GetSQLValueString($_POST['koonRKsatu'], "text"),
  GetSQLValueString($_POST['koonRKKPsatu'], "text"),
  GetSQLValueString($_POST['koonKPTelsatu'], "text"),
  GetSQLValueString($_POST['koonRKdua'], "text"),
  GetSQLValueString($_POST['koonRKKPdua'], "text"),
  GetSQLValueString($_POST['koonRKTeldua'], "text"),
  GetSQLValueString($_POST['koonRKtiga'], "text"),
  GetSQLValueString($_POST['koonRKKPtiga'], "text"),
  GetSQLValueString($_POST['koonRKTeltiga'], "text"),
  GetSQLValueString($_POST['koonRKempat'], "text"),
  GetSQLValueString($_POST['koonRKKPempat'], "text"),
  GetSQLValueString($_POST['koonRKTelempat'], "text"),
  GetSQLValueString($_POST['koonrknemail'], "text"),
  GetSQLValueString($_POST['koonfax'], "text"),
  GetSQLValueString($_POST['koonBank'], "text"),
  GetSQLValueString($_POST['koonAkaunBank'], "text"),
  GetSQLValueString($_POST['koonOperasi'], "text"),
  //GetSQLValueString($_POST['koonStatus'], "text"),
  GetSQLValueString($_POST['koonPrestasi'], "text"),
  //GetSQLValueString($_POST['daftarstatus'], "text"),
  GetSQLValueString($_POST['pbaru'], "text"),
  GetSQLValueString($_POST['pembaru'], "text"),
  GetSQLValueString($_POST['daftarlainlain'], "text"),
  GetSQLValueString($_POST['daftarkategory'], "text"),
  GetSQLValueString($_POST['daftarMohon'], "text"),
  GetSQLValueString($_POST['daftarCas'], "double"),
  GetSQLValueString($_POST['daftarResit'], "text"),
  GetSQLValueString($_POST['daftarSijilNo'], "text"),
  GetSQLValueString($_POST['daftarKeluarkan'], "text"),
  GetSQLValueString($_POST['daftarTamat'], "text"),
  GetSQLValueString($_POST['daftardisemak'], "text"),
  GetSQLValueString($_POST['daftarjawatanSemak'], "text"),
  GetSQLValueString($_POST['daftardisahkan'], "text"),
  GetSQLValueString($_POST['daftarjawatanUrus'], "text"),
  GetSQLValueString($_POST['daftardiluluskan'], "text"),
  GetSQLValueString($_POST['daftarjawatanLulus'], "text"),
  //GetSQLValueString($_POST['daftarstatussijil'], "text"),
  GetSQLValueString($_POST['sijilNoDaftarPPK'], "text"),
  GetSQLValueString($_POST['sijilSahPPK'], "text"),
  GetSQLValueString($_POST['sijilHinggaPPK'], "text"),
  GetSQLValueString($_POST['sijilGredOnePPK'], "text"),
  GetSQLValueString($_POST['sijilGredKatOnePPK'], "text"),
  GetSQLValueString($_POST['sijilGredKhususOnePPK'], "text"),
  GetSQLValueString($_POST['sijilGredTwoPPK'], "text"),
  GetSQLValueString($_POST['sijilGredKatTwoPPK'], "text"),
  GetSQLValueString($_POST['sijilGredKhususTwoPPK'], "text"),
  GetSQLValueString($_POST['sijilGredThreePPK'], "text"),
  GetSQLValueString($_POST['sijilGredKatThreePPK'], "text"),
  GetSQLValueString($_POST['sijilGredKhususThreePPK'], "text"),
  GetSQLValueString($_POST['sijilNoDaftarSPKK'], "text"),
  GetSQLValueString($_POST['sijilSahSPKK'], "text"),
  GetSQLValueString($_POST['sijilHinggaSPKK'], "text"),
  GetSQLValueString($_POST['sijilGredOneSPKK'], "text"),
  GetSQLValueString($_POST['sijilGredKatOneSPKK'], "text"),
  GetSQLValueString($_POST['sijilGredKhususOneSPKK'], "text"),
  GetSQLValueString($_POST['sijilGredTwoSPKK'], "text"),
  GetSQLValueString($_POST['sijilGredKatTwoSPKK'], "text"),
  GetSQLValueString($_POST['sijilGredKhususTwoSPKK'], "text"),
  GetSQLValueString($_POST['sijilGredThreeSPKK'], "text"),
  GetSQLValueString($_POST['sijilGredKatThreeSPKK'], "text"),
  GetSQLValueString($_POST['sijilGredKhususThreeSPKK'], "text"),
  GetSQLValueString($_POST['sijilNoDaftarSTB'], "text"),
  GetSQLValueString($_POST['sijilSahSTB'], "text"),
  GetSQLValueString($_POST['sijilHinggaSTB'], "text"),
  GetSQLValueString($_POST['sijilGredSTB'], "text"),
  GetSQLValueString($_POST['sijilNoDaftarSSM'], "text"),
  GetSQLValueString($_POST['sijilSahSSM'], "text"),
  GetSQLValueString($_POST['sijilHinggaSSM'], "text"),

  GetSQLValueString($_POST['sijilNoDaftarGST'], "text"),
  GetSQLValueString($_POST['sijilSahGST'], "text"),
  GetSQLValueString($_POST['sijilHinggaGST'], "text"),

  GetSQLValueString($_POST['sijilNoDaftarJPS'], "text"),
  GetSQLValueString($_POST['sijilSahJPS'], "text"),
  GetSQLValueString($_POST['sijilHinggaJPS'], "text"),
  GetSQLValueString($_POST['sijilGredJPS'], "text"),
  GetSQLValueString($_POST['idKontraktor'], "int"));

  mysql_select_db($database_dbconn, $dbconn);
  $Result1 = mysql_query($updateSQL, $dbconn) or die(mysql_error());

  if($Result =mysql_query($updateSQL, $dbconn) or die(mysql_error()))
	{
        $SMessage = "Data berjaya dikemas kini";
        header("refresh:20;kontraktor");
      }
      else
      {
        $Emessage = "Data gagal dikemaskini";
      }
}

?>
<?php



?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JPSKMSB | Kemaskini Kontraktor</title>
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
          <li><a href="../upanel/user_panel"><i class="fa fa-circle-o text-red"></i> <span>Halaman Utama</span></a></li>
          <li><a href="../pages/kontraktor"><i class="fa fa-circle-o text-yellow"></i> <span>Senarai kontraktor</span></a></li>
          <li><a href="../pages/l_d_kontraktor"><i class="fa fa-circle-o text-green"></i> <span>Maklumat Syarikat</span></a></li>
          <li><a href="../pages/p_s_kontraktor"><i class="fa fa-circle-o text-blue"></i> <span>Pengesahan Sijil</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Kontraktor
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
                <h3 class="box-title">Kemaskini Kontraktor</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
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
                <form action="<?php echo $editFormAction; ?>" method="POST" role="form" name="conformupdate" class="form-horizontal" enctype="multipart/form-data">

                  <?php include '../include/konupdate.php';?>
                  <input type="hidden" name="MM_insert" value="conform">
                  <input type="hidden" name="MM_update" value="conformupdate">
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
