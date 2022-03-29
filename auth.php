<?php 
  require_once "./dashboard/Config/database/DBOperation.php";
  require_once "./dashboard/components/functions.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Metas -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>Tour with Dave</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/p3.jpg" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Plugins -->
    <link rel="stylesheet" href="css/plugins.css" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="css/style.css" />
    <!--for fontawesome icons-->
    <link
      href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <!-- ==================== Start Loading ==================== -->

    <!-- <div class="loading">
      <span>Tour with Dave</span>
    </div> -->

    <!-- <div id="preloader"></div> -->
    <!-- Sign In page -->
    <div class="row signin-row">
      <div class="col no-padding">
        <img src="./img/p2.jpg" alt="" />
      </div>
      <div class="col px-5">
      <?php
        if(isset($_GET['new-user']))
        {
          require_once "./includes/signup.php";
        }else{
          require_once "./includes/signin.php";

        }
      
      ?>
      </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>

    <!-- plugins -->
    <script src="js/plugins.js"></script>

    <!-- custom scripts -->
    <script src="js/scripts.js"></script>
  </body>
</html>
