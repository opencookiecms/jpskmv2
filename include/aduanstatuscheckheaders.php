<?php

$role = $_SESSION['sess_userrole'];
$userFname = $_SESSION['sess_userFirstName'];
?>
<?php switch($role):

case "superuser": ?>
<?php
mysql_select_db($database_dbconn, $dbconn);
$query_aduanview2 = "SELECT * FROM aduan ";
$aduanview2 = mysql_query($query_aduanview2, $dbconn) or die(mysql_error());
$row_aduanview2 = mysql_fetch_assoc($aduanview2);
$totalRows_aduanview2 = mysql_num_rows($aduanview2);
?>
<?php break; ?>

<?php case "user": ?>
<?php
mysql_select_db($database_dbconn, $dbconn);
$query_aduanview2 = "SELECT * FROM aduan, users WHERE aduan.aStatus = 'Dalam Tindakan' AND users.usersId=aduan.adKepada AND users.userFname = '$userFname'";
$aduanview2 = mysql_query($query_aduanview2, $dbconn) or die(mysql_error());
$row_aduanview2 = mysql_fetch_assoc($aduanview2);
$totalRows_aduanview2 = mysql_num_rows($aduanview2);
 ?>
<?php break; ?>

<?php case "adminaduan": ?>
<?php
mysql_select_db($database_dbconn, $dbconn);
$query_aduanview2 = "SELECT * FROM aduan ";
$aduanview2 = mysql_query($query_aduanview2, $dbconn) or die(mysql_error());
$row_aduanview2 = mysql_fetch_assoc($aduanview2);
$totalRows_aduanview2 = mysql_num_rows($aduanview2);
?>
<?php break; ?>

<?php case "specialuser": ?>
<?php
mysql_select_db($database_dbconn, $dbconn);
$query_aduanview2 = "SELECT * FROM  aduan WHERE aStatus='KIV' OR aStatus='Siasat'OR aStatus='Telah Disiasat' OR aStatus='Selesai' OR aStatus='Tindakan' ";
$aduanview2 = mysql_query($query_aduanview2, $dbconn) or die(mysql_error());
$row_aduanview2 = mysql_fetch_assoc($aduanview2);
$totalRows_aduanview2 = mysql_num_rows($aduanview2);
?>
<?php break; ?>

<?php case "adminkursus": ?>
<?php
mysql_select_db($database_dbconn, $dbconn);
$query_aduanview2 = "SELECT * FROM aduan WHERE aStatus='0'";
$aduanview2 = mysql_query($query_aduanview2, $dbconn) or die(mysql_error());
$row_aduanview2 = mysql_fetch_assoc($aduanview2);
$totalRows_aduanview2 = mysql_num_rows($aduanview2);
?>
<?php break; ?>

<?php case "adminpengesyor": ?>
<?php
mysql_select_db($database_dbconn, $dbconn);
$query_aduanview2 = "SELECT * FROM aduan, users WHERE aduan.aStatus = 'Telah Disiasat' AND users.usersId=aduan.aduanPengesyor AND users.userFname = '$userFname'";
$aduanview2 = mysql_query($query_aduanview2, $dbconn) or die(mysql_error());
$row_aduanview2 = mysql_fetch_assoc($aduanview2);
$totalRows_aduanview2 = mysql_num_rows($aduanview2);
?>
<?php break; ?>

<?php case "adminkontraktor": ?>
<?php
mysql_select_db($database_dbconn, $dbconn);
$query_aduanview2 = "SELECT * FROM aduan WHERE aStatus='0'";
$aduanview2 = mysql_query($query_aduanview2, $dbconn) or die(mysql_error());
$row_aduanview2 = mysql_fetch_assoc($aduanview2);
$totalRows_aduanview2 = mysql_num_rows($aduanview2);
?>
<?php break; ?>

<?php endswitch; ?>
