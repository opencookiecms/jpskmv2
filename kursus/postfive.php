<?php require_once('../Connections/kcon.php'); ?>
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

$g = (int) $_POST['kId'];
mysql_select_db($database_kcon, $kcon);
$query_kursusView2 = "SELECT * FROM idjps WHERE kId = '$g'";
$kursusView2 = mysql_query($query_kursusView2, $kcon) or die(mysql_error());
$row_kursusView2 = mysql_fetch_assoc($kursusView2);
$totalRows_kursusView2 = mysql_num_rows($kursusView2);


$dday1 = $row_kursusView2['dayone'];
$dday2 = $row_kursusView2['daytwo'];
$dday3 = $row_kursusView2['daythree'];
$dday4 = $row_kursusView2['dayfour'];
$dday5 = $row_kursusView2['dayfive'];
$dday6 = $row_kursusView2['daysix'];
$dday7 = $row_kursusView2['daysvn'];

//$ha = 1 + $dday2 + $dday3 + $dday4 + $dday5 + $dday6 + $dday7;
//$hb = $dday1 + 1 + $dday3 + $dday4 + $dday5 + $dday6 + $dday7;
//$hc = $dday1 + $dday2 + 1 + $dday4 + $dday5 + $dday6 + $dday7;
//$hd = $dday1 + $dday2 + $dday3 + 1 + $dday5 + $dday6 + $dday7;
$he = $dday1 + $dday2 + $dday3 + $dday4 + 1 + $dday6 + $dday7;
//$hf = $dday1 + $dday2 + $dday3 + $dday4 + $dday5 + 1 + $dday7;
//$hg = $dday1 + $dday2 + $dday3 + $dday4 + $dday5 + $dday6 + 1;


$ta = $dday1 + $dday2 + $dday3 + $dday4 + $dday5 + $dday6 + $dday7 - 1;
//$tb = $dday1 + $dday3 + $dday4 + $dday5 + $dday6 + $dday7 + $dday2 - 1;
//$tc = $dday1 + $dday2 + $dday4 + $dday5 + $dday6 + $dday7 + $dday3 - 1;
//$hd = $dday1 + $dday2 + $dday3 + 1 + $dday5 + $dday6 + $dday7;
//$he = $dday1 + $dday2 + $dday3 + $dday4 + 1 + $dday6 + $dday7;
//$hf = $dday1 + $dday2 + $dday3 + $dday4 + $dday5 + 1 + $dday7;
//$hg = $dday1 + $dday2 + $dday3 + $dday4 + $dday5 + $dday6 + 1;



?>

<?php


//Include database configuration file
include('../Connections/fecthmysql.php');

//if(isset($_POST["id"]) && !empty($_POST["id"])){

  $mode=$_POST['mode'];
  $hari=$_POST['hari'];
  $tolak=$_POST['tolak'];
  $y = (int) $_POST['kId'];

  if ($mode=='true') //mode is true when button is enabled
  {
      //Retrive the values from database you want and send using json_encode
      //example
     $query = $db->query("UPDATE idjps SET jumlahHadir='$he', dayfive='1' WHERE kId='$y'");

  }

  else if ($mode=='false')  //mode is false when button is disabled
  {
      //Retrive the values from database you want and send using json_encode
      $query = $db->query("UPDATE idjps SET jumlahHadir='$ta', dayfive='0' WHERE kId='$y'");


  }
//}


?>
