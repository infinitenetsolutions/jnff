<?php
include('db.php');
session_start();
if (!isset($_SESSION['user'])) {
  session_destroy();
  session_unset();
  header("location:logout.php");
}
//$user = $_SESSION['user_id'];
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
  <title>JNFF</title>
  <!-- BOOTSTRAP CORE STYLE  -->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONT AWESOME STYLE  -->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- CUSTOM STYLE  -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <!-- GOOGLE FONT -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body>

  <!-- LOGO HEADER END-->
  <?php include 'menubar.php'; ?>
  <!-- MENU SECTION END-->
  <div class="content-wrapper">
    <div class="container">
      <div class="row pad-botm">
        <div class="col-md-12">
          <h4 class="header-line">ADMIN DASHBOARD</h4>

        </div>

      </div>

      <div class="row">

        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="alert alert-info back-widget-set text-center">
            <i class="fa fa-users fa-5x"></i>
            <?php
            $sel_news = mysqli_query($conn, "SELECT * from team ");

            $result = mysqli_num_rows($sel_news);
            //var_dump($result);

            ?>
            <h3><?php echo $result; ?>&nbsp;</i></h3>
            TEAM MEMBERS
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="alert alert-success back-widget-set text-center">
            <img src="images/Sponsor-Icon.png" style="width: 60px;height: 70px;">
            <?php
            $sel_new = mysqli_query($conn, "SELECT * from sponsors_association");

            $result1 = mysqli_num_rows($sel_new);
            //var_dump($result);

            ?>
            <h3><?php echo $result1; ?>&nbsp;</h3>
            SPONSERS & ASSOCIATION
          </div>
        </div>

      </div>


    </div>
  </div>
  <!-- CONTENT-WRAPPER SECTION END-->
  <?php include 'footer.php'; ?>
  <!-- FOOTER SECTION END-->
  <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
  <!-- CORE JQUERY  -->
  <script src="assets/js/jquery-1.10.2.js"></script>
  <!-- BOOTSTRAP SCRIPTS  -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- CUSTOM SCRIPTS  -->
  <script src="assets/js/custom.js"></script>

</body>

</html>