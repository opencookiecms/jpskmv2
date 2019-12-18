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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "indenadd")) {
  $insertSQL = sprintf("INSERT INTO jpskm_inden (IndenNo, IndenContent) VALUES (%s, %s)",
                       GetSQLValueString($_POST['indenno'], "text"),
                       GetSQLValueString($_POST['butiran_inden'], "text"));

  mysql_select_db($database_dbconn, $dbconn);
  $Result1 = mysql_query($insertSQL, $dbconn) or die(mysql_error());
  $insertGoTo = "setting.php";
  if (isset($_SERVER['QUERY_STRING'])) {
  $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
  $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "kodvot")) {
  $insertSQL = sprintf("INSERT INTO jpskm_kotvot (KodVot, KodVotKon) VALUES (%s, %s)",
                       GetSQLValueString($_POST['kodvot'], "text"),
                       GetSQLValueString($_POST['butiran_kodvot'], "text"));

  mysql_select_db($database_dbconn, $dbconn);
  $Result1 = mysql_query($insertSQL, $dbconn) or die(mysql_error());
  $insertGoTo = "setting.php";
  if (isset($_SERVER['QUERY_STRING'])) {
  $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
  $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "Norujukan")) {
  $insertSQL = sprintf("INSERT INTO jpskm_rujukan (NoRujukan, RujukanKon) VALUES (%s, %s)",
                       GetSQLValueString($_POST['norujukan'], "text"),
                       GetSQLValueString($_POST['butiran_rujukan'], "text"));

  mysql_select_db($database_dbconn, $dbconn);
  $Result1 = mysql_query($insertSQL, $dbconn) or die(mysql_error());
  $insertGoTo = "setting.php";
  if (isset($_SERVER['QUERY_STRING'])) {
  $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
  $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "Nosebutharga")) {
  $insertSQL = sprintf("INSERT INTO jpskm_sebutharga (Nosebutharga, Butiran) VALUES (%s, %s)",
                       GetSQLValueString($_POST['nosebutharga'], "text"),
                       GetSQLValueString($_POST['butiran_sebutharga'], "text"));

  mysql_select_db($database_dbconn, $dbconn);
  $Result1 = mysql_query($insertSQL, $dbconn) or die(mysql_error());
  $insertGoTo = "setting.php";
  if (isset($_SERVER['QUERY_STRING'])) {
  $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
  $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "Memo")) {
  $insertSQL = sprintf("INSERT INTO memo (tajukmemo, memo, daripada) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['tajukmemo'], "text"),
                       GetSQLValueString($_POST['memo'], "text"),
                       GetSQLValueString($_POST['daripada'], "text"));

  mysql_select_db($database_dbconn, $dbconn);
  $Result1 = mysql_query($insertSQL, $dbconn) or die(mysql_error());
  $insertGoTo = "setting.php";
  if (isset($_SERVER['QUERY_STRING'])) {
  $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
  $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "lainlain")) {
  $insertSQL = sprintf("INSERT INTO orangpenting (NamaO, JawatanO, GredJawatanO) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['Nama'], "text"),
                       GetSQLValueString($_POST['OJawatan'], "text"),
                       GetSQLValueString($_POST['gredJwtn'], "text"));

  mysql_select_db($database_dbconn, $dbconn);
  $Result1 = mysql_query($insertSQL, $dbconn) or die(mysql_error());
  $insertGoTo = "setting.php";
  if (isset($_SERVER['QUERY_STRING'])) {
  $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
  $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>

