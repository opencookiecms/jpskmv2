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

mysql_select_db($database_dbconn, $dbconn);
$query_WPL = "SELECT * FROM wpl";
$WPL = mysql_query($query_WPL, $dbconn) or die(mysql_error());
$row_WPL = mysql_fetch_assoc($WPL);
$totalRows_WPL = mysql_num_rows($WPL);

mysql_select_db($database_dbconn, $dbconn);
$query_PL = "SELECT * FROM pl";
$PL = mysql_query($query_PL, $dbconn) or die(mysql_error());
$row_PL = mysql_fetch_assoc($PL);
$totalRows_PL = mysql_num_rows($PL);

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbName = "jpskursus";

// Create connection
 mysql_connect("$servername", "$username", "$password")or die("cannot connect");
 mysql_select_db("$dbName")or die("cannot select DB");

//user for group one
$usergroupone= mysql_query("SELECT COUNT(usersgroups) FROM users, idjps WHERE users.usersgroups=1 AND users.usrId=idjps.usrId");
$row = mysql_fetch_row($usergroupone);
$usergroupone   = $row[0];

//user for group two
$usergrouptwo= mysql_query("SELECT COUNT(usersgroups) FROM users WHERE usersgroups=2");
$row = mysql_fetch_row($usergrouptwo);
$usergrouptwo   = $row[0];

//user for group three
$usergroupthree= mysql_query("SELECT COUNT(usersgroups) FROM users WHERE usersgroups=3");
$row = mysql_fetch_row($usergroupthree);
$usergroupthree   = $row[0];

//user for group four
$usergroupfour= mysql_query("SELECT COUNT(usersgroups) FROM users WHERE usersgroups=4");
$row = mysql_fetch_row($usergroupfour);
$usergroupfour   = $row[0];

///////////////////////////////////////jumlah hari untuk kumpulan satu////////////////////////////////////
$PPzero  = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 0 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=1 AND users.usrId=idjps.usrId  GROUP BY users.usersgroups ");
$row = mysql_fetch_row($PPzero );
$PPzero   = $row[0];

///////////////////////////////////////////////////////////////////////////////////
$PPequalfour1  = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 1 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=1 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($PPequalfour1  );
$PPequalfour1    = $row[0];

$PPequalfour2  = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 2 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=1 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($PPequalfour2  );
$PPequalfour2    = $row[0];

$PPequalfour3  = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 3 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=1 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($PPequalfour3  );
$PPequalfour3    = $row[0];

$PPequalfour4  = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 4 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=1 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($PPequalfour4  );
$PPequalfour4    = $row[0];
//////////////////////////////////////////////////////////////////////////////////////
$PP5dan6 = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn =5 OR idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn=6 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=1 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($PP5dan6  );
$PP5dan6    = $row[0];

$PP7hari = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn >=7 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=1 AND users.usrId=idjps.usrId AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($PP7hari  );
$PP7hari    = $row[0];

$PP3bulan = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn >=93 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=1 AND users.usrId=idjps.usrId AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($PP3bulan  );
$PP3bulan    = $row[0];
///////////////////////////////////////////////////////////////////////////////////////


///////////////////////////////////////jumlah hari untuk kumpulan dua////////////////////////////////////
$sokong1zero  = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 0 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=2 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($sokong1zero );
$sokong1zero   = $row[0];
//////////////////////////////////////////////////////
$sokong1equalfour1  = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 1 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=2 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($sokong1equalfour1  );
$sokong1equalfour1    = $row[0];

$sokong1equalfour2 = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 2 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=2 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($sokong1equalfour2  );
$sokong1equalfour2    = $row[0];

$sokong1equalfour3  = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=2 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($sokong1equalfour3  );
$sokong1equalfour3    = $row[0];

$sokong1equalfour4  = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 4 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=2 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($sokong1equalfour4  );
$sokong1equalfour4    = $row[0];


//////////////////////////////////////////////////////////////
$sokong15dan6 = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn =5 OR idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn=6 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=2 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($sokong15dan6  );
$sokong15dan6    = $row[0];

$sokong17hari = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn >=7 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=2 AND users.usrId=idjps.usrId AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($sokong17hari  );
$sokong17hari    = $row[0];

