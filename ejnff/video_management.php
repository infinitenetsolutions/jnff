<?php
include 'db.php';
session_start();
if(!isset($_SESSION['user']))
{
  session_destroy();
  session_unset();
  header("location:logout.php");
}
if(isset($_POST['submit']))
{

$title=$_POST['title']; 
$video_url=$_POST['video_url']; 

$sql="insert into video_management (title,video_url)values('$title','$video_url')";
$query=mysqli_query($conn,$sql);
echo "<script>
   alert('Inserted');
   window.location = 'video_link.php';
   </script>";
}


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
    <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
<?php include'menubar.php';?>
<!-- MENU SECTION END-->
<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">VIDEO MANAGEMENT</h4>

            </div>

        </div>
        <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-12 col-sm-offset-2" >
                <div class="panel panel-info">
                    <div class="panel-heading">
                        ADD VIDEO
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="control-label col-sm-2">Title</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="title" value="" placeholder="TITLE....">
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="control-label col-sm-2">Video Link</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control"  name="video_url" value="" placeholder="video link....">
                                </div>
                            </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-6 col-sm-10">

                                        <input type="submit" class="btn btn-warning" value="Submit" name="submit"/>
                                    </div>
                                </div>
                        </form>


                    </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
                               
                            
                           


                            
                            

                            
                           
                                  


                             




<!-- CONTENT-WRAPPER SECTION END-->
<?php include 'footer.php';?>
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
