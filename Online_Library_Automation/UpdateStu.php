<?php

            $enroll=$_REQUEST['enroll'];
            $sname = $_REQUEST['sname'];
            $fname = $_REQUEST['fname'];
            $gender = $_REQUEST['gender'];
            $sclas = $_REQUEST['sclass'];
            $stream = $_REQUEST['stream'];
            $sem = $_REQUEST['sem'];
            
            $con=mysql_connect("localhost","root","");
            $db=mysql_select_db("onlinelibrary",$con);
            $q="UPDATE stu_mstr SET  sname ='$sname',fname ='$fname',gender ='$gender',sclass ='$sclas',stream = '$stream',semester ='$sem' WHERE enroll_no ='$enroll'";
            $r = mysql_query($q);
            //$c=mysql_num_rows($r);

	  if($r>0)
            {
                header("Location:Student.php");
            }
            else
            {
                echo " Not Updated";
            }
            
?>