$sokong13bulan = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn >=93 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=2 AND users.usrId=idjps.usrId AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($sokong13bulan  );
$sokong13bulan    = $row[0];
///////////////////////////////////////////////////////////////////////////////////////


///////////////////////////////////////jumlah hari untuk kumpulan Tiga////////////////////////////////////
$sokong3zero  = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 0 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=3 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($sokong3zero);
$sokong3zero   = $row[0];
///////////////////////////////////////////////////////////////////////////////////////////////////////////
$sokong3equalfour1  = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 1 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=3 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($sokong3equalfour1);
$sokong3equalfour1    = $row[0];

$sokong3equalfour2  = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 2 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=3 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($sokong3equalfour2);
$sokong3equalfour2    = $row[0];

$sokong3equalfour3  = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 3 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=3 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($sokong3equalfour3);
$sokong3equalfour3    = $row[0];

$sokong3equalfour4  = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn =4 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=3 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($sokong3equalfour4);
$sokong3equalfour4    = $row[0];

//////////////////////////////////////////////////////////////////////////////////////////////////////////
$sokong35dan6 = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn =5 OR idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn=6 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=3 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($sokong35dan6);
$sokong35dan6    = $row[0];

$sokong37hari = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn >=7 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=3 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($sokong37hari);
$sokong37hari    = $row[0];

$sokong33bulan = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn >=93 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=3 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($sokong33bulan);
$sokong33bulan    = $row[0];
///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////jumlah hari untuk kumpulan empat////////////////////////////////////
$sokong4zero  = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 0 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=4 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($sokong4zero );
$sokong4zero   = $row[0];
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sokong4equalfour1  = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 1 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=4 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($sokong4equalfour1);
$sokong4equalfour1    = $row[0];

$sokong4equalfour2  = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 2  THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=4 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($sokong4equalfour2);
$sokong4equalfour2    = $row[0];

$sokong4equalfour3  = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 3 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=4 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($sokong4equalfour3);
$sokong4equalfour3    = $row[0];

$sokong4equalfour4  = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn = 4 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=4 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($sokong4equalfour4);
$sokong4equalfour4    = $row[0];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

$sokong45dan6 = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn =5 OR idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn=6 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=4 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($sokong45dan6);
$sokong45dan6    = $row[0];

$sokong47hari = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn >=7 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=4 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($sokong47hari);
$sokong47hari    = $row[0];

$sokong43bulan = mysql_query ("SELECT COUNT(CASE WHEN idjps.dayone+idjps.daytwo+idjps.daythree+idjps.dayfour+idjps.dayfive+idjps.daysix+idjps.daysvn >=93 THEN 1 END) as number0 FROM users,idjps WHERE users.usersgroups=4 AND users.usrId=idjps.usrId GROUP BY users.usersgroups ");
$row = mysql_fetch_row($sokong43bulan);
$sokong43bulan    = $row[0];
///////////////////////////////////////////////////////////////////////////////////////

?>

<?php

$totalgrbt2dan3 = $usergroupthree + $usergrouptwo;
$totaluserall = $usergroupone + $usergroupfour  + $totalgrbt2dan3;
$totalpercentage = $totaluserall/$totaluserall * 100;

////////////////////////////Kiraaan hari untuk kumpulan 2 dan tiga////////////////////////////////////////////
//case total
$totolzero = $sokong1zero + $sokong3zero;
$total4harikursus = $sokong1equalfour1 + $sokong1equalfour2 + $sokong1equalfour3 + $sokong1equalfour4 +  $sokong3equalfour1 + $sokong3equalfour2 + $sokong3equalfour3 + $sokong3equalfour4;
$total5dan6hari = $sokong15dan6 + $sokong35dan6;
$totallebih7 = $sokong17hari + $sokong37hari;
$totallebih3bulan = $sokong13bulan + $sokong33bulan;
$totalsokongdua4hari = $sokong4equalfour1 + $sokong4equalfour2 + $sokong4equalfour3 + $sokong4equalfour4;
$TotalPPequalfour = $PPequalfour1 + $PPequalfour2 + $PPequalfour3 + $PPequalfour4;

