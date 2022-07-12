<?php include 'db.php';

if(!isset($_GET['id'])) header('location:sponsers_list.php');

$res=mysqli_query($conn,'delete from sponsors_association where id='.$_GET['id']);

header('location:sponsers_list.php');



if(!isset($_GET['fd_id'])) header('location:registration.php');

$res=mysqli_query($conn,'delete from registration_form where id='.$_GET['fd_id']);

header('location:registration.php');

if(!isset($_GET['t_id'])) header('location:team_list.php');

$res=mysqli_query($conn,'delete from team where id='.$_GET['t_id']);

header('location:team_list.php');

?>