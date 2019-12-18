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

$colname_updateRec = "-1";
if (isset($_GET['kontraktorId'])) {
  $colname_updateRec = $_GET['kontraktorId'];
}
mysql_select_db($database_dbconn, $dbconn);
$query_updateRec = sprintf("SELECT * FROM kontraktor WHERE kontraktorId = %s", GetSQLValueString($colname_updateRec, "int"));
$updateRec = mysql_query($query_updateRec, $dbconn) or die(mysql_error());
$row_updateRec = mysql_fetch_assoc($updateRec);
$totalRows_updateRec = mysql_num_rows($updateRec);
?>

<div class="form-group">
  <div class="col-lg-3">
    <label>Nama Syarikat</label>
    <input name="konNama" class="form-control" id="koonNama" placeholder="Nama Syarikat" onkeyup="sync()" value="<?php echo $row_updateRec['konName']; ?>">
  </div>
</div>
<div class="form-group">
  <div class="col-lg-3">
    <label>Gambar</label>
    <input class="form-control" name="koonImage" type="file" accept="image/*">
  </div>
</div>
<div class="form-group">
  <div class="col-lg-5">
    <label>Alamat</label>
    <input  name="KoonAlamat" type="text" class="form-control" placeholder="Alamat Syarikat" value="<?php echo $row_updateRec['KonAlamat']; ?>">
  </div>
</div>
<div class="form-group">
  <div class="col-lg-5">
    <label>Street</label>
    <input  name="KoonAlamatexts" type="text" class="form-control" placeholder="Alamat Syarikat" value="<?php echo $row_updateRec['konAlamatExtS']; ?>">
  </div>
</div>
<div class="form-group">
  <div class="col-lg-5">
    <label>Street 2</label>
    <input  name="KoonAlamatextd" type="text" class="form-control" placeholder="Alamat Syarikat" value="<?php echo $row_updateRec['konAlamatExtD']; ?>">
  </div>
</div>
<div class="form-group">
  <div class="col-md-2">
    <label>Poskod</label>
    <input name="koonPoskod" type="text" class="form-control" placeholder="Poskod" value="<?php echo $row_updateRec['konPoskod']; ?>">
  </div>
  <div class="col-md-2">
    <label>Bandar</label>
    <input name="koonBandar" type="text" class="form-control" placeholder="Bandar" value="<?php echo $row_updateRec['konBandar']; ?>">
  </div>
  <div class="col-md-2">
    <label>Daerah</label>
    <input name="koonDaerah" type="text" class="form-control" placeholder="Daerah" value="<?php echo $row_updateRec['konDaerah']; ?>">
  </div>
  <div class="col-md-2">
    <label>Negeri</label>
    <input name="koonNegeri" type="text" class="form-control" placeholder="Negeri" value="<?php echo $row_updateRec['konNegeri']; ?>">
  </div>
  <div class="col-md-2">
    <label>Telefon Pejabat</label>
    <input name="koonTelPej" type="tel" class="form-control" placeholder="No Tel Pejabat" value="<?php echo $row_updateRec['konTel']; ?>">
  </div>
</div>
<div class="form-group">
  <div class="col-md-3">
    <label>Nama Pengurus</label>
    <input name="koonPengurus" type="text" class="form-control" placeholder="Pengurus Syarikat" value="<?php echo $row_updateRec['konPengurus']; ?>">
  </div>
  <div class="col-md-3">
    <label>No Kad Pengenalan</label>
    <input name="koonKPPen" type="text" class="form-control" placeholder="No Kad Pengenalan" value="<?php echo $row_updateRec['NoKPpengurus']; ?>">
  </div>
  <div class="col-md-3">
    <label class="control-label">No Tel</label>
    <input name="koonTelPengurus" type="text" class="form-control" placeholder="No Tel Bimbit" value="<?php echo $row_updateRec['NoTelPengurus']; ?>">
  </div>
</div>
<div class="form-group">
  <div class="col-md-12" style="background-color:#CCC; padding-top:12px;">
    <p>Maklumat-maklumat syarikat</p>
  </div>
</div>
<div class="form-group">
  <div class="col-md-1">
    <label>Rakan Konsi(1)</label>
  </div>
  <div class="col-md-3">
    <input name="koonRKsatu" type="text" class="form-control" placeholder="Sila nyatakan rakan konsi jika ada" value="<?php echo $row_updateRec['RKsatu']; ?>">
  </div>
  <div class="col-md-1">
    <label>No Kad Pengenalan</label>
  </div>
  <div class="col-md-2">
    <input name="koonRKKPsatu" type="text" class="form-control" placeholder="No Kad Pengenalan" value="<?php echo $row_updateRec['RKsatuNokp']; ?>">
  </div>
  <div class="col-md-1">
    <label class="control-label">No Tel</label>
  </div>
  <div class="col-md-2">
    <input name="koonKPTelsatu" type="text" class="form-control" placeholder="No Tel Bimbit" value="<?php echo $row_updateRec['RKsatuNotel']; ?>">
  </div>
</div>
<div class="form-group">
  <div class="col-md-1">
    <label>Rakan Konsi(2)</label>
  </div>
  <div class="col-md-3">
    <input name="koonRKdua" type="text" class="form-control" placeholder="Sila nyatakan rakan konsi jika ada" value="<?php echo $row_updateRec['RKdua']; ?>">
  </div>
  <div class="col-md-1">
    <label>No Kad Pengenalan</label>
  </div>
  <div class="col-md-2">
    <input name="koonRKKPdua" type="text" class="form-control" placeholder="No Kad Pengenalan" value="<?php echo $row_updateRec['RKduaNokp']; ?>">
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
    <label>Rakan Konsi(3)</label>
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
    <label>Rakan Konsi(4)</label>
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
    <input class="form-control" placeholder="Sila nyatakan alamat email jika ada" type="text" name="koonBank">
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
    <input class="form-control" placeholder="Kawasan Operasi" type="text" name="koonOperasi">
  </div>
  <div class="col-md-1">
    <label>Status Kontraktor</label>
  </div>
  <div class="col-md-2">
    <input class="form-control" placeholder="Status" type="text" name="koonStatus">
  </div>
  <div class="col-md-1">
    <label>Prestasi Kontraktor</label>
  </div>
  <div class="col-md-2">
    <input class="form-control" placeholder="Prestasi" type="text" name="koonPrestasi">
  </div>
</div>
<div class="form-group">
  <div class="col-md-3">
    <button type="submit" name="konsave" class="btn btn-success">Simpan</button>
    <button type="reset" class="btn btn-danger">Reset Semula</button>
  </div>
</div>
<?php
mysql_free_result($updateRec);
?>
