<?php include "./include/header.php";
include "./ejnff/db.php";
?>
        <div class="header-space"></div>
        <main class="main-container">
            <div class="container">

                <div class="vc_row wpb_row vc_row-fluid vc_row-61d416a2ed118">
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_row-61d416a2ed605">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper" style="margin-top: 100px;">
                                <div class="heading-block heading-5cdd2723f9933 tal h-h1 vc_custom_1557997482100">
                                  <h1 class="h">Image <span>Gallery</span></h1>
                                </div>
                                <div class="portfolio-block filter-block portfolio-5cdd277e7ae77 popup-gallery portfolio-grid style-style1" data-type="grid">
                                    <!-- <div class="filter-buttons tal">
                                        <div class="wrap">
                                            <button class="button current" data-filter="*">All</button>
                                            <button class="button" data-filter=".category-action-movie">Action movie</button>
                                            <button class="button" data-filter=".category-comedy">Comedy</button>
                                            <button class="button" data-filter=".category-detective">Detective</button>
                                            <button class="button" data-filter=".category-drama">Drama</button>
                                            <button class="button" data-filter=".category-historical-film">Historical Film</button>
                                            <button class="button" data-filter=".category-melodrama">Melodrama</button>
                                        </div>
                                    </div> -->

                                    <div class="load-wrap row isotope">
                                        <div class="grid-sizer col-1"></div>
                                        
                                        <?php
                                  if(isset($_GET["upto"]))
                        $sel="SELECT * FROM `latest_updates`  where year='".$_GET['title']."' LIMIT ".$_GET["upto"];
                    
                    else if(isset($_GET["from"]) && isset($_GET["total"]))
                            $sel="SELECT * FROM `latest_updates` where year='".$_GET['title']."' LIMIT ".$_GET["from"].", ".$_GET["total"];
                    else 
            $sel = "SELECT * FROM `latest_updates` where year='".$_GET['title']."'";
            $run=mysqli_query($conn,$sel);
            while($result=mysqli_fetch_assoc($run)){
            ?>


                                        <article class=" category-action-movie  col-12 col-sm-6 col-md-4">
                                            <div class="portfolio-item-grid wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft post-357 fw-portfolio type-fw-portfolio status-publish has-post-thumbnail hentry fw-portfolio-category-action-movie">
                                                <div class="img-block">
                                                    <div style="background-image: url('ejnff/latest_updates/<?php echo $result['image'];?>')"></div>
                                                </div>
                                                <div class="content">
                                                    <!-- <div class="num">01</div> -->
                                                    <!--<h5 class="h"><?php //echo $result['title'];?></h5>-->
                                                    <!-- <div class="cat">Action movie</div> -->
                                                </div>
                                                <a target="_blank" href="ejnff/latest_updates/<?php echo $result['image'];?>"></a>
                                            </div>
                                        </article>

                                        <?php  }?>

                                      
                                    </div>
                                    <!-- <div class="loadmore-button-block">
                                        <a class="loadmore-button new" href="#" data-array="[{&quot;id&quot;:378,&quot;cat&quot;:[&quot;action-movie&quot;]},{&quot;id&quot;:377,&quot;cat&quot;:[&quot;drama&quot;]},{&quot;id&quot;:382,&quot;cat&quot;:[&quot;historical-film&quot;]},{&quot;id&quot;:381,&quot;cat&quot;:[&quot;detective&quot;]},{&quot;id&quot;:380,&quot;cat&quot;:[&quot;comedy&quot;]},{&quot;id&quot;:379,&quot;cat&quot;:[&quot;comedy&quot;]},{&quot;id&quot;:390,&quot;cat&quot;:[&quot;comedy&quot;]},{&quot;id&quot;:383,&quot;cat&quot;:[&quot;detective&quot;]},{&quot;id&quot;:389,&quot;cat&quot;:[&quot;melodrama&quot;]},{&quot;id&quot;:388,&quot;cat&quot;:[&quot;detective&quot;]},{&quot;id&quot;:387,&quot;cat&quot;:[&quot;comedy&quot;]},{&quot;id&quot;:386,&quot;cat&quot;:[&quot;drama&quot;]},{&quot;id&quot;:385,&quot;cat&quot;:[&quot;melodrama&quot;]},{&quot;id&quot;:384,&quot;cat&quot;:[&quot;comedy&quot;]},{&quot;id&quot;:397,&quot;cat&quot;:[&quot;drama&quot;]},{&quot;id&quot;:398,&quot;cat&quot;:[&quot;comedy&quot;]},{&quot;id&quot;:399,&quot;cat&quot;:[&quot;detective&quot;]},{&quot;id&quot;:400,&quot;cat&quot;:[&quot;historical-film&quot;]},{&quot;id&quot;:401,&quot;cat&quot;:[&quot;detective&quot;]},{&quot;id&quot;:402,&quot;cat&quot;:[&quot;drama&quot;]},{&quot;id&quot;:396,&quot;cat&quot;:[&quot;detective&quot;]},{&quot;id&quot;:395,&quot;cat&quot;:[&quot;melodrama&quot;]},{&quot;id&quot;:394,&quot;cat&quot;:[&quot;comedy&quot;]},{&quot;id&quot;:391,&quot;cat&quot;:[&quot;detective&quot;]},{&quot;id&quot;:393,&quot;cat&quot;:[&quot;drama&quot;]},{&quot;id&quot;:392,&quot;cat&quot;:[&quot;detective&quot;]},{&quot;id&quot;:403,&quot;cat&quot;:[&quot;detective&quot;]},{&quot;id&quot;:404,&quot;cat&quot;:[&quot;comedy&quot;]},{&quot;id&quot;:405,&quot;cat&quot;:[&quot;historical-film&quot;]},{&quot;id&quot;:406,&quot;cat&quot;:[&quot;detective&quot;]},{&quot;id&quot;:407,&quot;cat&quot;:[&quot;historical-film&quot;]}] "
                                            data-action="portfolio" data-count="9" data-atts="{&quot;uniqid&quot;:&quot;5cdd277e7ae77&quot;,&quot;count_items&quot;:&quot;9&quot;,&quot;type&quot;:&quot;grid&quot;,&quot;grid_style&quot;:&quot;style1&quot;,&quot;carousel_style&quot;:&quot;style1&quot;,&quot;sub_heading&quot;:&quot;chapter&quot;,&quot;sub_heading2&quot;:&quot;chapter&quot;,&quot;heading&quot;:&quot;&quot;,&quot;button_label&quot;:&quot;watch full portfolio&quot;,&quot;cols&quot;:&quot; col-12 col-sm-6 col-md-4&quot;,&quot;carousel_cols&quot;:&quot;xs:1,sm:2,md:3,lg:4,&quot;,&quot;gap&quot;:&quot;on&quot;,&quot;filter_buttons&quot;:&quot;on&quot;,&quot;filter_buttons_align&quot;:&quot;tal&quot;,&quot;navigation&quot;:&quot;load_more&quot;,&quot;popup_mode&quot;:&quot;on&quot;,&quot;thumb_size&quot;:&quot;large&quot;,&quot;css_animation&quot;:&quot;fadeInLeft&quot;,&quot;slider_loop&quot;:&quot;on&quot;,&quot;slider_autoplay&quot;:&quot;on&quot;,&quot;slider_autoplay_timeout&quot;:&quot;5000&quot;,&quot;slider_arrows&quot;:&quot;on&quot;,&quot;slider_counter&quot;:&quot;on&quot;,&quot;orderby&quot;:&quot;post__in&quot;,&quot;order&quot;:&quot;ASC&quot;,&quot;source&quot;:&quot;&quot;,&quot;items&quot;:&quot;&quot;,&quot;categories&quot;:&quot;&quot;,&quot;css&quot;:&quot;&quot;}"><span>load more</span></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
        
      
    

    
    <?php include "./include/footer.php"?>