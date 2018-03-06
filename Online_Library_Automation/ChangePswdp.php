<?php
           session_start(); 
        $enroll=$_SESSION['user'];
         $cpswd = $_REQUEST['cpswd'];
          $npswd = $_REQUEST['npswd'];
            
            $con=mysql_connect("localhost","root","");
$db=mysql_select_db("onlinelibrary",$con);

$q = "select * from stu_mstr where enroll_no='$enroll' and pswd='$cpswd'";

$r = mysql_query($q);

$c = mysql_num_rows($r);

if($c > 0)
{

$query="update stu_mstr set pswd='$npswd' where enroll_no='$enroll'";

$res=mysql_query($query) or die(mysql_error());

$c=mysql_num_rows($res);
if($res>0)
{
    echo "<script>alert('Password Updated');window.location='CahngePswd.php';</script>";    
}
else
{
    echo "<script>alert('old Password Not Matched');window.location='CahngePswd.php';</script>";
}

}

?>