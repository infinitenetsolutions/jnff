<?php
include 'db.php';

if(!isset($_GET['t_id'])) header('location:latest_updates.php');

$res=mysqli_query($conn,'DELETE FROM `latest_updates` WHERE id='.$_GET['t_id']);


header('location:latestupdates_list.php');

	?>