/////////////////////////////////////total jumlah pulak///////////////////////////
$totaljumlahzero = $PPzero + $sokong4zero + $totolzero;
$totaljumlah4harikursus = $TotalPPequalfour  + $totalsokongdua4hari + $total4harikursus;
$totaljumlah5dan6 = $PP5dan6 + $sokong45dan6 + $total5dan6hari;
$totaljumlah7 = $PP7hari + $sokong47hari + $totallebih7;
$totaljumlah30 = $PP3bulan + $sokong43bulan + $totallebih3bulan;

///////////////////////kira percent///////////////////
$percent0 = number_format ($totaljumlahzero/$totaluserall * 100,1) . '%';
$percent4 = number_format ($totaljumlah4harikursus/$totaluserall * 100,1) . '%';
$percent5dan6 = number_format ($totaljumlah5dan6/$totaluserall * 100,1) . '%';
$percent7 = number_format ($totaljumlah7/$totaluserall * 100,1) . '%';
$percent30 = number_format ($totaljumlah30/$totaluserall * 100,1) . '%';

?>

<style type="text/css">
.tg  {
	border-collapse: collapse;
	border-spacing: 0;
	text-align: left;
}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-hgcj{font-weight:bold;text-align:center}
.tg .tg-yw4l{vertical-align:top; text-align:center;}
.tg .tg-amwm{font-weight:bold;text-align:center;vertical-align:top}
.tg .tg-9hbo{font-weight:bold;vertical-align:top}
.centen {
	font-size: 12px;
}
.TNA {
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
</style>

<page backtop="5mm" backbottom="20mm" backleft="10mm" backright="0mm">
<table width="857">
  <tr>
    <td width="962" class="TNA">LAPORAN KEHADIRAN LATIHAN KAKITANGAN JPS KUALA MUDA / SIK/ BALING<BR />BAGI BULAN <?php $month=getdate(date("U")); echo "<span style='text-transform:uppercase;'>$month[month] $month[year]</span>";?></td>
  </tr>
</table>
<P></P>
<P></P>

<table class="tg">
  <tr>
    <th class="tg-hgcj" rowspan="2">Bil<br></th>
    <th class="tg-hgcj" rowspan="2">KATEGORI KAKITANGAN<br></th>
    <th class="tg-hgcj" rowspan="2">JUMLAH<br>KAKITANGAN<br></th>
    <th class="tg-hgcj" rowspan="2">BILANGAN <br>KAKITANGAN<br>YANG TIDAK <br>HADIR KURSUS<br></th>
    <th class="tg-hgcj" colspan="3">BILANGAN KAKITANGAN YANG TELAH<br>MENGHADIRI KURSUS PENDEK<br></th>
    <th class="tg-hgcj" rowspan="2">BILANGAN<br>KAKITANGAN<br>YANG HADIR<br>KURSUS<br>PANJANG &gt; 3<br>BULAN<br></th>
    <th class="tg-hgcj" rowspan="2">CATATAN</th>
  </tr>
  <tr>
    <td class="tg-hgcj" style="border-left:none;">&lt; 4 HARI<br></td>
    <td class="tg-hgcj">5 - 6 HARI<br></td>
    <td class="tg-hgcj">&gt; 7 HARI<br></td>
  </tr>
  <tr>
    <td class="tg-yw4l">1</td>
    <td class="tg-yw4l" style="text-align:left;">Jusa<br></td>
    <td class="tg-yw4l">0</td>
    <td class="tg-yw4l">0</td>
    <td class="tg-yw4l">0</td>
    <td class="tg-yw4l">0</td>
    <td class="tg-yw4l">0</td>
    <td class="tg-yw4l">0</td>
    <td class="tg-yw4l"></td>
  </tr>
  <tr>
    <td class="tg-yw4l">2</td>
    <td class="tg-yw4l" style="text-align:left;">Kumpulan Pengurusan &amp; Profesional</td>
    <td class="tg-yw4l"><?php echo $usergroupone ?></td>
    <td class="tg-yw4l"><?php echo $PPzero ?></td>
    <td class="tg-yw4l"><?php echo $TotalPPequalfour?></td>
    <td class="tg-yw4l"><?php echo $PP5dan6  ?></td>
    <td class="tg-yw4l"><?php echo $PP7hari ?></td>
    <td class="tg-yw4l"><?php echo $PP3bulan ?></td>
    <td class="tg-yw4l"></td>
  </tr>
  <tr>
    <td class="tg-yw4l">3</td>
    <td class="tg-yw4l" style="text-align:left;">Kumpulan Sokongan I<br></td>
    <td class="tg-yw4l"><?php echo $totalgrbt2dan3 ?></td>
    <td class="tg-yw4l"><?php echo $totolzero ?></td>
    <td class="tg-yw4l"><?php echo $total4harikursus ?></td>
    <td class="tg-yw4l"><?php echo $total5dan6hari ?></td>
    <td class="tg-yw4l"><?php echo $totallebih7 ?></td>
    <td class="tg-yw4l"><?php echo $totallebih3bulan ?></td>
    <td class="tg-yw4l"></td>
  </tr>
  <tr>
    <td class="tg-yw4l">4</td>
    <td class="tg-yw4l" style="text-align:left;">Kumpulan Sokongan II<br></td>
    <td class="tg-yw4l"><?php echo $usergroupfour ?></td>
    <td class="tg-yw4l"><?php echo $sokong4zero ?></td>
    <td class="tg-yw4l"><?php echo $totalsokongdua4hari ?></td>
    <td class="tg-yw4l"><?php echo $sokong45dan6 ?></td>
    <td class="tg-yw4l"><?php echo $sokong47hari ?></td>
    <td class="tg-yw4l"><?php echo $sokong43bulan ?></td>
    <td class="tg-yw4l"></td>
  </tr>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-amwm">JUMLAH</td>
    <td class="tg-9hbo" style="text-align:center;"><?php echo $totaluserall ?></td>
    <td class="tg-9hbo" style="text-align:center;"><?php echo $totaljumlahzero?></td>
    <td class="tg-9hbo" style="text-align:center;"><?php echo $totaljumlah4harikursus?></td>
    <td class="tg-9hbo" style="text-align:center;"><?php echo $totaljumlah5dan6 ?></td>
    <td class="tg-9hbo" style="text-align:center;"><?php echo $totaljumlah7?></td>
    <td class="tg-9hbo" style="text-align:center;"><?php echo $totaljumlah30?></td>
    <td class="tg-9hbo" style="text-align:center;"></td>
  </tr>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-amwm">PERATUSAN</td>
    <td class="tg-9hbo" style="text-align:center;"><?php echo $totalpercentage?>%</td>
    <td class="tg-9hbo" style="text-align:center;"><?php echo $percent0?>%</td>
    <td class="tg-9hbo" style="text-align:center;"><?php echo $percent4?></td>
    <td class="tg-9hbo" style="text-align:center;"><?php echo $percent5dan6?></td>
    <td class="tg-9hbo" style="text-align:center;"><?php echo $percent7?></td>
    <td class="tg-9hbo" style="text-align:center;"><?php echo $percent30 ?></td>
    <td class="tg-9hbo" style="text-align:center;"></td>
  </tr>
</table>
<P></P>
<P></P>
<table width="949">
  <tr>
    <td width="730"><span>Disediakan Oleh,</span>
<P></P>
<span>....................................</span><br />
<span><?php echo $row_WPL['Nama']; ?></span><br />
<span>Wakil Penyelasaran Latihan,</span><br />
<span>JPS Kuala Muda/Sik/Baling,</span><br />
<span><strong>Sungai Petani Kedah</strong></span><br /></td>
    <td width="207"><span>Disediakan Oleh,</span>
<P></P>
<span>....................................</span><br />
<span><?php echo $row_PL['Nama']; ?></span><br />
<span>Penyelaras Latihan,</span><br />
<span>JPS Kuala Muda/Sik/Baling,</span><br />
<span><strong>Sungai Petani Kedah</strong></span><br /></td>
  </tr>
</table>





</page>
<?php
mysql_free_result($WPL);

mysql_free_result($PL);
?>
