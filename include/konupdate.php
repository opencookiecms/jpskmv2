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

$colname_konview = "-1";
if (isset($_GET['kontraktorId'])) {
  $colname_konview = $_GET['kontraktorId'];
}
mysql_select_db($database_dbconn, $dbconn);
$query_konview = sprintf("SELECT * FROM kontraktor WHERE kontraktorId = %s", GetSQLValueString($colname_konview, "int"));
$konview = mysql_query($query_konview, $dbconn) or die(mysql_error());
$row_konview = mysql_fetch_assoc($konview);
$totalRows_konview = mysql_num_rows($konview);


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
  <div class="col-md-5">
    <label>Kontraktor ID</label>
    <a class="showid">:</a>
    <input name="idKontraktor" class="form-control hidden" type="text"value="<?php echo $row_konview['kontraktorId']; ?>">
  </div>

</div>

<div class="form-group">
  <div class="col-lg-3">
    <label>Nama Syarikat</label>
    <input name="konNama" class="form-control" id="koonNama" placeholder="Nama Syarikat" onkeyup="sync()" value="<?php echo $row_konview['konName']; ?>">
  </div>
</div>
<!--<div class="form-group">
<div class="col-lg-3">

<label>Gambar</label>
<input name="file" type="file" class="form-control" accept="image/*" value="<?php echo $row_konview['konImage']; ?>">
</div>
</div>-->
<div class="form-group">
  <div class="col-lg-5">
    <label>Alamat</label>
    <input  name="KoonAlamat" type="text" class="form-control" placeholder="Alamat Syarikat" value="<?php echo $row_konview['KonAlamat']; ?>">
  </div>
</div>
<div class="form-group">
  <div class="col-lg-5">
    <label></label>
    <input  name="KoonAlamatexts" type="text" class="form-control" placeholder="Alamat Syarikat" value="<?php echo $row_konview['konAlamatExtS']; ?>">
  </div>
</div>
<div class="form-group">
  <div class="col-lg-5">
    <label></label>
    <input  name="KoonAlamatextd" type="text" class="form-control" placeholder="Alamat Syarikat" value="<?php echo $row_konview['konAlamatExtD']; ?>">
  </div>
</div>
<div class="form-group">
  <div class="col-md-2">
    <label>Poskod</label>
    <input name="koonPoskod" type="text" class="form-control" placeholder="Poskod" value="<?php echo $row_konview['konPoskod']; ?>">
  </div>
  <div class="col-md-2">
    <label>Bandar</label>
    <input name="koonBandar" type="text" class="form-control" placeholder="Bandar" value="<?php echo $row_konview['konBandar']; ?>">
  </div>
  <div class="col-md-2">
    <label>Daerah</label>

    <select name="koonDaerah" class="form-control">
      <option value="<?php echo $row_konview['konDaerah']; ?>"><?php echo $row_konview['konDaerah']; ?></option>
      <option value="Kedah">Kedah</option>
      <option value="Kuala Muda">Kuala Muda</option>
      <option value="Baling">Baling</option>
      <option value="Sik">Sik</option>
    </select>
  </div>
  <div class="col-md-2">
    <label>Negeri</label>
    <select name="koonNegeri" class="form-control" title="">
      <option value="<?php echo $row_konview['konNegeri']; ?>"><?php echo $row_konview['konNegeri']; ?></option>
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
    <input name="koonTelPej" type="tel" class="form-control" placeholder="No Tel Pejabat" value="<?php echo $row_konview['konTel']; ?>">
  </div>
</div>
<div class="form-group">
  <div class="col-md-3">
    <label>Nama Pengurus</label>
    <input name="koonPengurus" type="text" class="form-control" placeholder="Pengurus Syarikat" value="<?php echo $row_konview['konPengurus']; ?>">
  </div>
  <div class="col-md-3">
    <label>No Kad Pengenalan</label>
    <input name="koonKPPen" type="text" class="form-control" placeholder="No Kad Pengenalan" value="<?php echo $row_konview['NoKPpengurus']; ?>">
  </div>
  <div class="col-md-3">
    <label class="control-label">No Tel</label>
    <input name="koonTelPengurus" type="text" class="form-control" placeholder="No Tel Bimbit" value="<?php echo $row_konview['NoTelPengurus']; ?>">
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
    <input name="koonRKsatu" type="text" class="form-control" placeholder="Sila nyatakan rakan konsi jika ada" value="<?php echo $row_konview['RKsatu']; ?>">
  </div>
  <div class="col-md-1">
    <label>No Kad Pengenalan</label>
  </div>
  <div class="col-md-2">
    <input name="koonRKKPsatu" type="text" class="form-control" placeholder="No Kad Pengenalan" value="<?php echo $row_konview['RKsatuNokp']; ?>">
  </div>
  <div class="col-md-1">
    <label class="control-label">No Tel</label>
  </div>
  <div class="col-md-2">
    <input name="koonKPTelsatu" type="text" class="form-control" placeholder="No Tel Bimbit" value="<?php echo $row_konview['RKsatuNotel']; ?>">
  </div>
