
<?php include "./include/header.php";
include "./ejnff/db.php";

$result = "SELECT * FROM `cover_story`";
$query = mysqli_query($conn, $result);

?>
<div style="margin-top:90px;"> <img src="./images/about jnff copy (1).jpg" alt=""> </div>
<main class="main-container" style="min-height: 217px;">
    <div class="container">

        <div class="vc_row wpb_row vc_row-fluid vc_row-624694661c517">
            <div class="wpb_column vc_column_container vc_col-sm-12 vc_row-624694661ca08">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="heading-block heading-5cdc0e9373c0d tal h-h1 vc_custom_1557925647726">
                            <h1 class="h">Cover <span>Story </span></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12 vc_row-5cdc0e9f7b92e">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="blog-block filter-block blog-5cda819fdfe7e vc_custom_1557831186487">
                            <div class=" blog-items row isotope blog-horizontal load-wrap" style="position: relative; height: 3750px;">
                                <div class="grid-sizer col-1" style="position: absolute; left: 0px; top: 0px;"></div>
                               
                                 <?php
                                  while($row = mysqli_fetch_assoc($query)){                                                                                                                 
         							   ?>
                                <article class="blog-item  col-12 category-branding" style="position: absolute; left: 0px; top: 0px;">
                                    <div class="wrap  wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft wpb_start_animation animated">
                                        <div class="a-img">
                                            <div style="background-size: auto;background-image: url('ejnff/cover_story/<?php echo $row['image']; ?>')"></div>
                                            <!--<a href="" data-magic-cursor="link-w-text" data-magic-cursor-text="View"></a>-->
                                        </div>
                                        <div class="content">
                                            
                                            <!--<h5 class="title"><a href="" data-magic-cursor="link-small">2019 Mato Film Festival Live Awards Ceremony Updates</a></h5>-->
                                            <div class="desc" style="text-align: justify!important;"><?php echo $row['description'];?></div>
                                            
                                        </div>
                                    </div>
                                </article>   
<?php } ?>
                            </div>                            
                            <div class="load-items-area"></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
</main>
<?php
include "./include/footer.php";
?>