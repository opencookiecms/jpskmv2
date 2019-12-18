<?php


//Include database configuration file
include('../Connections/fecthmysql.php');

//if(isset($_POST["id"]) && !empty($_POST["id"])){

  $mode=$_POST['mode'];
  $y = (int) $_POST['kId'];
  $hari = $_POST['hari'];
  if ($mode=='true') //mode is true when button is enabled
  {
      //Retrive the values from database you want and send using json_encode
      //example
     $query = $db->query("UPDATE idjps SET hari='$hari' WHERE kId='$y'");

  }

  else if ($mode=='false')  //mode is false when button is disabled
  {
      //Retrive the values from database you want and send using json_encode
      $query = $db->query("UPDATE idjps SET hari='0' WHERE kId='$y'");


  }
//}


?>
