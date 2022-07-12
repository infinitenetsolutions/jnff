<?php include 'db.php';
session_start();
if(!isset($_SESSION['user']))
{
  session_destroy();
  session_unset();
  header("location:logout.php");
}?>

<?php
$coinfirmDelete=$_GET['coinfirmDelete'];
 
if($coinfirmDelete)
{
$sqlcoinfirmDelete="delete from video_management where id='".$coinfirmDelete."'";
$querycoinfirmDelete=mysqli_query($conn, $sqlcoinfirmDelete);	
if($querycoinfirmDelete)
{ 
header('location:video_link.php');
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
    <!-- DATATABLE STYLE  -->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
<?php include 'menubar.php';?>
<!-- MENU SECTION END-->
<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line"></h4>

            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        VIDEO LIST
                      <a href="video_management.php"><button class="btn btn-warning pull-right">ADD VIDEO </button></a>

                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th style="width: 20px;">SL no</th>
                                    <!--<th style="width: 20px;">Title </th>-->
                                    
                                    <th style="width: 20px;">Video Name</th>
                                    <th style="width: 20px;">Video Link </th>
                                    
                                    <th width="80px">Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                $cnt = 1;
                                $sel_uom = mysqli_query($conn  , "SELECT * FROM video_management");
                                while($result = mysqli_fetch_assoc($sel_uom)){
                                    ?>
                                    <tr>
                                        <td><?php echo $cnt; ?></td>
                                                                      

                                        <td><?php echo $result['title']; ?></td>
                                        <td><?php echo $result['video_url'];?></td>
                                        

                                        <td>

                                            <a href="video_linkedit.php?id=<?php echo $result['id'];?>"><button class="update btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></a>
                                           <!--<a href="video_delete.php?fid=<?php echo $result['id'];?>"><button class="update btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span></button></a>-->
                                           <a href="video_link.php?del=<?php echo base64_encode($result['id']); ?>"> <a type="button"  data-toggle="modal" data-target="#myModal<?php echo $result['id']; ?>"><button class="update btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span></button></a></a>
                                        </td>

                                        </td>
                                    </tr>
<div class="modal fade" id="myModal<?php echo $result['id']; ?>" role="dialog">
<div class="modal-dialog modal-bg">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<h4 class="modal-title" style="color:#003399;"><center>  Delete Message:</center></h4>
<?php 
$coinfirmDelete=$result['id']; 
?>
<div id="confirmOverlay">
    <div id="confirmBox">
        <h2><?php echo $existsMenu; ?></h2>
		
        <p style="color:#FF0000;"> Are you agree to delete it ?<br />
	
		<p align="center"><a  class="btn btn-danger" href="video_link.php?coinfirmDelete=<?php echo $coinfirmDelete; ?>">Delete</a>
		<a  class="btn btn-success"  href="video_link.php">No<span></span></a>
		</p></p>
    </div>
</div>

</div>
<div class="modal-footer">
<button class="btn btn-primary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
                                    <?php $cnt++; }?>


                               </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
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
<!-- DATATABLE SCRIPTS  -->
<script src="assets/js/dataTables/jquery.dataTables.js"></script>
<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
<!-- CUSTOM SCRIPTS  -->
<script src="assets/js/custom.js"></script>
</body>
</html>
