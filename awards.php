<?php include "./include/header.php";
include "./ejnff/db.php";
?>

        <div class="header-space"></div>
        
<div style="margin-top:90px;"> <img src="./images/awards.jpg" alt=""> </div>
        <main class="main-container">
            <div class="container">

                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-5cdd2c8fcca9e vc_row-no-padding">
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_row-61d426c991425">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="portfolio-carousel-style3 swiper-container portfolio-5cdd277e7ae77  wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft popup-gallery">
                                    <div class="prev base-icon-back" data-magic-cursor="link-small"></div>
                                    <div class="next base-icon-next-1" data-magic-cursor="link-small"></div>
                                    <div class="swiper-wrapper ">
                                      
                                    <?php 
                             

                    $query=mysqli_query($conn,"SELECT * FROM `awards`");
                    while($row = mysqli_fetch_assoc($query)){
                    ?>
                                    
                                    <div class="swiper-slide category-action-movie popup-item post-357 fw-portfolio type-fw-portfolio status-publish has-post-thumbnail hentry fw-portfolio-category-action-movie">
                                            <div class="img">
                                                <a href="#" style='background-image: url("./ejnff/latest_updates/<?php echo $row['files'];?>")' data-type="video" data-size="1920x1080" data-video='<div class="wrapper"><div class="video-wrapper"><iframe class="pswp__video" width="1920" height="1080" src="https://youtube.com/embed/1jWCXJfxHQM?rel=0&amp;" frameborder="0" allowfullscreen=""></iframe></div></div>'
                                                    data-magic-cursor="link-w-text" data-magic-cursor-text="Play" data-id="1"></a>
                                            </div>
                                            <div class="name">JNFF AWARDS AS BEST </div>
                                            <div class="bottom">
                                                <h1 class="h"><?php echo $row['title'];?></h1>
                                                <!-- <a class="button-style1 permalink" href="../../../project/the-bridge/index.html"><span>watch full portfolio</span></a> -->
                                            </div>
                                        </div>

<?php }?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>

            </div>
        </main>


        <?php 
        include "./include/footer.php";
        ?>


