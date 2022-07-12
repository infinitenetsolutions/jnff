<?php include "./include/header.php";
include "./ejnff/db.php"; 
?>

<style>
    .input-row label span{
        color:#dc493a;
    }

    h5{
        font-size: 15px;
    }
</style>

<?php
if(isset($_POST['submit'])){
  
 
$name = $_POST['name3'];
 $email = $_POST['email3'];
  $subject = $_POST['subject3'];
  $message = $_POST['comment3'];
  
$ins_contact = mysqli_query($conn, "INSERT INTO `contact_us`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')");  

if (isset($_REQUEST['submit'])) {
    if (
        $_REQUEST['name3'] != '' && $_REQUEST['name3'] != NULL
        && $_REQUEST['email3'] != '' && $_REQUEST['email3'] != NULL
        && $_REQUEST['subject3'] != '' && $_REQUEST['subject3'] != NULL
        // && $_REQUEST['reason'] != '' && $_REQUEST['reason'] != NULL
        && $_REQUEST['comment3'] != '' && $_REQUEST['comment3'] != NULL
        //            && $_REQUEST['program'] != '' && $_REQUEST['program'] != NULL && isset($_REQUEST['send'])
    ) {
        //send email
        $email = $_REQUEST['email3'];
        $subject = 'Inquiry from ' . $_REQUEST['name3']
            //                . '| Regarding ' . $_REQUEST['subject']
        ;
        $message = "Name : " . $_REQUEST['name3']
            . "\r\n Email : " . $_REQUEST['email3']
            . "\r\n Subject : " . $_REQUEST['subject3']
            . ",\r\n Message : \r\n" . $_REQUEST['comment3'];
        $message = wordwrap($message, 70, "\r\n");
        //mail("jharkhandnationalfilmfestival@gmail.com", $subject, $message);
      mail("monalishamishra551991@gmail.com", $subject, $message);
?>
        <script>
            alert('Mail Sent. Thank you for contacting us!');
            document.getElementById("contact").reset();
            document.getElementById('name') = "";
          	window.location.replace('contact-us.php');
        </script>
<?php
    }
}


}
?>




