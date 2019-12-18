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
$query_opsatu = "SELECT * FROM orangpenting ORDER BY NamaO ASC";
$opsatu = mysql_query($query_opsatu, $dbconn) or die(mysql_error());
$row_opsatu = mysql_fetch_assoc($opsatu);
$totalRows_opsatu = mysql_num_rows($opsatu);

mysql_select_db($database_dbconn, $dbconn);
$query_opdua = "SELECT * FROM orangpenting";
$opdua = mysql_query($query_opdua, $dbconn) or die(mysql_error());
$row_opdua = mysql_fetch_assoc($opdua);
$totalRows_opdua = mysql_num_rows($opdua);

mysql_select_db($database_dbconn, $dbconn);
$query_optiga = "SELECT * FROM orangpenting";
$optiga = mysql_query($query_optiga, $dbconn) or die(mysql_error());
$row_optiga = mysql_fetch_assoc($optiga);
$totalRows_optiga = mysql_num_rows($optiga);

mysql_select_db($database_dbconn, $dbconn);
$query_jsatu = "SELECT * FROM orangpenting";
$jsatu = mysql_query($query_jsatu, $dbconn) or die(mysql_error());
$row_jsatu = mysql_fetch_assoc($jsatu);
$totalRows_jsatu = mysql_num_rows($jsatu);

mysql_select_db($database_dbconn, $dbconn);
$query_jdua = "SELECT * FROM orangpenting";
$jdua = mysql_query($query_jdua, $dbconn) or die(mysql_error());
$row_jdua = mysql_fetch_assoc($jdua);
$totalRows_jdua = mysql_num_rows($jdua);

mysql_select_db($database_dbconn, $dbconn);
$query_jtiga = "SELECT * FROM orangpenting";
$jtiga = mysql_query($query_jtiga, $dbconn) or die(mysql_error());
$row_jtiga = mysql_fetch_assoc($jtiga);
$totalRows_jtiga = mysql_num_rows($jtiga);
?>


<div class="form-group">
  <div class="col-lg-3">
    <label>Nama Syarikat</label>
    <input class="form-control" name="konNama" id="koonNama" placeholder="Nama Syarikat" onkeyup="sync()" required>
  </div>
</div>
<div class="form-group">
  <div class="col-lg-3">
    <label>Gambar</label>
    <input class="form-control" name="file" type="file" accept="image/*">
  </div>
</div>
<div class="form-group">
  <div class="col-lg-5">
    <label>Alamat</label>
    <input class="form-control" placeholder="Alamat Syarikat" type="text"  name="KoonAlamat">
  </div>
</div>
<div class="form-group">
  <div class="col-lg-5">
    <label></label>
    <input class="form-control" placeholder="Alamat Syarikat" type="text"  name="KoonAlamatexts">
  </div>
</div>
<div class="form-group">
  <div class="col-lg-5">
    <label></label>
    <input class="form-control" placeholder="Alamat Syarikat" type="text"  name="KoonAlamatextd">
  </div>
</div>
<div class="form-group">
  <div class="col-md-2">
    <label>Poskod</label>
    <input class="form-control" placeholder="Poskod" type="text" name="koonPoskod">
  </div>
  <div class="col-md-2">
    <label>Bandar</label>
    <input class="form-control" placeholder="Bandar" type="text" name="koonBandar">
  </div>
  <div class="col-md-2">
    <label>Daerah</label>
    <input class="form-control" placeholder="Daerah" type="text" name="koonDaerah">
  </div>
  <div class="col-md-2">
    <label>Negeri</label>
    <select class="form-control" name="koonNegeri">
    	<option value="Perlis">Perlis</option>
        <option value="Kedah">Kedah</option>
        <option value="Kelantan">Kelantan</option>
        <option value="Perak">Perak</option>
        <option value="Pahang">Pahang</option>
        <option value="Terengganu">Terengganu</option>
        <option value="N.Sembilan">N.Sembilan</option>
        <option value="Kuala Lumpur">Kuala Lumpur</option>
        <option value="Sabah">Sabah</option>
        <option value="Sarawak">Sarawak</option>
        <option value="Johor">Johor</option>
        <option value="Melaka">Melaka</option>
        <option value="Selangor">Selangor</option>
        <option value="Pulau Pinang">Pulau Pinang</option>
    </select>
  </div>
  <div class="col-md-2">
    <label>Telefon Pejabat</label>
    <input class="form-control" placeholder="No Tel Pejabat" type="tel" name="koonTelPej">
  </div>
