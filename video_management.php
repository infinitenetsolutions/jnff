<?php 
include "include/header.php";
?>  
<div class="vc_row wpb_row vc_row-fluid vc_custom_1558421491662 vc_row-5cc29cf705ee8">
            <div class="wpb_column vc_column_container vc_col-sm-12 vc_row-61d4172a4299f">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="heading-block heading-5cc29ce3e41d0 tal h-h2 with-dots vc_custom_1556258101557">
                            <h2 class="h">Program <span>Videos</span></h2>
                        </div>
                        <div class="portfolio-block portfolio-5cc15397b9b3d  popup-gallery">
                            <div class="portfolio-slider-prev swiper-container" data-magic-cursor="link">
                                <i class="base-icon-back"></i>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">09</div>
                                    <div class="swiper-slide">01</div>
                                    <div class="swiper-slide">02</div>
                                    <div class="swiper-slide">03</div>
                                    <div class="swiper-slide">04</div>
                                    <div class="swiper-slide">05</div>
                                    <div class="swiper-slide">06</div>
                                    <div class="swiper-slide">07</div>
                                    <div class="swiper-slide">08</div>
                                </div>
                            </div>
                            <div class="portfolio-slider-next swiper-container" data-magic-cursor="link">
                                <i class="base-icon-next-1"></i>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">02</div>
                                    <div class="swiper-slide">03</div>
                                    <div class="swiper-slide">04</div>
                                    <div class="swiper-slide">05</div>
                                    <div class="swiper-slide">06</div>
                                    <div class="swiper-slide">07</div>
                                    <div class="swiper-slide">08</div>
                                    <div class="swiper-slide">09</div>
                                    <div class="swiper-slide">01</div>
                                </div>
                            </div>
                            <div class="portfolio-slider swiper-container">
                                <div class="swiper-wrapper">

                                    <?php
                                  include "./ejnff/db.php";
                                    $sql2 = mysqli_query($conn, "SELECT * FROM video_management ");
                                    while ($row2 = mysqli_fetch_array($sql2)) {
                                    ?>

                                        <div class="ps-item swiper-slide category-action-movie popup-item post-357 fw-portfolio type-fw-portfolio status-publish has-post-thumbnail hentry fw-portfolio-category-action-movie">
                                            <h5 class="h title-with-dots"><span class="num">01</span><?php echo $row2['title']; ?></h5>
                                            <div class="img-block" style="text-align:center;">
                                                <?php echo $row2['video_url']; ?>
                                                <!-- <div class="img" style="background-image: url(assets/uploads/2019/04/img1-769x1024.jpg);"></div> -->
                                               <!-- <div class="play-button on-center">
                                                    <svg>
                                                        <use xlink:href="#dotted-circle"></use>
                                                    </svg><span><i class="essential-compilation-play-button"></i></span>
                                                </div>-->
                                                <!--<a href="#" data-type="video" data-size="1920x1080" data-video='<div class="wrapper"><div class="video-wrapper">
                                            <?php// echo $row2['video_url']; ?>
                                                </div></div>' data-magic-cursor="link-w-text" data-magic-cursor-text="Play" data-id="1"></a>-->
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php 
include "include/footer.php";
?>  