<div class="header-space"></div>
<main class="main-container">
    <div class="container">

        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-5cda6d888e791 vc_row-no-padding">
            <div class="wpb_column vc_column_container vc_col-sm-12 vc_row-61d426d4a0204">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <section class="banner-area banner-area-5cda6d4d42a44 banner-default">
                            <div class="banner-item tac" style="height: 380px;">

                                <div class="bg-overlay">
                                    <div class="image" data-parallax="true" data-image-src="https://promo-theme.com/mato/wp-content/uploads/2019/04/bg5.jpg" data-position-y="center" data-speed="0.8"></div>
                                    <div class="color"></div>
                                </div>

                                <div class="container">
                                    <div class="row align-items-center fixed-height" style="height: 380px;">
                                        <div class="col">
                                            <div class="heading-block tac">
                                                <div class="sub-h">feel free to</div>
                                                <h1 class="h"><span>Contact Us</span></h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div class="vc_row-full-width vc_clearfix"></div>
        <div class="vc_row wpb_row vc_row-fluid vc_row-61d426d4a0965" style="">
            <div class="wpb_column vc_column_container vc_col-sm-6 vc_row-5cda7cbd2d333">
                <div class="vc_column-inner vc_custom_1557823572261">
                    <div class="wpb_wrapper">
                        <div class="heading-block heading-5cda6da5f340f tal h-h3 vc_custom_1557823531915">
                            <div class="sub-h">LET'S TALK!</div>
                            <h3 class="">Drop Us a Line</h3>
                        </div>

                        <div class="wpb_text_column wpb_content_element  text-t1">
                            <div class="wpb_wrapper">
                                <!-- <div style="color: #7c7c7c; max-width: 465px; font-size: 14px;">Thank you to the people who shared their stories in our film. They trusted us and we’re very grateful for their trust.</div> -->

                            </div>
                        </div>
                        <div class="heading-block heading-5cda6de2570ce tal h-h5">
                            <div class="sub-h">phone</div>
                            <h5 class="h"><a href="tel:9334621159">+91 9334621159</a> <br> <a href="tel:9279455433">+91 9279455433</a><br> <a href="tel:9065376555">+91 9065376555</a> <br></h5>

                        </div>
                        <div class="heading-block heading-5cda6e0107fcd tal h-h5">
                            <div class="sub-h">e-mail</div>
                            <h5 class="h"><a href="mailto:jharkhandnationalfilmfestival@gmail.com">jharkhandnationalfilmfestival@gmail.com</a></h5>
                        </div>
                        <div class="heading-block heading-5cda6e1879a68 tal h-h5">
                            <div class="sub-h">location</div>
                            <h5 class="h"><a href="">ASMA INDIA ,Satpathy Centre ,Thana Road, Shere Punjab Chwok, Adityapur-1, Jamshedpur, Jharkhand, India – 831013</a></h5>
                        </div>
                        <div class="social-links-block social-links-5cda6e482d3b6 social-links justify-content-flex-start">
                            <a href="#" target="_self"><i class="fab fa-vimeo-square"></i></a><a href="#" target="_self"><i class="fab fa-facebook-square"></i></a><a href="#" target="_self"><i class="fab fa-instagram"></i></a>
                            <a href="#" target="_self"><i class="fab fa-twitter-square"></i></a><a href="#" target="_self"><i class="fab fa-behance-square"></i></a>
                        </div>
                    </div>
                </div>
            </div>

             <div class="wpb_column vc_column_container vc_col-sm-6 vc_row-5cda6956f238a light-scheme vc_col-has-fill">
                <div class="vc_column-inner vc_custom_1557818099189">
                    <div class="wpb_wrapper">
                        <div class="heading-block heading-5cda61eb6871f tal h-h3 vc_custom_1557818405690">
                            <div class="">LET'S TALK!</div>
                            <h3 class="">Drop Us a Line</h3>
                        </div>


                        <form method="POST">
                            <!--<div style="display: none;">
                                            <input type="hidden" name="_wpcf7" value="5">
                                            <input type="hidden" name="_wpcf7_version" value="5.4">
                                            <input type="hidden" name="_wpcf7_locale" value="en_US">
                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f5-p590-o1">
                                            <input type="hidden" name="_wpcf7_container_post" value="590">
                                            <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                        </div>-->
                            <div class="contact-form">
                                <div class="input-row">
                                    <label>Your Name <span>*</span></label><span class="wpcf7-form-control-wrap f-name">
                                        <input type="text" size="40" class="wpcf7-form-control wpcf7-text style1" placeholder="Enter Your Name" name="name3" required pattern="[a-zA-Z ]+">
                                    </span>
                                </div>
                                <div class="input-row"><label>Your E-Mail <span>*</span></label><span class="wpcf7-form-control-wrap f-email">
                                        <input type="text" size="40" class="wpcf7-form-control wpcf7-text style1" placeholder="Enter Your Email" name="email3" required pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$">
                                    </span></div>
                                <div class="input-row"><label>Your Subject <span>*</span></label><span class="wpcf7-form-control-wrap f-email">
                                        <input type="text" size="40" class="wpcf7-form-control wpcf7-text style1" placeholder="Enter Your Subject" name="subject3" required pattern="[a-zA-Z ]+">
                                    </span></div>
                                <div class="input-row"><label>Your Message <span>*</span></label><span class="wpcf7-form-control-wrap f-message">
                                        <textarea cols="40" rows="4" class="wpcf7-form-control wpcf7-textarea style1" placeholder="Enter Your Message" name="comment3" required></textarea>
                                    </span></div>
                                <button class="btn btn-primary mb-4" name="submit"  type="submit">SUBMIT</button>
                                <!--<input type="submit" value="submit" name="submit" class="button-style2" style="border: 1px solid #000;color: #000;" />-->
                            </div>
                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                        </form>

                    </div>
                </div>
            </div>

       
        <div class="vc_row-full-width vc_clearfix"></div>

    </div>
</main>

<?php include "./include/footer.php" ?>