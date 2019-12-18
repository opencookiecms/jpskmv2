<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_kcon = "127.0.0.1";
$database_kcon = "jpskursus";
$username_kcon = "root";
$password_kcon = "";
$kcon = mysql_pconnect($hostname_kcon, $username_kcon, $password_kcon) or trigger_error(mysql_error(),E_USER_ERROR);
?>
