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
                     <form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Download All Data to Excel-Sheet" />
    </form>
    
                    </div>
                    <div id="print-content">
                    <div class="panel-body" style="overflow-x: auto;">
                        <div class="table-responsive">
                             <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Film Name</th>
                                    <th>Category </th>
                                    <th>Sub Category </th>
                                    <th>professional Level </th>
                                    <th>Feature film</th>
                                    <th>Short film </th>
                                    <th>Documentary</th>
                                    <th>Album </th>
                                    <th>Production Date</th>
                                    <th>Company</th>
                                    <th>Address</th>
                                    <th>Director Name</th>
                                    <th>Director Ph.</th>
                                    <th>Director Email</th>
                                    <th>Producer Name</th>
                                    <th>Producer Ph.</th>
                                    <th>Producer Email</th>
                                    <th>Entry Date</th>
                                    <th>Transaction No.</th>
                                   </tr>
                                </thead>
                                <tbody>

                                <?php
                                $cnt = 1;
                                $sel_uom = mysqli_query($conn  , "SELECT * FROM registration_form ");
                                while($result = mysqli_fetch_assoc($sel_uom)){
                                    ?>
                                    <tr>

                                        <td><?php echo $cnt ?></td>
                                        <td><?php echo $result['titles']; ?></td>
                                        <td><?php echo $result['category']; ?></td>
                                        <td><?php echo $result['sub_category']; ?></td>
                                        <td><?php echo $result['professional_level']; ?></td>
<td>
                                          <b>Actor Name: </b><?php echo $result['actor_name1_feature']; ?><br>
                                           <b>actress Name: </b><?php echo $result['actress_name1_feature']; ?><br>
                                            <b>Villain Name : </b><?php echo $result['villain_name1_feature ']; ?><br>
                                            <b>DOP Nmae: </b><?php echo $result['dop_name1_feature']; ?><br>
                                            <b>Editor name: </b><?php echo $result['editor_name1_feature']; ?><br>
                                            <b>Music director: </b><?php echo $result['music_director_name1_feature']; ?>
                                            <b>Male singer: </b><?php echo $result['male_singer_name1_feature']; ?><br>
                                            <b>female singer: </b><?php echo $result['female_singer_name1_feature']; ?><br>
                                            <b>Lyrics: </b><?php echo $result['lyrics_name1_feature']; ?>
                                            <b>Story Name: </b><?php echo $result['story_writer_name1_feature']; ?><br>
                                            <b>Child artist: </b><?php echo $result['child_artist_name1_feature']; ?><br>
                                            <b>Supp. Actor: </b><?php echo $result['supporting_actor_name1_feature']; ?>
                                            <b>supp. Actress: </b><?php echo $result['supporting_actress_name1_feature']; ?>

                                        </td>

                                        <td>
                                            <b>Actor Name: </b><?php echo $result['actor_name2_short']; ?><br>
                                           <b>Actress Name: </b><?php echo $result['actress_name2_short']; ?><br>
                                            <b>Director Name : </b><?php echo $result['director_name2_short ']; ?><br>
                                            <b>DOP Name: </b><?php echo $result['dop_name2_short']; ?><br>
                                            <b>Story Weiter: </b><?php echo $result['story_writer_name2_short']; ?><br>
                                             <b>Editor Name: </b><?php echo $result['editor_name2_short']; ?>
                                             
                                        </td>
                                         <td>
                                            <b>DOP Name: </b><?php echo $result['dop_name3_documentary']; ?><br>
                                           <b>Story Name: </b><?php echo $result['story_name3_documentary']; ?><br>
                                            <b>director : </b><?php echo $result['director_name3_documentary ']; ?><br>
                                        </td>

                                         <td>
                                            <b>Actor Name: </b><?php echo $result['actor_name4_album']; ?><br>
                                           <b>Actress Name: </b><?php echo $result['actress_name4_album']; ?><br>
                                            <b>DOP Name : </b><?php echo $result['dop_name4_album ']; ?><br>
                                             <b>singer Male Name: </b><?php echo $result['singer_male_name4_album']; ?><br>
                                           <b>singer Female Name: </b><?php echo $result['singer_female_name4_album']; ?><br>
                                            <b>Music director : </b><?php echo $result['music_director_name4_album ']; ?><br>
                                             <b>Composer: </b><?php echo $result['composer_name4_album']; ?><br>
                                           <b>Lyricist: </b><?php echo $result['lyricist_name4_album']; ?><br>
                                        </td>




                                         <td><?php echo $result['production_date']; ?></td>
                                          <td><?php echo $result['company']; ?></td>
                                          <td><?php echo $result['address']; ?></td>
                                            <td><?php echo $result['director_information']; ?></td>
                                              <td><?php echo $result['director_telephone']; ?></td>
                                                <td><?php echo $result['director_email']; ?></td>
                                                 <td><?php echo $result['producer_information']; ?></td>
                                              <td><?php echo $result['producer_telephone']; ?></td>
                                                <td><?php echo $result['producer_email']; ?></td>
                                                 <td><?php echo $result['date']; ?></td>
                                        <td><?php echo $result['transaction_no']; ?></td>
                                        
                                    </tr>

                                    <?php $cnt++; }?>


                               </tbody>
                               </form>
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
