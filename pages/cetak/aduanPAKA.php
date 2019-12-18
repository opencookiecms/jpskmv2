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

$colname_print = "-1";
if (isset($_GET['aduanId'])) {
  $colname_print = $_GET['aduanId'];
}
mysql_select_db($database_dbconn, $dbconn);
$query_print = sprintf("SELECT * FROM aduan WHERE aduanId = %s", GetSQLValueString($colname_print, "int"));
$print = mysql_query($query_print, $dbconn) or die(mysql_error());
$row_print = mysql_fetch_assoc($print);
$totalRows_print = mysql_num_rows($print);
?>
<style type="text/css">
.tg  {
	border-collapse: collapse;
	border-spacing: 0;
	border-color: #ccc;
	font-size: 9px;
  width: 960px;
}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-top: none;border-left: none;border-right: none;border-width:1px;overflow:hidden;word-break:normal;border-color:black;color:#333;}
.tg .tg-nrw1{
	font-size: 9px;
	text-align: center;
	vertical-align: top
}
.tg .tg-s5wt{
	font-size: 9px;
	background-color: #efefef;
	vertical-align: top
}
.tg .tg-x361{
	font-style: italic;
	font-size: 10px;
	text-align: center
}
.tg .tg-lhw6{font-size:10px;text-align:right;vertical-align:top}
.tg .tg-by3v{
	font-weight: bold;
	font-size: 10px;
	text-align: center
}
.tg .tg-0e45{font-size:11px}
.tg .tg-k6pi{
	font-size: 9px
}
.tg .tg-7kzq{font-size:10px;background-color:#efefef}
.tg .tg-yw4l{
	vertical-align: top;
	font-size: 9px;
}
.tg .tg-1z5j{
	font-size: 9px;
	background-color: #efefef;
	color: #000000;
	vertical-align: top
}
.tg .tg-dx8v{
	font-size: 9px;
	vertical-align: top
}
.tg .tg-rg0h{
	font-size: 9px;
	text-align: left;
	vertical-align: top
}
.tg .tg-chud{
	font-size: 9px;
	background-color: #efefef;
	text-align: center;
	vertical-align: top
}
.tg .tg-25al{
	font-size: 9px;
	vertical-align: top
}
.tg tr .tg-x361 {
	font-size: 9px;
}
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

</style>


<page backtop="10mm" backbottom="10mm" backleft="10mm" backright="100mm">

 <table class="tg">
  <tr>
    <th class="tg-031e"><img src="../assets/images/logo.png" width="80" height="30" alt="" /></th>
    <th class="tg-by3v" style="width:475px;">JABATAN PENGAIRAN DAN SALIRAN<br>KUALA MUDA / SIK / BALING<br>SUNGAI PETANI KEDAH DARUL AMAN<br></th>
    <th class="tg-0e45">TEL   : 04-4217214<br>FAKS : 04:4218834<br></th>
  </tr>
</table>
<div class="title"><span style="font-weight:bold">( Akuan Penerimaan Aduan )</span></div>
<div class="kodaduan"><span style="font-weight:bold">Kod Aduan:</span></div>
<div class="kod"><?php echo $row_print['aKod']; ?></div>
<div class="nama"><span style="font-weight:bold">Nama    	&nbsp;&nbsp;:</span>&nbsp;&nbsp;<?php echo $row_print['aNama']; ?></div>
<div class="tarikh"><span style="font-weight:bold">Tarikh:</span>&nbsp;<?php echo $row_print['aTerima']; ?></div>
<div class="alamat"><span style="font-weight:bold">Alamat :</span></div>
<div class="alamtcontent"><?php echo $row_print['aAlamat']; ?></div>
<div class="tuanpuan">Tuan/Puan,</div>
<div class="per"><span style="font-weight:bold">Per. : <span style="font-weight:normal"><?php echo $row_print['aMasalah']; ?></span></span></div>
<div class="text1">Permohonan/aduan diatas telah diterima pada <?php echo $row_print['aTerima']; ?>. Pihak jabatan mengucapkan</div>
<div class="text2">terima kasih diatas kerjasama tuan/puan. Maklumat lanjut akan disampaikan dalam tempoh 21 hari dari</div>
<div class="text3">tarikh surat ini setelah siasatan terperinci selesai dijalankan.</div>
<div class="trimas">Sekian, terima kasih.</div>
<div class="juru">
<span style="font-weight:bold">JURUTERA DAERAH</span>
Jabatan Pengairan dan Saliran
Kuala Muda/Sik/Baling
08000 Sungai Petani
Kedah Darul Aman.
</div>
<div class="text4"><span style="padding-bottom:4px">[ Cetakan Komputer Ini Tidak memerlukan Tandatangan ]</span></div>

</page>


<?php
mysql_free_result($print);
?>
