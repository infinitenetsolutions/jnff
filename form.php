<?php
include "./include/header.php";
include "ejnff/db.php";

if (isset($_POST['submit'])) {
  if (!empty($_FILES['file']['name'])) {
    $targetfolder = "signature/";
    $file = $_FILES['signature']['name'];
    move_uploaded_file($_FILES['signature']['tmp_name'], $targetfolder . $file);
    $query = mysqli_query($conn, "INSERT INTO `registration_form`(`category`,`sub_category`, `professional_level`,  `titles`, `production_date`, `running_time`, `video_link`, `password`, `original_language`, `voice_over`, `sub_title`, `name_of_person_making_registration`, `company`, `address`, `telephone`, `email`, `website`, `director_information`, `director_website`, `director_telephone`, `director_email`, `producer_information`, `producer_website`, `producer_telephone`, `producer_email`, `presentation_in_festivals`, `awards_received`, `signature`, `name`, `date`, `transaction_no`, `actor_name1_feature`, `actress_name1_feature`, `villain_name1_feature`, `dop_name1_feature`, `editor_name1_feature`, `music_director_name1_feature`, `male_singer_name1_feature`, `female_singer_name1_feature`, `lyrics_name1_feature`, `story_writer_name1_feature`, `child_artist_name1_feature`, `supporting_actor_name1_feature`, `supporting_actress_name1_feature`, `actor_name2_short`, `actress_name2_short`, `director_name2_short`, `dop_name2_short`, `story_writer_name2_short`, `editor_name2_short`, `dop_name3_documentary`, `story_name3_documentary`, `director_name3_documentary`, `actor_name4_album`, `actress_name4_album`, `dop_name4_album`, `singer_male_name4_album`, `singer_female_name4_album`, `music_director_name4_album`, `composer_name4_album`, `lyricist_name4_album`) VALUES ('" . $_POST['category'] . "','" . $_POST['sub_category'] . "','" . $_POST['professional_level'] . "','" . $_POST['titles'] . "','" . $_POST['production_date'] . "','" . $_POST['running_time'] . "','" . $_POST['video_link'] . "','" . $_POST['password'] . "','" . $_POST['original_language'] . "','" . $_POST['voice_over'] . "','" . $_POST['sub_title'] . "','" . $_POST['name_of_person_making_registration'] . "','" . $_POST['company'] . "','" . $_POST['address'] . "','" . $_POST['telephone'] . "','" . $_POST['email'] . "','" . $_POST['website'] . "','" . $_POST['director_information'] . "','" . $_POST['director_website'] . "','" . $_POST['director_telephone'] . "','" . $_POST['director_email'] . "','" . $_POST['producer_information'] . "','" . $_POST['producer_website'] . "','" . $_POST['producer_telephone'] . "','" . $_POST['producer_email'] . "','" . $_POST['presentation_in_festivals'] . "','" . $_POST['awards_received'] . "','" . $file . "','" . $_POST['name'] . "','" . $_POST['date'] . "','" . $_POST['transaction_no'] . "','" . $_POST['actor_name1_feature'] . "','" . $_POST['actress_name1_feature'] . "','" . $_POST['villain_name1_feature'] . "','" . $_POST['dop_name1_feature'] . "','" . $_POST['editor_name1_feature'] . "','" . $_POST['music_director_name1_feature'] . "','" . $_POST['male_singer_name1_feature'] . "','" . $_POST['female_singer_name1_feature'] . "','" . $_POST['lyrics_name1_feature'] . "','" . $_POST['story_writer_name1_feature'] . "','" . $_POST['child_artist_name1_feature'] . "','" . $_POST['supporting_actor_name1_feature'] . "','" . $_POST['supporting_actress_name1_feature'] . "','" . $_POST['actor_name2_short'] . "','" . $_POST['actress_name2_short'] . "','" . $_POST['director_name2_short'] . "','" . $_POST['dop_name2_short'] . "','" . $_POST['story_writer_name2_short'] . "','" . $_POST['editor_name2_short'] . "','" . $_POST['dop_name3_documentary'] . "','" . $_POST['story_name3_documentary'] . "','" . $_POST['director_name3_documentary'] . "','" . $_POST['actor_name4_album'] . "','" . $_POST['actress_name4_album'] . "','" . $_POST['dop_name4_album'] . "','" . $_POST['singer_male_name4_album'] . "','" . $_POST['singer_female_name4_album'] . "','" . $_POST['music_director_name4_album'] . "','" . $_POST['composer_name4_album'] . "','" . $_POST['lyricist_name4_album'] . "')");
  } else {
    $query = mysqli_query($conn, "INSERT INTO `registration_form`(`category`,`sub_category`, `professional_level`,  `titles`, `production_date`, `running_time`, `video_link`, `password`, `original_language`, `voice_over`, `sub_title`, `name_of_person_making_registration`, `company`, `address`, `telephone`, `email`, `website`, `director_information`, `director_website`, `director_telephone`, `director_email`, `producer_information`, `producer_website`, `producer_telephone`, `producer_email`, `presentation_in_festivals`, `awards_received`, `signature`, `name`, `date`, `transaction_no`, `actor_name1_feature`, `actress_name1_feature`, `villain_name1_feature`, `dop_name1_feature`, `editor_name1_feature`, `music_director_name1_feature`, `male_singer_name1_feature`, `female_singer_name1_feature`, `lyrics_name1_feature`, `story_writer_name1_feature`, `child_artist_name1_feature`, `supporting_actor_name1_feature`, `supporting_actress_name1_feature`, `actor_name2_short`, `actress_name2_short`, `director_name2_short`, `dop_name2_short`, `story_writer_name2_short`, `editor_name2_short`, `dop_name3_documentary`, `story_name3_documentary`, `director_name3_documentary`, `actor_name4_album`, `actress_name4_album`, `dop_name4_album`, `singer_male_name4_album`, `singer_female_name4_album`, `music_director_name4_album`, `composer_name4_album`, `lyricist_name4_album`) VALUES ('" . $_POST['category'] . "','" . $_POST['sub_category'] . "','" . $_POST['professional_level'] . "','" . $_POST['titles'] . "','" . $_POST['production_date'] . "','" . $_POST['running_time'] . "','" . $_POST['video_link'] . "','" . $_POST['password'] . "','" . $_POST['original_language'] . "','" . $_POST['voice_over'] . "','" . $_POST['sub_title'] . "','" . $_POST['name_of_person_making_registration'] . "','" . $_POST['company'] . "','" . $_POST['address'] . "','" . $_POST['telephone'] . "','" . $_POST['email'] . "','" . $_POST['website'] . "','" . $_POST['director_information'] . "','" . $_POST['director_website'] . "','" . $_POST['director_telephone'] . "','" . $_POST['director_email'] . "','" . $_POST['producer_information'] . "','" . $_POST['producer_website'] . "','" . $_POST['producer_telephone'] . "','" . $_POST['producer_email'] . "','" . $_POST['presentation_in_festivals'] . "','" . $_POST['awards_received'] . "','" . $file . "','" . $_POST['name'] . "','" . $_POST['date'] . "','" . $_POST['transaction_no'] . "','" . $_POST['actor_name1_feature'] . "','" . $_POST['actress_name1_feature'] . "','" . $_POST['villain_name1_feature'] . "','" . $_POST['dop_name1_feature'] . "','" . $_POST['editor_name1_feature'] . "','" . $_POST['music_director_name1_feature'] . "','" . $_POST['male_singer_name1_feature'] . "','" . $_POST['female_singer_name1_feature'] . "','" . $_POST['lyrics_name1_feature'] . "','" . $_POST['story_writer_name1_feature'] . "','" . $_POST['child_artist_name1_feature'] . "','" . $_POST['supporting_actor_name1_feature'] . "','" . $_POST['supporting_actress_name1_feature'] . "','" . $_POST['actor_name2_short'] . "','" . $_POST['actress_name2_short'] . "','" . $_POST['director_name2_short'] . "','" . $_POST['dop_name2_short'] . "','" . $_POST['story_writer_name2_short'] . "','" . $_POST['editor_name2_short'] . "','" . $_POST['dop_name3_documentary'] . "','" . $_POST['story_name3_documentary'] . "','" . $_POST['director_name3_documentary'] . "','" . $_POST['actor_name4_album'] . "','" . $_POST['actress_name4_album'] . "','" . $_POST['dop_name4_album'] . "','" . $_POST['singer_male_name4_album'] . "','" . $_POST['singer_female_name4_album'] . "','" . $_POST['music_director_name4_album'] . "','" . $_POST['composer_name4_album'] . "','" . $_POST['lyricist_name4_album'] . "')");
  }

  $to = ' jharkhandnationalfilmfestival@gmail.com';
  $subject = 'New form registration mail';

  $message = 'NEW FORM HAS BEEN REGISTERED SUCCESSFULLY.THE DETAILS ARE FOLLOWING
     
      Name : ' . $_POST["name_of_person_making_registration"] . ' 
      Email: ' . $_POST["email"] . '';

  // More headers

  $headers .= "Reply-To: The Sender  jharkhandnationalfilmfestival@gmail.com\r\n";
  $headers .= "Return-Path: The Sender  jharkhandnationalfilmfestival@gmail.com\r\n";
  $headers .= "From: The Sender  jharkhandnationalfilmfestival@gmail.com\r\n";


  $headers .= "Organization: Sender Organization\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  $headers .= "X-Priority: 3\r\n";
  $headers .= "X-Mailer: PHP" . phpversion() . "\r\n";

  mail($to, $subject, $message, $headers);



  if ($query) {

    echo "<script>
alert('Registration form submitted successfully');
window.location.href='index.php';
</script>";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>JNFF JHARKHAND FILM FESTIVAL</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

  <style type="text/css">
    body {
      background-image: linear-gradient(to right bottom, rgba(1, 255, 220, 0.74), rgba(248, 251, 19, 0.8));
    }

    
    .text-light {
      text-align: center;
    }
    

    /*Choose file input button*/
    .btn-bs-file {
      position: relative;
    }

    .btn-bs-file input[type="file"] {
      position: absolute;
      top: -9999999;
      filter: alpha(opacity=0);
      opacity: 0;
      width: 0;
      height: 0;
      outline: none;
      cursor: inherit;
    }
  </style>

  <script type="text/javascript">
    $(function() {
      $("#ddlPassport").change(function() {
        if ($(this).val() == "Featurefilm") {
          $("#dvPassport").show();
        } else {
          $("#dvPassport").hide();
        }
        if ($(this).val() == "Shortfilm") {
          $("#idPassport").show();
        } else {
          $("#idPassport").hide();
        }
        if ($(this).val() == "Documentary") {
          $("#iidPassport").show();
        } else {
          $("#iidPassport").hide();
        }
        if ($(this).val() == "Album") {
          $("#iiidPassport").show();
        } else {
          $("#iiidPassport").hide();
        }
      });
    });
  </script>

</head>

<body>
<div style="margin-top:90px;"> <img src="./images/online.jpg" alt=""> </div>
  <nav>

    <!-- top nav -->
    <div class="col- bg-dark py-2 top-navbar" style="">
      <div class="row align-items-center">
        <div class="col-md-12">
          <h6 class="text-light">JNFF JHARKHAND FILM FESTIVAL <br> FILM REGISTRATION FORM <br>Also mail us - jharkhandnationalfilmfestival@gmail.com</h6>
          <!--<font color="white"><a href="images/Registration_form_2019.pdf" style=" color: white;">DOWNLOAD OFFLINE FORM</a></font>-->
          <div style="text-align:center">
<font color="white" style=""><a href="images/Registration_form_2019.pdf" style=" color: white;">DOWNLOAD OFFLINE FORM</a></font>
</div>
        </div>

        <!-- <div class="col-md-3">
                    <ul class="navbar-nav">
                      <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"><i class="fas fa-comments text-muted fa-lg"></i></a></li>
                      <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"><i class="fas fa-bell text-muted fa-lg"></i></a></li>
                      <li class="nav-item ml-md-auto"><a href="#" class="nav-link" data-toggle="modal" data-target="#sign-out"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
                    </ul>
                  </div> -->

      </div>
    </div>
    <!-- top nav end -->
  </nav>

  <section class="p-2  ">
    <div class="container">
      <div class="row  " style=" ">
        <div class="col-xl-12">
          <form method="post" enctype="multipart/form-data">
            <div class="form-row">
              <div class="form-group col-md-2">
                <label for="inputState">Choose Category</label>
                <select id="inputState" onchange="changestate(this.value)" class="form-control" name="sub_category">
                  <option disabled selected>Select Category</option>
                  <option value="Jharkhand Regional">Jharkhand Regional</option>
                  <option value="National">National</option>
                  <option value="International">International</option>
                  <option value="Jharkhand Regional Hindi" title="Director / Producer Residence Of Jharkhand">Jharkhand Regional Hindi</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputState">Sub Category</label>

                <select id="ddlPassport" class="form-control" name="category">
                  <option disabled selected>Choose Sub Category</option>
                  <option value="Featurefilm">Feature Film</option>
                  <option value="Shortfilm">Short Film</option>
                  <option value="Documentary">Documentary Film</option>
                  <option value="Album">Album</option>
                </select>
                <select id="ddlPassport1" style=" display: none; " class="form-control" name="category">
                  <option disabled selected>Choose...</option>
                  <option value="Featurefilm">Feature Film</option>
                  <option value="Shortfilm">Short Film</option>
                </select>

              </div>
              <div class="form-group col-md-2">
                <label for="inputState">Professional Level</label>
                <select id="inputState" class="form-control" name="professional_level">
                  <option disabled selected>Your Level</option>
                  <option value="professional">Professional</option>
                  <option value="Student">Student (50% Discount)</option>

                </select>
              </div>



              <div class="form-group col-md-3">
                <label for="title">Titles</label>
                <input type="text" class="form-control" id="inputZip" placeholder="Enter Title" name="titles">
              </div>
              <div class="form-group col-md-3">
                <label for="inputEmail4">Production year</label>
                <input type="number" class="form-control" id="date" placeholder="Enter Production Year" name="production_date">
              </div>
              <!-- <div class="form-group col-md-2">-->
              <!--  <label for="title">Running Time</label>-->
              <!--  <input type="text" class="form-control" id="inputZip" placeholder="Eg:- 1 hours" name="running_time">-->
              <!--</div>-->
              <!--<div class="form-group col-md-2">-->
              <!--  <label for="inputState">Running Time</label>-->
              <!--  <select id="inputState" class="form-control" name="running_time">-->
              <!--    <option selected>Choose...</option>-->
              <!--    <option>DVD</option>-->
              <!--    <option>Blue-ray</option>-->
              <!--    <option>NTSC</option>-->
              <!--    <option>PAL</option>-->
              <!--  </select>-->
              <!--</div>-->
              <div class="form-group col-md-4">
                <label for="title">Running Time</label>
                <input type="text" class="form-control" id="inputZip" placeholder="Eg:- 1 hours" name="running_time">
              </div>
              <div class="form-group col-md-4">
                <label for="inputEmail4">Video link(if available) </label>
                <input type="text" class="form-control" id="video" placeholder="if available" name="video_link" pattern="/^((ftp|http|https):\/\/)?(www.)?(?!.*(ftp|http|https|www.))[a-zA-Z0-9_-]+(\.[a-zA-Z]+)+((\/)[\w#]+)*(\/\w+\?[a-zA-Z0-9_]+=\w+(&[a-zA-Z0-9_]+=\w+)*)?$/gm;">
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
              </div>
              <div class="form-group col-md-6">
                <label for="inputAddress"> Language </label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="original_language">
              </div>
              <div class="form-group col-md-3">
                <label for="inputState">Voice Over Y/N</label>
                <select id="inputState" class="form-control" name="voice_over">
                  <option disabled selected>Choose...</option>
                  <option value="YES">YES</option>
                  <option value="NO">NO</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="inputState">Sub-titles Y/N</label>
                <select id="inputState" class="form-control" name="sub_title">
                  <option disabled selected>Choose...</option>
                  <option value="YES">YES</option>
                  <option value="NO">NO</option>
                </select>
              </div>
            </div>
            
        </div>
      </div>
    </div>
  </section>



  <section>
    <div class="container">
      <div class="row  " style=" ">
        <div class="col-xl-12">

          <div class="form-row">
            <div class="form-group col-md-7">
              <label for="title">Name of the person making the registration</label>
              <input type="text" class="form-control" id="inputZip" required="required" placeholder="Name of the person making the registration" name="name_of_person_making_registration">
            </div>
            <div class="form-group col-md-5">
              <label for="title">Company</label>
              <input type="text" class="form-control" id="inputZip" placeholder="Enter Company" required="required" name="company">
            </div>
            <div class="form-group col-md-12">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control" id="inputAddress" required="required" placeholder="Enter Address" name="address">
            </div>
            <div class="form-group col-md-6">
              <label for="title">Telephone</label>
              <input type="text" class="form-control" id="inputZip" required="required" placeholder="Enter Telephone" name="telephone">
            </div>
            <div class="form-group col-md-6">
              <label for="title">Email</label>
              <input type="text" class="form-control" id="inputZip" required="required" placeholder="Enter Email" name="email" pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$">
            </div>
            <div class="form-group col-md-12">
              <label for="inputAddress">Website(if available)</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="www.abcd.com" name="website" pattern="/^((ftp|http|https):\/\/)?(www.)?(?!.*(ftp|http|https|www.))[a-zA-Z0-9_-]+(\.[a-zA-Z]+)+((\/)[\w#]+)*(\/\w+\?[a-zA-Z0-9_]+=\w+(&[a-zA-Z0-9_]+=\w+)*)?$/gm;">
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>


  <section class="p-2  ">
    <div class="container">
      <div class="row  " style=" ">
        <div class="col-xl-12">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="title">Director information</label>
              <input type="text" class="form-control" id="inputZip" placeholder="Director information" required="required" name="director_information">
            </div>
            <div class="form-group col-md-6">
              <label for="inputAddress">Website(if available)</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="www.abcd.com" name="director_website" pattern="/^((ftp|http|https):\/\/)?(www.)?(?!.*(ftp|http|https|www.))[a-zA-Z0-9_-]+(\.[a-zA-Z]+)+((\/)[\w#]+)*(\/\w+\?[a-zA-Z0-9_]+=\w+(&[a-zA-Z0-9_]+=\w+)*)?$/gm;">
            </div>
            <div class="form-group col-md-6">
              <label for="title">Telephone</label>
              <input type="text" class="form-control" id="inputZip" placeholder="Enter Telephone" required="required" name="director_telephone">
            </div>
            <div class="form-group col-md-6">
              <label for="title">Email</label>
              <input type="text" class="form-control" id="inputZip" placeholder="Enter Email" required="required" name="director_email" pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="container">
      <div class="row  " style=" ">
        <div class="col-xl-12">

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="title">Producer information</label>
              <input type="text" class="form-control" id="inputZip" placeholder="Producer information" required="required" name="producer_information">
            </div>
            <div class="form-group col-md-6">
              <label for="inputAddress">Website(if available)</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="www.abcd.com" name="producer_website" pattern="/^((ftp|http|https):\/\/)?(www.)?(?!.*(ftp|http|https|www.))[a-zA-Z0-9_-]+(\.[a-zA-Z]+)+((\/)[\w#]+)*(\/\w+\?[a-zA-Z0-9_]+=\w+(&[a-zA-Z0-9_]+=\w+)*)?$/gm;">
            </div>
            <div class="form-group col-md-6">
              <label for="title">Telephone</label>
              <input type="text" class="form-control" id="inputZip" required="required" placeholder="Enter Telephone" name="producer_telephone">
            </div>
            <div class="form-group col-md-6">
              <label for="title">Email</label>
              <input type="email" class="form-control" id="inputZip" placeholder="Enter Email" required="required" name="producer_email" pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="p-2  ">
    <div class="container">
      <div class="row  " style=" ">
        <div class="col-xl-12">

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputAddress">Presentation in other festivals</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Presentation in other festivals" name="presentation_in_festivals">
            </div>
            <div class="form-group col-md-12">
              <label for="inputAddress">Awards received</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Awards received" name="awards_received">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="p-2">
    <div class="container">
      <div class="row  " style=" " class="p-2">
        <div class="col-xl-12">

          <div class="form-row">

            <div class="row" class="form-group row-md-12" id="dvPassport" style="display: none">
              <div class="col-sm-3" for="inputAddress">
                Actor Name<input type="text" class="form-control" id="inputAddress" placeholder="" name="actor_name1_feature">
              </div>
              <div class="col-sm-3" for="inputAddress">
                Actress Name<input type="text" class="form-control" id="inputAddress" placeholder="" name="actress_name1_feature">
              </div>
              <div class="col-sm-3" for="inputAddress">
                villain Name<input type="text" class="form-control" id="inputAddress" placeholder="" name="villain_name1_feature">
              </div>
              <div class="col-sm-3" for="inputAddress">
                DOP Name<input type="text" class="form-control" id="inputAddress" placeholder="" name="dop_name1_feature">
              </div>
              <div class="col-sm-3" for="inputAddress">
                Editor<input type="text" class="form-control" id="inputAddress" placeholder="" name="editor_name1_feature">
              </div>
              <div class="col-sm-3" for="inputAddress">
                Music Director<input type="text" class="form-control" id="inputAddress" placeholder="" name="music_director_name1_feature">
              </div>
              <div class="col-sm-3" for="inputAddress">
                Male Singer<input type="text" class="form-control" id="inputAddress" placeholder="" name="male_singer_name1_feature">
              </div>
              <div class="col-sm-3" for="inputAddress">
                Female Singer<input type="text" class="form-control" id="inputAddress" placeholder="" name="female_singer_name1_feature">
              </div>
              <div class="col-sm-3" for="inputAddress">
                Lyrics <input type="text" class="form-control" id="inputAddress" placeholder="" name="lyrics_name1_feature">
              </div>
              <div class="col-sm-3" for="inputAddress">
                Story Writer<input type="text" class="form-control" id="inputAddress" placeholder="" name="story_writer_name1_feature">
              </div>
              <div class="col-sm-3" for="inputAddress">
                Child Artist<input type="text" class="form-control" id="inputAddress" placeholder="" name="child_artist_name1_feature">
              </div>
              <div class="col-sm-3" for="inputAddress">
                Supporting Artor<input type="text" class="form-control" id="inputAddress" placeholder="" name="supporting_actor_name1_feature">
              </div>
              <div class="col-sm-3" for="inputAddress">
                Supporting Actress<input type="text" class="form-control" id="inputAddress" placeholder="" name="supporting_actress_name1_feature">
              </div>
            </div>
            <div class="row" class="form-group row-md-12" id="idPassport" style="display: none">
              <div class="col-sm-3" for="inputAddress">
                Actor Name<input type="text" class="form-control" id="inputAddress" placeholder="" name="actor_name2_short">
              </div>
              <div class="col-sm-3" for="inputAddress">
                Actress Name<input type="text" class="form-control" id="inputAddress" placeholder="" name="actress_name2_short">
              </div>
              <div class="col-sm-3" for="inputAddress">
                Director Name<input type="text" class="form-control" id="inputAddress" placeholder="" name="director_name2_short">
              </div>
              <div class="col-sm-3" for="inputAddress">
                DOP Name<input type="text" class="form-control" id="inputAddress" placeholder="" name="dop_name2_short">
              </div>
              <div class="col-sm-3" for="inputAddress">
                Story Writer<input type="text" class="form-control" id="inputAddress" placeholder="" name="story_writer_name2_short">
              </div>

              <div class="col-sm-3" for="inputAddress">
                Editor<input type="text" class="form-control" id="inputAddress" placeholder="" name="editor_name2_short">
              </div>



            </div>

            <div class="row" class="form-group row-md-12" id="iidPassport" style="display: none">
              <div class="col-sm-3" for="inputAddress">
                DOP Name<input type="text" class="form-control" id="inputAddress" placeholder="" name="dop_name3_documentary">
              </div>
              <div class="col-sm-3" for="inputAddress">
                Story name<input type="text" class="form-control" id="inputAddress" placeholder="" name="story_name3_documentary">
              </div>
              <div class="col-sm-3" for="inputAddress">
                Director Name<input type="text" class="form-control" id="inputAddress" placeholder="" name="director_name3_documentary">
              </div>


            </div>

            <div class="row" class="form-group row-md-12" id="iiidPassport" style="display: none">
              <div class="col-sm-4" for="inputAddress">
                Actor Name<input type="text" class="form-control" id="inputAddress" placeholder="" name="actor_name4_album">
              </div>
              <div class="col-sm-4" for="inputAddress">
                Actress name<input type="text" class="form-control" id="inputAddress" placeholder="" name="actress_name4_album">
              </div>
              <div class="col-sm-4" for="inputAddress">
                DOP Name<input type="text" class="form-control" id="inputAddress" placeholder="" name="dop_name4_album">
              </div>
              <div class="col-sm-4" for="inputAddress">
                Male Singer<input type="text" class="form-control" id="inputAddress" placeholder="" name="singer_male_name4_album">
              </div>
              <div class="col-sm-4" for="inputAddress">
                Female Singer<input type="text" class="form-control" id="inputAddress" placeholder="" name="singer_female_name4_album">
              </div>
              <div class="col-sm-4" for="inputAddress">
                Music Director<input type="text" class="form-control" id="inputAddress" placeholder="" name="music_director_name4_album">
              </div>
              <div class="col-sm-4" for="inputAddress">
                Composer<input type="text" class="form-control" id="inputAddress" placeholder="" name="composer_name4_album">
              </div>
              <div class="col-sm-4" for="inputAddress">
                Lyricist<input type="text" class="form-control" id="inputAddress" placeholder="" name="lyricist_name4_album">
              </div>



            </div>







          </div>
        </div>
      </div>
    </div>
  </section>




  <section class="p-2  ">
    <div class="container">
      <div class="row  " style=" ">
        <div class="col-xl-12">

          <div class="form-row">
            <div class="form-group col-md-12">
              <h6 class="text-muted">RELEASE</h6>
              <p class="text-muted">I hereby submit my registration to JNFF (Jharkhand National Film Festival ) totaly from my own choice.</p>
              <p class="text-muted">I understand that submission of my work authorizes the JNFF to use portions of the submitted work/film for exhibition and/or publicity related ; that the Jharkhand National Film Festival will handle disks with a maximum of care but cannot be held liable for any damage or loss during the shipping,preview or screening; and that The Jharkhand National Film Festival is not responsible for any claim involving copyright, trademark, or royalty infringements related to the work/film. Distributors hereby acknowledge that producers of submitted films have agreed to the entry of their film/albums and short film in the Jharkhand National Film Festival.</p>
            </div>

            <div class="form-group col-md-3">
              <label for="inputAddress">Upload your Signature</label>
              <label class="btn-bs-file btn btn-secondary">
                Browse your file
                <input type="file" name="signature" />
              </label>
            </div>
            <div class="form-group col-md-5">
              <label for="inputAddress">Name</label>
              <input type="text" class="form-control" id="inputAddress" required="required" placeholder="Your name" name="name">
            </div>
            <div class="form-group col-md-4">
              <label for="inputAddress">Date</label>
              <input type="date" class="form-control" id="inputAddress" required="required" placeholder="dd/mm/yyyy" name="date">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="p-2">
    <div class="container">
      <div class="row  " style=" ">
        <div class="col-xl-12">

          <div class="form-row">
            <div class="form-group col-md-9">
              <h6 class="text-muted">Email registration : jharkhandnationalfilmfestival@gmail.com </h6>
              <h6 class="text-muted">Send DVD/Blu-ray copy to :-</h6>
              <h6 class="text-muted  "> ASMA INDIA ,Satpathy Centre ,Thana Road, Shere Punjab Chwok, Adityapur-1, Jamshedpur, Jharkhand, India – 831013</h6>

              <h4 class="text-muted mb-3">Fees can be submitted on the below given account details</h4>

              <h6 class="text-muted">A/C name :- DR. AMULYA SATPATHY MEMORIAL A (ASMA)</h6>
              <h6 class="text-muted">A/C type : Charitable Trust / Current</h6>
              <h6 class="text-muted">A/C no : 060505001699</h6>
              <h6 class="text-muted">RTGS/ NEFT IFSC Code : ICIC0000605</h6>
              <h6 class="text-muted">Bank Name: ICICI Bank</h6>
              <h6 class="text-muted">Branch : Sakchi</h6>
              <h6 class="text-muted">Birenu Trade Center ,67 , Pennar Road , Jamshedpur -831001</h6>


              <h4 class="text-muted my-4 mb-3">Fees for different categories of film</h4>
                
              <h6 class="text-muted">Feature film: Registration fees :- </h6>
              <p class="text-muted">For professional Rs. 4500/- & for students (50% Discount) Rs. 2250 per movie . (without fine till 30th April'22 ,with fine of Rs - 750/- extra till 31th July'22)</p>

              <h6 class="text-muted">Short Film: Registration fees :- </h6>
              <p class="text-muted">For professional Rs. 2250/- & for students (50% Discount) Rs. 1125/- per film. (without fine till 30th April'22 ,with fine of Rs - 500/- extra till 31th July'22)</p>

              <h6 class="text-muted">Album: Registration fees :- </h6>
              <p class="text-muted">For professional Rs. 1500/- & for students (50% Discount) Rs. 750/- per album.(without fine till 30th April'22 ,with fine of Rs - 500/- extra till 31th July'22)</p>

              <h6 class="text-muted">Documentary Film: Registration fees :- </h6>
              <p class="text-muted">For professional Rs. 2250/- & for students (50% Discount) Rs. 1125/- per video (without fine till 30th April'22 ,with fine of Rs - 500/- extra till 31th July'22)</p>

              <h6 class="text-muted">International Window (Only for Feature film & Short film ): Registration fees :- </h6>
              <p class="text-muted">For professional Rs. 3750/-& for students (50% Discount) Rs. 1875/- per video (without fine till 30th April'22 ,with fine of Rs - 750/- extra till 31th July'22)</p>

              <div class="form-group col-md-9">
                <label for="inputAddress">Transaction no. / Id</label>
                <input type="text" class="form-control" id="inputTrans" placeholder="Enter your Transaction No." name="transaction_no" required="required">
              </div>

            </div>


            <div class="form-group col-md-3">
              <img src="images/paytm.jpg" style="width: 100%;">
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="p-2  ">
    <div class="container">
      <div class="row  " style=" ">
        <div class="col-xl-12">

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputAddress">Film Summary / Synopsis</label>
              <textarea class="form-control" id="comment" rows="5" placeholder="type your message" name="film_summary"></textarea>
            </div>
            <div class="form-group col-md-6">
              <label for="inputAddress">Screenplay of the film - (The best one gets award )</label>
              <textarea class="form-control" id="comment" rows="5" placeholder="type your message" name="Screenplay_of_the_film"></textarea>
            </div>
          </div>
          <div><input type="checkbox" name="tos" id="tos"> <label for="tos">I have read and agree to the <a href="RULESJNFF1.pdf" target="_blank">rules and regulations.</a></label></div>
          <input type="submit" class="btn button-style2 text-dark" name="submit"></button>

        </div>
      </div>
    </div>
  </section>
  </form>
</body>

</html>

<script>
  function changestate(state) {
    if (state == 'International') {
      document.getElementById('ddlPassport').style.display = 'none';
      document.getElementById('ddlPassport1').style.display = 'block';

    } else {
      document.getElementById('ddlPassport').style.display = 'block';
      document.getElementById('ddlPassport1').style.display = 'none';

    }
  }
</script>

<?php include "./include/footer.php"; ?>