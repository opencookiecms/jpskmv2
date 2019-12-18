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

require_once('../include/aduanstatuscheckheaders.php');
?>
<header class="main-header">
  <!-- Logo -->
  <a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>J</b>PS</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>JPS</b>KMSB</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <!-- Notifications: style can be found in dropdown.less -->
        <li class="dropdown notifications-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="label label-warning">
              <?php switch($role):

              case "superuser": ?>

              <?php break; ?>
              <?php case "user": ?>
              <?php echo $totalRows_aduanview2 ?>
              <?php break; ?>

              <?php case "adminaduan": ?>
              <?php echo $totalRows_aduanview2 ?>
              <?php break; ?>

              <?php case "specialuser": ?>
              <?php echo $totalRows_aduanview2 ?>
              <?php break; ?>

             <?php case "adminkursus": ?>
             <?php echo $totalRows_aduanview2 ?>
              <?php break; ?>

              <?php case "adminpengesyor": ?>
              <?php echo $totalRows_aduanview2 ?>
              <?php break; ?>

              <?php case "adminkontraktor": ?>
              <?php echo $totalRows_aduanview2 ?>
              <?php break; ?>

              <?php endswitch; ?>
            </span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">Terdapat <?php echo $totalRows_aduanview2 ?> Aduan</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                <?php do { ?>
                <li>
                  <?php

                  $role = $_SESSION['sess_userrole'];
                  ?>
                  <?php switch($role):

                  case "superuser": ?>
                  <a href="../pages/aduan_prosess?aduanId=<?php echo $row_aduanview2['aduanId']; ?>">
                    <i class="fa fa-warning text-yellow"></i><span><?php echo $row_aduanview2['aKod']; ?></span>
                  </a>

                  <?php break; ?>

                  <?php case "user": ?>
                  <a href="../pages/aduan_prosess?aduanId=<?php echo $row_aduanview2['aduanId']; ?>">
                    <i class="fa fa-warning text-yellow"></i><span><?php echo $row_aduanview2['aKod']; ?></span>
                  </a>
                  <?php break; ?>

                  <?php case "adminaduan": ?>

                  <?php break; ?>

                  <?php case "specialuser": ?>
                  <a href="../pages/aduan_prosess?aduanId=<?php echo $row_aduanview2['aduanId']; ?>">
                    <i class="fa fa-warning text-yellow"></i><span><?php echo $row_aduanview2['aKod']; ?></span>
                  </a>
                  <?php case "adminkursus": ?>

                  <?php break; ?>

                  <?php case "adminpengesyor": ?>
                  <a href="../pages/aduan_syor?aduanId=<?php echo $row_aduanview2['aduanId']; ?>">
                    <i class="fa fa-warning text-yellow"></i><span><?php echo $row_aduanview2['aKod']; ?></span>
                  </a>
                  <?php break; ?>
                  <?php case "adminkontraktor": ?>

                  <?php break; ?>
                  <?php endswitch; ?>


                </li>
                <?php } while ($row_aduanview2 = mysql_fetch_assoc($aduanview2)); ?>


              </ul>
            </li>

          </ul>
        </li>
        <!-- Tasks: style can be found in dropdown.less -->

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="../assets/dist/img/user2-160x160.png" class="user-image" alt="User Image">
            <span class="hidden-xs">Selamat Datang : <?php echo $_SESSION['sess_userFirstName'];?> <?php echo $_SESSION['sess_userLastNames'];?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="../assets/dist/img/user2-160x160.png" class="img-circle" alt="User Image">

              <p>
                <?php echo $_SESSION['sess_userFirstName'];?> <?php echo $_SESSION['sess_userLastNames'];?>
                <small>Member since Nov. 2018</small>
              </p>
            </li>
            <!-- -->
            <!--<li class="user-body">
              <div class="row">
                <div class="col-xs-4 text-center">
                  <a href="#">Followers</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">Sales</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">Friends</a>
                </div>
              </div>

            </li>-->
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="../pages/logout" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>
