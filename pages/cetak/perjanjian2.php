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
$getid=$_GET['ProjekID'];
mysql_select_db($database_dbconn, $dbconn);
$query_i = "SELECT projek.ProjekID, projek.PTajuk, projek.PKodvot, projek.PKTawaran, projek.PNosebutharga, projek.PNorujukan, projek.PNoinden, projek.PKospterima, projek.Pkosdipinda, projek.kos_bq, projek.p_belanja, projek.p_baki, projek.p_tanggung, projek.p_bayar, projek.PTempoh, projek.Ptahun, projek.Ptarikhmula, projek.Ptarikhakhir, projek.Pstatus, kontraktor.kontraktorId, kontraktor.konName, projekatergori.catId, projekatergori.category, kontraktor.KonAlamat, kontraktor.konAlamatExtS, kontraktor.konAlamatExtD, projek.p_penyelia, projek.p_j_penyelia, projek.p_jurutera, projek.p_j_jurutera FROM projek, kontraktor, projekatergori WHERE projek.cat_id=projekatergori.catId AND projek.kon_id=kontraktor.kontraktorId AND projek.ProjekID='$getid'";
$i = mysql_query($query_i, $dbconn) or die(mysql_error());
$row_i = mysql_fetch_assoc($i);
$totalRows_i = mysql_num_rows($i);
?>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{
	font-family: Arial, sans-serif;
	font-size: 10px;
	padding: 10px 5px;
	border-style: solid;
	border-width: 0Spx;
	overflow: hidden;
	word-break: normal;
	border-color: #aaa;
	color: #333;
	background-color: #fff;
}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal; color:#000;}
.tg .tg-kr94{
	font-size: 11px;
	text-align: center
}
.tg .tg-k6pi{
	font-size: 10px
}
.tg .tg-dx8v{
	font-size: 10px;
	vertical-align: top
}
.tg .tg-yw4l{vertical-align:top}
.cop {
	font-size: 9px;
}
.spankecil {
	font-style: italic;
	font-family: Arial, sans-serif;
	font-size: 9px;
}
</style>

<page backtop="5mm" backbottom="5mm" backleft="5mm" backright="120mm">
<table class="tg">
  <tr>
    <th class="tg-kr94" colspan="8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KERAJAAN MALAYSIA <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BORANG PENGESAHAN PENYIAPAN INDEN KERJA</th>
  </tr>
  <tr>
    <td class="tg-k6pi">Vot:<br></td>
    <td class="tg-dx8v"><?php echo $row_i['PKodvot']; ?></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v">No Inden:<br></td>
    <td class="tg-dx8v"><?php echo $row_i['PNoinden']; ?></td>
  </tr>
  <tr>
    <td class="tg-dx8v" rowspan="2">Kerja:<br></td>
    <td class="tg-dx8v" rowspan="2"><?php echo $row_i['PTajuk']; ?></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v">No Tanggungan:<br></td>
    <td class="tg-dx8v"></td>
  </tr>
  <tr>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v"></td>
    <td colspan="2" class="tg-dx8v">&nbsp;</td>
  </tr>
  <tr>
    <td class="tg-dx8v">Ruj. Fail:<br></td>
    <td class="tg-dx8v"><?php echo $row_i['PNorujukan']; ?> / <?php echo $row_i['ProjekID']; ?> / <?php echo $row_i['Ptahun']; ?> </td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v">Kerani Kewangan:<br></td>
    <td class="tg-dx8v"></td>
  </tr>
</table>

