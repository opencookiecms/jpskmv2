
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "jpskm";

// Create connection
 mysql_connect("$servername", "$username", "$password")or die("cannot connect");
 mysql_select_db("$dbName")or die("cannot select DB");
///////////////////////////////////////////Get ID /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$JanID= mysql_query("SELECT jps_belanja.b_id FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Januari'");
$row = mysql_fetch_row($JanID);
$JanID  = $row[0];

$FebID= mysql_query("SELECT jps_belanja.b_id FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Febuari'");
$row = mysql_fetch_row($FebID);
$FebID  = $row[0];

$MacID= mysql_query("SELECT jps_belanja.b_id FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Mac'");
$row = mysql_fetch_row($MacID);
$MacID  = $row[0];

$AprID= mysql_query("SELECT jps_belanja.b_id FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='April'");
$row = mysql_fetch_row($AprID);
$AprID  = $row[0];

$MeiID= mysql_query("SELECT jps_belanja.b_id FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Mei'");
$row = mysql_fetch_row($MeiID);
$MeiID  = $row[0];

$JunID= mysql_query("SELECT jps_belanja.b_id FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Jun'");
$row = mysql_fetch_row($JunID);
$JunID  = $row[0];

$JulID= mysql_query("SELECT jps_belanja.b_id FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Julai'");
$row = mysql_fetch_row($JulID);
$JulID  = $row[0];

$OgsID= mysql_query("SELECT jps_belanja.b_id FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Ogos'");
$row = mysql_fetch_row($OgsID);
$OgsID  = $row[0];

$SepID= mysql_query("SELECT jps_belanja.b_id FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='September'");
$row = mysql_fetch_row($SepID);
$SepID  = $row[0];

$OktID= mysql_query("SELECT jps_belanja.b_id FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Oktober'");
$row = mysql_fetch_row($OktID);
$OktID  = $row[0];

$NovID= mysql_query("SELECT jps_belanja.b_id FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='November'");
$row = mysql_fetch_row($NovID);
$NovID  = $row[0];

$DisID= mysql_query("SELECT jps_belanja.b_id FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Disember'");
$row = mysql_fetch_row($DisID);
$DisID  = $row[0];
///////////////////////////////////////////Get ID /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////Belanja dan Tanggun untuk bulan Januanry///////////////////////////////////////////////////////////////////////////////////////////////////////////
$JanBelanja= mysql_query("SELECT jps_belanja.perbelanjaan FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Januari'");
$row = mysql_fetch_row($JanBelanja);
$JanBelanja   = $row[0];

$JanTanggung= mysql_query("SELECT jps_belanja.tanggung FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Januari'");
$row = mysql_fetch_row($JanTanggung);
$JanTanggung   = $row[0];
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////Belanja dan Tanggun untuk bulan Febuari///////////////////////////////////////////////////////////////////////////////////////////////////////////
$FebBelanja= mysql_query("SELECT jps_belanja.perbelanjaan FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Januari'");
$row = mysql_fetch_row($FebBelanja);
$FebBelanja   = $row[0];

$FebTanggung= mysql_query("SELECT jps_belanja.tanggung FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Febuari'");
$row = mysql_fetch_row($FebTanggung);
$FebTanggung   = $row[0];
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////Belanja dan Tanggun untuk bulan Mac///////////////////////////////////////////////////////////////////////////////////////////////////////////
$MacBelanja= mysql_query("SELECT jps_belanja.perbelanjaan FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Mac'");
$row = mysql_fetch_row($MacBelanja);
$MacBelanja   = $row[0];

$MacTanggung= mysql_query("SELECT jps_belanja.tanggung FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Mac'");
$row = mysql_fetch_row($MacTanggung);
$MacTanggung   = $row[0];
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////Belanja dan Tanggun untuk bulan April///////////////////////////////////////////////////////////////////////////////////////////////////////////
$AprilBelanja= mysql_query("SELECT jps_belanja.perbelanjaan FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='April'");
$row = mysql_fetch_row($AprilBelanja);
$AprilBelanja   = $row[0];

$AprilTanggung= mysql_query("SELECT jps_belanja.tanggung FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='April'");
$row = mysql_fetch_row($AprilTanggung);
$AprilTanggung   = $row[0];
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////Belanja dan Tanggun untuk bulan Mei///////////////////////////////////////////////////////////////////////////////////////////////////////////
$MeiBelanja= mysql_query("SELECT jps_belanja.perbelanjaan, jps_belanja.b_id FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Mei'");
$row = mysql_fetch_row($MeiBelanja);
$MeiBelanja   = $row[0];

$MeiTanggung= mysql_query("SELECT jps_belanja.tanggung FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Mei'");
$row = mysql_fetch_row($MeiTanggung);
$MeiTanggung   = $row[0];
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////Belanja dan Tanggun untuk bulan Jun///////////////////////////////////////////////////////////////////////////////////////////////////////////
$JunBelanja= mysql_query("SELECT jps_belanja.perbelanjaan FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Jun'");
$row = mysql_fetch_row($JunBelanja);
$JunBelanja   = $row[0];

