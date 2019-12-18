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
mysql_select_db($database_kcon, $kcon);
$query_kursustotal = "SELECT * FROM kursus";
$kursustotal = mysql_query($query_kursustotal, $kcon) or die(mysql_error());
$row_kursustotal = mysql_fetch_assoc($kursustotal);
$totalRows_kursustotal = mysql_num_rows($kursustotal);

mysql_select_db($database_dbconn, $dbconn);
$query_aduantotal = "SELECT * FROM aduan";
$aduantotal = mysql_query($query_aduantotal, $dbconn) or die(mysql_error());
$row_aduantotal = mysql_fetch_assoc($aduantotal);
$totalRows_aduantotal = mysql_num_rows($aduantotal);

mysql_select_db($database_dbconn, $dbconn);
$query_projektotal = "SELECT * FROM projek";
$projektotal = mysql_query($query_projektotal, $dbconn) or die(mysql_error());
$row_projektotal = mysql_fetch_assoc($projektotal);
$totalRows_projektotal = mysql_num_rows($projektotal);

mysql_select_db($database_dbconn, $dbconn);
$query_kontraktotal = "SELECT * FROM kontraktor";
$kontraktotal = mysql_query($query_kontraktotal, $dbconn) or die(mysql_error());
$row_kontraktotal = mysql_fetch_assoc($kontraktotal);
$totalRows_kontraktotal = mysql_num_rows($kontraktotal);

mysql_select_db($database_dbconn, $dbconn);
$query_totalkos = "SELECT SUM(PKospterima) FROM projek";
$totalkos = mysql_query($query_totalkos, $dbconn) or die(mysql_error());
$row_totalkos = mysql_fetch_assoc($totalkos);
$totalRows_totalkos = mysql_num_rows($totalkos);

mysql_select_db($database_dbconn, $dbconn);
$query_totalkosdipinda = "SELECT SUM(Pkosdipinda) FROM projek";
$totalkosdipinda = mysql_query($query_totalkosdipinda, $dbconn) or die(mysql_error());
$row_totalkosdipinda = mysql_fetch_assoc($totalkosdipinda);
$totalRows_totalkosdipinda = mysql_num_rows($totalkosdipinda);


mysql_select_db($database_dbconn, $dbconn);
$query_pfrontview = "SELECT projek.PTajuk, projek.PKodvot, projek.PNoinden, projek.PKospterima, projek.Pkosdipinda, projekatergori.category, kontraktor.kontraktorId, kontraktor.konName, projek.Pstatus FROM projek, kontraktor, projekatergori WHERE projek.ProjekID AND projekatergori.catId=projek.cat_id AND kontraktor.kontraktorId=projek.kon_id ORDER BY projek.ProjekID";
$pfrontview = mysql_query($query_pfrontview, $dbconn) or die(mysql_error());
$row_pfrontview = mysql_fetch_assoc($pfrontview);
$totalRows_pfrontview = mysql_num_rows($pfrontview);
?>
