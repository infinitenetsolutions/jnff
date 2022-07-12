<?php include "./include/header.php";
include "./ejnff/db.php";
?>


<style>
    .event-item {
        width: 50%;
        float: left;
    }

    .event-item .title img {
        height: 200px;
    }

    .event-item .title {
        width: 200px;
    }

    .event-item {
        width: 25%;
    }

    .event-item .title a {
        height: 65px;
    }
</style>

<div class="header-space"></div>
<div style="margin-top:90px;"> <img src="./images/about.jpg" alt="" style="width:100%;"> </div>
<main class="main-container">
    <div class="container">
    
        <div class="vc_row wpb_row vc_row-fluid vc_custom_1558421890500 vc_row-5cc2de9e1c856">
            <div class="wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft wpb_column vc_column_container vc_col-sm-6 vc_row-5ce2704f46cd9">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="heading-block heading-5cc14023875a0 tal h-h2 with-dots mode-overlay">
                            <h2 class="h">Years of<br /> successfull
                                <br />
                                <span>experience</span>
                            </h2>
                        </div>
                        <div class="number-block number-block-5cc140ad9607c"><span>3</span></div>
                    </div>
                </div>
            </div>
            <div class="wpb_animate_when_almost_visible wpb_fadeInRight fadeInRight wpb_column vc_column_container vc_col-sm-6 vc_row-5ce2705794257">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="heading-block heading-5cc140ca2fef5 tal h-h5 type-accent">
                            <h5 class="h">About us</h5>
                        </div>

                        <div class="wpb_text_column wpb_content_element  text-t1">
                            <div class="wpb_wrapper">
                                <?php

                                $about = mysqli_query($conn, "SELECT * FROM `about_us` WHERE 1");
                                $about1 = mysqli_fetch_assoc($about);
                                ?>

                                <p style="text-align: justify;"><?php echo $about1['about_us']; ?></p>

                                <!-- <div class="button"><a class="button-style1" href="about-us.php" target="_self" data-magic-cursor="link-small"><span>Read More</span></a></div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vc_row-full-width vc_clearfix"></div>
        <!--<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1557731499313 vc_row-5cd9186f054c6 vc_row-has-fill">
            <div class="bg-overlay">
                <div class="color"></div>
            </div>

            <div class="wpb_column vc_column_container vc_col-sm-12 vc_row-5cd9192671473">
                <div class="vc_column-inner vc_custom_1557731626256">
                    <div class="wpb_wrapper">
                        <div class="portfolio-carousel-style2 portfolio-5cd918d6add2f vc_custom_1557731927738 popup-gallery">
                            <div class="content">
                                <div class="heading-block">
                                    <h3 class="h">Our Patron Members</h3>
                                </div>
                                <div class="nav">
                                    <div class="prev base-icon-back" data-magic-cursor="link-small"></div>
                                    <div class="next base-icon-next-1" data-magic-cursor="link-small"></div>
                                </div>
                            </div>
                            <div class="slider-block swiper-container">
                                <div class="swiper-wrapper">-->

                                    <?php
                                   // $patron1 = mysqli_query($conn, "SELECT * FROM `event_management`");
                                   // while ($patron11 = mysqli_fetch_assoc($patron1)) {
                                    ?>

                                        <!--<article class=" category-action-movie popup-item swiper-slide">
                                            <div class="portfolio-item post-357 fw-portfolio type-fw-portfolio status-publish has-post-thumbnail hentry fw-portfolio-category-action-movie">
                                                <div class="img-block">
                                                    <div class="img" style='background-image: url("./ejnff/event_management/<?php echo $patron11['image']; ?>")'></div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="h"><?php// echo $patron11['title']; ?></h5>
                                                    <div class="meta"><?php// echo $patron11['description']; ?></div>
                                                </div>
                                                <a href="#" data-type="video" data-size="1920x1080" data-video='<div class="wrapper"><div class="video-wrapper"><iframe class="pswp__video" width="1920" height="1080" src="https://youtube.com/embed/1jWCXJfxHQM?rel=0&amp;" frameborder="0" allowfullscreen=""></iframe></div></div>' data-magic-cursor="link-w-text" data-magic-cursor-text="Play" data-id="1"></a>
                                            </div>
                                        </article>-->
                                    <?php //} ?>



                                <!--</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

        <div class="vc_row-full-width vc_clearfix"></div>


      
    </div>


    <div class="vc_row-full-width vc_clearfix"></div>
    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1556615466699 vc_row-5cc7ee7b4fec0">
        <div class="bg-overlay">
            <div class="text"></div>
        </div>

    
    </div>




    <div class="vc_row-full-width vc_clearfix"></div>
   
</main>





<script id='pt-scripts-js-after'>
    jQuery(document).ready(function(jQuery) {
        var $area_5cc7db9895991 = jQuery('.banner-area-5cc7db9895991');
        let event = 'pause';
        if (!$area_5cc7db9895991.find('.bg-overlay .video').hasClass('disable-on-scroll')) {
            event = 'play'
        }
        control_video($area_5cc7db9895991.find('.bg-overlay .video'), event)
    });
    jQuery(document).ready(function(jQuery) {
        var $portfolio_carousel = jQuery('.portfolio-5cc7e07ad0450'),
            portfolio_total = $portfolio_carousel.find('.swiper-slide').length,
            $portfolio_carousel_swiper = new Swiper($portfolio_carousel.find('.swiper-container'), {
                loop: true,
                spaceBetween: 30,
                slidesPerView: 1,
                autoplay: {
                    delay: 5000,
                },
                navigation: {
                    nextEl: $portfolio_carousel.find('.next'),
                    prevEl: $portfolio_carousel.find('.prev'),
                },
                breakpointsInverse: true,
                breakpoints: {
                    200: {
                        slidesPerView: 1
                    },
                    576: {
                        slidesPerView: 2
                    },
                    768: {
                        slidesPerView: 3
                    },
                    992: {
                        slidesPerView: 4
                    },
                    1200: {
                        slidesPerView: 5
                    },
                }
            })
    });
    jQuery(document).ready(function(jQuery) {
        var $event_nav = jQuery('.event-tabs-5cc7ecbc00d7e .event-nav'),
            $event_body = jQuery('.event-tabs-5cc7ecbc00d7e .event-body');
        var $event_nav_swiper = new Swiper($event_nav.find('.swiper-container'), {
            spaceBetween: 30,
            navigation: {
                nextEl: $event_nav.find('.next'),
                prevEl: $event_nav.find('.prev'),
            },
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            breakpointsInverse: true,
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                576: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 3
                },
            }
        });
        var $event_body_swiper = new Swiper($event_body, {
            slidesPerView: 1,
            spaceBetween: 30,
            thumbs: {
                swiper: $event_nav_swiper
            }
        })
    });
</script>





























<?php include "./include/footer.php" ?>