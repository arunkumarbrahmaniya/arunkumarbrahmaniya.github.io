<?php
$cc=$_POST['utype'];
$u=$_POST['user'];
$p=$_POST['pswd'];
session_start();
$con=mysqli_connect("localhost","root","","onlinelibrary");
if($cc == "admin")
{
	$q="select * from admin where login='$u' and pswd='$p'";

	$r = mysqli_query($con,$q);

	$c = mysqli_num_rows($r);

	if($c > 0)
	{
		$_SESSION['user'] = $u;
		header("Location: AdminHome.php");
	}
	else
	{	
		echo "Wrong Username or password";
	}

}

if($cc=="student")
{
    
	$q="select * from stu_mstr where enroll_no='$u' and pswd='$p'";

	$r = mysqli_query($con,$q);

	$c = mysqli_num_rows($r);

	if($c > 0)
	{
            $_SESSION['user'] = $u;
		header("Location:StudentHome.php");
	}
	else
	{
		echo "Wrong Username or password";
	}

}
?>
