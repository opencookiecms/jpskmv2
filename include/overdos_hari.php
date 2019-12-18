
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "jj";

// Create connection
 mysql_connect("$servername", "$username", "$password")or die("cannot connect");
 mysql_select_db("$dbName")or die("cannot select DB");
///////////////////////////////////////////Get ID /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$JanID= mysql_query("SELECT jps_belanja.b_id FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Januari'");
$row = mysql_fetch_row($JanID);
$JanID  = $row[0];

$BakiKini = $TotalPeruntukan - $TotalTanggung - $TotalBelanja;


?>
