
  <!-- Sidebar user panel -->
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
      <a href="../upanel/user_panel">
        <i class="fa fa-dashboard"></i> <span>Halaman Utama</span>

      </a>

    </li>
<!--Aduan -->
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Aduan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>

      </a>
      <ul class="treeview-menu">
        <li><a href="../pages/aduan"><i class="fa fa-circle-o text-yellow"></i> <span>Lihat Aduan</span></a></li>
        <li><a href="../pages/Oaduan"><i class="fa fa-circle-o text-aqua"></i> <span>Status Aduan</span></a></li>
        <li><a href="../pages/l_aduan"><i class="fa fa-circle-o text-green"></i> <span>Laporan Aduan</span></a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-pie-chart"></i>
        <span>Kontraktor</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="../pages/kontraktor"><i class="fa fa-circle-o text-blue"></i>Senarai Kontraktor</a></li>
      </ul>
    </li>
<!--Aduan -->
<!--Aduan
    <li>
      <a href="pages/widgets.html">
        <i class="fa fa-th"></i> <span>Projek</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="../pages/projek"><i class="fa fa-circle-o text-green"></i>Senarai Projek</a></li>
        <li><a href="../pages/Lprojek"><i class="fa fa-circle-o text-purple"></i>Laporan Projek</a></li>
        <li><a href="../pages/Pprojek"><i class="fa fa-circle-o text-orange"></i>Projek Peruntukan</a></li>
      </ul>
    </li>-->
    <!--
    <li class="treeview">
      <a href="#">
        <i class="fa fa-laptop"></i>
        <span>Projek Negeri</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="../pages/Nprojek"><i class="fa fa-circle-o text-blue"></i>Laporan Projek Negeri</a></li>
      </ul>
    </li>-->
    <li class="treeview">
        <a href="../kursus/k_individu">
        <i class="fa fa-edit"></i> <span>Kursus</span>

      </a>

    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-table"></i> <span>Kemaskini</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="../pages/user_edit"><i class="fa fa-circle-o text-red"></i>Lihat Pengguna</a></li>
      </ul>
    </li>

  </ul>

<!-- /.sidebar -->
