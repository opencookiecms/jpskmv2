<form method="POST" action="<?php echo $editFormAction; ?>" role="form" name="formupdate" class="form-horizontal">
  <input name="adID" class="form-control hidden" value="<?php echo $row_updateview['aduanId']; ?>" readonly>
  <div class="form-group">
    <div class="col-md-5">
      <label>Nama Pengadu</label>
      <input name="apengadu" class="form-control" value="<?php echo $row_updateview['aNama']; ?>" readonly>
    </div>
    <div class="col-md-4">
      <label>No Kad Pengenalan</label>
      <input name="nokp" class="form-control" placeholder="No Kad Pengenalan" value="<?php echo $row_updateview['aNokp']; ?>" readonly>
    </div>
  </div>



  <div class="form-group">
    <div class="col-md-5">
      <label>Alamat</label>
      <textarea class="form-control" placeholder="Alamat" name="alamat" readonly><?php echo $row_updateview['aAlamat']; ?></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-4">
      <label>No Tel</label>
      <input name="notel" class="form-control" placeholder="No Tel" value="<?php echo $row_updateview['aTel']; ?>" readonly>
    </div>
    <div class="col-md-4">
      <label>Tarikh Aduan</label>
      <input name="atarikh" type="date" class="form-control" placeholder="Tarikh Aduan" value="<?php echo $row_updateview['aTarikh']; ?>" readonly>
    </div>
    <div class="col-md-4">
      <label>Tarikh terima Aduan</label>
      <input name="atarikhterima" type="date" class="form-control" placeholder="Tarikh Terima Aduan" value="<?php echo $row_updateview['aTerima']; ?>" readonly>
    </div>

  </div>

  <div class="form-group">
    <div class="col-md-4">
      <label>Jawatan Pengadu</label>
      <input name="ajawatan" type="text" class="form-control" placeholder="Jawatan Pengadu" value="<?php echo $row_updateview['aJawatan']; ?>" readonly>
    </div>
    <div class="col-md-4">
      <label>Aduan Salinan</label>
      <input name="asalinan" type="text" class="form-control" placeholder="Aduan Salinan" value="<?php echo $row_updateview['aSalinan']; ?>" readonly>
    </div>
    <div class="col-md-4">
      <label>Sumber</label>
      <input name="asumber" type="text" class="form-control" placeholder="Sumber" value="<?php echo $row_updateview['aSumber']; ?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-5">
      <label>Masalah</label>
      <textarea class="form-control" placeholder="Masalah Aduan" type="text" name="amasalah" readonly><?php echo $row_updateview['aMasalah']; ?></textarea>
    </div>

  </div>

  <div class="form-group">
    <div class="col-md-12" style="background-color:#CCC; padding-top:12px;">
      <p>Lokasi Kampung</p>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-4">
      <label>Kampung</label>
      <input name="akampung" type="text" class="form-control" placeholder="Kampung" value="<?php echo $row_updateview['aKampung']; ?>" readonly>
    </div>
    <div class="col-md-4">
      <label>Mukim</label>
      <input name="amukim" type="text" class="form-control" placeholder="Mukim" value="<?php echo $row_updateview['aMukim']; ?>" readonly>
    </div>
    <div class="col-md-4">
      <label>Sungai</label>
      <input name="asungai" type="text" class="form-control" placeholder="Sungai" value="<?php echo $row_updateview['aSungai']; ?>" readonly>
    </div>

  </div>

  <div class="form-group">
    <div class="col-md-4">
      <label>Daerah</label>
      <input name="adaerah" type="text" class="form-control" placeholder="Daerah" value="<?php echo $row_updateview['aDaerah']; ?>" readonly>
    </div>

    <div class="col-md-4">
      <label>Kod Aduan</label>
      <input name="akodaduan" type="text" class="form-control" placeholder="Tarikh Aduan" value="<?php echo $row_updateview['aKod']; ?>"  readonly>
    </div>

  </div>


  <div class="form-group">
    <div class="col-md-12" style="background-color:#CCC; padding-top:12px; text-align:center;">
      <p>Kegunaan Pejabat</p>
      <p style="text-transform:capitalize;"><i>(Diisi Oleh Pengawai Penyiasat)</i></p>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-4">
      <label>Tarikh Surat Diminitkan</label>
      <input name="TSuratDiminitkan"  type="date" class="form-control" value="<?php echo $row_updateview['AduandateSuratMin']; ?>" readonly>
    </div>
    <div class="col-md-4">
      <label>Tarikh Siasatan</label>
      <input name="TsrtSiasat"  type="text" class="form-control" value="<?php echo $row_updateview['AduandateSiasat']; ?>" readonly>
    </div>
    <div class="col-md-4">
      <label>Kategori Aduan</label>
      <input name="KetAduan" type="text" class="form-control" value="<?php echo $row_updateview['AduanKatAduan']; ?>" readonly>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-4">
      <label>Latitud(N)</label>
      <input name="LatN"  type="text" class="form-control" value="<?php echo $row_updateview['AduanLatitud']; ?>" readonly>
    </div>
    <div class="col-md-4">
      <label>Longitud (E)</label>
      <input name="LonE"  type="text" class="form-control" value="<?php echo $row_updateview['AduanLongitud']; ?>" readonly>
    </div>
    <div class="col-md-4">
      <label>Kepentingan</label>
      <select class="form-control" name="Pnting" readonly>
        <option value="<?php echo $row_updateview['AduanPenting']; ?>"><?php echo $row_updateview['AduanPenting']; ?></option>
        <option value="Awam">Awam</option>
        <option value="Individu">Individu</option>
      </select>
    </div>
  </div>

  <div class="form-group">

    <div class="col-md-2">
      <label>Tahap Keseriusan</label>
      <select class="form-control" name="adRisau" readonly>
        <option value="<?php echo $row_updateview['AduanTahap']; ?>"><?php echo $row_updateview['AduanTahap']; ?></option>
        <option value="I">I</option>
        <option value="II">II</option>
        <option value="III">III</option>
      </select>
    </div>
    <div class="col-md-3">
      <label>Panduan</label>
      <p>I - Sangat serius, perlukan tindakan segera</p>
      <p>II -  Serdehana serius, perlukan tindakan segera</p>
      <p>III - Kurang serius, perlukan tindakan</p>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-5">
      <label>Cadangan Pembaikan</label>
      <textarea name="AdCadang" class="form-control" readonly><?php echo $row_updateview['AduanCadang']; ?></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-2">
      <label>Anggaran Kos</label>
      <input name="AdAggKos" type="text" class="form-control" placeholder="RM:" value="<?php echo $row_updateview['AduanKos']; ?>" readonly>
    </div>

    <div class="col-md-4">
      <label>Pegawai Penyiasat</label>
      <input type="text" value="<?php echo $row_updateview['AduanPenyiasat']; ?>" name="PPenyiasat"class="form-control" readonly>

    </div>

    <div class="col-md-4">
      <label>Pegawai Penyemak</label>
      <input name="Ppenyemak" type="text" value="<?php echo $row_updateview['AduanPenyemak']; ?>" class="form-control" readonly>

    </div>
  </div>

  <div class="form-group">


    <div class="col-md-3">
      <label>Tarikh</label>
      <input name="tdisemak" type="date" class="form-control" value="<?php echo $row_updateview['tarikhSemak']; ?>" readonly>
    </div>


  </div>

  <div class="form-group">
    <div class="col-md-12" style="background-color:#CCC; padding-top:12px; text-align:center;">
      <p>Ulasan Pengawai Pengesyor</p>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-6">
      <label>Ulasan</label>
      <textarea name="Ulasan" class="form-control" readonly><?php echo $row_updateview['AduanUlasan']; ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-3">
      <label>Kos Disyorkan</label>
      <input name="kosSyor" type="text" class="form-control" placeholder="RM:" value="<?php echo $row_updateview['KosSyor']; ?>" readonly>
    </div>

    <div class="col-md-3">
      <label>Pegawai Pengesyor</label>
      <input type="text" name="PSSyor" class="form-control" value="<?php echo $row_updateview['aduanPengesyor']; ?>" readonly>
    </div>

    <div class="col-md-3">
      <label>Tarikh</label>
      <input name="dateSyor" type="date" class="form-control" value="<?php echo $row_updateview['SyorDate']; ?>" readonly>
    </div>
  </div>


  <div class="form-group">
    <div class="col-md-12" style="background-color:#CCC; padding-top:12px; text-align:center;">
      <p>Ulasan Ketua Jabatan</p>
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-5">
      <label>Cadangan Program</label>
      <textarea name="proCadang" class="form-control"></textarea>
    </div>

  </div>
  <div class="form-group">
    <div class="col-md-2">
      <label>Kos(RM)</label>
      <input class="form-control" name="JabKos" type="text">
    </div>
    <div class="col-md-2">
      <label>Kod Komputer</label>
      <input class="form-control" name="kodComputer" type="text">
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-5">
      <label>Lain-lain catatan</label>
      <textarea name="LLCatat" class="form-control"></textarea>
    </div>

  </div>
  <div class="form-group">
    <div class="col-md-2">
      <label>Tarikh</label>
      <input name="aJabTarikh" type="text" id="date1" class="form-control">
    </div>
    <div class="col-md-4">
      <label>Jurutera Daerah</label>
      <input name="TTJabatan" type="text" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-3">
      <label>Status</label>
      <select class="form-control" name="astatus">
        <option value="<?php echo $row_updateview['aStatus']; ?>"><?php echo $row_updateview['aStatus']; ?></option>
        <option value="Dalam Siasatan">Siasat Semula</option>
        <option value="Dalam Tindakan">Tindakan Semula</option>
        <option value="Lulus">Lulus</option>
        <option value="Selesai">Selesai</option>
        <<option value="KIV">KIV</option>



      </select>
    </div>
  </div>



  <div class="form-group">
    <div class="col-md-4">
      <button type="submit" class="btn btn-success">Simpan</button>
      <button type="reset" class="btn btn-warning">Reset semula</button>
      <input type="hidden" name="MM_insert" value="formaduan">
    </div>
  </div>
  <input type="hidden" name="MM_update" value="formupdate">
</form>
