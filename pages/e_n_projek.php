<?php

	error_reporting( ~E_NOTICE );

	  require '../Connections/dataconnenction.php';

	if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];
		$stmt_edit = $DB_con->prepare('SELECT Bulan, Catatan, Tahun, File FROM projeknegeri WHERE pNegeriId =:uid');
		$stmt_edit->execute(array(':uid'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: projeknegeriviewAdKwgan.php");
	}



	if(isset($_POST['btn_save_updates']))
	{
		$bulanbulan = $_POST['bulannegeri'];
		$catatan = $_POST['pNcatatan'];
		$tahun =$_POST['pNTahun'];

		$ExcelFile = $_FILES['file']['name'];
      	$tmp_dir = $_FILES['file']['tmp_name'];
      	$ExcelSize = $_FILES['file']['size'];

		if($ExcelFile)
		{
			$upload_dir = '../assets/files/'; //upload file Directory
			$ExcelExt = strtolower(pathinfo($ExcelFile,PATHINFO_EXTENSION));//get the excel extension

			$valid_Excel = array('xlsx','xls');
			$excelRen = rand(1000,10000).".".$ExcelExt;

			if(in_array($ExcelExt, $valid_Excel))
			{
				if($ExcelSize  < 100000000)
				{
					unlink($upload_dir.$edit_row['File']);
					move_uploaded_file($tmp_dir,$upload_dir.$excelRen);
				}
				else
				{
					$Emessage = "Maaf Fail tidak mengikut spesifikasi";
				}
			}
			else
			{
				$Emessage = "Maaf hanya fail format excel sahaja dibenarkan";
			}
		}
		else
		{
			// if no image selected the old image remain as it is.
			$excelRen = $edit_row['File']; // old image from database
		}


		// if no error occured, continue ....
		if(!isset($Emessage))
		{
			$stmt = $DB_con->prepare('UPDATE projeknegeri  SET Bulan=:bulans, Catatan=:catatans, Tahun=:tahuns, File=:files   WHERE pNegeriId=:uid');
			$stmt->bindParam(':bulans',$bulanbulan);
			$stmt->bindParam(':catatans',$catatan);
			$stmt->bindParam(':tahuns',$tahun);
			$stmt->bindParam(':files',$excelRen);
			$stmt->bindParam(':uid',$id);

			if($stmt->execute()){
				?>
                <script>
				alert('Successfully Updated ...');
				window.location.href='Nprojek';
				</script>
                <?php
			}
			else{
				$Emessage = "Sorry Data Could Not Updated !";
			}

		}


	}

?>


<?php
    session_start();
    $userLname = $_SESSION['sess_userLastNames'];

    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_userFirstName']) || $role!="specialuser" && $role!="superuser"){
      header('Location: ../pages/login.php?err=2');
    }

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
          <li><a href="../pages/Nprojek"><i class="fa fa-circle-o text-yellow"></i> <span>Laporan Projek Negeri</span></a></li>

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Pengadu
          <small>Aduan</small>
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
                <h3 class="box-title">Borang Aduan</h3>
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
<form method="POST" class="form-horizontal" enctype="multipart/form-data">
                       <div class="form-group">
                           <div class="col-md-3">
                             <label>Laporan Bulan</label>
                              <select class="form-control" name="bulannegeri">
                              <option value="<?php echo $Bulan; ?>"><?php echo $Bulan; ?></option>
                              <option value="Januari">Januari</option>
                              <option value="Febuari">Febuari</option>
                              <option value="Mac">Mac</option>
                              <option value="April">April</option>
                              <option value="Mei">Mei</option>
                              <option value="Jun">Jun</option>
                              <option value="Julai">Julai</option>
                              <option value="Ogos">Ogos</option>
                              <option value="September">September</option>
                              <option value="Oktober">Oktober</option>
                              <option value="November">November</option>
                              <option value="Disember">Disember</option>
                              </select>
                           </div>

                       </div>

                           <div class="form-group">


                                <div class="col-md-3">
                                  <label>Tahun</label>
                                  <input class="form-control" name="pNTahun" value="<?php echo $Tahun; ?>">
                                </div>
                             </div>

                             <div class="form-group">
                               <div class="col-md-5">
                                 <label>Catatan</label>

                                 <textarea class="form-control" name="pNcatatan"><?php echo $Catatan; ?></textarea>
                               </div>
                             </div>
                             <div class="form-group">
                                 <div class="col-md-3">
                                     <label>Fail</label>
                                     <?php echo $File; ?>
                                     <input type="file" name="file" class="form-control">
                                 </div>
                             </div>












                           <button type="submit" name="btn_save_updates" class="btn btn-success">Simpan</button>
                           <button type="reset" class="btn btn-danger">Reset Semula</button>


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
