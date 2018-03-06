<?php
$v1=$_REQUEST['t1'];
$v2=$_REQUEST['t2'];
$v3=$_REQUEST['t3'];
$v4=$_REQUEST['t4'];
$v5=$_REQUEST['t5'];
$v6=$_REQUEST['t6'];
move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$_FILES['file']['name']);
$pic = "upload/".$_FILES['file']['name'];

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("onlinelibrary",$con);
$query="INSERT INTO stu_mstr(sname,fname,gender,sclass,stream,semester,photo) values('$v1','$v2','$v3','$v4','$v5','$v6','$pic')";

$res=mysql_query($query);
if($res>0)
{ 
$qq = "select max(enroll_no) from stu_mstr";
$rr = mysql_query($qq);
$cc = mysql_num_rows($rr);
if($cc > 0)
{
    if($row = mysql_fetch_array($rr))
    {
        $str = $row[0];
    }
    header("Location: StuLabCard.php?id=".$str);
}
}
else
{
echo "not Registered";
}
?>
