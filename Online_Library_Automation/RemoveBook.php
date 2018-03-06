<?php

$u = $_REQUEST['bname'];

$con = mysqli_connect("localhost","root","","onlinelibrary");

//$db = mysql_select_db("onlinelibrary",$con);

$q = "delete from book_mstr where bname='$u'";

if(mysqli_query($con,$q))
{
 echo "<script>alert('Book Removed');window.location='books.php';</script>";
}
else
{
	echo "error";
}
?>
