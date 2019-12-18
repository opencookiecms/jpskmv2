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

mysql_select_db($database_dbconn, $dbconn);
$query_print = "SELECT * FROM aduan";
$print = mysql_query($query_print, $dbconn) or die(mysql_error());
$row_print = mysql_fetch_assoc($print);
$totalRows_print = mysql_num_rows($print);
?>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-wr85{font-weight:bold;background-color:#efefef;text-align:center}
.tg .tg-xwic{font-weight:bold;font-size:10px;font-family:Arial, Helvetica, sans-serif !important;;background-color:#efefef;text-align:center}
.tg .tg-yw4l{vertical-align:top; font-size:10px;}
.title{
text-align: center;
width:680px;
margin-top: 20px;

}
.kodaduan{
  display: inline-block;
  width: 500px;
  text-align: right;
  margin-top: 10px;

}
.kod{
  display: inline-block;
  width: 180px;

  position: relative;
  left: 506px;
  top: -13.5px;
}
.nama{
  display: inline-block;
  width: 350px;
  text-align: left;
  margin-top: 50px;

}
.tarikh{
  display: inline-block;
  width: 230px;

  position: relative;
  left: 455px;
  top: -16.5px;
}
.alamat{
  display: inline-block;
  text-align: left;
  width: 55px;
  margin-top: 20px;

}
.alamtcontent{
  display: inline-block;
  width: 300px;

  position: relative;
  left: 60px;
  top: -16.5px;
}
.tuanpuan{
  display: inline-block;
  width: 350px;
  text-align: left;
  margin-top: 100px;

}
.per{
  display: inline-block;
  width: 650px;
  text-align: left;
  margin-top: 50px;

}
.dialog{
  display: inline-block;

  margin-top: 50px;
  text-align: left;
  width: 680px;
}
.text1{
  text-align: left;
  margin-top: 5px;

      width: 680px;
        margin-top: 50px;
}
.text2{
  text-align: left;
  margin-top: 5px;

      width: 680px;
}
.text3{
  text-align: left;
  margin-top: 5px;

      width: 680px;
}

.trimas{
  text-align: left;
  margin-top: 5px;

      width: 680px;
        margin-top: 30px;
}
.juru{
  text-align: left;
  margin-top: 5px;

      width: 180px;
        margin-top: 50px;
}
.text4{
  text-align: left;
  margin-top: 5px;
  width: 680px;
  margin-top: 100px;
  border-bottom: 1px solid black;
  text-align: center;
  padding: 5px;
}
.logokedah{
	background-image:url(../assets/images/kedah.png);
	width:50px;
	height:50px;
	background-repeat:no-repeat;
	position:relative;
	top:-42px;
	left:260px;}
.logojps{
	background-image:url(../assets/images/logolaporan.png);
	width:50px;
	height:50px;
	background-repeat:no-repeat;
	position:relative;



}

</style>


<page backtop="10mm" backbottom="10mm" backleft="10mm" backright="100mm">

 <table class="tg">
  <tr>
  	 <th class="tg-wr85" style="border-right:none;"></th>
      <th class="tg-wr85" style="border-right:none;"></th>
       <th class="tg-wr85" style="border-right:none;"></th>
        <th class="tg-wr85" style="border-right:none;"><img src="../assets/images/kedah.png" /></th>
    <th class="tg-wr85" colspan="5" style="border-right:none;">LAPORAN TERPERINCI PENGADUAN AWAM TAHUN 2017<br>JPS KUALA MUDA/SIK/BALING</th>
     <th class="tg-wr85" style="border-right:none;"><img src="../assets/images/logolaporan.png" /></th>
      <th class="tg-wr85" style="border-right:none;"></th>
       <th class="tg-wr85" style="border-right:none;"></th>
        <th class="tg-wr85" style="border-right:none;"></th>
         <th class="tg-wr85"></th>
  </tr>
  <tr>
    <td class="tg-xwic">BIL<br></td>
    <td class="tg-xwic">NO RUJUKAN<br></td>
    <td class="tg-xwic">NAMA PENGADU<br></td>
    <td class="tg-xwic">SUMBER</td>
    <td class="tg-xwic">ADUAN<br></td>
    <td class="tg-xwic">TARIKH <br>ADUAN<br>DITERIMA<br></td>
    <td class="tg-xwic">TARIKH<br>SURAT AKAUN<br>TERIMA<br>DIKELUARKAN<br></td>
    <td class="tg-xwic">TARIKH<br>MAJUKAN<br>ADUAN KPD<br>PEGAWAI<br></td>
    <td class="tg-xwic">TARIKH<br>TERIMA<br>MAKLUMBALAS<br>DARI<br>PEGAWAI<br></td>
    <td class="tg-xwic">TINDAKAN<br>JPS<br>/<br>AGENSI<br>LAIN<br></td>
    <td class="tg-xwic">TARIKH<br>JAWAPAN<br>KPD<br>PENGADU<br></td>
    <td class="tg-xwic">STATUS<br>ADUAN<br></td>
    <td class="tg-xwic">KOS<br>DISYORKAN</td>
    <td class="tg-xwic">CATATAN</td>
  </tr>
  <?php $bil =0 ?>
   <?php do { ?>
  <tr>
  <?php $bil +=1 ?>

    <td class="tg-yw4l"><?php echo $bil ?></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l" width="20"><?php echo $row_print['aNama']; ?></td>
    <td class="tg-yw4l" width="10"><?php echo $row_print['aSumber']; ?></td>
    <td class="tg-yw4l" width="120"><?php echo $row_print['aMasalah']; ?></td>
    <td class="tg-yw4l"><?php echo $row_print['aTarikh']; ?></td>
    <td class="tg-yw4l"><?php echo $row_print['aTerima']; ?></td>
    <td class="tg-yw4l"><?php echo $row_print['AduandateSuratMin']; ?></td>
    <td class="tg-yw4l"><?php echo $row_print['AduandateSiasat']; ?></td>
    <td class="tg-yw4l"><?php echo $row_print['atindakan']; ?></td>
    <td class="tg-yw4l"><?php echo $row_print['ProgDate']; ?></td>
    <td class="tg-yw4l"><?php echo $row_print['aStatus']; ?></td>
    <td class="tg-yw4l" width="10"><?php echo $row_print['AduanPenyiasat']; ?></td>
    <td class="tg-yw4l"></td>

  </tr>
    <?php } while ($row_print = mysql_fetch_assoc($print)); ?>
</table>

</page>


<?php
mysql_free_result($print);
?>
