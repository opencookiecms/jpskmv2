<form method="POST" action="<?php echo $editFormAction; ?>" role="form" name="formupdate" class="form-horizontal">
  <input name="adID" class="form-control" value="<?php echo $row_updateview['aduanId']; ?>" readonly>
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
      <p>Lokasi Aduan</p>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-4">
      <label>Lokasi</label>
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
<!-- step 2 --->
  <div class="form-group">

    <div class="col-md-4">
      <label>Tarikh Siasatan</label>
      <input class="form-control"  type="text" id='date1' name="TsrtSiasat">
    </div>
    <div class="col-md-4">
      <label>Kategori Aduan</label>
      <select class="form-control" type="text" name="KetAduan">
        <option value=""></option>
        <option value="Banjir">Banjir</option>
        <option value="Hakisan Tebing">Hakisan Tebing</option>
        <option value="Kerosakan Struktur">Kerosakan Struktur</option>
        <option value="Kuari Pasir">Kuari Pasir</option>
        <option value="Pencerobohan Rizab Sungai">Pencerobohan Rizab Sungai</option>
        <option value="Halangan Dalam Sungai">Halangan Dalam Sungai</option>
        <option value="Lain-Lain">Lain-Lain</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-4">
      <label>Latitud(N)</label>
      <input class="form-control"  type="text" name="LatN">
    </div>
    <div class="col-md-4">
      <label>Longitud (E)</label>
      <input class="form-control"  type="text" name="LonE">
    </div>
    <div class="col-md-4">
      <label>Kepentingan</label>
      <select class="form-control" name="Pnting">
        <option value="Awam">Awam</option>
        <option value="Individu">Individu</option>
                <option value="Lain-lain">Lain-lain</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-3">
      <label>Tindakan Jabatan /Agensi Lain</label>
      <select name="tindakanagensi" class="form-control">
        <option value="">Pilih Agensi Berkaitan</option>
        <option value="JPS Negeri Kedah">JPS Negeri Kedah</option>
        <option value="JPS PLSM/Mekanikal">JPS PLSM/Mekanikal</option>
        <option value="JPS Kuala Muda"></option>
        <option value="MPSP">MPSP</option>
        <option value="MPB">MPB</option>
        <option value="MPSK">MPSK</option>
        <option value="JKR">JKR</option>
        <option value="P.Daerah">P.Daerah</option>
        <option value="P.Tanah">P.Tanah</option>
        <option value="KEDA">KEDA</option>
        <option value="MADA">MADA</option>
        <option value="Jabatan Pertanian">Jabatan Pertanian</option>
        <option value="Jabatan Hutan">Jabatan Hutan</option>
        <option value="NGO">NGO</option>
        <option value="JPS RTB">JPS RTB</option>
        <option value="JPS Kuala Muda">JPS Kuala Muda</option>
        <option value="JPS BPME">JPS BPME</option>
        <option value="JPS BPME">Jabatan Alam Sekitar</option>
        <option value="JPS BPME">Sada</option>
        <option value="JPS BPME">TNB</option>
        <option value="Lain-Lain">Lain-Lain</option>
      </select>
    </div>
  </div>

  <div class="form-group">

    <div class="col-md-2">
      <label>Tahap Keseriusan</label>
      <select class="form-control" name="adRisau">
        <option value="I">I</option>
        <option value="II">II</option>
        <option value="III">III</option>
      </select>
    </div>
    <div class="col-md-3">
      <label>Nota</label>
      <p>I - Sangat serius, perlukan tindakan segera</p>
      <p>II -  Serdehana serius, perlukan tindakan segera</p>
      <p>III - Kurang serius, perlukan tindakan</p>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-5">
      <label>Cadangan Pembaikan</label>
      <textarea name="AdCadang" class="form-control"></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-2">
      <label>Anggaran Kos</label>
      <input name="AdAggKos" placeholder="RM:" type="text" class="form-control">
    </div>

    <div class="col-md-4">
      <label>Pegawai Penyiasat</label>
      <select name="PPenyiasat"class="form-control">
        <?php do { ?>
          <option value="<?php echo $row_kolekdatauser['userFname']; ?>"><?php echo $row_kolekdatauser['userFname']; ?></option>
        <?php } while ($row_kolekdatauser = mysql_fetch_assoc($kolekdatauser)); ?>
      </select>
    </div>

    <div class="col-md-4">
      <label>Pegawai Penyemak</label>
      <select name="Ppenyemak" class="form-control">
        <?php do { ?>
          <option value="<?php echo $row_kolekdatauser1['userFname']; ?>"><?php echo $row_kolekdatauser1['userFname']; ?></option>
        <?php } while ($row_kolekdatauser1 = mysql_fetch_assoc($kolekdatauser1)); ?>
      </select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-3">
      <label>Pegawai Pengesyor</label>
      <select class="form-control" name="Pengesyor" id="pegawai">


        <option value="">Select nama pegawai</option>
        <?php
        if($rowCount > 0){
          while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['usersId'].'">'.$row['userFname'].'</option>';
          }
        }else{
          echo '<option value="">Nama Pengawai tiada tersenarai</option>';
        }
        ?>
      </select>

    </div>
    <div class="col-md-3">
      <label>Email</label>

      <select name="syortel" id="ppp" class="form-control">
        <option value="">Sila Pilih Email</option>
        <?php $k=$_POST['ppp'];
        echo "$k";
        ?>
      </select>

    </div>

    <div class="col-md-3">
      <label>Tarikh</label>
      <input type="text" class="form-control" name="tdisemak" id='date13'>
    </div>

    <div class="col-md-3">
      <label>Status</label>
      <select class="form-control" name="astatus">
        <option value="<?php echo $row_updateview['aStatus']; ?>"><?php echo $row_updateview['aStatus']; ?></option>

        <option value="Telah Disiasat">Telah Disiasat</option>


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