$JunTanggung= mysql_query("SELECT jps_belanja.tanggung FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Jun'");
$row = mysql_fetch_row($JunTanggung);
$JunTanggung   = $row[0];
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////Belanja dan Tanggun untuk bulan Julai///////////////////////////////////////////////////////////////////////////////////////////////////////////
$JulaiBelanja= mysql_query("SELECT jps_belanja.perbelanjaan FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Julai'");
$row = mysql_fetch_row($JulaiBelanja);
$JulaiBelanja   = $row[0];

$JulaiTanggung= mysql_query("SELECT jps_belanja.tanggung FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Julai'");
$row = mysql_fetch_row($JulaiTanggung);
$JulaiTanggung   = $row[0];
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////Belanja dan Tanggun untuk bulan Ogos///////////////////////////////////////////////////////////////////////////////////////////////////////////
$OgosBelanja= mysql_query("SELECT jps_belanja.perbelanjaan FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Ogos'");
$row = mysql_fetch_row($OgosBelanja);
$OgosBelanja   = $row[0];

$OgosTanggung= mysql_query("SELECT jps_belanja.tanggung FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Ogos'");
$row = mysql_fetch_row($OgosTanggung);
$OgosTanggung   = $row[0];
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////Belanja dan Tanggun untuk bulan Jun///////////////////////////////////////////////////////////////////////////////////////////////////////////
$SeptemberBelanja= mysql_query("SELECT jps_belanja.perbelanjaan FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='September'");
$row = mysql_fetch_row($SeptemberBelanja);
$SeptemberBelanja   = $row[0];

$SeptemberTanggung= mysql_query("SELECT jps_belanja.tanggung FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='September'");
$row = mysql_fetch_row($SeptemberTanggung);
$SeptemberTanggung   = $row[0];
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////Belanja dan Tanggun untuk bulan Jun///////////////////////////////////////////////////////////////////////////////////////////////////////////
$OktoberBelanja= mysql_query("SELECT jps_belanja.perbelanjaan FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Oktober'");
$row = mysql_fetch_row($OktoberBelanja);
$OktoberBelanja   = $row[0];

$OktoberTanggung= mysql_query("SELECT jps_belanja.tanggung FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Oktober'");
$row = mysql_fetch_row($OktoberTanggung);
$OktoberTanggung   = $row[0];
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////Belanja dan Tanggun untuk bulan Jun///////////////////////////////////////////////////////////////////////////////////////////////////////////
$NovemberBelanja= mysql_query("SELECT jps_belanja.perbelanjaan FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='November'");
$row = mysql_fetch_row($NovemberBelanja);
$NovemberBelanja   = $row[0];

$NovemberTanggung= mysql_query("SELECT jps_belanja.tanggung FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='November'");
$row = mysql_fetch_row($NovemberTanggung);
$NovemberTanggung   = $row[0];
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////Belanja dan Tanggun untuk bulan Jun///////////////////////////////////////////////////////////////////////////////////////////////////////////
$DisemberBelanja= mysql_query("SELECT jps_belanja.perbelanjaan FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Disember'");
$row = mysql_fetch_row($DisemberBelanja);
$DisemberBelanja   = $row[0];

$DisemberTanggung= mysql_query("SELECT jps_belanja.tanggung FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Disember'");
$row = mysql_fetch_row($DisemberTanggung);
$DisemberTanggung   = $row[0];
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////Total Kos Peruntukan///////////////////////////////////////////////////////////////////////////////////////////////////////////
$TotalPeruntukan= mysql_query("SELECT SUM(progmnegeri.proPeruntukan) AS P FROM progmnegeri WHERE progmnegeri.ProjkNegriId='$get2'");
$row = mysql_fetch_row($TotalPeruntukan);
$TotalPeruntukan   = $row[0];
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////Total Kos Tanggung///////////////////////////////////////////////////////////////////////////////////////////////////////////
$TotalTanggung= mysql_query("SELECT SUM(progmnegeri.proTggBlmDone) AS P FROM progmnegeri WHERE progmnegeri.ProjkNegriId='$get2'");
$row = mysql_fetch_row($TotalTanggung);
$TotalTanggung   = $row[0];
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////Total Kos Perbelanjaan///////////////////////////////////////////////////////////////////////////////////////////////////////////
$TotalBelanja= mysql_query("SELECT SUM(progmnegeri.proBelanja) AS P FROM progmnegeri WHERE progmnegeri.ProjkNegriId='$get2'");
$row = mysql_fetch_row($TotalBelanja);
$TotalBelanja   = $row[0];
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////Get tolak /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$JanTolak= mysql_query("SELECT jps_belanja.Tolak FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Januari'");
$row = mysql_fetch_row($JanTolak);
$JanTolak  = $row[0];

$FebTolak= mysql_query("SELECT jps_belanja.Tolak FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Febuari'");
$row = mysql_fetch_row($FebTolak);
$FebTolak  = $row[0];

