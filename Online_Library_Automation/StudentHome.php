<?php include("chkUser.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Student Home Page</title> 
        <link href="style/mycss.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
    <center>
        <table class="table">
            <tr>
                <td width="100%" height="250px" valign="top">
                    <?php include("header.html")?>
                </td>
            </tr>
            <tr>
                <td width="100%" valign="top">
                    <?php include("stumenu.html")?>
                </td>
            </tr>


            <tr>
                <td width="100%" height="400px" valign="top" align="center">
                    <?php
                       
                            $enroll =$_SESSION['user'];
                            
                            $con=mysql_connect("localhost","root","");
                            $db=mysql_select_db("onlinelibrary",$con);
                            $q="select * from stu_mstr where enroll_no='$enroll'";
							$r = mysql_query($q);
							$c = mysql_num_rows($r);
                             if ($c>0) {
                             if($row = mysql_fetch_array($r))
                             {
							$pic = $row['photo'];
                             echo "<table style='background-color: #d7d7d7' width='60%'>";
                             echo "<tr>";
                            echo "<td colspan='2' align='center'>";
                                echo "<h2>Profile</h2>";
                            echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td valign='top'>";
                                echo "Enrollment No :".$enroll;
                            echo "</td>";
                            echo "<td rowspan='3' align='right' valign='top'>";
                                 echo "<img src='".$pic."' hspace='0px' vspace='0px' width='129' height='130' style='margin-left: 10px;margin-bottom: 5px;float: left; border:thin;background-color:#FF0000'/>";
                            echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td valign='top'>";
                                echo "Name :".$row['sname'];
                            echo "</td>";
                        echo "</tr>";
                         echo "<tr>";
                            echo "<td valign='top'>";
                               echo "Father Name :".$row['fname'];
                            echo "</td>";
                        echo "</tr>";
                         echo "<tr>";
                            echo "<td valign='top'>";
                                 echo "<br>";
                               echo "Gender :".$row['gender'];
                              echo "<tr>";
                            echo "<td><br>";
                                echo "Class :".$row['sclass'];
                            echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td valign='top'>";
                                 echo "<br><br>";
                              echo "Stream :".$row['stream'];
                               echo "</td></tr>";
                            echo "<tr><td>  <br><br>  Semester :".$row['semester'];
                            echo "</td>";
                        echo "</tr>";
                                              
                    echo "</table>";
                                                             
                    
                echo "</td>";
           echo "</tr>";
        echo "</table>";}}
        ?> 
        <?php include("footer.html")?>
    </center>
</body>
</html>
