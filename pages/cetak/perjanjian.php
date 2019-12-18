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
$query_perjanjian = "SELECT projek.ProjekID, projek.PTajuk, projek.PKodvot, projek.PKTawaran, projek.PNosebutharga, projek.PNorujukan, projek.PNoinden, projek.PKospterima, projek.Pkosdipinda, projek.kos_bq, projek.p_belanja, projek.p_baki, projek.p_tanggung, projek.p_bayar, projek.PTempoh, projek.Ptahun, projek.Ptarikhmula, projek.Ptarikhakhir, projek.Pstatus, kontraktor.kontraktorId, kontraktor.konName, projekatergori.catId, projekatergori.category, kontraktor.KonAlamat, kontraktor.konAlamatExtS, kontraktor.konAlamatExtD FROM projek, kontraktor, projekatergori WHERE projek.cat_id=projekatergori.catId AND projek.kon_id=kontraktor.kontraktorId AND projek.ProjekID='$getid'";
$perjanjian = mysql_query($query_perjanjian, $dbconn) or die(mysql_error());
$row_perjanjian = mysql_fetch_assoc($perjanjian);
$totalRows_perjanjian = mysql_num_rows($perjanjian);
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
	vertical-align: top;

}
.tg .tg-yw4l{vertical-align:top}
.cop {
	font-size: 9px;
}
</style>

<page backtop="5mm" backbottom="5mm" backleft="5mm" backright="120mm">
<table class="tg">
  <tr>
    <th class="tg-kr94" colspan="8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KERAJAAN MALAYSIA <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BORANG PERJANJIAN INDEN KERJA</th>
  </tr>
  <tr>
    <td class="tg-k6pi">Vot:<br></td>
    <td class="tg-dx8v"><?php echo $row_perjanjian['PKodvot']; ?></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Inden:<br></td>
    <td class="tg-dx8v"><?php echo $row_perjanjian['PNoinden']; ?></td>
  </tr>
  <tr>
    <td class="tg-dx8v" rowspan="2">Kerja:<br></td>
    <td class="tg-dx8v" rowspan="2"><?php echo $row_perjanjian['PTajuk']; ?></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Tanggungan:<br></td>
    <td class="tg-dx8v">No Tanggung</td>
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
    <td class="tg-dx8v"><?php echo $row_perjanjian['PNorujukan']; ?></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v"></td>
    <td class="tg-dx8v">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kerani Kewangan:<br></td>
    <td class="tg-dx8v"></td>
  </tr>
</table>

<table class="tg" border="1" style="border-collapse:collapse;border-spacing:0;border-width:2px;border-style:solid; border:1px;">
  <tr>
    <td width="45" rowspan="2" class="tg-dx8v" style="border:1px; border-right:none;">A</td>
    <td width="635" class="tg-dx8v" style="border:1px; border-bottom:none;">Kepada Kontraktor
      <p>Nama: <?php echo $row_perjanjian['konName']; ?> </p>
Alamat: <?php echo $row_perjanjian['KonAlamat']; ?> <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row_perjanjian['konAlamatExtS']; ?> <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row_perjanjian['konAlamatExtD']; ?>
      <p>Sila laksanakan ker-kerja di bawah ini:</p>
      <p><strong><?php echo $row_perjanjian['PTajuk']; ?></strong></p></td>
  </tr>
  <tr>
    <td style="border:1px; border-left:none;">Untuk jumlah wang sebanyak Ringgit...................................................................................................................................................................................................................
      <br>..................................................................................................................................................................................................................................<br/>
      dan sen ....................................... (RM................................................................) Mengikut
      
      <p>Syarat-syarat berikut:-
        
      <ul style="list-style-type: decimal; font-size: 10px;">
        <li>Kontraktor tidak dibenarkan tanpa kebenaran bertulis daripada pegawai inden menyerahkan hak atau menyewakan mana-mana bahagian kerja.</li>
        <li>Kerja ini hendaklah dimulakan dalam tempoh - dari tarikh Inden Kerja dan hendaklah disiapkan pada .........................</li>
        <li>Dokumen-dokumen berikut hendaklah disifatkan menjadi dan dibaca dan ditafsirkan sebagai sebahagian daripada Perjanjian Sebutharga <p> <ul style="list-style-type:lower-alpha">
            <li>Borang Perjanjian Inden Kerja</li>
            <li>Syarat-Syarat Sebutharga</li>
            <li>Spesifikasi</li>
            <li>Ringkasan Tender/Senarai Kuantiti</li>
            <li>Lukisan</li>
            </ul>
        </p></li></ul>
      <p>Tandatangan ................(<span class="cop">Pengawai Inden</span>).............................</p>
      <p>Nama: ...................................................................                         </p>
      <p>Jawatan: ............................................................................</p>
      <p>Tarikh: ................................................................................</p>
      <p>4 . Dengan ini yang bertandatangan di bawah ini bersetuju dengan syarat-syarat di atas.</p>
      <p>Tandatangan ................(<span class="cop">Kontrakror</span>).............................    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Tandatangan ................(<span class="cop">Saksi</span>)............................. :</p>
      <p>Nama: ................................................................................ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Jawatan ............................................. :</p>
      <p>Atas Sifat: ............................................................................ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat:.........................................</p>
      Diberikan dengan sempurna untuk menandatangani untuk dan bagi pihak &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...................................................................:
      
      
      <p></p>
      <p>................(<span class="cop">Meterai atau cop Kontraktor</span>)............................. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Tarikh ....................................... :</p>
      Tarikh : 
      
      
      
      
      </p></td>
  </tr>
</table>

</page>
<?php
mysql_free_result($perjanjian);
?>
