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

    if(!empty($_FILES['file']['name']))
    {
        $targetfolder = "event_management/";
        $file =$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'] , $targetfolder . $file);

    
  
  $insert=mysqli_query($conn,"UPDATE `event_management` SET `title`= '".$_POST['title']."',`description`='".$_POST['description']."',`image`='".$file."' WHERE id='".$_GET['id']."'");
  //var_dump($insert);
  
   
}
else
{
    $insert=mysqli_query($conn,"UPDATE `event_management` SET `title`= '".$_POST['title']."',`description`='".$_POST['description']."'WHERE id='".$_GET['id']."'");
}

}
if($insert)
{
    header('location:event_list.php');
}


$sel_news = mysqli_query($conn, "SELECT * from event_management where id='" . $_GET['id'] . "' ");

$result = mysqli_fetch_assoc($sel_news);

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
                <h4 class="header-line">PATRON</h4>

            </div>

        </div>
        <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-12 col-sm-offset-2" >
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Patron
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="control-label col-sm-2">Title</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control"  name="title" value="<?php echo $result['title'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Description</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control"  name="description" value="<?php echo $result['description'];?>">
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="control-label col-sm-2">Upload File</label>
                                <div class="col-sm-4">
                                    <input name="file" onchange="readURL(this);"  type="file" id="upload-image-one">
                                    <img id="blah"  src="event_management/<?php echo $result['image'];?>" style="height: 100px;width: 100px;">
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
                               
                            
                           
<script type="text/javascript">
     function readURL(input) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#blah').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

                            
                            

                            
                           
                                  


                             




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