<?php

$role = $_SESSION['sess_userrole'];
?>
<?php switch($role):

case "superuser": ?>
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo $totalRows_aduantotal ?></h3>

        <p>Aduan</p>
      </div>
      <div class="icon">
        <i class="ion ion-sad"></i>
      </div>
      <a href="../pages/aduan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div
   class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3><?php echo $totalRows_projektotal ?> </h3>

        <p>Projek</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="../pages/projek" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?php echo $totalRows_kontraktotal ?></h3>

        <p>Kontraktor</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="../pages/kontraktor" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3><?php echo $totalRows_kursustotal ?></h3>

        <p>Kursus</p>
      </div>
      <div class="icon">
        <i class="ion ion-android-clipboard"></i>
      </div>
      <a href="../kursus/index.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>


<?php break; ?>
<?php case "user": ?>
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo $totalRows_aduanview2 ?></h3>

        <p>Aduan</p>
      </div>
      <div class="icon">
        <?php $hs = $totalRows_aduanview2 ?>
        <?php if ($hs > 0): ?>
            <i class="ion ion-sad"></i>
        <?php else: ?>
            <i class="ion ion-happy"></i>
        <?php endif; ?>

      </div>
      <a href="../pages/aduan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->

  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?php echo $totalRows_kontraktotal ?></h3>

        <p>Kontraktor</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="../pages/kontraktor" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3><?php echo $totalRows_kursustotal ?></h3>

        <p>Kursus</p>
      </div>
      <div class="icon">
        <i class="ion ion-android-clipboard"></i>
      </div>
      <a href="../kursus/k_individu" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>
<?php break; ?>

<?php case "adminaduan": ?>
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo $totalRows_aduanview2 ?></h3>

        <p>Aduan</p>
      </div>
      <div class="icon">
        <?php $hs = $totalRows_aduanview2 ?>
        <?php if ($hs > 0): ?>
            <i class="ion ion-sad"></i>
        <?php else: ?>
            <i class="ion ion-happy"></i>
        <?php endif; ?>

      </div>
      <a href="../pages/aduan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->

  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?php echo $totalRows_kontraktotal ?></h3>

        <p>Kontraktor</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="../pages/kontraktor" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3><?php echo $totalRows_kursustotal ?></h3>

        <p>Kursus</p>
      </div>
      <div class="icon">
        <i class="ion ion-android-clipboard"></i>
      </div>
      <a href="../kursus/k_individu" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>

<?php break; ?>

<?php case "specialuser": ?>
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo $totalRows_aduanview2 ?></h3>

        <p>Aduan</p>
      </div>
      <div class="icon">
        <?php $hs = $totalRows_aduanview2 ?>
        <?php if ($hs > 0): ?>
            <i class="ion ion-sad"></i>
        <?php else: ?>
            <i class="ion ion-happy"></i>
        <?php endif; ?>

      </div>
      <a href="../pages/aduan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div
   class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3><?php echo $totalRows_projektotal ?> </h3>

        <p>Projek</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="../pages/projek" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?php echo $totalRows_kontraktotal ?></h3>

        <p>Kontraktor</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="../pages/kontraktor" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3><?php echo $totalRows_kursustotal ?></h3>

        <p>Kursus</p>
      </div>
      <div class="icon">
        <i class="ion ion-android-clipboard"></i>
      </div>
      <a href="../kursus/k_individu" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>

<?php break; ?>

<?php case "adminkursus": ?>
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo $totalRows_aduanview2 ?></h3>

        <p>Aduan</p>
      </div>
      <div class="icon">
        <?php $hs = $totalRows_aduanview2 ?>
        <?php if ($hs > 0): ?>
            <i class="ion ion-sad"></i>
        <?php else: ?>
            <i class="ion ion-happy"></i>
        <?php endif; ?>

      </div>
      <a href="../pages/aduan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->

  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?php echo $totalRows_kontraktotal ?></h3>

        <p>Kontraktor</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="../pages/kontrakor" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3><?php echo $totalRows_kursustotal ?></h3>

        <p>Kursus</p>
      </div>
      <div class="icon">
        <i class="ion ion-android-clipboard"></i>
      </div>
      <a href="../kursus/index.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
<?php break; ?>

<?php case "adminpengesyor": ?>
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo $totalRows_aduanview2 ?></h3>


        <p>Aduan</p>
      </div>
      <div class="icon">
        <?php $hs = $totalRows_aduanview2 ?>
        <?php if ($hs > 0): ?>
            <i class="ion ion-sad"></i>
        <?php else: ?>
            <i class="ion ion-happy"></i>
        <?php endif; ?>

      </div>
      <a href="../pages/aduan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->

  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?php echo $totalRows_kontraktotal ?></h3>

        <p>Kontraktor</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="../pages/kontraktor" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3><?php echo $totalRows_kursustotal ?></h3>

        <p>Kursus</p>
      </div>
      <div class="icon">
        <i class="ion ion-android-clipboard"></i>
      </div>
      <a href="../kursus/k_individu" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>
<?php break; ?>

<?php case "adminkontraktor": ?>
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo $totalRows_aduanview2 ?></h3>

        <p>Aduan</p>
      </div>
      <div class="icon">
        <?php $hs = $totalRows_aduanview2 ?>
        <?php if ($hs > 0): ?>
            <i class="ion ion-sad"></i>
        <?php else: ?>
            <i class="ion ion-happy"></i>
        <?php endif; ?>

      </div>
      <a href="../pages/aduan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->

  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?php echo $totalRows_kontraktotal ?></h3>

        <p>Kontraktor</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="../pages/kontraktor" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3><?php echo $totalRows_kursustotal ?></h3>

        <p>Kursus</p>
      </div>
      <div class="icon">
        <i class="ion ion-android-clipboard"></i>
      </div>
      <a href="../kursus/k_individu" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>
<?php break; ?>

<?php endswitch; ?>
