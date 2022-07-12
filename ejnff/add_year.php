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
if($coinfirmDelete)
{
$sqlcoinfirmDelete="delete from add_year where year='".$coinfirmDelete."'; ";
$sqlcoinfirmDelete.="delete from latest_updates where year='".$coinfirmDelete."'; ";

$querycoinfirmDelete=mysqli_multi_query($conn,$sqlcoinfirmDelete);	
if($querycoinfirmDelete)
{ 
header('location:add_year.php');
}
}

if(isset($_POST['submit']))
{
	$year=$_POST['year'];

		$sql="insert into add_year (year)values('$year')";
		$query=mysqli_query($conn,$sql);
		echo "<script>
		alert('Inserted');
		window.location = 'add_year.php';
		</script>";
}
	



if(isset($_POST['edit']))
{
$year=$_POST['year'];


$sql = "update add_year set year='$year' where id='$id'";

$query=mysqli_query($conn,$sql);
echo "<script>
   alert('Updated');
   window.location = 'add_year.php';
   </script>";	
}


//if($insert)
//{
// header('location:latestupdates_list.php');
//   
//}
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
                    <h4 class="header-line">Add LATEST UPDATES</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Add Year
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <?php
if($_GET['edit']){
$sql="SELECT * FROM add_year where id = '$id' ";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
?>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Add Year</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="year" value="<?php echo $row['year']; ?>" class="form-control">

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-offset-6 col-sm-10">

                                        <button type="submit" name="edit" class="btn block btn-primary">Edit</button>
                                    </div>
                                </div>
                                
                            </form>

                            <?php } else {  ?>

                            <div class="form-group">
                                <label class="control-label col-sm-2">Add Year</label>
                                <div class="col-sm-4">
                                    <input type="text" name="year" class="form-control" required="">

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
                                                <th>Year</th>
                                                <!--<th>Date</th>
<th>Image</th>-->


                                                <th width="20%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
$sql=mysqli_query($conn," SELECT * FROM  add_year ");
while($rows=mysqli_fetch_array($sql)){
?>
                                            <tr>
                                                <td class="center"><?php echo $rows['id']; ?></td>
                                                <td class="center"><?php echo $rows['year']; ?></td>
                                                <!--<td class="center"><?php //echo $rows['gallery_date']; ?></td>
<td class="center"><?php //echo $rows['img']; ?></td>-->

                                                <td class="center">
                                                    <a href="add_year.php?<?php echo "edit=".base64_encode($rows['id']); ?>">
                                                        <button type="button"  displayclass="btn btn-block btn-primary" style="display:none">Edit</button>
                                                    </a>
                                                    <a href="add_year.php?del=<?php echo base64_encode($rows['year']); ?>">
                                                        <a type="button" class="btn btn-block btn-danger" data-toggle="modal" data-target="#myModal<?php echo $rows['id']; ?>">Delete</a>
                                                    </a>
                                                </td>
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
                                                            <?php $coinfirmDelete=$rows['year']; ?>


                                                            <div id="confirmOverlay">
                                                                <div id="confirmBox">
                                                                    <h2><?php echo $existsMenu; ?></h2>

                                                                    <p style="color:#FF0000;"> Are you agree to delete it ?<br />

                                                                        <p align="center"><a class="btn btn-danger" href="add_year.php?coinfirmDelete=<?php echo $coinfirmDelete; ?>">Delete</a>
                                                                            <a class="btn btn-success" href="add_year.php">No<span></span></a>
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