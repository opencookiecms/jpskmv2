<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>JPSKMSB</title>

  <!-- Bootstrap core CSS -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/small-business.css" rel="stylesheet">

</head>

<body class="lapis">

  <!-- Navigation -->


  <!-- Page Content -->
  <div class="container">

    <!-- Heading Row -->
    <div class="row my-5">
      <div class="col-lg-8 my-3">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner cf">

            <div class="carousel-item active">
              <img class="d-block w-100" src="../assets/images/slider/slide.png" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h3>Selamat Datang ke Portal JPSKMSB</h3>

              </div>
            </div>
            <!--
            <div class="carousel-item">
              <img class="d-block w-100" src="../assets/images/slider/4.png" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <h3>Selamat Datang ke Portal JPSKMSB</h3>
                <p></p>
              </div>
            </div>
          -->
          <!--
            <div class="carousel-item">
              <img class="d-block w-100" src="../assets/images/slider/slide.png" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                <h3>Selamat Datang ke Portal JPSKMSB</h3>
                <p></p>
              </div>
            </div>-->
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-4 my-3">
        <span class="lgin2">Log Masuk Sistem JPSKMSB</span>
        <?php

        $errors = array(
          1=>"Invalid user name or password, Try again",
          2=>"Please login to access this area"
        );

        $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

        if ($error_id == 1) {
          echo '<p class="alert alert-danger">'.$errors[$error_id].'</p>';
        }elseif ($error_id == 2) {
          echo '<p class="alert alert-danger">'.$errors[$error_id].'</p>';
        }
        ?>

        <form  action="auth.php" METHOD="POST" role="form" name="login">
          <div class="form-group pad">
            <label for="exampleInputEmail1"><span class="lgin">Username</span></label>
            <input class="form-control" placeholder="Username" name="userName" type="text" autofocus>
            <small id="emailHelp" class="form-text text-muted">We'll never share your username and password with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><span class="lgin">Password</span></label>
            <input class="form-control" placeholder="Password" name="usersPassword" type="password" value="">
          </div>

          <button type="submit" class="btn btn-lg btn-success btn-block">Log Masuk</button>
        </form>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white cd my-4 text-center">
      <div class="card-body">
        <p class="text-white m-2">Copyright &copy; 2017 Jabatan Pengairan dan Saliran Kuala Muda / Sik / Baling</p>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row">


      <!-- /.col-md-4 -->
      <div class="col-md-12 mb-3">

      </div>
      <!-- /.col-md-4 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


  <!-- Bootstrap core JavaScript -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/popper/popper.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
