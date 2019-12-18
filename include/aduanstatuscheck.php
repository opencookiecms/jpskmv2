<?php

$role = $_SESSION['sess_userrole'];
$userFname = $_SESSION['sess_userFirstName'];
?>
<?php switch($role):

case "superuser": ?>
<?php
mysql_select_db($database_dbconn, $dbconn);
$query_aduanview = "SELECT * FROM aduan";
$aduanview = mysql_query($query_aduanview, $dbconn) or die(mysql_error());
$row_aduanview = mysql_fetch_assoc($aduanview);
$totalRows_aduanview = mysql_num_rows($aduanview);
?>
<?php break; ?>

<?php case "user": ?>
<?php
mysql_select_db($database_dbconn, $dbconn);
$query_aduanview = "SELECT * FROM aduan, users WHERE aduan.aStatus = 'Dalam Tindakan' AND users.usersId=aduan.adKepada AND users.userFname = '$userFname'";
$aduanview = mysql_query($query_aduanview, $dbconn) or die(mysql_error());
$row_aduanview = mysql_fetch_assoc($aduanview);
$totalRows_aduanview = mysql_num_rows($aduanview);
 ?>
<?php break; ?>

<?php case "adminaduan": ?>
<?php
mysql_select_db($database_dbconn, $dbconn);
$query_aduanview = "SELECT * FROM aduan ORDER BY aTarikh DESC, aDaerah DESC";
$aduanview = mysql_query($query_aduanview, $dbconn) or die(mysql_error());
$row_aduanview = mysql_fetch_assoc($aduanview);
$totalRows_aduanview = mysql_num_rows($aduanview);
?>
<?php break; ?>

<?php case "specialuser": ?>
<?php
mysql_select_db($database_dbconn, $dbconn);
$query_aduanview = "SELECT * FROM  aduan WHERE aStatus='KIV' OR aStatus='Dalam Tindakan'OR aStatus='Telah Disiasat' OR aStatus='Selesai' OR aStatus='Siasat' OR aStatus='Tindakan' ";
$aduanview = mysql_query($query_aduanview, $dbconn) or die(mysql_error());
$row_aduanview = mysql_fetch_assoc($aduanview);
$totalRows_aduanview = mysql_num_rows($aduanview);
?>
<?php break; ?>

<?php case "adminkursus": ?>
<?php
mysql_select_db($database_dbconn, $dbconn);
$query_aduanview = "SELECT * FROM aduan ";
$aduanview = mysql_query($query_aduanview, $dbconn) or die(mysql_error());
$row_aduanview = mysql_fetch_assoc($aduanview);
$totalRows_aduanview = mysql_num_rows($aduanview);
?>
<?php break; ?>

<?php case "adminkontraktor": ?>
<?php
mysql_select_db($database_dbconn, $dbconn);
$query_aduanview = "SELECT * FROM aduan ";
$aduanview = mysql_query($query_aduanview, $dbconn) or die(mysql_error());
$row_aduanview = mysql_fetch_assoc($aduanview);
$totalRows_aduanview = mysql_num_rows($aduanview);
?>
<?php break; ?>

<?php case "adminpengesyor": ?>
<?php
mysql_select_db($database_dbconn, $dbconn);
$query_aduanview = "SELECT * FROM aduan, users WHERE aduan.aStatus = 'Telah Disiasat' AND users.usersId=aduan.aduanPengesyor AND users.userFname = '$userFname'";
$aduanview = mysql_query($query_aduanview, $dbconn) or die(mysql_error());
$row_aduanview = mysql_fetch_assoc($aduanview);
$totalRows_aduanview = mysql_num_rows($aduanview);
 ?>
<?php break; ?>

<?php endswitch; ?>
