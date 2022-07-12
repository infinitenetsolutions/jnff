<?php include 'db.php';
session_start();
if(!isset($_SESSION['user']))
{
  session_destroy();
  session_unset();
  header("location:logout.php");
}?>

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
    <script type="text/javascript">

function printDiv(divName) {

 var printContents = document.getElementById(divName).innerHTML;
 w=window.open();
 w.document.write(printContents);
 w.print();
 w.close();
}
</script>
  
</head>
<body>
<?php include 'menubar.php';?>
<!-- MENU SECTION END-->
<div class="content-wrapper">
    <div class="container-fluid">
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
                        REGISTRATION FORM DETAILS
                     <input type="button" onclick="printDiv('print-content')" value="Print Page"/>
                    </div>
                    <div id="print-content">
                    <div class="panel-body" style="overflow-x: auto;">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th style="width: 318px;">Video details </th>
                                    
                                    <th>Video Link </th>
                                     
                                   
                                    <th>Person registration details.</th>
                                    
                                    <th>Director Information</th>
                                      
                                    
                                    <th>Producer Information</th>
                                       
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Trsnctn No</th>
                                     

                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                $cnt = 1;
                                $sel_uom = mysqli_query($conn  , "SELECT * FROM registration_form ");
                                while($result = mysqli_fetch_assoc($sel_uom)){
                                    ?>
                                    <tr>

                                        <td><?php echo $result['id']; ?></td>
                                        <td>
                                            <b>Category: </b><?php echo $result['category']; ?><br>
                                            <b>Title: </b><?php echo $result['titles']; ?><br>
                                            <b>Prodctn date: </b><?php echo $result['production_date']; ?><br>
                                             <b>Running Time: </b><?php echo $result['running_time']; ?>
                                        </td>
                                        
                                       
                                        <td><?php echo $result['video_link']; ?></td>
                                       
                                       
                                        
                                        <td>
                                                                <b>Name: </b><?php echo $result['name_of_person_making_registration']; ?><br>
                                                                <b>Company: </b><?php echo $result['company']; ?><br>
                                                                <b>Address: </b><?php echo $result['address']; ?><br>
                                                                <b>Telephone: </b><?php echo $result['telephone']; ?><br>
                                                                <b>Website: </b><?php echo $result['website']; ?><br>
                                                                <b>Email: </b><?php echo $result['email']; ?>
                                        
                                        </td>
                                    
                                         
                                          <td>
                                                                <b>Name: </b><?php echo $result['director_infomation']; ?><br>
                                                                <b>Website: </b><?php echo $result['director_website']; ?><br>
                                                                <b>Telephone: </b><?php echo $result['director_telephone']; ?><br>
                                                                <b>Email: </b><?php echo $result['director_email']; ?>             
                                          
                                          </td>
                                          
                                          
                                          
                                          
                                            <td>                <b>Name: </b><?php echo $result['producer_information']; ?><br>
                                                                <b>Website: </b><?php echo $result['producer_website']; ?><br>
                                                                <b>Telephone: </b><?php echo $result['producer_telephone']; ?><br>
                                                                <b>Email: </b><?php echo $result['producer_email']; ?>
                                            </td>
                                            
                                                  <!--<td><img style="height: 40px;width: 60px;" src="../signature/<?php echo $result['signature'];?>"></td>-->
                                                  <td><?php echo $result['name']; ?></td>
                                                   <td><?php echo $result['date']; ?></td>
                                                    <td><?php echo $result['transaction_no']; ?></td>
                                                  
                                       
                                    </tr>

                                    <?php $cnt++; }?>


                               </tbody>
                            </table>
                        </div>

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
