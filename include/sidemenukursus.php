  <div class="user-panel">
    <div class="pull-left image">
      <img src="../assets/dist/img/user2-160x160.png" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p><?php echo $_SESSION['sess_userFirstName'];?> <?php echo $_SESSION['sess_userLastNames'];?></p>
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
    <li class="treeview">
      <a href="../kursus/index.php">
        <i class="fa fa-dashboard"></i> <span>Halaman Utama</span>

      </a>

    </li>
<!--Aduan -->
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Kursus</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>

      </a>
      <ul class="treeview-menu">
        <li><a href="../kursus/daftar_kursus.php"><i class="fa fa-circle-o text-yellow"></i> <span>Tambah Kursus</span></a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-pie-chart"></i>
        <span>User</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="../kursus/daftar_user.php"><i class="fa fa-circle-o"></i>Daftar User</a></li>
        <li><a href="../kursus/user.php"><i class="fa fa-circle-o"></i>Lihat User</a></li>
      </ul>
    </li>
<!--Aduan -->
<!--Aduan -->

    <li class="treeview">
      <a href="#">
        <i class="fa fa-laptop"></i>
        <span>Kemaskini</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="../kursus/kemaskini"><i class="fa fa-circle-o"></i>Kemaskini Data</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-paper-plane-o"></i>
        <span>Laporan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="../kursus/k_laporan"><i class="fa fa-circle-o"></i>Laporan</a></li>
        <li><a href="../print/kursus_print" target="_blank"><i class="fa fa-circle-o"></i>Laporan Keseluruhan</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="ion ion-person"></i>
        <span>Kontraktor</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="../pages/kontraktor"><i class="fa fa-circle-o text-yellow"></i>Kontraktor</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="ion ion-pinpoint"></i> <span>Aduan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="../pages/aduan"><i class="fa fa-circle-o text-red"></i>Aduan</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-cogs"></i> <span>Tetapan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="../kursus/k_setting"><i class="fa fa-circle-o"></i>Tetapan</a></li>
      </ul>
    </li>

  </ul>

<!-- /.sidebar -->
