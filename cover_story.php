<?php include "./include/header.php";
include "./ejnff/db.php";

$result = "SELECT * FROM `cover_story`";
$query = mysqli_query($conn, $result);

?>
<div style="margin-top:90px;"> <img src="./images/about jnff copy (1).jpg" alt=""> </div>

 <main class="main-container">
            <div class="container">

                <div class="vc_row wpb_row vc_row-fluid vc_row-61d416a2ed118">
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_row-61d416a2ed605">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper" style="">
                               <div class="heading-block heading-5cdc0f8571973 tal h-h1 vc_custom_1557925779311">
                                    <h1 class="h">Cover <span>Story </span></h1>
                                </div>
                                <div class="heading-block heading-5cdd2723f9933 tal h-h1 vc_custom_1557997482100">
                                    
                                </div>
                                <div class="portfolio-block filter-block portfolio-5cdd277e7ae77 popup-gallery portfolio-grid style-style1" data-type="grid">
                                    

                                    <div class="load-wrap row isotope">
                                        <div class="grid-sizer col-1"></div>                                        
                                        <?php
                                  while($row = mysqli_fetch_assoc($query)){                                                                                                                 
         							   ?>
                                        <article class=" category-action-movie  col-12 col-sm-6 col-md-4">
                                            <div class="portfolio-item-grid wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft post-357 fw-portfolio type-fw-portfolio status-publish has-post-thumbnail hentry fw-portfolio-category-action-movie">
                                                <div class="img-block">
                                                    <div style="background-image: url('ejnff/cover_story/<?php echo $row['image']; ?>')" target="_blank"></div>
                                                </div>
                                                <div class="content">
                                                    <!-- <div class="num">01</div> -->
                                                    <h5 class="h"><?php echo $row['description'];?></h5>                                                    
                                                </div>
                                                <!--<a href="ejnff/cover_story/<?php echo $row['image']; ?>" target="_blank"></a>-->
                                            </div>
                                        </article>

                                        <?php  }?>                                      
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>









<?php include "./include/footer.php" ?>