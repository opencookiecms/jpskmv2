
<?php include('../include/aduank.php'); ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JPS | Aduan</title>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  $('#pegawai').on('change',function(){
    var uFname = $(this).val();
    if(uFname){
      $.ajax({
        type:'POST',
        url:'../include/dropdata.php',
        data:'usersId='+uFname,
        success:function(html){
          $('#ppp').html(html);

        }
      });
    }else{
      $('#ppp').html('<option value="">No Telefon Pegawai</option>');

    }
  });

  $('#ppp').on('change',function(){
    var uTel = $(this).val();
    if(uTel){
      $.ajax({
        type:'POST',
        url:'../include/dropdata.php',
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
        <div class="user-panel">
          <div class="pull-left image">
            <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $userFname ?></p>
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
          <?php

          $role = $_SESSION['sess_userrole'];
          ?>
          <?php switch($role):

            case "superuser": ?>
            <li class="header">Menu Utama</li>
            <li><a href="../adminpanel/adminpanel"><i class="fa fa-circle-o text-red"></i> <span>Halaman Utama</span></a></li>
            <li><a href="../pages/aduan"><i class="fa fa-circle-o text-yellow"></i> <span>Aduan</span></a></li>
            <li><a href="../pages/Oaduabn"><i class="fa fa-circle-o text-blue"></i> <span>Status Aduan</span></a></li>
            <li><a href="../pages/l_aduan"><i class="fa fa-circle-o text-green"></i> <span>Laporan Aduan</span></a></li>

            <?php break; ?>
            <?php case "user": ?>

            <?php break; ?>
            <?php case "adminaduan": ?>
            <li class="header">Menu Utama</li>
            <li><a href="../upanel/user_panel"><i class="fa fa-circle-o text-red"></i> <span>Halaman Utama</span></a></li>
            <li><a href="../pages/aduan"><i class="fa fa-circle-o text-yellow"></i> <span>Aduan</span></a></li>
            <li><a href="../pages/Oaduabn"><i class="fa fa-circle-o text-blue"></i> <span>Status Aduan</span></a></li>
            <li><a href="../pages/l_aduan"><i class="fa fa-circle-o text-green"></i> <span>Laporan Aduan</span></a></li>
            <?php break; ?>
            <?php case "specialuser": ?>

            <?php case "adminkursus": ?>

            <?php break; ?>
            <?php case "adminpengesyor": ?>

            <?php break; ?>
            <?php case "adminkontraktor": ?>

            <?php break; ?>
            <?php endswitch; ?>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Borang
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
                <form method="POST" action="<?php echo $editFormAction; ?>" role="form" name="formaduan" class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <div class="col-md-5">
                        <label>Nama Pengadu</label>
                        <input class="form-control" name="apengadu">
                      </div>
                      <div class="col-md-4">
                        <label>No Kad Pengenalan</label>
                        <input class="form-control" placeholder="No Kad Pengenalan" name="nokp">
                      </div>
                    </div>



                    <div class="form-group">
                      <div class="col-md-5">
                        <label>Alamat</label>
                        <textarea class="form-control" placeholder="Alamat" name="alamat"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-4">
                        <label>No Tel</label>
                        <input class="form-control" placeholder="No Tel" name="notel">
                      </div>
                      <div class="col-md-4">
                        <label>Tarikh Aduan</label>
                        <input class="form-control" placeholder="Tarikh Aduan" type="text" name="atarikh" id="date">
                      </div>
                      <div class="col-md-4">
                        <label>Tarikh surat akuan Aduan</label>
                        <input class="form-control" placeholder="Tarikh Surat Akaun Aduan" type="text" name="atarikhterima" id="date1">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-4">
                        <label>Jawatan Pengadu</label>
                        <select class="form-control" name="ajawatan">
                          <option value=""></option>
                          <option value="Penghulu">Penghulu</option>
                          <option value="Pengerusi JKKK">Pengerusi JKKK</option>
                          <option value="YB">YB</option>
                          <option value="Ketua Unit">Ketua Unit</option>
                          <option value="JKKK">JKKK</option>
                          <option value="Orang Awam">Orang Awam</option>
                          <option value="Penduduk">Penduduk</option>
                          <option value="Lain-lain">Lain-lain</option>
                        </select>
                      </div>
                      <div class="col-md-4">
                        <label>Salinan Aduan</label>
                        <select class="form-control" name="asalinan">
                          <option value=""></option>
                          <option value="Menteri Besar">Menteri Besar</option>
                          <option value="Exco">Exco</option>
                          <option value="ADUN">ADUN</option>
                          <option value="Pegawai Daerah">Pegawai Daerah</option>

                          <option value="Penghulu">Penghulu</option>
                          <option value="SPRM">SPRM"</option>
                          <option value="Persatuan Pengguna">Persatuan Pengguna</option>
                          <option value="Lain-lain">Lain-lain</option>
                        </select>
                      </div>
                      <div class="col-md-4">
                        <label>Sumber</label>
                        <select class="form-control" name="asumber">
                          <option value=""></option>
                          <option value="Ibu Pejabat">Ibu Pejabat</option>
                          <option value="Soalan Dewan">Soalan Dewan</option>
                          <option value="Telefon">Telefon</option>
                          <option value="Email">Email</option>
                          <option value="Datang Sendiri">Datang Sendiri</option>
                          <option value="Media Cetak">Media Cetak</option>
                          <option value="Surat">Surat</option>
                          <option value="Media Sosial">Media Sosial</option>
                          <option value="Lain-lain Agensi">Lain-lain Agensi</option>
                          <option value="Lain-lain">Lain-lain</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-5">
                        <label>Tajuk Aduan</label>
                        <textarea class="form-control" placeholder="Masalah Aduan" type="text" name="amasalah"></textarea>
                      </div>

                    </div>

                    <div class="form-group">
                      <div class="col-md-12" style="background-color:#CCC; padding-top:12px;">
                        <p>Lokasi Aduan</p>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-4">
                        <label>Lokasi</label>
                        <input class="form-control" placeholder="Lokasi Aduan" type="text" name="akampung">
                      </div>
                      <div class="col-md-4">
                        <label>Mukim</label>
                        <input class="form-control" placeholder="Mukim" type="text" name="amukim">
                      </div>
                      <div class="col-md-4">
                        <label>Sungai</label>
                        <input class="form-control" placeholder="Sungai" type="text" name="asungai">
                      </div>

                    </div>

                    <div class="form-group">
                      <div class="col-md-4">
                        <label>Daerah</label>
                        <select class="form-control"  name="adaerah">
                          <option value=""></option>
                          <option value="Kuala Muda">Kuala Muda</option>
                          <option value="Baling">Baling</option>
                          <option value="Sik">Sik</option>
                        </select>
                      </div>
                      <div class="col-md-4">
                        <label>Status</label>
                        <select class="form-control" name="astatus">
                          <option value="Dalam Tindakan">Dalam Tindakan</option>
                          <option value="Dalam Siasatan">Dalam Siasatan</option>


                        </select>
                      </div>
                      <div class="col-md-4">
                        <label>Kod Aduan</label>
                        <input class="form-control" placeholder="sila masukkan kod aduan" type="text" name="akodaduan">
                      </div>

                    </div>
                    <div class="form-group">
                      <div class="col-md-4">
                        <label>Pegawai Penyiasat</label>

                        <select class="form-control" name="aFor" id="pegawai">
                          <option value="">Select nama pegawai</option>
                          <?php
                          if($rowCount > 0){
                            while($row = $query->fetch_assoc()){
                              echo '<option value="'.$row['usersId'].'">'.$row['userFname'].'</option>';
                            }
                          }else{
                            echo '<option value="">Nama Pengawai tiada tersenarai</option>';
                          }
                          ?>

                        </select>

                      </div>
                      <div class="col-md-4">
                        <label>Email</label>

                        <select name="ppp" id="ppp" class="form-control">
                          <option value="">Sila Pilih Email</option>
                          <?php $k=$_POST['ppp'];
                          echo "$k";
                          ?>
                        </select>

                      </div>


                      <div class="col-md-4">
                        <label>Tarikh Majukan Kepada Pegawai</label>
                        <input class="form-control" name="suratminit" type="text" id="date6">
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