</div>
<div class="form-group">
  <div class="col-md-3">
    <label>Nama Pengurus</label>
    <input class="form-control" placeholder="Pengurus Syarikat" type="text" name="koonPengurus">
  </div>
  <div class="col-md-3">
    <label>No Kad Pengenalan</label>
    <input class="form-control" placeholder="No Kad Pengenalan" type="text" name="koonKPPen">
  </div>
  <div class="col-md-3">
    <label class="control-label">No Tel</label>
    <input class="form-control" placeholder="No Tel Bimbit" type="text" name="koonTelPengurus">
  </div>
</div>
<div class="form-group">
  <div class="col-md-12" style="background-color:#CCC; padding-top:12px;">
    <p>Maklumat-maklumat syarikat</p>
  </div>
</div>
<div class="form-group">
  <div class="col-md-1">
    <label>Rakan Kongsi(1)</label>
  </div>
  <div class="col-md-3">
    <input class="form-control" placeholder="Sila nyatakan rakan konsi jika ada" type="text" name="koonRKsatu">
  </div>
  <div class="col-md-1">
    <label>No Kad Pengenalan</label>
  </div>
  <div class="col-md-2">
    <input class="form-control" placeholder="No Kad Pengenalan" type="text" name="koonRKKPsatu">
  </div>
  <div class="col-md-1">
    <label class="control-label">No Tel</label>
  </div>
  <div class="col-md-2">
    <input class="form-control" placeholder="No Tel Bimbit" type="text" name="koonKPTelsatu">
  </div>
</div>
<div class="form-group">
  <div class="col-md-1">
    <label>Rakan Kongsi(2)</label>
  </div>
  <div class="col-md-3">
    <input class="form-control" placeholder="Sila nyatakan rakan konsi jika ada" type="text" name="koonRKdua">
  </div>
  <div class="col-md-1">
    <label>No Kad Pengenalan</label>
  </div>
  <div class="col-md-2">
    <input class="form-control" placeholder="No Kad Pengenalan" type="text" name="koonRKKPdua">
  </div>
  <div class="col-md-1">
    <label class="control-label">No Tel</label>
  </div>
  <div class="col-md-2">
    <input class="form-control" placeholder="No Tel Bimbit" type="text" name="koonRKTeldua">
  </div>
</div>
<div class="form-group">
  <div class="col-md-1">
    <label>Rakan Kongsi(3)</label>
  </div>
  <div class="col-md-3">
    <input class="form-control" placeholder="Sila nyatakan rakan konsi jika ada" type="text" name="koonRKtiga">
  </div>
  <div class="col-md-1">
    <label>No Kad Pengenalan</label>
  </div>
  <div class="col-md-2">
    <input class="form-control" placeholder="Sila nyatakan rakan konsi jika ada" type="text" name="koonRKKPtiga">
  </div>
  <div class="col-md-1">
    <label class="control-label">No Tel</label>
  </div>
  <div class="col-md-2">
    <input class="form-control" placeholder="No Tel Bimbit" type="text" name="koonRKTeltiga">
  </div>
</div>
<div class="form-group">
  <div class="col-md-1">
    <label>Rakan Kongsi(4)</label>
  </div>
  <div class="col-md-3">
    <input class="form-control" placeholder="Sila nyatakan rakan konsi jika ada" type="text" name="koonRKempat">
  </div>
  <div class="col-md-1">
    <label>No Kad Pengenalan</label>
  </div>
  <div class="col-md-2">
    <input class="form-control" placeholder="No Kad Pengenalan" type="text" name="koonRKKPempat">
  </div>
  <div class="col-md-1">
    <label class="control-label">No Tel</label>
  </div>
  <div class="col-md-2">
    <input class="form-control" placeholder="No Tel Bimbit" type="text" name="koonRKTelempat">
  </div>
