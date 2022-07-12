<?php include "./include/header.php";
include "./ejnff/db.php";
?>

<style>
    @media(max-width:576px) {
        .swiper-wrapper {
            height: 170px !important;
        }

        .banner-style2 .bg-overlay .image {
            background-size: contain !important;
        }
    }


    .countdown-container {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        color: white;
        /* background: linear-gradient(to top, #1a1f3f 0, #b21e8e 100%); */
        background-image: linear-gradient(315deg, #ef0000 0%, #4e063a 50%, #ef0000 100%);
    }

    .big-text {
        font-weight: bolder;
        font-size: 3rem;
        line-height: 1;
        margin: 1rem 2rem;
        border-radius: 5px;
        /* background-color: rgba(107, 105, 105, 0.459); */
    }

    .countdown-el {
        text-align: center;
        margin: 3px 20px;
        /* background: rgb(33 39 57 / 70%); */
        background: rgb(145 4 34);
    }

    .countdown-el span {
        font-size: 1.2rem;
    }

    .counter-text {
        font-size: 20px;
        text-align: center;
    }


    .vc_custom_1558421890500 {
        padding-top: 10px !important;
        padding-bottom: 0px !important;
    }
</style>

<div class="header-space"></div>
<main class="main-container" style="margin-top:80px;">
    <div class="container">

        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-5cc2c9dc85872 vc_row-no-padding">
            <div class="wpb_column vc_column_container vc_col-sm-12 vc_row-61d426a93175e">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <section class="banner-area banner-area-5cc2c9e92cca3 banner-style2 bsl-bottom-left with-nav-buttons-with-thumb swiper-container">
                            <div class="pagination"></div>
                            <div class="nav-buttons-with-thumb">
                                <div class="prev" data-magic-cursor="link">
                                    <div></div><i class="essential-compilation-play-button"></i>
                                </div>
                                <div class="next" data-magic-cursor="link">
                                    <div></div><i class="essential-compilation-play-button"></i>
                                </div>
                            </div>
                            <div class="mouse-button on-right" data-magic-cursor="link-small">
                                <span>Scroll Down</span>
                            </div>
                            <div class="bottom-social-links">
                                <div class="container">
                                    <div class="social-links"><a href="#" target="_self"><i class="fab fa-facebook-square"></i></a><a href="#" target="_self"><i class="fab fa-twitter-square"></i></a><a href="#" target="_self"><i class="fab fa-instagram"></i></a></div>
                                </div>
                            </div>
                            <div class="banner-slider swiper-wrapper full-height" style="">

                                <?php
                                $slider1 = mysqli_query($conn, "SELECT * FROM slider");
                                while ($slider11 = mysqli_fetch_array($slider1)) {

                                ?>
                                    <div class="swiper-slide">
                                        <div class="banner-item banner-item-5cc2c9f241de7 tal">

                                            <div class="bg-overlay">
                                                <div class="image" style='background-image: url("ejnff/slider/<?php echo $slider11['image']; ?>")'></div>
                                                <div class="clippy-image container">
                                                    <div>
                                                        <div style='background-image: url("ejnff/slider/<?php echo $slider11['image']; ?>");'></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="container">
                                                <div class="row full-height align-items-center" style="">
                                                    <div class="col">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php } ?>




                            </div>
                        </section>
                        <!-- counter -->
                        <h1 class="counter-text">Event Count</h1>

                        <div class="countdown-container">
                            <div class="countdown-el days-c">
                                <p class="big-text" id="days">0</p>
                                <span>Days</span>
                            </div>
                            <div class="countdown-el hour-c">
                                <p class="big-text" id="hours">0</p>
                                <span>Hours</span>
                            </div>
                            <div class="countdown-el mins-c">
                                <p class="big-text" id="mins">0</p>
                                <span>Mins</span>
                            </div>
                            <div class="countdown-el seconds-c">
                                <p class="big-text" id="seconds">0</p>
                                <span>Seconds</span>
                            </div>
                        </div>
                        <!-- //counter -->
                    </div>
                </div>
            </div>
        </div>




        <div class="vc_row-full-width vc_clearfix"></div>
        <div class="vc_row wpb_row vc_row-fluid vc_custom_1558421890500 vc_row-5cc2de9e1c856">
            <div class="wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft wpb_column vc_column_container vc_col-sm-6 vc_row-5ce2704f46cd9">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="heading-block heading-5cc14023875a0 tal h-h2 with-dots mode-overlay experiences">
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

                                <p><?php echo $about1['about_us']; ?></p>

                                <div class="button"><a class="button-style1" href="about-us.php" target="_self" data-magic-cursor="link-small"><span>Read More</span></a></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--video management check in local-->




        <div class="vc_row wpb_row vc_row-fluid vc_custom_1556263237268 vc_row-5cc2b13f34c24">
            <div class="wpb_column vc_column_container vc_col-sm-12 vc_row-61d4172a47aef">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="heading-block heading-5cc2b0fed3e3e tal h-h2 with-dots mode-overlay vc_custom_1556263269995">
                            <h2 class="h">Our <span>Patrons</span></h2>
                        </div>
                        <div class="team-block team-carousel-5cc2afd8f5435">
                            <div class="prev base-icon-back" data-magic-cursor="link-small"></div>
                            <div class="next base-icon-next-1" data-magic-cursor="link-small"></div>
                            <div class="swiper-container" data-magic-cursor="link-w-text" data-magic-cursor-text="Drag">
                                <div class="swiper-wrapper">



                                    <?php

                                    $patron1 = mysqli_query($conn, "SELECT * FROM `event_management`");
                                    while ($patron11 = mysqli_fetch_assoc($patron1)) {
                                    ?>

                                        <div class="team-item swiper-slide team-item-5cc2af2243caf">
                                            <div class="avatar">

                                                <div class="img" style='background-size: cover!important;background: url("../ejnff/event_management/<?php echo $patron11['image']; ?>");'>

                                                </div>
                                                <!-- <img src="<?php //echo $patron11['image'];
                                                                ?>" alt=""> -->
                                                <!--<div class="social-links">
<a href="#" target="_self"><i class="fab fa-facebook-f"></i></a>
<a href="#" target="_self"><i class="fab fa-instagram"></i></a>
<a href="#" target="_self"><i class="fab fa-twitter"></i></a></div>-->
                                            </div>
                                            <div class="bottom">
                                                <h5 class="name"><?php echo $patron11['title']; ?></h5>
                                                <div class="post"><?php echo $patron11['description']; ?></div>
                                            </div>
                                        </div>
                                    <?php } ?>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <div class="vc_row wpb_row vc_row-fluid vc_custom_1558422048062 vc_row-5cc2e28903d6a">
            <div class="wpb_column vc_column_container vc_col-sm-12 vc_row-61d426a935977">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="portfolio-carousel portfolio-5cc2dfc124299 popup-gallery">
                            <div class="content activity">
                                <div class="heading-block with-dots">
                                    <h2 class="h">Film <br />
                                        <span>Activity</span>
                                    </h2>
                                </div>
                                <div class="nav">
                                    <div class="prev base-icon-back" data-magic-cursor="link-small"></div>
                                    <div class="counter"></div>
                                    <div class="next base-icon-next-1" data-magic-cursor="link-small"></div>
                                </div>
                                <div class="description"></div>
                                <!-- <a class="button-style1" href="#"><span>watch full portfolio</span></a> -->
                            </div>
                            <div class="slider-block swiper-container activity-swiper">
                                <div class="swiper-wrapper">


                                    <?php
                                    $film1 = mysqli_query($conn, "select * from film_album");
                                    while ($film11 = mysqli_fetch_assoc($film1)) {
                                    ?>


                                        <article class=" category-action-movie popup-item swiper-slide" data-permalink="./ejnff/film_album/<?php echo $film11['film_album']; ?>" data-desc="<?php echo $film11['title'] ?>">
                                            <div class="portfolio-item-grid post-357 fw-portfolio type-fw-portfolio status-publish has-post-thumbnail hentry fw-portfolio-category-action-movie">
                                                <div class="img-block">
                                                    <div style='background-image: url("./ejnff/film_album/<?php echo $film11['film_album']; ?>")'></div>
                                                </div>
                                                <div class="content">
                                                    <!-- <div class="num">01</div> -->
                                                    <h5 class="h" style="background: #12121269;"><?php echo $film11['title'] ?></h5>
                                                    <div class="cat"><?php echo $film11['name'] ?></div>
                                                </div>
                                                <!--<a href="#" data-type="video" data-size="1920x1080" data-video='<div class="wrapper"><div class="video-wrapper">
                                                <iframe class="pswp__video" width="1920" height="1080" src="./ejnff/film_album/<?php echo $film11['film_album']; ?>" frameborder="0" allowfullscreen=""></iframe>
                                            </div></div>' data-magic-cursor="link-w-text" data-magic-cursor-text="Play" data-id="1"></a>-->
                                            </div>
                                        </article>

                                    <?php } ?>


                                </div>
                            </div>
                        </div>
                        <div class="portfolio-carousel-full-with"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vc_row wpb_row vc_row-fluid vc_custom_1558422072532 vc_row-5cc2ea160c733">
            <div class="wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft wpb_column vc_column_container vc_col-sm-12 vc_row-5ce27066a327b">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="heading-block heading-5cc2e3171ed13 tal h-h2 with-dots vc_custom_1556277774696 highlight">
                            <h2 class="h">Our Key <span>Highlights</span></h2>
                        </div>
                        <div class="icon-box-block icon-box-block-5cc2e5818a5ba row">
                            <div class=" col-12 col-sm-6 col-md-4">
                                <div class="icon-box icon-box-style1">
                                    <i class="cinema-elements-stage"></i>
                                    <div class="content">
                                        <h5 class="h">Theatre Action Shooting</h5>
                                        <!--<div class="desc">Praesent vitae lacinia lacus, rutrum pellentesque dolor.</div>-->
                                    </div>
                                </div>
                            </div>
                            <div class=" col-12 col-sm-6 col-md-4">
                                <div class="icon-box icon-box-style1">
                                    <i class="cinema-elements-video-camera"></i>
                                    <div class="content">
                                        <h5 class="h">Best Equipment</h5>
                                        <!--<div class="desc">Praesent vitae lacinia lacus, rutrum pellentesque dolor.</div>-->
                                    </div>
                                </div>
                            </div>
                            <div class=" col-12 col-sm-6 col-md-4">
                                <div class="icon-box icon-box-style1">
                                    <i class="cinema-elements-award"></i>
                                    <div class="content">
                                        <h5 class="h">Award Winning</h5>
                                        <!--<div class="desc">Praesent vitae lacinia lacus, rutrum pellentesque dolor.</div>-->
                                    </div>
                                </div>
                            </div>
                            <div class=" col-12 col-sm-6 col-md-4">
                                <div class="icon-box icon-box-style1">
                                    <i class="cinema-elements-popcorn"></i>
                                    <div class="content">
                                        <h5 class="h">Fun Entertainment</h5>
                                        <!--<div class="desc">Praesent vitae lacinia lacus, rutrum pellentesque dolor.</div>-->
                                    </div>
                                </div>
                            </div>
                            <div class=" col-12 col-sm-6 col-md-4">
                                <div class="icon-box icon-box-style1">
                                    <i class="cinema-elements-masks"></i>
                                    <div class="content">
                                        <h5 class="h">Full Range of Emotions</h5>
                                        <!--<div class="desc">Praesent vitae lacinia lacus, rutrum pellentesque dolor.</div>-->
                                    </div>
                                </div>
                            </div>
                            <div class=" col-12 col-sm-6 col-md-4">
                                <div class="icon-box icon-box-style1">
                                    <i class="cinema-elements-quill"></i>
                                    <div class="content">
                                        <h5 class="h">Talented Scripts</h5>
                                        <!--<div class="desc">Praesent vitae lacinia lacus, rutrum pellentesque dolor.</div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1558422164175 vc_row-5cc301069b8ae vc_row-no-padding" style="padding-bottom:0px;">
            <div class="wpb_column vc_column_container vc_col-sm-12 vc_row-61d426a93bf1f">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="video-block video-block-5cc2f25916472 fix-height light-color" style="height: 450px;">

                            <div class="bg-overlay">
                                <div class="image" data-parallax="true" data-image-src="./ejnff/slider/slider3.jpg" data-position-y="center" data-speed="0.2"></div>
                                <div class="color"></div>
                            </div>

                            <!-- <div class="content">
                                <a class="play-button single-popup-item" href="#" data-type="video" data-size="960x640" data-video='<div class="wrapper"><div class="video-wrapper">
                                   
                                    </div></div>' data-magic-cursor="link-small">
                                    <svg>
                                        <use xlink:href="#dotted-circle"></use>
                                    </svg>
                                    <span><i class="essential-compilation-play-button"></i></span>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="vc_row-full-width vc_clearfix"></div>
        <div class="vc_row wpb_row vc_row-fluid vc_custom_1556268827326 vc_row-5cc2c71703dd1">
            <div class="wpb_column vc_column_container vc_col-sm-12 vc_row-61d4172a49586">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">

                        <div class="heading-block heading-5cc2e3171ed13 tal h-h2 with-dots vc_custom_1556277774696">
                            <h2 class="h">Our <span>Sponsors</span></h2>
                        </div>


                        <div class="brand-block swiper-container brand-block-5cc2c456b9601" data-magic-cursor="link-w-text" data-magic-cursor-text="Drag">
                            <div class="swiper-wrapper">

                                <?php
                                $sponsor1 = mysqli_query($conn, "SELECT * FROM sponsors_association");
                                while ($sponsor11 = mysqli_fetch_assoc($sponsor1)) {
                                ?>
                                    <div class="brand-item swiper-slide brand-item-5cc2c461ac740">
                                        <div class="content">
                                            <a href="#" target="_self">
                                                <img width="160" height="79" src="ejnff/sponsers_association/<?php echo $sponsor11['sponsers_association']; ?>" class="attachment-full size-full" alt="" loading="lazy" />
                                                <img width="160" height="79" src="ejnff/sponsers_association/<?php echo $sponsor11['sponsers_association']; ?>" alt="" loading="lazy" /> </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>




<script>
    const daysEl = document.getElementById("days");
    const hoursEl = document.getElementById("hours");
    const minsEl = document.getElementById("mins");
    const secondsEl = document.getElementById("seconds");

    const Brithdays = "21 July 2022";

    function countdown() {
        const BrithdaysDate = new Date(Brithdays);
        const currentDate = new Date();

        const totalSeconds = (BrithdaysDate - currentDate) / 1000;

        const days = Math.floor(totalSeconds / 3600 / 24);
        const hours = Math.floor(totalSeconds / 3600) % 24;
        const mins = Math.floor(totalSeconds / 60) % 60;
        const seconds = Math.floor(totalSeconds) % 60;

        daysEl.innerHTML = days;
        hoursEl.innerHTML = formatTime(hours);
        minsEl.innerHTML = formatTime(mins);
        secondsEl.innerHTML = formatTime(seconds);
    }

    function formatTime(time) {
        return time < 10 ? "0" + time : time;
    }
    countdown();
    setInterval(countdown, 1000);
</script>




<?php include "./include/footer.php" ?>
<script>
    $(document).ready(function() {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            // document.getElementById("patron").innerHTML = this.responseText;
        }
        xhttp.open("GET", "ajaxpatron.php", true);
        xhttp.send();
    });
</script>