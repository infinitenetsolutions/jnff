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
                                     <th>Feature film</th>

                                    <th>Short film </th>

                                    <th>documentary</th>

                                    <th>Album </th>

                                     <!--<th>Other details</th>-->
                                   
                                    <th>Person registration details.</th>
                                    
                                    <th>Director Information</th>
                                      
                                       <!--<th>Director Email</th>-->
                                    <th>Producer Information</th>
                                         <!--<th>Producer Website</th>-->
                                         <!-- <th>Producer Telephone</th>-->
                                         <!--  <th>Producer Email</th>-->
                                         
                                    <!--<th>Presentation in Festivals</th>-->
                                            
                                    <!--<th>Sign.</th>-->
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Trsnctn No</th>
                                     <th>Action</th>

                                     <!--<th width="80px">Action</th>-->
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                $cnt = 1;
                                $sel_uom = mysqli_query($conn,"SELECT * FROM registration_form ");
                                while($result = mysqli_fetch_assoc($sel_uom)){
                                    ?>
                                    <tr>

                                        <td><?php echo $result['id']; ?></td>
                                        <td>
                                            <b>Category: </b><?php echo $result['category']; ?><br>
                                            <b>Sub Category: </b><?php echo $result['sub_category']; ?><br>
                                             <b>Professional Level : </b><?php echo $result['professional_level']; ?><br>
                                            <b>Title: </b><?php echo $result['titles']; ?><br>
                                            <b>Prodctn date: </b><?php echo $result['production_date']; ?><br>
                                             <b>Running Time: </b><?php echo $result['running_time']; ?>
                                        </td>
                                        
                                       
                                        <td><?php echo $result['video_link']; ?></td>
                                        <!--<td>        -->
                                        <!--           <b>Password: </b> <?php echo $result['password']; ?><br>-->
                                        <!--           <b>Language: </b> <?php echo $result['original_language']; ?><br>-->
                                        <!--            <b>Voice over: </b> <?php echo $result['voice_over']; ?><br>-->
                                        <!--             <b>Sub tittle: </b> <?php echo $result['voice_over']; ?>-->
                                        <!--</td>-->
                                        <td>
                                          <b>Actor Name: </b><?php echo $result['actor_name1_feature']; ?><br>
                                           <b>actress Name: </b><?php echo $result['actress_name1_feature']; ?><br>
                                            <b>Villain Name : </b><?php echo $result['villain_name1_feature']; ?><br>
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
                                            <b>Director Name : </b><?php echo $result['director_name2_short']; ?><br>
                                            <b>DOP Name: </b><?php echo $result['dop_name2_short']; ?><br>
                                            <b>Story Weiter: </b><?php echo $result['story_writer_name2_short']; ?><br>
                                             <b>Editor Name: </b><?php echo $result['editor_name2_short']; ?>
                                             
                                        </td>
                                         <td>
                                            <b>DOP Name: </b><?php echo $result['dop_name3_documentary']; ?><br>
                                           <b>Story Name: </b><?php echo $result['story_name3_documentary']; ?><br>
                                            <b>director : </b><?php echo $result['director_name3_documentary']; ?><br>
                                        </td>

                                         <td>
                                            <b>Actor Name: </b><?php echo $result['actor_name4_album']; ?><br>
                                           <b>Actress Name: </b><?php echo $result['actress_name4_album']; ?><br>
                                            <b>DOP Name : </b><?php echo $result['dop_name4_album']; ?><br>
                                             <b>singer Male Name: </b><?php echo $result['singer_male_name4_album']; ?><br>
                                           <b>singer Female Name: </b><?php echo $result['singer_female_name4_album']; ?><br>
                                            <b>Music director : </b><?php echo $result['music_director_name4_album']; ?><br>
                                             <b>Composer: </b><?php echo $result['composer_name4_album']; ?><br>
                                           <b>Lyricist: </b><?php echo $result['lyricist_name4_album']; ?><br>
                                        </td>








                                        
                                        <td>
                                                                <b>Name: </b><?php echo $result['name_of_person_making_registration']; ?><br>
                                                                <b>Company: </b><?php echo $result['company']; ?><br>
                                                                <b>Address: </b><?php echo $result['address']; ?><br>
                                                                <b>Telephone: </b><?php echo $result['telephone']; ?><br>
                                                                <b>Website: </b><?php echo $result['website']; ?><br>
                                                                <b>Email: </b><?php echo $result['email']; ?>
                                        
                                        </td>
                                    
                                         
                                          <td>
                                                                <b>Name: </b><?php echo $result['director_information']; ?><br>
                                                                <b>Website: </b><?php echo $result['director_website']; ?><br>
                                                                <b>Telephone: </b><?php echo $result['director_telephone']; ?><br>
                                                                <b>Email: </b><?php echo $result['director_email']; ?>             
                                          
                                          </td>
                                          
                                          
                                          
                                          
                                            <td>                <b>Name: </b><?php echo $result['producer_information']; ?><br>
                                                                <b>Website: </b><?php echo $result['producer_website']; ?><br>
                                                                <b>Telephone: </b><?php echo $result['producer_telephone']; ?><br>
                                                                <b>Email: </b><?php echo $result['producer_email']; ?>
                                            </td>

                                      





                                             <!--<td><?php echo $result['producer_website']; ?></td>-->
                                             <!-- <td><?php echo $result['producer_telephone']; ?></td>-->
                                             <!--  <td><?php echo $result['producer_email']; ?></td>-->
                                             
                                             
                                               <!-- <td><b>Presntation: </b><?php echo $result['presentation_in_festivals']; ?><br>-->
                                               <!--<b>Awards received: </b> <?php echo $result['awards_received']; ?>-->
                                                
                                                
                                               <!-- </td>-->
                                                  <!--<td><img style="height: 40px;width: 60px;" src="../signature/<?php echo $result['signature'];?>"></td>-->
                                                  <td><?php echo $result['name']; ?></td>
                                                   <td><?php echo $result['date']; ?></td>
                                                    <td><?php echo $result['transaction_no']; ?></td>
                                                   <td><a href="regview.php?fv_id=<?php echo $result['id'];?>"><button class="delete btn btn-info btn-sm"><span class="glyphicon glyphicon-eye-open"></span></button></a>
                                                   <a href="delete.php?fv_id=<?php echo $result['id'];?>"><button class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></a>
                                                   </td> 
                                       
                                    </tr>

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
