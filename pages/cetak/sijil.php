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

$colname_kontrakto = "-1";
if (isset($_GET['kontraktorId'])) {
  $colname_kontrakto = $_GET['kontraktorId'];
}
mysql_select_db($database_dbconn, $dbconn);
$query_kontrakto = sprintf("SELECT * FROM kontraktor WHERE kontraktorId = %s", GetSQLValueString($colname_kontrakto, "int"));
$kontrakto = mysql_query($query_kontrakto, $dbconn) or die(mysql_error());
$row_kontrakto = mysql_fetch_assoc($kontrakto);
$totalRows_kontrakto = mysql_num_rows($kontrakto);

mysql_select_db($database_dbconn, $dbconn);
$query_sijilsah = "SELECT * FROM sijilsah";
$sijilsah = mysql_query($query_sijilsah, $dbconn) or die(mysql_error());
$row_sijilsah = mysql_fetch_assoc($sijilsah);
$totalRows_sijilsah = mysql_num_rows($sijilsah);
?>

<?php

@session_start();
$RegDate = date($row_kontrakto['sijilJPSSah']);
$endRegDate = date($row_kontrakto['sijilJPSTamat']);
?>

<style>
.imgalig
{
	alignment-adjust:middle;
}

.img {

    width: 350px;
	height:145px;
	
	top:60px;

	margin-left:250px;
	background-image:url(../assets/images/sijil.png);
	background-repeat:no-repeat;
	background-size:150px;
}
.cop {

    width: 380px;
	height:145px;


	margin-left:180px;

	position:relative;
	left:80px;
	top:65px;
}
.sijil{

	margin-left:200px;
	size:150px;
	word-wrap:normal;
	font-size:18px;
	font-weight:bold;

}

.line1{

	margin-left:100px;
	size:150px;
	padding-bottom:5px;

}
.line2{

	margin-left:100px;
	size:150px;
	padding:0px;

}
.line3{

	margin-left:38px;
	size:150px;
	padding:0px;

}

.kon{

	margin-left:260px;
	size:350px;
	font-size:16px;

}

.text{
	size:150px;
}

.profileimage{
	position:relative;
	left:580px;
	top:-740px;
}

.tajuk
{
	margin-left:38px;

}

.signnama
{
	font-weight:bold;
}
.signjabatan
{
	position:relative;
	left:0px;
}
.signdaerah
{
	position:relative;
	left:-9px;
}




</style>
<page backtop="15mm" backbottom="5mm" backleft="5mm" backright="120mm">
<div class="img"></div>
<div class="line1">________________________________________________________________</div>
<div class="sijil"><span class="text">SIJIL&nbsp;PERAKUAN&nbsp;PENDAFTRAN</span></div>
<div class="kon">&nbsp;&nbsp;&nbsp;KONTRAKTOR</div>
<div class="line2">________________________________________________________________</div>
<div style="margin-left: 100px; text-align: center;">
<br />

<table width="439" border="0">
  <tr>
    <td width="429"><span style="font-weight:bold; font-size:16px;"><?php echo $row_kontrakto['konName']; ?></span><br /><?php echo $row_kontrakto['KonAlamat']; ?><br /><?php echo $row_kontrakto['konAlamatExtS']; ?><br /><?php echo $row_kontrakto['konAlamatExtD']; ?></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    </tr>
     <tr>
    <td>&nbsp;No Sijil Pendaftaran:&nbsp;&nbsp;<?php echo $row_kontrakto['spNoSijil']; ?></td>
    </tr>
</table>
</div>
<div style="margin-left: 5px; text-align: center;">
<br />
<table width="700" border="0">
  <tr>
    <td width="350">Nama Pengurus:&nbsp;<?php echo $row_kontrakto['konPengurus']; ?></td>
    <td width="350">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Kad Pengenalan:&nbsp;&nbsp;<?php echo $row_kontrakto['NoKPpengurus']; ?></td>
  </tr>
</table>
</div>
<br /><br /><br /><br />
<div class="line3">_________________________________________________________________________________________</div>
<br />
<div style="margin-left: 38px;">
<table width="1000" border="0">
  <tr>
    <td colspan="3"><span style="font-weight:bold;">SIJIL PERAKUAN PENDAFTRAN KONTRAKTOR</span></td>
    </tr>
  <tr>
    <td>No Pendaftaran</td>
    <td><?php echo $row_kontrakto['sijilNoPendaftaran']; ?></td>
    <td width="420">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempoh Sah: <?php echo $row_kontrakto['spDateKeluar']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hingga :<?php echo $row_kontrakto['spDateTamat']; ?> </td>
  </tr>
