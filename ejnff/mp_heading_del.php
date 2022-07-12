<?php include 'db.php';
session_start();
if(!isset($_SESSION['user']))
{
  session_destroy();
  session_unset();
  header("location:logout.php");
}

if(!isset($_GET['id'])) header('location:mp_headings.php');

$del_sub=mysqli_query($conn,sprintf('delete from mainpage_subheadings where heading_id=%s',mysqli_real_escape_string($conn,
	$_GET['id'])));
$del=mysqli_query($conn,sprintf('delete from mainpage_headings where id=%s',mysqli_real_escape_string($conn,
	$_GET['id'])));

header('location:mp_headings.php');
?>