</div>
<div class="form-group">
  <div class="col-md-1">
    <label>Rakan Kongsi(2)</label>
  </div>
  <div class="col-md-3">
    <input name="koonRKdua" type="text" class="form-control" placeholder="Sila nyatakan rakan konsi jika ada" value="<?php echo $row_konview['RKdua']; ?>">
  </div>
  <div class="col-md-1">
    <label>No Kad Pengenalan</label>
  </div>
  <div class="col-md-2">
    <input name="koonRKKPdua" type="text" class="form-control" placeholder="No Kad Pengenalan" value="<?php echo $row_konview['RKduaNokp']; ?>">
  </div>
  <div class="col-md-1">
    <label class="control-label">No Tel</label>
  </div>
  <div class="col-md-2">
    <input name="koonRKTeldua" type="text" class="form-control" placeholder="No Tel Bimbit" value="<?php echo $row_konview['RKduaNotel']; ?>">
  </div>
</div>
<div class="form-group">
  <div class="col-md-1">
    <label>Rakan Kongsi(3)</label>
  </div>
  <div class="col-md-3">
    <input name="koonRKtiga" type="text" class="form-control" placeholder="Sila nyatakan rakan konsi jika ada" value="<?php echo $row_konview['RKtiga']; ?>">
  </div>
  <div class="col-md-1">
    <label>No Kad Pengenalan</label>
  </div>
  <div class="col-md-2">
    <input name="koonRKKPtiga" type="text" class="form-control" placeholder="Sila nyatakan rakan konsi jika ada" value="<?php echo $row_konview['RKtigaNokp']; ?>">
  </div>
  <div class="col-md-1">
    <label class="control-label">No Tel</label>
  </div>
  <div class="col-md-2">
    <input name="koonRKTeltiga" type="text" class="form-control" placeholder="No Tel Bimbit" value="<?php echo $row_konview['RKtigaNotel']; ?>">
  </div>
</div>
<div class="form-group">
  <div class="col-md-1">
    <label>Rakan Kongsi(4)</label>
  </div>
  <div class="col-md-3">
    <input name="koonRKempat" type="text" class="form-control" placeholder="Sila nyatakan rakan konsi jika ada" value="<?php echo $row_konview['RKempat']; ?>">
  </div>
  <div class="col-md-1">
    <label>No Kad Pengenalan</label>
  </div>
  <div class="col-md-2">
    <input name="koonRKKPempat" type="text" class="form-control" placeholder="No Kad Pengenalan" value="<?php echo $row_konview['RKempatNokp']; ?>">
  </div>
  <div class="col-md-1">
    <label class="control-label">No Tel</label>
  </div>
  <div class="col-md-2">
    <input name="koonRKTelempat" type="text" class="form-control" placeholder="No Tel Bimbit" value="<?php echo $row_konview['RKempatNotel']; ?>">
  </div>
</div>
<div class="form-group">
  <div class="col-md-1">
    <label>Alamat Email</label>
  </div>
  <div class="col-md-3">
    <input name="koonrknemail" type="text" class="form-control" placeholder="Sila nyatakan alamat email jika ada" value="<?php echo $row_konview['konEmail']; ?>">
  </div>
  <div class="col-md-1">
    <label>No Faksimili</label>
  </div>
  <div class="col-md-2">
    <input name="koonfax" type="text" class="form-control" placeholder="No fax" value="<?php echo $row_konview['koFax']; ?>">
  </div>
