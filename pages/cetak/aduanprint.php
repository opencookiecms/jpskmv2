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
}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
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
</style>


<page backtop="2mm" backbottom="10mm" backleft="10mm" backright="100mm">

 <table class="tg">
  <tr>
    <th class="tg-031e"><img src="../assets/images/logo.png" width="80" height="30" alt="" /></th>
    <th class="tg-by3v" colspan="5">JABATAN PENGAIRAN DAN SALIRAN<br>KUALA MUDA / SIK / BALING<br>SUNGAI PETANI KEDAH DARUL AMAN<br></th>
    <th class="tg-0e45">TEL   : 04-4217214<br>FAKS : 04:4218834<br></th>
  </tr>
  <tr>
    <td colspan="7" class="tg-x361"> (BORANG SIASATAN ADUAN / JPS CARELINE)<br></td>
   </tr>
  <tr>
    <td class="tg-k6pi" colspan="5"></td>
    <td class="tg-7kzq">Kod Aduan</td>
    <td class="tg-k6pi"><br>
    <?php echo $row_print['aKod']; ?></td>
  </tr>

  <tr>
    <td class="tg-1z5j">Nama Pengadu:<br></td>
    <td class="tg-dx8v" colspan="4"><?php echo $row_print['aNama']; ?></td>
    <td class="tg-s5wt">No Telefon</td>
    <td class="tg-dx8v"><?php echo $row_print['aTel']; ?></td>
  </tr>
  <tr>
    <td class="tg-s5wt">Alamat</td>
    <td class="tg-rg0h" colspan="4" rowspan="2"><?php echo $row_print['aAlamat']; ?></td>
    <td class="tg-s5wt">No Kad Pengenalan</td>
    <td class="tg-dx8v"><?php echo $row_print['aNokp']; ?></td>
  </tr>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-s5wt">Tarikh Aduan</td>
    <td class="tg-yw4l"><?php echo $row_print['aTarikh']; ?></td>
  </tr>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l" colspan="4"></td>
    <td class="tg-s5wt">Tarikh Terima Aduan</td>
    <td class="tg-yw4l"><?php echo $row_print['aTerima']; ?></td>
  </tr>
  <tr>
    <td class="tg-s5wt">Jawatan Pengadu<br></td>
    <td class="tg-dx8v" colspan="2"><?php echo $row_print['aJawatan']; ?></td>
    <td class="tg-s5wt">Salinan Aduan<br></td>
    <td class="tg-dx8v"><?php echo $row_print['aSalinan']; ?></td>
    <td class="tg-s5wt">Sumber</td>
    <td class="tg-dx8v"><?php echo $row_print['aSumber']; ?></td>
  </tr>
  <tr>
    <td class="tg-s5wt">Masalah</td>
    <td class="tg-yw4l" colspan="6" rowspan="2"><?php echo $row_print['aMasalah']; ?></td>
  </tr>
  <tr>
    <td class="tg-dx8v"><br></td>
  </tr>
  <tr>
    <td class="tg-s5wt">Lokasi Masalah:<br></td>
    <td class="tg-s5wt">Nama Kampung<br></td>
    <td class="tg-yw4l"><?php echo $row_print['aKampung']; ?></td>
    <td class="tg-s5wt">Mukim</td>
    <td class="tg-yw4l"><?php echo $row_print['aMukim']; ?></td>
    <td class="tg-s5wt">Daerah</td>
    <td class="tg-yw4l"><?php echo $row_print['aDaerah']; ?></td>
  </tr>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-s5wt">Nama Sungai<br></td>
    <td colspan="5" class="tg-yw4l"><?php echo $row_print['aSungai']; ?></td>
   </tr>
  <tr>
    <td class="tg-chud" colspan="7">KEGUNAAN PEJABAT<br>(Diisi Oleh Pengawai Penyiasat)<br></td>
  </tr>
  <tr>
    <td class="tg-s5wt">Tarikh Surat Diminit<br></td>
    <td class="tg-yw4l"><?php echo $row_print['AduandateSuratMin']; ?></td>
    <td class="tg-s5wt">Tarikh Siasatan<br></td>
    <td class="tg-yw4l"><?php echo $row_print['AduandateSiasat']; ?></td>
    <td class="tg-s5wt">Kategori Aduan<br></td>
    <td class="tg-yw4l" colspan="2"><?php echo $row_print['AduanKatAduan']; ?></td>
  </tr>
  <tr>
    <td class="tg-s5wt">Koordinat</td>
    <td class="tg-s5wt">Latitud(N)</td>
    <td class="tg-25al"><?php echo $row_print['AduanLatitud']; ?></td>
    <td class="tg-s5wt">Longlitud(E)</td>
    <td class="tg-25al"><?php echo $row_print['AduanLongitud']; ?></td>
    <td class="tg-s5wt">Kepentingan</td>
    <td class="tg-25al"><?php echo $row_print['AduanPenting']; ?></td>
  </tr>
  <tr>
    <td class="tg-s5wt">Tahap Kerisauan<br></td>
    <td class="tg-25al" colspan="2"><?php echo $row_print['AduanTahap']; ?></td>
    <td class="tg-s5wt" colspan="4">I- Sangat serius, Pelukan tindakan segera      II - Serdahana serius, perlukan tindakan<br>III- Kurang serius Perlukan tindakan<br></td>
  </tr>
  <tr>
    <td class="tg-s5wt">Cadangan Pembaikan</td>
    <td class="tg-yw4l" colspan="6" rowspan="2"><?php echo $row_print['AduanCadang']; ?></td>
  </tr>
  <tr>
    <td class="tg-25al"><br></td>
  </tr>
  <tr>
    <td class="tg-s5wt">Anggaran Kos (RM)<br></td>
    <td class="tg-yw4l" colspan="2"><?php echo $row_print['AduanKos']; ?></td>
    <td class="tg-nrw1" colspan="2"><?php echo $row_print['AduanPenyiasat']; ?><br>(Pegawai Penyiasat)<br></td>
    <td class="tg-nrw1" colspan="2"><?php echo $row_print['AduanPenyemak']; ?><br>(Pegawai Penyemak)</td>
  </tr>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-25al">Tarikh</td>
    <td class="tg-yw4l" colspan="2"><?php echo $row_print['tarikhSemak']; ?></td>
    <td class="tg-yw4l" colspan="2"><?php echo $row_print['tarikhSemak']; ?></td>
  </tr>
  <tr>
    <td class="tg-chud" colspan="7">Ulasan Pegawai Pengesyor<br></td>
  </tr>
  <tr>
    <td class="tg-25al">Ulasan</td>
    <td class="tg-25al" colspan="6"><?php echo $row_print['AduanUlasan']; ?></td>
  </tr>
  <tr>
    <td class="tg-25al">Kos Disyorkan</td>
    <td class="tg-yw4l" colspan="4"><?php echo $row_print['KosSyor']; ?></td>
    <td class="tg-nrw1" colspan="2"><p><?php echo $row_print['aduanPengesyor']; ?></p></td>
  </tr>
  <tr>
    <td class="tg-lhw6" colspan="5">Tarikh</td>
    <td class="tg-yw4l" colspan="2"><?php echo $row_print['SyorDate']; ?></td>
  </tr>
  <tr>
    <td class="tg-nrw1" colspan="7">ULASAN KETUA JABATAN<br></td>
  </tr>
  <tr>
    <td class="tg-25al">Cadangan Program</td>
    <td class="tg-25al" colspan="6"><?php echo $row_print['AduanProgram']; ?></td>
  </tr>
  <tr>
    <td class="tg-25al">Kos (RM)<br></td>
    <td class="tg-25al" colspan="3"><?php echo $row_print['AduanKosProg']; ?></td>
    <td class="tg-25al">Kod Komputer<br></td>
    <td class="tg-25al" colspan="2"><?php echo $row_print['ProgKod']; ?></td>
  </tr>
  <tr>
    <td class="tg-25al">Lain-Lain Catatan<br></td>
    <td class="tg-25al" colspan="6"><?php echo $row_print['AduanProgLainn']; ?></td>
  </tr>
  <tr>
    <td class="tg-nrw1">Tarikh</td>
    <td class="tg-nrw1" colspan="4"><div align="left"><?php echo $row_print['ProgDate']; ?></div></td>
    <td class="tg-nrw1" colspan="2"><?php echo $row_print['ProgJuru']; ?><br>Jurutera Daerah<br>Jabatan Pengairan dan Saliran<br>Kuala Muda/Sik/Baling</td>
  </tr>
</table>
</page>


<?php
mysql_free_result($print);
?>
