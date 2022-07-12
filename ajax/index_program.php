

 <?php
include "../ejnff/db.php";
                          
                                    $sql2 = mysqli_query($conn, "SELECT * FROM video_management ");
                                    while ($row2 = mysqli_fetch_array($sql2)) {
                                    ?>

                                        <div class="ps-item swiper-slide category-action-movie popup-item post-357 fw-portfolio type-fw-portfolio status-publish has-post-thumbnail hentry fw-portfolio-category-action-movie">
                                            <h5 class="h title-with-dots"><span class="num">01</span><?php echo $row2['title']; ?></h5>
                                            <div class="img-block" style="text-align:center;">
                                                <?php echo $row2['video_url']; ?>
                                                <!-- <div class="img" style="background-image: url(assets/uploads/2019/04/img1-769x1024.jpg);"></div> -->
                                                <div class="play-button on-center">
                                                    <svg>
                                                        <use xlink:href="#dotted-circle"></use>
                                                    </svg><span><i class="essential-compilation-play-button"></i></span>
                                                </div>
                                                <a href="#" data-type="video" data-size="1920x1080" data-video='<div class="wrapper"><div class="video-wrapper">
                                            <?php echo $row2['video_url']; ?>
                                                </div></div>' data-magic-cursor="link-w-text" data-magic-cursor-text="Play" data-id="1"></a>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>