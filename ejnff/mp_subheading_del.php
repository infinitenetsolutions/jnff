<?php include 'db.php';
session_start();
if(!isset($_SESSION['user']))
{
  session_destroy();
  session_unset();
  header("location:logout.php");
}
//var_dump($_GET);
$del=mysqli_query($conn,sprintf('delete from mainpage_subheadings where id=%s;',mysqli_real_escape_string($conn,$_GET['id'])));
header('location:mp_subheadings.php?heading_id='.$_GET['heading_id']);
?>