<?php include 'db.php';
session_start();
if (!isset($_SESSION['user'])) {
    session_destroy();
    session_unset();
    header("location:logout.php");
} ?>

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
    <!-- DATATABLE STYLE  -->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body>
    <?php include 'menubar.php'; ?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 class="header-line"></h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        jharkhand traditional food culture
                            <a href="jtfc_add.php"><button class="btn btn-warning pull-right">Add jharkhand traditional food culture  </button></a>

                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead> 
                                        <tr>
                                            <th style="width: 20px;">SL no</th>
                                            <th style="width: 20px;">Year </th>

                                            <th style="width: 20px;">Description</th>
                                            <th style="width: 20px;">Image </th>

                                            <th width="80px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $cnt = 1;
                                        $sel_uom = mysqli_query($conn, "SELECT * FROM jtfc");
                                        while ($result = mysqli_fetch_assoc($sel_uom)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $cnt; ?></td>

                                                <td><?php echo $result['title']; ?></td>

                                                <td><?php echo $result['description']; ?></td>
                                                <td><img style="height: 40px;width: 60px;" src="jtfc/<?php echo $result['image']; ?>"></td>


                                                <td>

                                                    <a href="jtfc_edit.php?id=<?php echo $result['id']; ?>"><button class="update btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></a>


                                                </td>

                                                </td>
                                            </tr>

                                        <?php $cnt++;
                                        } ?>


                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!--End Advanced Tables -->
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
    <!-- DATATABLE SCRIPTS  -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>

</html>