$MacTolak= mysql_query("SELECT jps_belanja.Tolak FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Mac'");
$row = mysql_fetch_row($MacTolak);
$MacTolak  = $row[0];

$AprTolak = mysql_query("SELECT jps_belanja.Tolak FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='April'");
$row = mysql_fetch_row($AprTolak);
$AprTolak  = $row[0];

$MeiTolak= mysql_query("SELECT jps_belanja.Tolak FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Mei'");
$row = mysql_fetch_row($MeiTolak);
$MeiTolak  = $row[0];

$JunTolak= mysql_query("SELECT jps_belanja.Tolak FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Jun'");
$row = mysql_fetch_row($JunTolak);
$JunTolak  = $row[0];

$JulTolak= mysql_query("SELECT jps_belanja.Tolak FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Julai'");
$row = mysql_fetch_row($JulTolak);
$JulTolak  = $row[0];

$OgsTolak= mysql_query("SELECT jps_belanja.Tolak FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Ogos'");
$row = mysql_fetch_row($OgsTolak);
$OgsTolak  = $row[0];

$SepTolak= mysql_query("SELECT jps_belanja.Tolak FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='September'");
$row = mysql_fetch_row($SepTolak);
$SepTolak  = $row[0];

$OktTolak= mysql_query("SELECT jps_belanja.Tolak FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Oktober'");
$row = mysql_fetch_row($OktTolak);
$OktTolak  = $row[0];

$NovTolak= mysql_query("SELECT jps_belanja.Tolak FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='November'");
$row = mysql_fetch_row($NovTolak);
$NovTolak  = $row[0];

$DisTolak= mysql_query("SELECT jps_belanja.Tolak FROM projeknegeri, jps_belanja WHERE projeknegeri.pNegeriId=jps_belanja.pNegeriId AND projeknegeri.pNegeriId='$get2' AND jps_belanja.Bulan='Disember'");
$row = mysql_fetch_row($DisTolak);
$DisTolak  = $row[0];
///////////////////////////////////////////Get ID /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$Janbaki = $TotalPeruntukan - $JanTanggung - $JanBelanja - $JanTolak;
$Febbaki = $TotalPeruntukan - $FebTanggung - $FebBelanja - $JanBelanja - $FebTolak;
$Macbaki = $TotalPeruntukan - $MacTanggung - $MacBelanja - $JanBelanja - $FebBelanja - $MacTolak;
$Aprbaki = $TotalPeruntukan - $AprilTanggung - $AprilBelanja - $JanBelanja - $FebTanggung - $MacBelanja - $AprTolak;
$Meibaki = $TotalPeruntukan - $MeiTanggung - $MeiBelanja - $JanBelanja - $FebBelanja - $MacBelanja - $AprilBelanja - $MeiTolak;
$Junbaki = $TotalPeruntukan - $JunTanggung - $JunBelanja - $JanBelanja - $FebBelanja - $MacBelanja - $AprilBelanja - $MeiBelanja - $JunTolak;
$Julbaki = $TotalPeruntukan - $JulaiTanggung - $JulaiBelanja - $JanBelanja - $FebBelanja - $MacBelanja - $AprilBelanja - $MeiBelanja - $JunBelanja - $JulTolak;
$Ogsbaki = $TotalPeruntukan - $OgosTanggung - $OgosBelanja - $JanBelanja - $FebBelanja - $MacBelanja - $AprilBelanja - $MeiBelanja - $JunBelanja - $JulaiBelanja - $OgsTolak;
$Sepbaki = $TotalPeruntukan - $SeptemberTanggung - $SeptemberBelanja - $JanBelanja - $FebBelanja - $MacBelanja - $AprilBelanja - $MeiBelanja - $JunBelanja - $JulaiBelanja - $OgosBelanja - $SepTolak;
$Oktbaki = $TotalPeruntukan - $OktoberTanggung - $OktoberBelanja - $JanBelanja - $FebBelanja - $MacBelanja - $AprilBelanja - $MeiBelanja - $JunBelanja - $JulaiBelanja - $OgosBelanja - $SeptemberBelanja - $OktTolak;
$Novbaki = $TotalPeruntukan - $NovemberTanggung - $NovemberBelanja - $JanBelanja - $FebBelanja - $MacBelanja - $AprilBelanja - $MeiBelanja - $JunBelanja - $JulaiBelanja - $OgosBelanja - $SeptemberBelanja - $OktoberBelanja - $NovTolak;
$Disbaki = $TotalPeruntukan - $DisemberTanggung - $DisemberBelanja - $JanBelanja - $FebBelanja - $MacBelanja - $AprilBelanja - $MeiBelanja - $JunBelanja - $JulaiBelanja - $OgosBelanja - $SeptemberBelanja - $OktoberBelanja - $NovemberBelanja - $DisTolak;


$BakiKini = $TotalPeruntukan - $TotalTanggung - $TotalBelanja;


?>
