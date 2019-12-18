
<?php
    session_start();
    $userFname = $_SESSION['sess_userFirstName'];

    $role = $_SESSION['sess_userrole'];

    if(!isset($_SESSION['sess_userFirstName']) || $role!="adminkursus"){
      header('Location: ../pages/login.php?err=2');
    }

?>
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
$query_laporangroupsatu = "SELECT *,
COUNT(users.usersgroups) as usergroup,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 0 THEN 1 END) as number0,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 1 THEN 1 END) as number1,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 2 THEN 1 END) as number2,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 3 THEN 1 END) as number3,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 4 THEN 1 END) as number4,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 5 THEN 1 END) as number5,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 6 THEN 1 END) as number6,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn =5 OR users.jmKhdir=6 THEN 1 END ) AS el,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn >=7 THEN 1 END) as lebihdaritujuh,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn <4 THEN 1 END) as kurangempat
FROM users,idjps,kursus WHERE users.usersgroups=idjps.userg AND users.usrId=idjps.usrId AND kursus.kusId=idjps.kusId
GROUP BY users.usersgroups";
$laporangroupsatu = mysql_query($query_laporangroupsatu, $kcon) or die(mysql_error());
$row_laporangroupsatu = mysql_fetch_assoc($laporangroupsatu);
$totalRows_laporangroupsatu = mysql_num_rows($laporangroupsatu);

mysql_select_db($database_kcon, $kcon);
$query_totaluser1 = "SELECT * FROM users WHERE users.usersgroups=1";
$totaluser1 = mysql_query($query_totaluser1, $kcon) or die(mysql_error());
$row_totaluser1 = mysql_fetch_assoc($totaluser1);
$totalRows_totaluser1 = mysql_num_rows($totaluser1);

mysql_select_db($database_kcon, $kcon);
$query_totaluser2 = "SELECT * FROM users WHERE usersgroups = 2";
$totaluser2 = mysql_query($query_totaluser2, $kcon) or die(mysql_error());
$row_totaluser2 = mysql_fetch_assoc($totaluser2);
$totalRows_totaluser2 = mysql_num_rows($totaluser2);

mysql_select_db($database_kcon, $kcon);
$query_totaluser3 = "SELECT * FROM users WHERE usersgroups = 3";
$totaluser3 = mysql_query($query_totaluser3, $kcon) or die(mysql_error());
$row_totaluser3 = mysql_fetch_assoc($totaluser3);
$totalRows_totaluser3 = mysql_num_rows($totaluser3);

mysql_select_db($database_kcon, $kcon);
$query_totaluser4 = "SELECT * FROM users WHERE usersgroups = 4";
$totaluser4 = mysql_query($query_totaluser4, $kcon) or die(mysql_error());
$row_totaluser4 = mysql_fetch_assoc($totaluser4);
$totalRows_totaluser4 = mysql_num_rows($totaluser4);

mysql_select_db($database_kcon, $kcon);
$query_laporangroup2 = "SELECT *,
COUNT(users.usersgroups) as usergroup,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 0 THEN 1 END) as number0,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 1 THEN 1 END) as number1,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 2 THEN 1 END) as number2,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 3 THEN 1 END) as number3,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 4 THEN 1 END) as number4,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 5 THEN 1 END) as number5,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 6 THEN 1 END) as number6,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn =5 OR users.jmKhdir=6 THEN 1 END ) AS el,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn >=7 THEN 1 END) as lebihdaritujuh,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn <4 THEN 1 END) as kurangempat
FROM users,idjps
WHERE users.usersgroups=2 and users.usrId=idjps.usrId
GROUP BY users.usersgroups";
$laporangroup2 = mysql_query($query_laporangroup2, $kcon) or die(mysql_error());
$row_laporangroup2 = mysql_fetch_assoc($laporangroup2);
$totalRows_laporangroup2 = mysql_num_rows($laporangroup2);

mysql_select_db($database_kcon, $kcon);
$query_laporangroup3 = "SELECT *,
COUNT(users.usersgroups) as usergroup,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 0 THEN 1 END) as number0,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 1 THEN 1 END) as number1,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 2 THEN 1 END) as number2,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 3 THEN 1 END) as number3,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 4 THEN 1 END) as number4,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 5 THEN 1 END) as number5,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 6 THEN 1 END) as number6,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn =5 OR users.jmKhdir=6 THEN 1 END ) AS el,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn >=7 THEN 1 END) as lebihdaritujuh,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn <4 THEN 1 END) as kurangempat
FROM users,idjps
WHERE users.usersgroups=3 and users.usrId=idjps.usrId
GROUP BY users.usersgroups";
$laporangroup3 = mysql_query($query_laporangroup3, $kcon) or die(mysql_error());
$row_laporangroup3 = mysql_fetch_assoc($laporangroup3);
$totalRows_laporangroup3 = mysql_num_rows($laporangroup3);

mysql_select_db($database_kcon, $kcon);
$query_laporangroup4 = "SELECT *,
COUNT(users.usersgroups) as usergroup,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 0 THEN 1 END) as number0,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 1 THEN 1 END) as number1,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 2 THEN 1 END) as number2,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 3 THEN 1 END) as number3,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 4 THEN 1 END) as number4,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 5 THEN 1 END) as number5,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 6 THEN 1 END) as number6,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn =5 OR users.jmKhdir=6 THEN 1 END ) AS el,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn >=7 THEN 1 END) as lebihdaritujuh,
COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn <4 THEN 1 END) as kurangempat
FROM users,idjps
WHERE users.usersgroups=4 and users.usrId=idjps.usrId
GROUP BY users.usersgroups";
$laporangroup4 = mysql_query($query_laporangroup4, $kcon) or die(mysql_error());
$row_laporangroup4 = mysql_fetch_assoc($laporangroup4);
$totalRows_laporangroup4 = mysql_num_rows($laporangroup4);
?>