</div>
<div class="form-group">
  <div class="col-md-1">
    <label>Alamat Email</label>
  </div>
  <div class="col-md-3">
    <input class="form-control" placeholder="Sila nyatakan alamat email jika ada" type="text" name="koonrknemail">
  </div>
  <div class="col-md-1">
    <label>No Faksimili</label>
  </div>
  <div class="col-md-2">
    <input class="form-control" placeholder="No fax" type="text" name="koonfax">
  </div>
</div>
<div class="form-group">
  <div class="col-md-1">
    <label>Bank</label>
  </div>
  <div class="col-md-3">
    <input class="form-control" placeholder="Sila nyatakan nama Bank" type="text" name="koonBank">
  </div>
  <div class="col-md-1">
    <label>No Akaun</label>
  </div>
  <div class="col-md-2">
    <input class="form-control" placeholder="No Akaun Bank" type="text" name="koonAkaunBank">
  </div>
</div>
<div class="form-group">
  <div class="col-md-12" style="background-color:#CCC; padding-top:12px;">
    <p>Kawasan Operasi Syarikat </p>
  </div>
</div>
<div class="form-group">
  <div class="col-md-1">
    <label>Kawasan Operasi</label>
  </div>
  <div class="col-md-3">
    <select class="form-control"name="koonOperasi">
	    <option value=""></option>
    	<option value="Sik">Sik</option>
        <option value="Baling">Baling</option>
        <option value="Yan">Yan</option>
        <option value="Kuala Muda">Kuala Muda</option>
        <option value="Malaysia">Kedah</option>
        <option value="Malaysia">Malaysia</option>

    </select>
  </div>
  <div class="col-md-1">
    <label>Prestasi Kontraktor</label>
  </div>
  <div class="col-md-2">
    <select class="form-control" name="koonPrestasi">
	<option value=""></option>
    <option value="Baik">Baik</option>
    <option value="Cemerlang">Cemerlang</option>
    <option value="Memuaskan">Memuaskan</option>
    <option value="Serdehana">Serdehana</option>
      <option value="Lemah">Lemah</option>
        <option value="Tiada Rekod">Tiada Rekod</option>

    </select>
  </div>
</div>


<!--###############################################################################################################################################-->

<div class="form-group">
  <div class="col-md-12" style="background-color:#CCC; padding-top:12px;">
    <p>Jenis Permohonan</p>
  </div>
</div>
<div class="form-group">
<div class="col-md-3">
    <label>Permohonan Baru</label>
    <select class="form-control" name="pbaru">
	<option value=""></option>
      <option value="Ya">Ya</option>
      <option value="Tidak">Tidak</option>
    </select>
  </div>
  <div class="col-md-3">
    <label>Pembaharuan</label>
    <select class="form-control" name="pembaru">
	  <option value=""></option>
      <option value="Ya">Ya</option>
      <option value="Tidak">Tidak</option>
    </select>
  </div>

<div class="col-md-3">
 <label>Lain-Lain</label>
   <input class="form-control" placeholder="Lain-Lain" type="text" name="daftarlainlain">

