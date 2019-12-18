
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
</head>

<body>


  <div>
    <?php

    $role = $_SESSION['sess_userrole'];
    ?>
    <?php switch($role):

      case "superuser": ?>
      <?php include '../include/sidemenu.php';?>
      <?php break; ?>

      <?php case "adminkursus": ?>
      <?php include '../include/sidemenukursus.php';?>
      <?php break; ?>

      <?php case "adminkontraktor": ?>
      <?php include '../include/sidemenukontraktor.php';?>
      <?php break; ?>

      <?php case "specialuser": ?>
      <?php include '../include/sidemenuspecialuser.php';?>
      <?php break; ?>

      <?php case "adminpengesyor": ?>
      <?php include '../include/sidemenusyor.php';?>
      <?php break; ?>

      <?php case "adminaduan": ?>
      <?php include '../include/sidemenuaduan.php';?>
      <?php break; ?>

      <?php case "user": ?>
      <?php include '../include/sidemenuuser.php';?>
      <?php break; ?>

      <?php endswitch; ?>
    </div>
  </body>
  </html>
