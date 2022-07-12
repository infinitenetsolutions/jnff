<?php
include 'db.php';
if (isset($_POST['submit'])) {
    //var_dump($_FILES);exit();

    $countfiles = count($_FILES['sponsers']['name']);

    // Looping all files
    for ($i = 0; $i < $countfiles; $i++) {
        $filename = $_FILES['sponsers']['name'][$i];
        $insert = mysqli_query($conn, "INSERT INTO `sponsors_association`(`sponsers_association`,`year`) VALUES ('" . $filename . "','" . $_POST['year'] . "',)");
        $filename = 'xyz' . mysqli_insert_id($conn) . '.jpg';
        // Upload file
        if (move_uploaded_file($_FILES['sponsers']['tmp_name'][$i], 'sponsers_association/' . $filename)) {

            //var_dump($insert);
        }
    }
}
if ($insert) {
    header('location:sponsers_list.php');
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>JNFF</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="ckeditor/ckeditor.js"></script>
</head>

<body>
    <?php include 'menubar.php'; ?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 class="header-line">SPONSERS AND ASSOCIATION</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            ADD SPONSERS AND ASSOCIATION
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label class="control-label col-sm-2">Upload File</label>
                                    <div class="col-sm-4">
                                        <input type="file" class="form-control" name="sponsers[]" multiple="multiple">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Enter Year</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" name="year" >
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-offset-6 col-sm-10">

                                        <input type="submit" class="btn btn-warning" value="Submit" name="submit" />
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    </div>


















    <!-- CONTENT-WRAPPER SECTION END-->
    <?php include 'footer.php'; ?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>



</body>

</html>