</table>

</div>


<div style="margin-left: 38px;">
<br />
<br />
<table width="999" border="0">
  <tr>
    <td width="47">Gred:</td>
    <td width="60"><?php echo $row_kontrakto['sijilPPKGredOne']; ?></td>
    <td width="73">Kategori:</td>
    <td width="60"><?php echo $row_kontrakto['sijilPPKCatOne']; ?></td>
    <td width="114">Pengkhususan:</td>
    <td width="240"><?php echo $row_kontrakto['sijilPPKKhuOne']; ?></td>
  </tr>
  <tr>
    <td>Gred:</td>
    <td><?php echo $row_kontrakto['sijilPPKGredTwo']; ?></td>
    <td>Kategori:</td>
    <td><?php echo $row_kontrakto['sijilPPKCatTwo']; ?></td>
    <td>Pengkhususan:</td>
    <td><?php echo $row_kontrakto['sijilPPKKhuTwo']; ?></td>
  </tr>
    <tr>
    <td>Gred:</td>
    <td><?php echo $row_kontrakto['sijilPPKGredThree']; ?></td>
    <td>Kategori:</td>
    <td><?php echo $row_kontrakto['sijilPPKCatThree']; ?></td>
    <td>Pengkhususan:</td>
    <td><?php echo $row_kontrakto['sijilPPKKhuThree']; ?></td>
  </tr>
</table>

</div>
<br />
<div style="margin-left: 38px;">
<table width="1000" border="0">
  <tr>
    <td colspan="3"><span style="font-weight:bold;">SIJIL PEROLEHAN KERJA KERAJAAN</span></td>
    </tr>
  <tr>
    <td>No Pendaftaran</td>
    <td><?php echo $row_kontrakto['sijilSPKKNo']; ?></td>
    <td width="400">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempoh Sah:<?php echo $row_kontrakto['sijilSPKKsah']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hingga:<?php echo $row_kontrakto['sijilSPKKTamat']; ?></td>
  </tr>
</table>

</div>
<div style="margin-left: 38px;">
<br />
<table width="1000" border="0">
  <tr>
    <td colspan="3"><span style="font-weight:bold;">SIJIL TARAF BUMIPUTRA</span></td>
    </tr>
  <tr>
    <td>No Pendaftaran</td>
    <td><?php echo $row_kontrakto['sijiSTBNo']; ?></td>
    <td width="400">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempoh Sah:<?php echo $row_kontrakto['sijilSTBSah']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hingga:<?php echo $row_kontrakto['sijilSTBTamat']; ?></td>
  </tr>
</table>

</div>
<br />
<div class="line3">_________________________________________________________________________________________</div>
<div style="margin-left: 38px;">
<br />
<table width="1000" border="0">
<tr>
    <td>Tarikh Sijil Dikeluarkan</td>
    <td width="100">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row_kontrakto['sijilJPSSah']; ?></td>
    <td width="400">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempoh Sah:<?php echo $row_kontrakto['sijilJPSSah']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hingga:<?php echo $row_kontrakto['sijilJPSTamat']; ?></td>
  </tr>
</table>

</div>
<br />
<div class="tajuk"><span style="font-weight:bold;">STATUS&nbsp;SIJIL:</span>&nbsp;	<?php if (date("Y-m-d") < $endRegDate) { ?>
                                    	<span style="font-weight:bold;">AKTIF</span>
                                        <?php } else{?>
                                    	<span style="font-weight:bold;">TIDAK AKTIF</span>
                                        <?php } ?></div>
<div class="cop">
<span class="signnama">&nbsp;&nbsp;<?php echo $row_sijilsah['nama']; ?></span><br />
<span class="signjawatan">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row_sijilsah['jawatan']; ?></span><br />
<span class="signjabatan"><?php echo $row_sijilsah['jabatan']; ?></span><br />
<span class="signdaerah"><?php echo $row_sijilsah['daerah']; ?></span>
</div>
<div class="profileimage"><img src="<?php echo $row_kontrakto['konImage']; ?>" width="60" height="80" /></div>
</page>
<?php
mysql_free_result($kontrakto);

mysql_free_result($sijilsah);
?>
