<?php include "./include/header.php";
include "./ejnff/db.php";

$result1 = "SELECT * FROM `jharkhand_saman` WHERE `title`='2018'";
$query1 = mysqli_query($conn, $result1);

$result2 = "SELECT * FROM `jharkhand_saman` WHERE `title`='2019'";
$query2 = mysqli_query($conn, $result2);

?>
<div style="margin-top:90px;"> <img src="./images/about jnff copy (1).jpg" alt=""> </div>
 <main class="main-container">
            <div class="container">

                <div class="vc_row wpb_row vc_row-fluid vc_row-61d416a2ed118">
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_row-61d416a2ed605">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper" style="">
                              <div class="heading-block heading-5cdc0f8571973 tal h-h1 vc_custom_1557925779311">
                                    <h1 class="h">Jharkhand <span>Samman 2018</span></h1>
                                </div>
                                <div class="heading-block heading-5cdd2723f9933 tal h-h1 vc_custom_1557997482100">
                                    
                                </div>
                                <div class="portfolio-block filter-block portfolio-5cdd277e7ae77 popup-gallery portfolio-grid style-style1" data-type="grid">
                                    

                                    <div class="load-wrap row isotope">
                                        <div class="grid-sizer col-1"></div>                                        
                                        <?php
                                  while($row1 = mysqli_fetch_assoc($query1)){                                                                                                                 
         							   ?>
                                        <article class=" category-action-movie  col-12 col-sm-6 col-md-4">
                                            <div class="portfolio-item-grid wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft post-357 fw-portfolio type-fw-portfolio status-publish has-post-thumbnail hentry fw-portfolio-category-action-movie">
                                                <div class="img-block">
                                                    <div style="background-image: url('ejnff/jharkhand_saman/<?php echo $row1['image']; ?>')" target="_blank"></div>
                                                </div>
                                                <div class="content">
                                                    <!-- <div class="num">01</div> -->
                                                    <h5 class="h"><?php echo $row1['description'];?></h5>                                                    
                                                </div>
                                                <!--<a href="ejnff/jharkhand_saman/<?php echo $row1['image']; ?>" target="_blank"></a>-->
                                            </div>
                                        </article>

                                        <?php  }?>                                      
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="vc_row wpb_row vc_row-fluid vc_row-61d416a2ed118">
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_row-61d416a2ed605">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper" style="">
                              <div class="heading-block heading-5cdc0f8571973 tal h-h1 vc_custom_1557925779311">
                                    <h1 class="h">Jharkhand <span>Samman 2019</span></h1>
                                </div>
                                <div class="heading-block heading-5cdd2723f9933 tal h-h1 vc_custom_1557997482100">
                                    
                                </div>
                                <div class="portfolio-block filter-block portfolio-5cdd277e7ae77 popup-gallery portfolio-grid style-style1" data-type="grid">
                                    

                                    <div class="load-wrap row isotope">
                                        <div class="grid-sizer col-1"></div>                                        
                                        <?php
                                  while($row2 = mysqli_fetch_assoc($query2)){                                                                                                                 
         							   ?>
                                        <article class=" category-action-movie  col-12 col-sm-6 col-md-4">
                                            <div class="portfolio-item-grid wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft post-357 fw-portfolio type-fw-portfolio status-publish has-post-thumbnail hentry fw-portfolio-category-action-movie">
                                                <div class="img-block">
                                                    <div style="background-image: url('ejnff/jharkhand_saman/<?php echo $row2['image']; ?>')" target="_blank"></div>
                                                </div>
                                                <div class="content">
                                                    <!-- <div class="num">01</div> -->
                                                    <h5 class="h"><?php echo $row2['description'];?></h5>                                                    
                                                </div>
                                                <!--<a href="ejnff/jharkhand_saman/<?php echo $row2['image']; ?>" target="_blank"></a>-->
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