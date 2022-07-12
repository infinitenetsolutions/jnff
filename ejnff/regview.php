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
                <h4 class="header-line">EVENT MANAGEMENT</h4>

            </div>

        </div>
        <div class="row">
            <div class="col-md-10 col-sm-10 col-xs-12 col-sm-offset-2" >
                <div class="panel panel-info">
                    <div class="panel-heading">
                        ADD EVENTS
                    </div>
                    <div class="panel-body">
                          <?php
                                $cnt = 1;
                                $sel_uom = mysqli_query($conn  , "SELECT * FROM registration_form where id= '".$_GET['fv_id']."'");
                                // var_dump("SELECT * FROM registration_form where id= '".$_GET['fv_id']."'");exit();
                               $result = mysqli_fetch_assoc($sel_uom);
                                    ?>
                                    
                            <div class="form-group">
                                <label class="control-label col-sm-2">Id</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['id']; ?>">
                                </div>
                           
                            
                         
                                <label class="control-label col-sm-2">Category</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['category']; ?>">
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="control-label col-sm-2">Sub Category</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['sub_category']; ?>">
                                </div>
                           
                            
                         
                                <label class="control-label col-sm-2">Professional Level</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['professional_level']; ?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2">Titles</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['titles']; ?>">
                                </div>
                           
                            
                         
                                <label class="control-label col-sm-2">Production date</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['production_date']; ?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2">Running Time</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['running_time']; ?>">
                                </div>
                           
                            
                         
                                <label class="control-label col-sm-2">Video Link</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['video_link']; ?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2">Password</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['password']; ?>">
                                </div>
                           
                            
                         
                                <label class="control-label col-sm-2">Original Language</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['original_language']; ?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2">Voice Over</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['voice_over']; ?>">
                                </div>
                           
                            
                         
                                <label class="control-label col-sm-2">Sub Title</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['sub_title']; ?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2">Person registering</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['name_of_person_making_registration']; ?>">
                                </div>
                           
                            
                         
                                <label class="control-label col-sm-2">Company</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['company']; ?>">
                                </div>
                            </div>
                            
                          
                            
                             
                            
                             <div class="form-group">
                                <label class="control-label col-sm-2">Email</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['email']; ?>">
                                </div>
                           
                            
                         
                                <label class="control-label col-sm-2">Address</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['address']; ?>">
                                </div>
                            </div>
                            
                             <div class="form-group">
                                <label class="control-label col-sm-2">Telephone</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['telephone']; ?>">
                                </div>
                           
                            
                         
                                <label class="control-label col-sm-2">Email</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['email']; ?>">
                                </div>
                            </div>
                            
                             <div class="form-group">
                                <label class="control-label col-sm-2">Website</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['website']; ?>">
                                </div>
                           
                            
                         
                                <label class="control-label col-sm-2">Director Info</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['director_information']; ?>">
                                </div>
                            </div>
                            
                            
                             
                            
                         
                            <div class="form-group">
                                <label class="control-label col-sm-2">Director Email</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['director_email']; ?>">
                                </div>
                           
                            
                         
                                <label class="control-label col-sm-2">Producer Info</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['producer_information']; ?>">
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2">Prod. Website</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['producer_website']; ?>">
                                </div>
                           
                            
                         
                                <label class="control-label col-sm-2">Prod. Tel</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['producer_telephone']; ?>">
                                </div>
                            </div>
                            
                            
                            
                           
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2">Producer Email</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['producer_email']; ?>">
                                </div>
                           
                            
                         
                                <label class="control-label col-sm-2">Festivals attended</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['presentation_in_festivals']; ?>">
                                </div>
                            </div>
                              
                              
                              <div class="form-group">
                                <label class="control-label col-sm-2">Awards</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['awards_received']; ?>">
                                </div>
                           
                            
                         
                                <label class="control-label col-sm-2">Signature</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['signature']; ?>">
                                </div>
                            </div>
                            
                             <div class="form-group">
                                <label class="control-label col-sm-2">Name</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['name']; ?>">
                                </div>
                           
                            
                         
                                <label class="control-label col-sm-2">date</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['date']; ?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2">Transaction no.</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['transaction_no']; ?>">
                                </div>
                                 <label class="control-label col-sm-2">Actor Name(FF)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['actor_name1_feature']; ?>">
                                </div>
                          
                            </div>
                               <div class="form-group">
                                <label class="control-label col-sm-2">Actress Name(FF)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['actress_name1_feature']; ?>">
                                </div>
                                 <label class="control-label col-sm-2">Villain Name(FF)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['villain_name1_feature']; ?>">
                                </div>
                          
                            </div>


                               <div class="form-group">
                                <label class="control-label col-sm-2">DOP Name(FF)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['dop_name1_feature']; ?>">
                                </div>
                                 <label class="control-label col-sm-2">Editor Name(FF)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['editor_name1_feature']; ?>">
                                </div>
                          
                            </div>

                               <div class="form-group">
                                <label class="control-label col-sm-2">Director Name(FF)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['music_director_name1_feature']; ?>">
                                </div>
                                 <label class="control-label col-sm-2">Male Singer(FF)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['male_singer_name1_feature']; ?>">
                                </div>
                          
                            </div>




                               <div class="form-group">
                                <label class="control-label col-sm-2">Female Singer(FF)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['female_singer_name1_feature']; ?>">
                                </div>
                                 <label class="control-label col-sm-2">Lyrics Name(FF)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['lyrics_name1_feature']; ?>">
                                </div>
                          
                            </div>

                                   <div class="form-group">
                                <label class="control-label col-sm-2">Story Writer(FF)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['story_writer_name1_feature']; ?>">
                                </div>
                                 <label class="control-label col-sm-2">Child Artist (FF)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['child_artist_name1_feature']; ?>">
                                </div>
                          
                            </div>
                                <div class="form-group">
                                <label class="control-label col-sm-2">Supp. Actor(FF)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['supporting_actor_name1_feature']; ?>">
                                </div>
                                 <label class="control-label col-sm-2">Supp. Actress(FF)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['supporting_actress_name1_feature']; ?>">
                                </div>
                          
                            </div>
                             <div class="form-group">
                                <label class="control-label col-sm-2">Actor Name(SF)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['actor_name2_short']; ?>">
                                </div>
                                 <label class="control-label col-sm-2">Director Name(SF)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['actress_name2_short']; ?>">
                                </div>
                          
                            </div>
                               <div class="form-group">
                                <label class="control-label col-sm-2">DOP Name(SF)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['director_name2_short']; ?>">
                                </div>
                                 <label class="control-label col-sm-2">Story Name(SF)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['dop_name2_short']; ?>">
                                </div>
                          
                            </div>
                               <div class="form-group">
                                <label class="control-label col-sm-2">Editor Name(SF)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['story_writer_name2_short']; ?>">
                                </div>
                                 <label class="control-label col-sm-2">Villain Name(FF)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['editor_name2_short']; ?>">
                                </div>
                          
                            </div>
                             <div class="form-group">
                                <label class="control-label col-sm-2">DOP Name(DF)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['dop_name3_documentary']; ?>">
                                </div>
                                 <label class="control-label col-sm-2"> Story(DF)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['story_name3_documentary']; ?>">
                                </div>
                          
                            </div>


                              <div class="form-group">
                                <label class="control-label col-sm-2">director Name(DF)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['director_name3_documentary']; ?>">
                                </div>
                                 <label class="control-label col-sm-2">Actor Name(A)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['actor_name4_album']; ?>">
                                </div>
                          
                            </div>

                              <div class="form-group">
                                <label class="control-label col-sm-2">Actress Name(A)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['actress_name4_album']; ?>">
                                </div>
                                 <label class="control-label col-sm-2">DOP Name(A)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['dop_name4_album']; ?>">
                                </div>
                          
                            </div>
                              <div class="form-group">
                                <label class="control-label col-sm-2">Male Singer(A)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['singer_male_name4_album']; ?>">
                                </div>
                                 <label class="control-label col-sm-2">Female Singer(A)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['singer_female_name4_album']; ?>">
                                </div>
                          
                            </div>
                               <div class="form-group">
                                <label class="control-label col-sm-2">Music Director(A)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['music_director_name4_album']; ?>">
                                </div>
                                 <label class="control-label col-sm-2">Composer(A)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['composer_name4_album']; ?>">
                                </div>
                          
                            </div>
                                <div class="form-group">
                                <label class="control-label col-sm-2">Lyricist(A)</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['lyricist_name4_album']; ?>">
                                </div>
<!--                                  <label class="control-label col-sm-2">Villain Name(FF)</label>
 -->                              <!--   <div class="col-sm-4">
                                    <input type="text" readonly="readonly" class="form-control"  name="title" value="<?php echo $result['composer_name4_album']; ?>">
                                </div>
                           -->
                            </div>





                           

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
