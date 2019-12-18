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

$colname_laporaindi = "-1";
if (isset($_GET['usrIcNo'])) {
  $colname_laporaindi = $_GET['usrIcNo'];
}
mysql_select_db($database_kcon, $kcon);
$query_laporaindi = sprintf("SELECT * FROM users, kursus, idjps WHERE md5(usrIcNo)=%s AND idjps.kusId=kursus.kusId AND users.usrId=idjps.usrId", GetSQLValueString($colname_laporaindi, "text"));
$laporaindi = mysql_query($query_laporaindi, $kcon) or die(mysql_error());
$row_laporaindi = mysql_fetch_assoc($laporaindi);
$totalRows_laporaindi = mysql_num_rows($laporaindi);

mysql_select_db($database_kcon, $kcon);
$query_laporaindi2 = sprintf("SELECT *, SUM(idjps.jumlahHadir) as kal FROM users, kursus, idjps WHERE md5(usrIcNo)=%s AND idjps.kusId=kursus.kusId AND users.usrId=idjps.usrId", GetSQLValueString($colname_laporaindi, "text"));
$laporaindi2 = mysql_query($query_laporaindi2, $kcon) or die(mysql_error());
$row_laporaindi2 = mysql_fetch_assoc($laporaindi2);
$totalRows_laporaindi2 = mysql_num_rows($laporaindi2);
?>
<style type="text/css">
.tg  {
	border-collapse: collapse;
	border-spacing: 0;
	text-align: left;
}
.tg td{font-family:Arial, sans-serif;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:12px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-hgcj{font-weight:bold;text-align:center}
.tg .tg-yw4l{vertical-align:top; text-align:center;}
.tg .tg-amwm{font-weight:bold;text-align:center;vertical-align:top}
.tg .tg-9hbo{vertical-align:top}
.centen {
	font-size: 12px;
}
.TNA {
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.img {

    width: 380px;
	height:145px;


	margin-left:180px;
	background-image:url(../assets/images/sijil.png);
	background-repeat:no-repeat;
	background-size:50px;
}
</style>

<page backtop="10mm" backbottom="20mm" backleft="10mm" backright="0mm">
<div class="img"></div>
<P></P>
<P></P>
<table width="600">
  <tr>
    <td width="600" class="TNA">LAPORAN KEHADIRAN INDIVIDU KAKITANGAN JPS KUALA MUDA / SIK/ BALING<BR />BAGI BULAN <?php $month=getdate(date("U")); echo "<span style='text-transform:uppercase;'>$month[month] $month[year]</span>";?></td>
  </tr>
</table>
<P></P>
<P></P>
<table width="600">
  <tr>
    <th width="181" class="tg-hgcj" style="text-align:left;">Nama :</th>
    <td colspan="3" class="tg-k6pi"><?php echo $row_laporaindi['usrName']; ?></td>
      <th width="57" class="tg-hgcj" style="text-align:left;"> Jawatan</th>
    <td width="164" class="tg-k6pi"><?php echo $row_laporaindi['Jawatan']; ?></td>

    </tr>
  <tr>
    <th class="tg-hgcj" style="text-align:left;">No Kad Pengenalan :</th>
    <td width="178" class="tg-k6pi"><?php echo $row_laporaindi['usrIcNo']; ?></td>

  </tr>
  <tr>
    <th class="tg-hgcj" style="text-align:left;">Gren Jawatan :</th>
    <td colspan="3" class="tg-k6pi"><?php echo $row_laporaindi['GredJawatan']; ?></td>
    </tr>
  <tr>
    <th class="tg-hgcj" style="text-align:left;">Jumlah Kehadiran :</th>
    <td class="tg-dx8v"><?php echo $row_laporaindi2['kal']; ?></td>

  </tr>
</table>
<P></P>
<P></P>
<table class="tg">
  <tr>
    <th class="tg-hgcj">BIL</th>
    <th class="tg-hgcj">KURSUS DIHADIRI<br></th>
    <th class="tg-hgcj">MULA</th>
    <th class="tg-hgcj">AKHIR</th>
    <th class="tg-hgcj">TEMPAT</th>
    <th class="tg-hgcj">KEHADIRAN</th>

  </tr>
  <?php $co = 0 ?>
  <?php do { ?>
  <tr>
  <?php $co +=1 ?>

      <td class="tg-9hbo"><?php echo $co ?></td>
      <td class="tg-9hbo" width="350"><?php echo $row_laporaindi['KusName']; ?></td>
      <td class="tg-9hbo" style="text-align:center;"><?php echo $row_laporaindi['KusBegin']; ?></td>
      <td class="tg-9hbo" style="text-align:center;"><?php echo $row_laporaindi['kusEnd']; ?></td>
      <td class="tg-9hbo" style="text-align:center;"><?php echo $row_laporaindi['kusTempat']; ?></td>
      <td class="tg-9hbo" style="text-align:center;"><?php echo $row_laporaindi['jumlahHadir']; ?></td>

  </tr>
    <?php } while ($row_laporaindi = mysql_fetch_assoc($laporaindi)); ?>
</table>
<P></P>
<P></P>
</page>

<?php
mysql_free_result($laporaindi);
?>