<table width="673" class="tg" border="1">
  <tr>
    <td width="396" style="vertical-align:top;"><p></p>A. &nbsp; Saya <span style="font-weight:bold"><?php echo $row_i['konName']; ?></span> mengaku<br />
    &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;telah menyiapkan kerja-kerja di atas dengan sempurnanya dan mengembalikan
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inden Kerja Asal untuk  permeriksaan dan pembayaran
    <p></p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tandatangan&nbsp;&nbsp;&nbsp;&nbsp;...............<span class="spankecil">(Kontraktror)</span>...................
    <p></p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama&nbsp;&nbsp;&nbsp;&nbsp;..........<?php echo $row_i['konName']; ?>.................
     <p></p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row_i['KonAlamat']; ?>
     <p></p>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row_i['konAlamatExtS']; ?>
     <p></p>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row_i['konAlamatExtD']; ?>
     <p></p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tarikh&nbsp;&nbsp;&nbsp;&nbsp;................................................................
     <p></p>B. &nbsp; Penerimaan kembali Inden kerja ini  diakuai dan saya megesahkan kontraktor telah<br />
    &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;menyiapkan kerja dengan sempurna dan memuaskan sejajar dengan syarat-syarat
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sebutharga
    <p></p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tandatangan&nbsp;&nbsp;&nbsp;&nbsp;...............<span class="spankecil">(Pengawai Penyelia Kerja)</span>...................
    <p></p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama&nbsp;&nbsp;&nbsp;&nbsp;..<?php echo $row_i['p_penyelia']; ?>..
     <p></p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jawatan&nbsp;&nbsp;&nbsp;&nbsp;..<?php echo $row_i['p_j_penyelia']; ?>..
     <p></p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tarikh&nbsp;&nbsp;&nbsp;&nbsp;................................................................
     <p></p>C. &nbsp; Saya .....................................................................................dengan<br />
    &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ini bersetuju dengan jumlah pembayaran muktamad sebanyak
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RM........................................ dan mengaku tidak akan membuat dan tidak akan
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;membuat sebarang tuntutan lagi di atas Inden ini 
    <p></p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tandatangan&nbsp;&nbsp;&nbsp;&nbsp;...............<span class="spankecil">(Kontraktror)</span>...................
    <p></p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama&nbsp;&nbsp;&nbsp;&nbsp;..................................................................
     <p></p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jawatan&nbsp;&nbsp;&nbsp;&nbsp;................................................................
     <p></p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tarikh&nbsp;&nbsp;&nbsp;&nbsp;................................................................
     </td>
    <td width="265" style="vertical-align: top; font-family: Arial, sans-serif;"><p><strong>CATATAN JKR</strong></p>
    <p><strong>SAYA TELAH MENGESAHKAN KONTRAKTOR TELAH MENYIAPKAN KERJA DENGAN SEMPURNA DAN MEMUASKAN SEJAJAR DENGAN SYARAT-SYARAT SEBUTHARGA</strong></p>
     <p></p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tandatangan&nbsp;&nbsp;&nbsp;&nbsp;...............<span class="spankecil">(Jurutera)</span>...................
    <p></p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama&nbsp;&nbsp;&nbsp;&nbsp;..................................................................
     <p></p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jawatan&nbsp;&nbsp;&nbsp;&nbsp;................................................................
     <p></p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tarikh&nbsp;&nbsp;&nbsp;&nbsp;................................................................
     <p><strong>SAYA TELAH MENYEMAK DAN MENGESAHKAN KONTRAKTOR TELAH MENYIAPKAN KERJA DENGAN SEMPURNA DAN MEMUASAKAN SEJAJAR DENGAN SYARAT-SYARAT SEBUTHARGA</strong></p>
     <P></P>
     <p><strong>BAYAR RM..............................................................</strong></p>
       <P></P>
        <P></P>
     	Tandatangan:-.............................................<br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Jurutera Daerah JKR/Pengarah JKR/Pengawai Inden)
          <p></p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama&nbsp;&nbsp;&nbsp;&nbsp;..<?php echo $row_i['p_jurutera']; ?>..
    <p></p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jawatan &nbsp;&nbsp;&nbsp;&nbsp;..<?php echo $row_i['p_j_jurutera']; ?>..
     <p></p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tarikh&nbsp;&nbsp;&nbsp;&nbsp;..........................................................
     <p></p>
     </td>
  </tr>
</table>




</page>
<?php
mysql_free_result($i);
?>
