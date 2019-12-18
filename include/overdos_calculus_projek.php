
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "jpskm";

// Create connection
 mysql_connect("$servername", "$username", "$password")or die("cannot connect");
 mysql_select_db("$dbName")or die("cannot select DB");
///////////////////////////////////////////Get ID /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$kosditerima= mysql_query("SELECT SUM(projek.PKospterima) FROM projek WHERE projek.cat_id='$getid'");
$row = mysql_fetch_row($kosditerima);
$kosditerima = $row[0];

$kosdipinda= mysql_query("SELECT SUM(projek.Pkosdipinda) FROM projek WHERE projek.cat_id='$getid'");
$row = mysql_fetch_row($kosdipinda);
$kosdipinda = $row[0];

$kosbq= mysql_query("SELECT SUM(projek.kos_bq) FROM projek WHERE projek.cat_id='$getid'");
$row = mysql_fetch_row($kosbq);
$kosbq = $row[0];

$kosbelanja= mysql_query("SELECT SUM(projek.p_belanja) FROM projek WHERE projek.cat_id='$getid'");
$row = mysql_fetch_row($kosbelanja);
$kosbelanja = $row[0];

$kosbaki= mysql_query("SELECT SUM(projek.p_baki) FROM projek WHERE projek.cat_id='$getid'");
$row = mysql_fetch_row($kosbaki);
$kosbaki = $row[0];

$kostanggung= mysql_query("SELECT SUM(projek.p_tanggung) FROM projek WHERE projek.cat_id='$getid'");
$row = mysql_fetch_row($kostanggung);
$kostanggung = $row[0];

$kosbayar= mysql_query("SELECT SUM(projek.p_bayar) FROM projek WHERE projek.cat_id='$getid'");
$row = mysql_fetch_row($kosbayar);
$kosbayar = $row[0];

$totalkos= mysql_query("SELECT SUM(projekatergori.kosperuntukan)FROM projekatergori WHERE projekatergori.catId='$getid'");
$row = mysql_fetch_row($totalkos);
$totalkos = $row[0];

$peratusanterima = number_format($kosditerima / $kosditerima * 100,1).'%';
$peratusdipinda = number_format($kosdipinda / $kosdipinda * 100,1).'%';
$peratusbq = number_format($kosbq / $kosdipinda * 100,1).'%';
$peratusbelanja = number_format($kosbelanja / $kosdipinda * 100,1).'%';
$peratusbaki = number_format($kosbaki / $kosdipinda * 100,1).'%';
$peratustanggung = number_format($kostanggung / $kosdipinda * 100,1).'%';
$peratusbayar = number_format($kosbayar / $kosdipinda * 100,1).'%';

$totaltotal = $totalkos - $kosditerima;
?>
