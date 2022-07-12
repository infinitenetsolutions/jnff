<?php
include 'db.php';
session_start();
if(!isset($_SESSION['user']))
{
  session_destroy();
  session_unset();
  header("location:logout.php");
}
?>

<?php

ob_start();
error_reporting(E_ERROR | E_PARSE);?>
<?php $coinfirmDelete=$_GET['coinfirmDelete']; ?>
<?php include_once 'db.php'; ?>
<?php $currentPage=basename($_SERVER['PHP_SELF']);
$_SESSION['TryAgain']=$currentPage; 
$id=base64_decode($_GET['edit']);
/* code for Delet Record*/
if(!empty($coinfirmDelete))
{
$sqlcoinfirmDelete="delete from awards where id='".$coinfirmDelete."'";
$querycoinfirmDelete=mysqli_query($conn,$sqlcoinfirmDelete);	
if($querycoinfirmDelete)
{ 
header('location:awards.php');
} else{
    echo mysqli_error();
}
}

if(isset($_POST['submit'])){
//var_dump($_FILES);exit();

$countfiles = count($_FILES['file']['name']);

// Looping all files
for($i=0;$i<$countfiles;$i++){
  $filename = $_FILES['file']['name'][$i];
  
  // Upload file
  if(move_uploaded_file($_FILES['file']['tmp_name'][$i],'latest_updates/'.$filename))
  {
  $insert=mysqli_query($conn,"INSERT INTO `awards`(`title`, `files`) VALUES ('".$_POST['title']."','".$filename."')");
  var_dump($insert);
  }
   
}
} 
if($insert)
{
 header('location:awards.php');
   
}



if(isset($_POST['edit']))
{
$title=$_POST['title'];
$file=$_FILES["file"]["name"];
$tmp_name=$_FILES["file"]["tmp_name"];
if($_FILES['file']['size']==0){
    $path="latest_updates/".$file;
	move_uploaded_file($tmp_name,$path);
	$sql="update awards set title='$title'   where id='$id'";
	$query=mysqli_query($conn,$sql);
}
else
{


	$path="latest_updates/".$file;
	move_uploaded_file($tmp_name,$path);
	$sql="update awards set title='$title',files='$file' where id='$id'";
	$query=mysqli_query($conn,$sql);
}
	if($query)
	{
		echo '<script>window.location.href="awards.php";</script>';
    }

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
                    <h4 class="header-line">JNFF AWARDS </h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            JNFF AWARDS
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <?php
if($_GET['edit']){
$sql="SELECT * FROM awards where id = '$id' ";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
    
?>
                               <div class="form-group">
                                    <label class="control-label col-sm-2">Add Title</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="title" value="<?php echo $row['title']; ?>" class="form-control">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Upload File</label>
                                    <input name="file" type="file" id="upload-image-one" multiple="">
                                        <img id="file" src="latest_updates/<?php echo $row['files'];?>" style="height: 100px;width: 100px;">
                                    </div>


                                <div class="form-group">
                                    <div class="col-sm-offset-6 col-sm-10">

                                        <button type="submit" name="edit" class="btn block btn-primary">Edit</button>
                                    </div>
                                </div>
                                
                            </form>

                            <?php } else {  ?>

                            <div class="form-group">
                                <label class="control-label col-sm-2">Add Title</label>
                                <div class="col-sm-4">
                                    <input type="text" name="title" class="form-control" required="">

                                </div>
                            </div>


                             <div class="form-group">
                                    <label class="control-label col-sm-2">Upload File</label>
                                    <div class="col-sm-4">
                                    <input type="file" class="form-control"  name="file[]"  required="">

                                    </div>
                                </div>
                           
                           
                            <div class="form-group">
                                <div class="col-sm-offset-6 col-sm-10">

                                    <button type="submit" name="submit" class="btn block btn-primary">Submit</button>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>





            <div class="box-footer">
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Data Table </h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/jqc-1.12.3/dt-1.10.12/r-2.1.0/datatables.min.js"></script>
                                    <script>
                                        $(document).ready(function() {
                                            $('.table').DataTable();
                                        });
                                    </script>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>title</th>
<!--                                                <th>Date</th>-->
                                                 <th>files</th>


                                                <th width="20%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
$sql=mysqli_query($conn," SELECT * FROM  awards ");
while($rows=mysqli_fetch_array($sql)){
?>
                                            <tr>
                                                <td class="center"><?php echo $rows['id']; ?></td>
                                                <td class="center"><?php echo $rows['title']; ?></td>
<!--                                                <td class="center"><?php //echo $rows['gallery_date']; ?></td>-->
                                                 <td class="center"><?php echo $rows['files']; ?></td>

                                               <td>
                                               <a  href="awards.php?<?php echo "edit=".base64_encode($rows['id']);?>" onclick = "if (! confirm('Are You Sure You Want To Edit?')) { return false; }"><span style=""><span  class="btn btn-block btn-primary">Edit</span></span></a>
	<a href="awards.php?del=<?php echo base64_encode($rows['id']); ?>">
<a type="button" class="btn btn-block btn-danger" data-toggle="modal" data-target="#myModal<?php echo $rows['id']; ?>">Delete</a>
</a></td>
                                            
                                            </tr>
                                            <!---------------------- Start Modal For Delete Record----------------------->
                                            <div class="modal fade" id="myModal<?php echo $rows['id']; ?>" role="dialog">
                                                <div class="modal-dialog modal-bg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h4 class="modal-title" style="color:#003399;">
                                                                <center> Delete Message:</center>
                                                            </h4>
                                                            <?php $coinfirmDelete=$rows['id']; ?>


                                                            <div id="confirmOverlay">
                                                                <div id="confirmBox">
                                                                    <h2><?php echo $existsMenu; ?></h2>

                                                                    <p style="color:#FF0000;"> Are you agree to delete it ?<br />

                                                                        <p align="center"><a class="btn btn-danger" href="awards.php?coinfirmDelete=<?php echo $coinfirmDelete; ?>">Delete</a>
                                                                            <a class="btn btn-success" href="awards.php">No<span></span></a>
                                                                        </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-primary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div></div>
                                                <!---------------------- End Of  Modal For Delete Record----------------------->
                                                <?php } ?>
                                        </tbody>

                                    </table>

                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>
                    <!-- /.box-footer-->

                </section>
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