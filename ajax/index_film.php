  <div class="portfolio-carousel portfolio-5cc2dfc124299 popup-gallery">                          
                            <div class="content">
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
                            </div>
                            <div class="slider-block swiper-container">
                                <div class="swiper-wrapper" >
<?php
include "../ejnff/db.php";
                                    $film1 = mysqli_query($conn, "select * from film_album");
                                    while ($film11 = mysqli_fetch_assoc($film1)) {
                                    ?>


                                        <article class=" category-action-movie popup-item swiper-slide" data-permalink="../ejnff/film_album/<?php echo $film11['film_album']; ?>" data-desc="<?php echo $film11['title'] ?>">
                                            <div class="portfolio-item-grid post-357 fw-portfolio type-fw-portfolio status-publish has-post-thumbnail hentry fw-portfolio-category-action-movie">
                                                <div class="img-block">
                                                    <div style='background-image: url("../ejnff/film_album/<?php echo $film11['film_album']; ?>")'></div>
                                                </div>
                                                <div class="content">
                                                    <!-- <div class="num">01</div> -->
                                                    <h5 class="h" style="background: #12121269;"><?php echo $film11['title'] ?></h5>
                                                    <div class="cat"><?php echo $film11['name'] ?></div>
                                                </div>
                                                <a href="#" data-type="video" data-size="1920x1080" data-video='<div class="wrapper"><div class="video-wrapper">
                                                <iframe class="pswp__video" width="1920" height="1080" src="../ejnff/film_album/<?php echo $film11['film_album']; ?>" frameborder="0" allowfullscreen=""></iframe>
                                            </div></div>' data-magic-cursor="link-w-text" data-magic-cursor-text="Play" data-id="1"></a>
                                            </div>
                                        </article>

                                    <?php } ?>

                                  


                                </div>
                            </div>                          
                        </div>