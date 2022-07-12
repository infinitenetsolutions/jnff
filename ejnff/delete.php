<?php
include 'db.php';
if(isset($_GET['fv_id']))
{
    $del=mysqli_query($conn,"DELETE FROM `registration_form` WHERE id='".$_GET['fv_id']."'");
  
    header('location:registration.php');

}