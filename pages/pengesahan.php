
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

$maxRows_viewngesah = 10;
$pageNum_viewngesah = 0;
if (isset($_GET['pageNum_viewngesah'])) {
  $pageNum_viewngesah = $_GET['pageNum_viewngesah'];
}
$startRow_viewngesah = $pageNum_viewngesah * $maxRows_viewngesah;

mysql_select_db($database_dbconn, $dbconn);
$query_viewngesah = "SELECT * FROM orangpenting";
$query_limit_viewngesah = sprintf("%s LIMIT %d, %d", $query_viewngesah, $startRow_viewngesah, $maxRows_viewngesah);
$viewngesah = mysql_query($query_limit_viewngesah, $dbconn) or die(mysql_error());
$row_viewngesah = mysql_fetch_assoc($viewngesah);

if (isset($_GET['totalRows_viewngesah'])) {
  $totalRows_viewngesah = $_GET['totalRows_viewngesah'];
} else {
  $all_viewngesah = mysql_query($query_viewngesah);
  $totalRows_viewngesah = mysql_num_rows($all_viewngesah);
}
$totalPages_viewngesah = ceil($totalRows_viewngesah/$maxRows_viewngesah)-1;


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
  <link rel="stylesheet" href="../assets/css/toggle.css">
  <!-- Theme style -->

  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


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
          Pengesahan
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

            
                <br>
                <a type="button" class="btn btn-primary btn-sm" href="daftarpp">
                  Tambah Pengawai Pengesahan
                 
                </a>


              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <form method="post">
                  <table width="100%" class="table table-striped table-bordered table-hover" id="example1">
                    <thead>
                      <tr>
                        <th>Bil</th>
                        <th>Nama Pengarah / Pegawai</th>
                        <th>Jawatan</th>

                        <th>Gred Jawatan</th>
                        <th>Tindakan</th>
                      </tr>

                    </thead>
                    <tbody>
                    <?php $bil = 0 ?>
                                    <?php do { ?><tr>
                                    <?php $bil+=1 ?>
              
                      <td><?php echo $bil ?></td>
                        <td><?php echo $row_viewngesah['NamaO']; ?></td>
                          <td><?php echo $row_viewngesah['JawatanO']; ?></td>
                            <td><?php echo $row_viewngesah['GredJawatanO']; ?></td>
                              <td><a href="pegshandel.php?IdOrangPenting=<?php echo $row_viewngesah['IdOrangPenting']; ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>
  </a></td>
								<?php } while ($row_viewngesah = mysql_fetch_assoc($viewngesah)); ?>
				</tr>
                    
                   
                  </tbody>
                </table>
                
              </form>
              <!-- /.table-responsive -->



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
              </div>p
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

    <script type="text/javascript">
    $(document).ready(function(){
      $("input#a1").click(function(){
        var mode= $(this).prop('checked');
        var checkid = $(this).val();
        var hari = $("#aa").val();
        var tolak = $("#ba").val();
        if(checkid){
          $.ajax({
            type:'POST',
            url:'postone.php?id='+checkid,
            data: 'mode='+mode+'&kId='+checkid+'&hari='+hari+'&tolak='+tolak,
            success:function(html){
            }
          });
        }
      });
      $("input#a2").click(function(){
        var mode= $(this).prop('checked');
        var checkid = $(this).val();
          var hari = $("#ab").val();
          var tolak = $("#bb").val();
        if(checkid){
          $.ajax({
            type:'POST',
            url:'posttwo.php?id='+checkid,
              data: 'mode='+mode+'&kId='+checkid+'&hari='+hari+'&tolak='+tolak,
            success:function(html){
            }
          });
        }
      });
      $("input#a3").click(function(){
        var mode= $(this).prop('checked');
        var checkid = $(this).val();
          var hari = $("#ac").val();
          var tolak = $("#bc").val();
        if(checkid){
          $.ajax({
            type:'POST',
            url:'postthree.php?id='+checkid,
              data: 'mode='+mode+'&kId='+checkid+'&hari='+hari+'&tolak='+tolak,
            success:function(html){
            }
          });
        }
      });
      $("input#a4").click(function(){
        var mode= $(this).prop('checked');
        var checkid = $(this).val();
          var hari = $("#ad").val();
        if(checkid){
          $.ajax({
            type:'POST',
            url:'postfour.php?id='+checkid,
            data: 'mode='+mode+'&kId='+checkid+'&hari='+hari,
            success:function(html){
            }
          });
        }
      });
      $("input#a5").click(function(){
        var mode= $(this).prop('checked');
        var checkid = $(this).val();
          var hari = $("#ae").val();
        if(checkid){
          $.ajax({
            type:'POST',
            url:'postfive.php?id='+checkid,
            data: 'mode='+mode+'&kId='+checkid+'&hari='+hari,
            success:function(html){
            }
          });
        }
      });
      $("input#a6").click(function(){
        var mode= $(this).prop('checked');
        var checkid = $(this).val();
          var hari = $("#af").val();
        if(checkid){
          $.ajax({
            type:'POST',
            url:'postsix.php?id='+checkid,
            data: 'mode='+mode+'&kId='+checkid+'&hari='+hari,
            success:function(html){
            }
          });
        }
      });
      $("input#a7").click(function(){
        var mode= $(this).prop('checked');
        var checkid = $(this).val();
          var hari = $("#ag").val();
        if(checkid){
          $.ajax({
            type:'POST',
            url:'postsvn.php?id='+checkid,

            data: 'mode='+mode+'&kId='+checkid+'&hari='+hari,
            success:function(html){
            }
          });
        }
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


      <script>
      $(document).ready(function()
      {

        $('.switch').click(function()
        {
          $(this).toggleClass("switchOn");
        });

      });
      </script>


    </body>
    </html>
<?php
mysql_free_result($viewngesah);
?>