 <?php
include "../ejnff/db.php";
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