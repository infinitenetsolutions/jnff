<?php
include 'db.php';

session_start();
if(!isset($_SESSION['user']))
{
  session_destroy();
  session_unset();
  header("location:logout.php");
}

if(!isset($_GET['heading_id']))  header('location:mp_headings.php');

if(!mysqli_fetch_array(
    mysqli_query($conn,sprintf(
        'select * from mainpage_subheadings where id=%s;',mysqli_real_escape_string($conn,$_GET['id'])
    ))
))  header('location:mp_subheadings.php?heading_id='.$_GET['heading_id']);

if(isset($_POST['submit']))
{

    $insert=mysqli_query($conn,sprintf(
        'UPDATE mainpage_subheadings set content="%s" where id=%s;',mysqli_real_escape_string($conn,$_POST['content']),
        mysqli_real_escape_string($conn,$_GET['id'])
    ));

        if($insert) {
            header('location:mp_subheadings.php?heading_id='.$_GET['heading_id']);
        }

}


$row=mysqli_fetch_array(
    mysqli_query($conn,sprintf(
        'select * from mainpage_subheadings where id=%s;',mysqli_real_escape_string($conn,$_GET['id'])
    )));

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
                <h4 class="header-line">SUBHEADING EDITING</h4>

            </div>

        </div>
        <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-12 col-sm-offset-2" >
                <div class="panel panel-info">
                    <div class="panel-heading">
                        EDIT SUBHEADING
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="control-label col-sm-2">Content</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control"  name="content" value="<?php echo $row['content']; ?>"> 
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