</div>
<div class="form-group">
  <div class="col-md-1">
    <label>Bank</label>
  </div>
  <div class="col-md-3">
    <input name="koonBank" type="text" class="form-control" placeholder="Sila nyatakan alamat email jika ada" value="<?php echo $row_konview['konBank']; ?>">
  </div>
  <div class="col-md-1">
    <label>No Akaun</label>
  </div>
  <div class="col-md-2">
    <input name="koonAkaunBank" type="text" class="form-control" placeholder="No Akaun Bank" value="<?php echo $row_konview['konAkaunBank']; ?>">
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
      <option value="<?php echo $row_konview['konKawOperasi']; ?>"><?php echo $row_konview['konKawOperasi']; ?></option>
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
      <option value="<?php echo $row_konview['konPrestasi']; ?>"><?php echo $row_konview['konPrestasi']; ?></option>
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
      <option value="<?php echo $row_konview['spPBaharu']; ?>"><?php echo $row_konview['spPBaharu']; ?></option>
      <option value="Ya">Ya</option>
      <option value="Tidak">Tidak</option>
    </select>
  </div>
  <div class="col-md-3">
    <label>Pembaharuan</label>
    <select class="form-control" name="pembaru">
      <option value="<?php echo $row_konview['spPembaharuan']; ?>"><?php echo $row_konview['spPembaharuan']; ?></option>
      <option value="Ya">Ya</option>
      <option value="Tidak">Tidak</option>
    </select>
  </div>

  <div class="col-md-3">
    <label>Lain-Lain</label>
    <input class="form-control" placeholder="Lain-Lain" type="text" name="daftarlainlain" value="<?php echo $row_konview['spLainLain']; ?>">

  </div>
  <div class="col-md-3">
    <label>Kategori</label>

    <select class="form-control" name="daftarkategory">
      <option value="<?php echo $row_konview['spKategori']; ?>"><?php echo $row_konview['spKategori']; ?></option>
      <option value="Berdaftar">Kontraktor</option>
      <option value="Pembekal">Pembekal</option>
      <option value="Perkhidmatan">Perkhidmatan</option>
      <option value="Pembekal/Kontraktor">Pembekal/Kontraktor</option>
    </select>
  </div>

  ` </div>
  <div class="form-group">
    <div class="col-md-12" style="background-color:#CCC; padding-top:12px;">
      <p>Maklumat Permohon</p>
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-3">
      <label>Tarikh Permohon</label>
      <input name="daftarMohon" type="text" class="form-control" id="date2" value="<?php echo $row_konview['spDateMohon']; ?>">
    </div>
    <div class="col-md-3">
      <label>Cas Perkhidmatan (RM)</label>
      <input name="daftarCas" type="text" class="form-control" placeholder="" value="<?php echo $row_konview['spCaj']; ?>">
    </div>
    <div class="col-md-3">
      <label class="control-label">No Resit</label>
      <input name="daftarResit" type="text" class="form-control" placeholder="" value="<?php echo $row_konview['spNoResit']; ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-3">
      <label>No Sijil Pendaftaran</label>
      <input name="daftarSijilNo" type="text" class="form-control" placeholder="" value="<?php echo $row_konview['spNoSijil']; ?>">
    </div>
    <div class="col-md-3">
      <label>Tarikh Sijil Dikeluarkan</label>
      <input name="daftarKeluarkan" type="text" id="date3" class="form-control" placeholder="" value="<?php echo $row_konview['spDateKeluar']; ?>">
    </div>
    <div class="col-md-3">
      <label class="control-label">Tarikh Tamat Sijil</label>
      <input name="daftarTamat" type="text" id="date4" class="form-control" placeholder="" value="<?php echo $row_konview['spDateTamat']; ?>">
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
        <option value="<?php echo $row_konview['spDisemak']; ?>"><?php echo $row_konview['spDisemak']; ?></option>
         <?php do { ?>
         <option value="<?php echo $row_opsatu['NamaO']; ?>"><?php echo $row_opsatu['NamaO']; ?></option>
         <?php } while ($row_opsatu = mysql_fetch_assoc($opsatu)); ?>
      </select>
    </div>
    <div class="col-md-3">
      <label>Disahkan Oleh</label>
      <select name="daftardisahkan" type="text" class="form-control" placeholder="" value="">
        <option value="<?php echo $row_konview['spDisah']; ?>"><?php echo $row_konview['spDisah']; ?></option>
 <?php do { ?>
         <option value="<?php echo $row_opdua['NamaO']; ?>"><?php echo $row_opdua['NamaO']; ?></option>
         <?php } while ($row_opdua = mysql_fetch_assoc($opdua)); ?>
      </select>
    </div>
    <div class="col-md-3">
      <label class="control-label">Diluluskan Oleh</label>
      <select name="daftardiluluskan" type="text" class="form-control" placeholder="" value="">
        <option value="<?php echo $row_konview['spLulus']; ?>"><?php echo $row_konview['spLulus']; ?></option>
           <?php do { ?>
         <option value="<?php echo $row_optiga['NamaO']; ?>"><?php echo $row_optiga['NamaO']; ?></option>
         <?php } while ($row_optiga = mysql_fetch_assoc($optiga)); ?>
      </select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-3">
      <label>Jawatan Penyemak</label>
      <select name="daftarjawatanSemak" type="text" class="form-control" placeholder="">
        <option value="<?php echo $row_konview['spJwtnPenyemak']; ?>"><?php echo $row_konview['spJwtnPenyemak']; ?></option>
              <?php do { ?>
         <option value="<?php echo $row_jsatu['JawatanO']; ?>"><?php echo $row_jsatu['JawatanO']; ?></option>
         <?php } while ($row_jsatu = mysql_fetch_assoc($jsatu)); ?>
      </select>
    </div>
    <div class="col-md-3">
      <label>Jawatan Pengurus</label>
      <select name="daftarjawatanUrus" type="text" class="form-control" placeholder="">
        <option value="<?php echo $row_konview['spJwtnSah']; ?>"><?php echo $row_konview['spJwtnSah']; ?></option>
         <?php do { ?>
         <option value="<?php echo $row_jdua['JawatanO']; ?>"><?php echo $row_jdua['JawatanO']; ?></option>
         <?php } while ($row_jdua = mysql_fetch_assoc($jdua)); ?>
      </select>
    </div>
    <div class="col-md-3">
      <label class="control-label">Jawatan Penglulus</label>
      <select name="daftarjawatanLulus" type="text" class="form-control" placeholder="">
        <option value="<?php echo $row_konview['spJwtnLulus']; ?>"><?php echo $row_konview['spJwtnLulus']; ?></option>
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
      <input name="sijilNoDaftarPPK" type="text" class="form-control" id="konNamaDaftar" placeholder="No Pendaftaran" value="<?php echo $row_konview['sijilNoPendaftaran']; ?>"  >
    </div>
    <div class="col-md-3">
      <label>Tempoh Sah Dari</label>
      <input name="sijilSahPPK" type="text" class="form-control" id="date5" placeholder="Tempoh Sah Dari" value="<?php echo $row_konview['sijilSah']; ?>"  >
    </div>
    <div class="col-md-3">
      <label>Hingga</label>
      <input name="sijilHinggaPPK" type="text"  id="date6" class="form-control" placeholder="Hingga" value="<?php echo $row_konview['sijilTamat']; ?>"  >
    </div>

  </div>

  <!--this is for gred one -->
  <div class="form-group">
    <div class="col-md-2">
      <label>Gred</label>
      <select class="form-control" name="sijilGredOnePPK">
        <option value="<?php echo $row_konview['sijilPPKGredOne']; ?>"><?php echo $row_konview['sijilPPKGredOne']; ?></option>
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
        <option value="<?php echo $row_konview['sijilPPKCatOne']; ?>"><?php echo $row_konview['sijilPPKCatOne']; ?></option>
        <option value="B">B</option>
        <option value="CE">CE</option>
        <option value="ME">ME</option>

      </select>
    </div>
    <div class="col-md-4">
      <label>Pengkhususan</label>
      <input class="form-control" name="sijilGredKhususOnePPK" type="text" value="  <?php echo $row_konview['sijilPPKKhuOne']; ?>" >
    </div>

  </div>

  <!--end of gred one -->

  <!--this is for gred two -->
  <div class="form-group">
    <div class="col-md-2">
      <label>Gred</label>
      <select class="form-control" name="sijilGredTwoPPK">
        <option value="<?php echo $row_konview['sijilPPKGredTwo'];?>"><?php echo $row_konview['sijilPPKGredTwo']; ?></option>
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
        <option value="<?php echo $row_konview['sijilPPKCatTwo']; ?>"><?php echo $row_konview['sijilPPKCatTwo']; ?></option>
        <option value="B">B</option>
        <option value="CE">CE</option>
        <option value="ME">ME</option>


      </select>
    </div>
    <div class="col-md-4">
      <label>Pengkhususan</label>
      <input class="form-control" name="sijilGredKhususTwoPPK" type="text" value="  <?php echo $row_konview['sijilPPKKhuTwo']; ?>"  >
    </div>

  </div>

  <!--end of gred two -->

  <!--this is for gred three -->
  <div class="form-group">
    <div class="col-md-2">
      <label>Gred</label>
      <select class="form-control" name="sijilGredThreePPK">
        <option value="  <?php echo $row_konview['sijilPPKGredThree']; ?>">  <?php echo $row_konview['sijilPPKGredThree']; ?></option>
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
      <select class="form-control" name="sijilGredKatThreePPK">
        <option value="<?php echo $row_konview['sijilPPKCatThree']; ?>"><?php echo $row_konview['sijilPPKCatThree']; ?></option>
        <option value="B">B</option>
        <option value="CE">CE</option>
        <option value="ME">ME</option>

      </select>
    </div>
    <div class="col-md-4">
      <label>Pengkhususan</label>
      <input class="form-control" name="sijilGredKhususThreePPK" type="text" value="  <?php echo $row_konview['sijilPPKKhuThree']; ?>"  >
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
      <input name="sijilNoDaftarSPKK" type="text" class="form-control" placeholder="No Pendaftaran SPKK" value="<?php echo $row_konview['sijilSPKKNo']; ?>"  >
    </div>
    <div class="col-md-3">
      <label>Tempoh Sah Dari</label>
      <input name="sijilSahSPKK" type="text" id="date7"  class="form-control" placeholder="Tempoh Sah Dari" value="<?php echo $row_konview['sijilSPKKsah']; ?>"  >
    </div>
    <div class="col-md-3">
      <label>Hingga</label>
      <input name="sijilHinggaSPKK" type="text" id="date8" class="form-control"  placeholder="Hingga" value="<?php echo $row_konview['sijilSPKKTamat']; ?>"  >
    </div>

  </div>

  <!--this is for gred one -->
  <div class="form-group">
    <div class="col-md-2">
      <label>Gred</label>
      <select class="form-control" name="sijilGredOneSPKK">
        <option value="<?php echo $row_konview['sijilSPPKGredOne']; ?>"><?php echo $row_konview['sijilSPPKGredOne']; ?></option>
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
        <option value="<?php echo $row_konview['sijilSPPKCatOne']; ?>"><?php echo $row_konview['sijilSPPKCatOne']; ?></option>
        <option value="B">B</option>
        <option value="CE">CE</option>
        <option value="ME">ME</option>

      </select>
    </div>
    <div class="col-md-4">
      <label>Pengkhususan</label>
      <select name="sijilGredKhususOneSPKK" class="form-control">
        <option value="<?php echo $row_konview['sijilSPPKKhuOne']; ?>"><?php echo $row_konview['sijilSPPKKhuOne']; ?></option>
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
        <option value="<?php echo $row_konview['sijilSPPKGredTwo']; ?>"><?php echo $row_konview['sijilSPPKGredTwo']; ?></option>
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
        <option value="<?php echo $row_konview['sijilSPPKCatTwo']; ?>"><?php echo $row_konview['sijilSPPKCatTwo']; ?></option>
        <option value="B">B</option>
        <option value="CE">CE</option>
        <option value="ME">ME</option>

      </select>
    </div>
    <div class="col-md-4">
      <label>Pengkhususan</label>
      <select name="sijilGredKhususTwoSPKK" class="form-control">
        <option value="<?php echo $row_konview['sijilSPPKKhuTwo']; ?>"><?php echo $row_konview['sijilSPPKKhuTwo']; ?></option>
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
      <select class="form-control" name="sijilGredThreeSPKK">
        <option value="<?php echo $row_konview['sijilSPPKGredThree']; ?>"><?php echo $row_konview['sijilSPPKGredThree']; ?></option>
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
      <select class="form-control" name="sijilGredKatThreeSPKK">
        <option value="<?php echo $row_konview['sijilSPPKCatThree']; ?>"><?php echo $row_konview['sijilSPPKCatThree']; ?></option>
        <option value="B">B</option>
        <option value="CE">CE</option>
        <option value="ME">ME</option>

      </select>
    </div>
    <div class="col-md-4">
      <label>Pengkhususan</label>
      <select name="sijilGredKhususThreeSPKK" class="form-control">
        <option value="<?php echo $row_konview['sijilSPPKKhuThree']; ?>"><?php echo $row_konview['sijilSPPKKhuThree']; ?></option>
        <option value="Pembinaan Bangunan">Pembinaan Bangunan</option>
        <option value="Pembinaan Kejuruteraan Awam">Pembinaan Kejuruteraan Awam</option>
        <option value="Mekanikal Dan Elektrikal">Mekanikal Dan Elektrikal</option>
      </select>
    </div>

  </div>

  <!--end of gred three -->






  <div class="form-group">
    <div class="col-md-12" style="background-color:#CCC; padding-top:12px;">
      <p>2) Pusat Khidmat Kontraktor (PPK) </p>
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
      <input name="sijilNoDaftarSTB" type="text" class="form-control" id="konNamaDaftar" placeholder="No Pendaftaran" value="<?php echo $row_konview['sijiSTBNo']; ?>"  >
    </div>
    <div class="col-md-3">
      <label>Tempoh Sah Dari</label>
      <input name="sijilSahSTB" type="text" id="date9" class="form-control" placeholder="Tempoh Sah Dari" value="<?php echo $row_konview['sijilSTBSah']; ?>"  >
    </div>
    <div class="col-md-3">
      <label>Hingga</label>
      <input name="sijilHinggaSTB" type="text" id="date10" class="form-control" placeholder="Hingga" value="<?php echo $row_konview['sijilSTBTamat']; ?>"  >
    </div>

    <div class="col-md-2">
      <label>Gred Pendaftaran</label>
      <select name="sijilGredSTB" class="form-control">
        <option value="<?php echo $row_konview['sijilSTBGred']; ?>"><?php echo $row_konview['sijilSTBGred']; ?></option>
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
      <input name="sijilNoDaftarSSM" type="text" class="form-control" placeholder="No Pendaftaran" value="<?php echo $row_konview['daftarSSM']; ?>"  >
    </div>
    <div class="col-md-3">
      <label>Tempoh Sah Dari</label>
      <input name="sijilSahSSM" type="text" id="date11" class="form-control" placeholder="Tempoh Sah Dari" value="<?php echo $row_konview['daftarHSSM']; ?>"  >
    </div>
    <div class="col-md-3">
      <label>Hingga</label>
      <input name="sijilHinggaSSM" type="text" id="date12" class="form-control" placeholder="Hingga" value="<?php echo $row_konview['daftarTSSM']; ?>"  >
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
      <input name="sijilNoDaftarGST" type="text" class="form-control" placeholder="No Pendaftaran" value="<?php echo $row_konview['daftarGST']; ?>" >
    </div>
    <div class="col-md-3">
    <label>Tempoh Sah Dari</label>
     <input name="sijilSahGST" type="text" id="date40" class="form-control" placeholder="Tempoh Sah Dari" value="<?php echo $row_konview['dateDGST']; ?>"  >
    </div>
     <div class="col-md-3">
     <label>Hingga</label>
   <input name="sijilHinggaGST" type="text" id="date41" class="form-control" placeholder="Hingga" value="<?php echo $row_konview['dateTGST']; ?>"  >
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
      <input name="sijilNoDaftarJPS" type="text" class="form-control" id="konNamaDaftar" placeholder="No Pendaftaran" value="<?php echo $row_konview['sijilJPSNo']; ?>"  >
    </div>
    <div class="col-md-3">
      <label>Tempoh Sah Dari</label>


      <input name="sijilSahJPS" type="text" id="date" class="form-control" placeholder="Tempoh Sah Dari" value="<?php echo $row_konview['sijilJPSSah']; ?>"  >

    </div>
    <div class="col-md-3">
      <label>Hingga</label>


      <input name="sijilHinggaJPS" type="text" id="date1" class="form-control" placeholder="Hingga" value="<?php echo $row_konview['sijilJPSTamat']; ?>"  >

    </div>

    <div class="col-md-2">
      <label>Gred Pendaftaran</label>
      <select name="sijilGredJPS" class="form-control">
        <option value=" <?php echo $row_konview['sijilJPSKate']; ?>"> <?php echo $row_konview['sijilJPSKate']; ?></option>
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


  mysql_free_result($konview);
  ?>
