<?php
require_once("../Connections/dbcontroller.php");
$db_handle = new DBController();


if(!empty($_POST["username"])) {
  $result = mysql_query("SELECT count(*) FROM users WHERE userName='" . $_POST["username"] . "' LIMIT 1") or die(mysql_error());
  $row = mysql_fetch_row($result);
  $user_count = $row[0];
  if($user_count>0) {
      echo "<span class='alert alert-danger'> Anda tidak boleh menggunakan Username ini.</span>";
  }else{
      echo "<span class='alert alert-success'> Anda boleh menggunakan Username ini.</span>";
  }
}
?>