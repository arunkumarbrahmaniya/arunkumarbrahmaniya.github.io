<?php
$u = $_REQUEST['enroll'];

$con = mysql_connect("localhost","root","");

$db = mysql_select_db("onlinelibrary",$con);

$q = "delete from stu_mstr where enroll_no='$u'";

$r = mysql_query($q) or die(mysql_error());

if($r > 0)
{
echo "msg".$u;	
header("location: Student.php");
}
else
{
	echo "error";
}

?>
