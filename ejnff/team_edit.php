<?php
include 'db.php';
if(isset($_POST['submit']))
{

    if(!empty($_FILES['photo']['name']))
    {
        $targetfolder = "team/";
        $file =$_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'] , $targetfolder . $file);

    
  
  $insert=mysqli_query($conn,"UPDATE `team` SET `name`= '".$_POST['name']."',`designation`= '".$_POST['designation']."',`photo`='".$file."',`description`= '".$_POST['description']."' WHERE id='".$_GET['id']."'");
  //var_dump($insert);
  
   
}
else
{
    $insert=mysqli_query($conn,"UPDATE `team` SET `name`= '".$_POST['name']."', `designation`= '".$_POST['designation']."',`description`= '".$_POST['description']."'WHERE id='".$_GET['id']."'");
}

}
if($insert)
{
    header('location:team_list.php');
}


$sel_news = mysqli_query($conn, "SELECT * from team where id='" . $_GET['id'] . "' ");

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
                <h4 class="header-line">TEAM</h4>

            </div>

        </div>
        <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-12 col-sm-offset-2" >
                <div class="panel panel-info">
                    <div class="panel-heading">
                        TEAM MANAGEMENT
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="control-label col-sm-2">Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="name" value="<?php echo $result['name'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Designation</label>
                                <div class="col-sm-4">
                                     <select class="form-control" name="designation">
                                        <option <?php if($result['designation']=='Founder & MD'){ ?> selected="selected" <?php }?> value="Founder & MD">Founder & MD</option>
                                                        <option <?php if($result['designation']=='Director & CEO'){ ?> selected="selected" <?php }?> value="Director & CEO">Director & CEO</option>
                                                        <!--<option <?php if($result['designation']=='Head Administrator'){ ?> selected="selected" <?php }?> value="Head Administrator">Head Administrator</option>-->
                                                        <!--<option <?php if($result['designation']=='Head Account'){ ?> selected="selected" <?php }?> value="Head Account">Head Account</option>-->
                                                         <option <?php if($result['designation']=='Technical Members'){ ?> selected="selected" <?php }?> value="Technical Members">Technical Members</option>
      <option <?php if($result['designation']=='Creative resional Head'){ ?> selected="selected" <?php }?> value="Creative resional Head">Creative resional Head</option>

                                                         <!--<option <?php if($result['designation']=='State coordinators'){ ?> selected="selected" <?php }?> value="State coordinators">State coordinators</option>-->
                                                         <option <?php if($result['designation']=='Jury Members'){ ?> selected="selected" <?php }?> value="Jury Members">Jury Members</option>
                                                        
                                                        <option <?php if($result['designation']=='Advisory Board Members'){ ?> selected="selected" <?php }?> value="Advisory Board Members">Advisory Board Members</option>
                                                         <option <?php if($result['designation']=='Patron'){ ?> selected="selected" <?php }?> value="Patron">Patron</option>
                                                       
                                                        <option <?php if($result['designation']=='Management'){ ?> selected="selected" <?php }?> value="Management">Management</option>
                                     				    <option <?php if($result['designation']=='Chief Advisory Board Committee'){ ?> selected="selected" <?php }?> value="Chief Advisory Board Committee">Chief Advisory Board Committee</option>
                                   					    <option <?php if($result['designation']=='Creative resional Head'){ ?> selected="selected" <?php }?> value="Creative resional Head">Creative resional Head</option>
                                                                                                                                                                                                                                                                                                                                                 
                                                        </select> 
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
                                    <input name="photo" onchange="readURL(this);"  type="file" id="upload-image-one">
                                    <img id="blah"  src="team/<?php echo $result['photo']; ?>" style="height: 100px;width: 100px;">
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