</div>
<div class="col-md-3">
   <label>Kategori</label>

    <select class="form-control" name="daftarkategory">
      <option value="Berdaftar">Kontraktor</option>
      <option value="Pembekal">Pembekal</option>
      <option value="Perkhidmatan">Perkhidmatan</option>
      <option value="Pembekal/Kontraktor">Pembekal/Kontraktor</option>
    </select>
    </div>

  ` </div>
<div class="form-group">
  <div class="col-md-12" style="background-color:#CCC; padding-top:12px;">
    <p>Maklumat Pemohon</p>
  </div>
</div>
<div class="form-group">
  <div class="col-md-3">
    <label>Tarikh Pemohon</label>
    <input name="daftarMohon" type="text" id='date1' class="form-control" id="datepicker">
  </div>
  <div class="col-md-3">
    <label>Cas Perkhidmatan (RM)</label>
    <input name="daftarCas" type="text" class="form-control" placeholder="" value="">
  </div>
  <div class="col-md-3">
    <label class="control-label">No Resit</label>
    <input name="daftarResit" type="text" class="form-control" placeholder="" value="">
  </div>
</div>
<div class="form-group">
  <div class="col-md-3">
    <label>No Sijil Pendaftaran</label>
    <input name="daftarSijilNo" type="text" id="txtsijilsatu" class="form-control" placeholder="" value="">
  </div>
  <div class="col-md-3">
    <label>Tarikh Sijil Dikeluarkan</label>
    <input name="daftarKeluarkan" type="text" id='date2' class="form-control" placeholder="" value="">
  </div>
  <div class="col-md-3">
    <label class="control-label">Tarikh Tamat Sijil</label>
    <input name="daftarTamat" type="text" id='date3' class="form-control" placeholder="" value="">
  </div>
</div>
<div class="form-group">
  <div class="col-md-12" style="background-color:#CCC; padding-top:12px;">
    <p>Disemak Oleh</p>
  </div>
</div>
<div class="form-group">
  <div class="col-md-3">
    <label>Disemak Oleh</label>
    <select name="daftardisemak" type="text" class="form-control" placeholder="" value="">
     <option value=""></option>
         <?php do { ?>
         <option value="<?php echo $row_opsatu['NamaO']; ?>"><?php echo $row_opsatu['NamaO']; ?></option>
         <?php } while ($row_opsatu = mysql_fetch_assoc($opsatu)); ?>
    </select>
  </div>
  <div class="col-md-3">
    <label>Disahkan Oleh</label>
    <select name="daftardisahkan" type="text" class="form-control" placeholder="" value="">
        <option value=""></option>
         <?php do { ?>
         <option value="<?php echo $row_opdua['NamaO']; ?>"><?php echo $row_opdua['NamaO']; ?></option>
         <?php } while ($row_opdua = mysql_fetch_assoc($opdua)); ?>
    </select>
  </div>
  <div class="col-md-3">
    <label class="control-label">Diluluskan Oleh</label>
    <select name="daftardiluluskan" type="text" class="form-control" placeholder="" value="">
          <option value=""></option>
         <?php do { ?>
         <option value="<?php echo $row_optiga['NamaO']; ?>"><?php echo $row_optiga['NamaO']; ?></option>
         <?php } while ($row_optiga = mysql_fetch_assoc($optiga)); ?>
    </select>
  </div>
</div>

<div class="form-group">
  <div class="col-md-3">
    <label>Jawatan Penyemak</label>
    <select name="daftarjawatanSemak" type="text" class="form-control" placeholder="" value="">
         <option value=""></option>
         <?php do { ?>
         <option value="<?php echo $row_jsatu['JawatanO']; ?>"><?php echo $row_jsatu['JawatanO']; ?></option>
         <?php } while ($row_jsatu = mysql_fetch_assoc($jsatu)); ?>
    </select>
  </div>
  <div class="col-md-3">
    <label>Jawatan Pengurus</label>
    <select name="daftarjawatanUrus" type="text" class="form-control" placeholder="" value="">
       <option value=""></option>
         <?php do { ?>
         <option value="<?php echo $row_jdua['JawatanO']; ?>"><?php echo $row_jdua['JawatanO']; ?></option>
         <?php } while ($row_jdua = mysql_fetch_assoc($jdua)); ?>
    </select>
  </div>
  <div class="col-md-3">
    <label class="control-label">Jawatan Penglulus</label>
    <select name="daftarjawatanLulus" type="text" class="form-control" placeholder="" value="">
        <option value=""></option>
         <?php do { ?>
         <option value="<?php echo $row_jtiga['JawatanO']; ?>"><?php echo $row_jtiga['JawatanO']; ?></option>
         <?php } while ($row_jtiga = mysql_fetch_assoc($jtiga)); ?>
    </select>
  </div>
</div>


<!--###############################################################################################################################################-->
<div class="form-group">
  <div class="col-md-12" style="background-color:#CCC; padding-top:12px;">
    <p>1) Lembaga Pembangunan Industri Pembinaan Malaysia (LPIPM)</p>
  </div>
</div>

<div class="form-group">
  <div class="col-md-5">
    <p>a) Sijil Perakuan Pendaftaran Kontraktror (PPK)</p>
  </div>
</div>

<div class="form-group">

  <div class="col-md-3">

    <label>No Pendaftaran</label>
    <input class="form-control" name="sijilNoDaftarPPK" id="txtpkksatu" placeholder="No Pendaftaran" type="text"  >
  </div>
  <div class="col-md-3">
  <label>Tempoh Sah Dari</label>
   <input class="form-control" name="sijilSahPPK" placeholder="Tempoh Sah Dari" type="text" id='date4'  >
  </div>
   <div class="col-md-3">
   <label>Hingga</label>
 <input class="form-control" name="sijilHinggaPPK" placeholder="Hingga" type="text" id='date5'  >
  </div>

</div>

<!--this is for gred one -->
<div class="form-group">
  <div class="col-md-2">
    <label>Gred</label>
    <select class="form-control" name="sijilGredOnePPK">
	    <option value=""></option>
    	<option value="G1">G1</option>
        <option value="G2">G2</option>
        <option value="G3">G3</option>
        <option value="G4">G4</option>
        <option value="G5">G5</option>
        <option value="G6">G6</option>
        <option value="G7">G7</option>
    </select>
  </div>
  <div class="col-md-2">
  <label>Kategori</label>
     <select class="form-control" name="sijilGredKatOnePPK">
	    <option value=""></option>
    	<option value="B">B</option>
        <option value="CE">CE</option>
        <option value="ME">ME</option>

    </select>
  </div>
   <div class="col-md-4">
   <label>Pengkhususan</label>
 <input class="form-control" name="sijilGredKhususOnePPK" type="text"  >
  </div>

</div>

<!--end of gred one -->

<!--this is for gred two -->
<div class="form-group">
  <div class="col-md-2">
    <label>Gred</label>
    <select class="form-control" name="sijilGredTwoPPK">
	    <option value=""></option>
    	<option value="G1">G1</option>
        <option value="G2">G2</option>
        <option value="G3">G3</option>
        <option value="G4">G4</option>
        <option value="G5">G5</option>
        <option value="G6">G6</option>
        <option value="G7">G7</option>
    </select>
  </div>
  <div class="col-md-2">
  <label>Kategori</label>
     <select class="form-control" name="sijilGredKatTwoPPK">
	    <option value=""></option>
    	<option value="B">B</option>
        <option value="CE">CE</option>
        <option value="ME">ME</option>

    </select>
  </div>
   <div class="col-md-4">
   <label>Pengkhususan</label>
 <input class="form-control" name="sijilGredKhususTwoPPK" type="text"  >
  </div>

</div>

<!--end of gred two -->

<!--this is for gred three -->
<div class="form-group">
  <div class="col-md-2">
    <label>Gred</label>
    <input class="form-control" name="sijilGredThreePPK">

  </div>
  <div class="col-md-2">
  <label>Kategori</label>
     <input class="form-control" name="sijilGredKatThreePPK">

  </div>
   <div class="col-md-4">
   <label>Pengkhususan</label>
 <input class="form-control" name="sijilGredKhususThreePPK" type="text"  >
  </div>

</div>

<!--end of gred three -->

<div class="form-group">
  <div class="col-md-5">
    <p>b) Sijil Perolehan Kerja Kerajaan (SPKK)</p>
  </div>
</div>


<div class="form-group">

  <div class="col-md-3">

    <label>No Pendaftaran</label>
    <input class="form-control" name="sijilNoDaftarSPKK" id="txtpkkdua" placeholder="No Pendaftaran SPKK" type="text"  >
  </div>
  <div class="col-md-3">
  <label>Tempoh Sah Dari</label>
   <input class="form-control" name="sijilSahSPKK" placeholder="Tempoh Sah Dari" type="text" id='date6'  >
  </div>
   <div class="col-md-3">
   <label>Hingga</label>
 <input class="form-control" name="sijilHinggaSPKK"  placeholder="Hingga" type="text" id='date7'  >
  </div>

</div>

<!--this is for gred one -->
<div class="form-group">
  <div class="col-md-2">
    <label>Gred</label>
    <select class="form-control" name="sijilGredOneSPKK">
	    <option value=""></option>
    	<option value="G1">G1</option>
        <option value="G2">G2</option>
        <option value="G3">G3</option>
        <option value="G4">G4</option>
        <option value="G5">G5</option>
        <option value="G6">G6</option>
        <option value="G7">G7</option>
    </select>
  </div>
  <div class="col-md-2">
  <label>Kategori</label>
     <select class="form-control" name="sijilGredKatOneSPKK">
	    <option value=""></option>
    	<option value="B">B</option>
        <option value="CE">CE</option>
        <option value="ME">ME</option>

    </select>
  </div>
   <div class="col-md-4">
 <label>Pengkhususan</label>
   <select name="sijilGredKhususOneSPKK" class="form-control">
        <option value=""></option>
   		<option value="Pembinaan Bangunan">Pembinaan Bangunan</option>
        <option value="Pembinaan Kejuruteraan Awam">Pembinaan Kejuruteraan Awam</option>
        <option value="Mekanikal Dan Elektrikal">Mekanikal Dan Elektrikal</option>
   </select>
  </div>

</div>

<!--end of gred one -->

<!--this is for gred two -->
<div class="form-group">
  <div class="col-md-2">
    <label>Gred</label>
    <select class="form-control" name="sijilGredTwoSPKK">
	    <option value=""></option>
    	<option value="G1">G1</option>
        <option value="G2">G2</option>
        <option value="G3">G3</option>
        <option value="G4">G4</option>
        <option value="G5">G5</option>
        <option value="G6">G6</option>
        <option value="G7">G7</option>
    </select>
  </div>
  <div class="col-md-2">
  <label>Kategori</label>
     <select class="form-control" name="sijilGredKatTwoSPKK">
	    <option value=""></option>
    	<option value="B">B</option>
        <option value="CE">CE</option>
        <option value="ME">ME</option>

    </select>
  </div>
   <div class="col-md-4">
   <label>Pengkhususan</label>
   <select name="sijilGredKhususTwoSPKK" class="form-control">
        <option value=""></option>
   		<option value="Pembinaan Bangunan">Pembinaan Bangunan</option>
        <option value="Pembinaan Kejuruteraan Awam">Pembinaan Kejuruteraan Awam</option>
        <option value="Mekanikal Dan Elektrikal">Mekanikal Dan Elektrikal</option>
   </select>
  </div>

</div>

<!--end of gred two -->

<!--this is for gred three -->
<div class="form-group">
  <div class="col-md-2">
    <label>Gred</label>
    <input class="form-control" name="sijilGredThreeSPKK">

  </div>
  <div class="col-md-2">
  <label>Kategori</label>
     <input class="form-control" name="sijilGredKatThreeSPKK">

  </div>
   <div class="col-md-4">
   <label>Pengkhususan</label>
   <input name="sijilGredKhususThreeSPKK" class="form-control">
    
  </div>

</div>

<!--end of gred three -->






<div class="form-group">
  <div class="col-md-12" style="background-color:#CCC; padding-top:12px;">
    <p>2) Pusat Khidmat Kontraktor (PKK) </p>
  </div>
</div>

<div class="form-group">
  <div class="col-md-12">
    <p>a) Sijil Taraf Bumiputra (STB)</p>
  </div>
</div>

<div class="form-group">
<div class="col-md-3">

    <label>No Pendaftaran</label>
    <input class="form-control" name="sijilNoDaftarSTB" id="g" placeholder="No Pendaftaran" type="text"  >
  </div>
  <div class="col-md-3">
  <label>Tempoh Sah Dari</label>
   <input class="form-control" name="sijilSahSTB" placeholder="Tempoh Sah Dari" type="text" id='date8'  >
  </div>
   <div class="col-md-3">
   <label>Hingga</label>
 <input class="form-control" name="sijilHinggaSTB" placeholder="Hingga" type="text" id='date9'  >
  </div>

   <div class="col-md-2">
   <label>Gred Pendaftaran</label>
 	<select name="sijilGredSTB" class="form-control">
	  <option value=""></option>
   	  <option value="G1">G1</option>
      <option value="G2">G2</option>
      <option value="G3">G3</option>
      <option value="G4">G4</option>
      <option value="G5">G5</option>
      <option value="G6">G6</option>
      <option value="G7">G7</option>

    </select>
  </div>

</div>

<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="form-group">
  <div class="col-md-12" style="background-color:#CCC; padding-top:12px;">
    <p>Suruhanjaya Syarikat Malaysia (SSM)</p>
  </div>
</div>

<div class="form-group">
  <div class="col-md-12">
    <p>SSM</p>
  </div>
</div>

<div class="form-group">
<div class="col-md-3">

    <label>No Pendaftaran</label>
    <input name="sijilNoDaftarSSM" type="text" class="form-control" placeholder="No Pendaftaran" value="" >
  </div>
  <div class="col-md-3">
  <label>Tempoh Sah Dari</label>
   <input name="sijilSahSSM" type="text" id="date10" class="form-control" placeholder="Tempoh Sah Dari" value=""  >
  </div>
   <div class="col-md-3">
   <label>Hingga</label>
 <input name="sijilHinggaSSM" type="text" id="date11" class="form-control" placeholder="Hingga" value=""  >
  </div>


</div>
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!------------------------------------------------------------------------------------->
<div class="form-group">
  <div class="col-md-12" style="background-color:#CCC; padding-top:12px;">
    <p>Cukai Barang dan Perkhidmatan (GST)</p>
  </div>
</div>
<div class="form-group">
  <div class="col-md-12">
    <p>GST</p>
  </div>
</div>
<div class="form-group">
<div class="col-md-3">

    <label>No Pendaftaran GST</label>
    <input name="sijilNoDaftarGST" type="text" class="form-control" placeholder="No Pendaftaran" value="" >
  </div>
  <div class="col-md-3">
  <label>Tempoh Sah Dari</label>
   <input name="sijilSahGST" type="text" id="date40" class="form-control" placeholder="Tempoh Sah Dari" value=""  >
  </div>
   <div class="col-md-3">
   <label>Hingga</label>
 <input name="sijilHinggaGST" type="text" id="date41" class="form-control" placeholder="Hingga" value=""  >
  </div>


</div>

<!------------------------------------------------------------------------------------->
<div class="form-group">
  <div class="col-md-12" style="background-color:#CCC; padding-top:12px;">
    <p>Jabatan Pengairan dan Saliran (JPS)</p>
  </div>
</div>

<div class="form-group">
  <div class="col-md-12">
    <p>a) Sijil Perakuan Pendaftaran Pembekal/Kontraktor(SPPPK)</p>
  </div>
</div>
<div class="form-group">
<div class="col-md-3">

    <label>No Pendaftaran</label>
    <input class="form-control" name="sijilNoDaftarJPS" id="txtsijildua" placeholder="No Pendaftaran" type="text"  >
  </div>
  <div class="col-md-3">
  <label>Tempoh Sah Dari</label>
   <input class="form-control" name="sijilSahJPS" placeholder="Tempoh Sah Dari" type="text" id='date12'  >
  </div>
   <div class="col-md-3">
   <label>Hingga</label>
 <input class="form-control" name="sijilHinggaJPS" placeholder="Hingga" type="text" id='date13'  >
  </div>

   <div class="col-md-2">
   <label>Gred Pendaftaran</label>
 	<select name="sijilGredJPS" class="form-control">
	    <option value=""></option>
   		<option value="Kontraktor">Kontraktor</option>
      <option value="Pembekal">Pembekal</option>
    </select>
  </div>

</div>





<div class="form-group">
  <div class="col-md-3">
    <button type="submit" name="konsave" class="btn btn-success">Simpan</button>
    <button type="reset" class="btn btn-danger">Reset Semula</button>
  </div>
</div>
<?php
mysql_free_result($opsatu);

mysql_free_result($opdua);

mysql_free_result($optiga);

mysql_free_result($jsatu);

mysql_free_result($jdua);

mysql_free_result($jtiga);
?>
