<?php require_once('Connections/clininc.php'); ?>
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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE patient SET patient_name=%s, patient_ic=%s, patient_address=%s, patient_dob=%s, patient_gender=%s, patient_religion=%s WHERE patient_id=%s",
                       GetSQLValueString($_POST['patient_name'], "text"),
                       GetSQLValueString($_POST['patient_ic'], "text"),
                       GetSQLValueString($_POST['patient_address'], "text"),
                       GetSQLValueString($_POST['patient_dob'], "text"),
                       GetSQLValueString($_POST['patient_gender'], "text"),
                       GetSQLValueString($_POST['patient_religion'], "text"),
                       GetSQLValueString($_POST['patient_id'], "int"));

  mysql_select_db($database_clininc, $clininc);
  $Result1 = mysql_query($updateSQL, $clininc) or die(mysql_error());

  $updateGoTo = "patient.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_patient_update = "-1";
if (isset($_GET['patient_id'])) {
  $colname_patient_update = $_GET['patient_id'];
}
mysql_select_db($database_clininc, $clininc);
$query_patient_update = sprintf("SELECT * FROM patient WHERE patient_id = %s", GetSQLValueString($colname_patient_update, "int"));
$patient_update = mysql_query($query_patient_update, $clininc) or die(mysql_error());
$row_patient_update = mysql_fetch_assoc($patient_update);
$totalRows_patient_update = mysql_num_rows($patient_update);
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sistem Klinik</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <?php include 'menu.php' ?>

    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">My Dashboard</li>
        </ol>

        <!-- Icon Cards -->
      <?php include 'card.php'; ?>

        <div class="row">

          <div class="col-lg-8">

            <!-- Example Bar Chart Card -->


            <hr class="mt-2">
            <div class="card-columns">


            </div>
            <!-- /Card Columns -->

          </div>

          <div class="col-lg-4">
            <!-- Example Pie Chart Card -->

            <!-- Example Notifications Card -->

          </div>
        </div>

        <!-- Example Tables Card -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i>
            Update Patient
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <form class="form-horizontal" method="post" name="form1" action="<?php echo $editFormAction; ?>">
   <table class="table table-bordered table-hover" width="520">
       <tr valign="baseline">
         <td nowrap align="right">Id:</td>
         <td><?php echo $row_patient_update['patient_id']; ?></td>
       </tr>
       <tr valign="baseline">
         <td nowrap align="right">Name:</td>
         <td><input class="form-control" type="text" name="patient_name" value="<?php echo htmlentities($row_patient_update['patient_name'], ENT_COMPAT, 'utf-8'); ?>" size="32"></td>
       </tr>
       <tr valign="baseline">
         <td nowrap align="right">I/C No:</td>
         <td><input class="form-control" type="text" name="patient_ic" value="<?php echo htmlentities($row_patient_update['patient_ic'], ENT_COMPAT, 'utf-8'); ?>" size="32"></td>
       </tr>
       <tr valign="baseline">
         <td nowrap align="right">Address:</td>
         <td><input class="form-control" type="text" name="patient_address" value="<?php echo htmlentities($row_patient_update['patient_address'], ENT_COMPAT, 'utf-8'); ?>" size="32"></td>
       </tr>
       <tr valign="baseline">
         <td nowrap align="right">Date Of Birth:</td>
         <td><input class="form-control" type="text" name="patient_dob" value="<?php echo htmlentities($row_patient_update['patient_dob'], ENT_COMPAT, 'utf-8'); ?>" size="32"></td>
       </tr>
       <tr valign="baseline">
         <td nowrap align="right">Gender:</td>
         <td><input class="form-control" type="text" name="patient_gender" value="<?php echo htmlentities($row_patient_update['patient_gender'], ENT_COMPAT, 'utf-8'); ?>" size="32"></td>
       </tr>
       <tr valign="baseline">
         <td nowrap align="right">Religion:</td>
         <td><input class="form-control" type="text" name="patient_religion" value="<?php echo htmlentities($row_patient_update['patient_religion'], ENT_COMPAT, 'utf-8'); ?>" size="32"></td>
       </tr>
       <tr valign="baseline">
         <td nowrap align="right">&nbsp;</td>
         <td><input type="submit" class=" btn btn-success" value="Update record"></td>
       </tr>
     </table>
     <input type="hidden" name="MM_update" value="form1">
     <input type="hidden" name="patient_id" value="<?php echo $row_patient_update['patient_id']; ?>">
   </form>
            </div>
          </div>
          <div class="card-footer small text-muted">
            Updated yesterday at 11:59 PM
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright &copy; Your Website 2017</small>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script>
        $(document).ready(function() {
            var url = window.location;
            var element = $('ul.nav-item a').filter(function() {
            return this.href == url || url.href.indexOf(this.href) == 0; }).parent().addClass('active');
            if (element.is('li')) {
                 element.addClass('active').parent().parent('li').addClass('active')
             }
        });
    </script>

    <!-- Custom scripts for this template -->
    <script src="js/sb-admin.min.js"></script>

  </body>

</html>
