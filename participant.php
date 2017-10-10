<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KUA Kecamatan klojen</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="./">KUA Kecamatan Klojen</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./#schedule">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="submit.html#submit">Submit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#participant">Participant</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./#contact">Contact</a>

            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        
        <!-- Participant -->
        <section id="participant">

          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading">DATA PENDAFTAR</h2>
              <h3 class="section-subheading text-muted">Kantor Urusan Agama Kecamatan Klojen</h3>
            </div>
          </div>
          <div  style="background: #ffffff;border: 1px solid #eaeaea;padding:50px;color : #000000;text-align: left;margin-bottom : -300px;">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Institution Name</th>
                  <th width="150px">Project Detail</th>
                  <th>Preview</th>
                </tr>
              </thead>
              <tbody>

                <?php
                    // koneksi
                    $connect = mysqli_connect("localhost", "root", "", "KUA");

                    if( mysqli_connect_errno() ){
                        printf("Connect failed: %s\n", mysqli_connect_errno());
                        exit();
                    }
                    
                    $sql = "SELECT * FROM rfp";

                    $rfp = mysqli_query($connect, $sql);                    

                    while( $row=mysqli_fetch_assoc($rfp) ){
                        ?>

                        <tr>
                          <th scope="row"><?php echo $row['id']; ?></th>
                          <td><?php echo $row['name']; ?></td>
                          <td><?php echo $row['institution_name']; ?></td>
                          <td><?php echo $row['project_detail']; ?></td>
                          <td><button type="button" class="btn btn-primary" onclick="window.location='<?php echo $row['project_proposal'];?>';">Preview</button></td>
                        </tr>


                        <?php
                    }

                    // tutup koneksi
                    mysqli_close($connect);
                ?>
              </tbody>
            </table></div>
        </section>
      </div>
    </header>

    

    <!-- Footer -->
    <footer style="margin-top : 200px; ">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Your Website 2017</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
