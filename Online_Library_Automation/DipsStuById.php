<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Admin Home Page</title> 
        <link href="style/mycss.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
    <center>
        <table class="table">
            <tr>
                <td width="100%" height="250px" valign="top">
                    <?php include("header.html") ?>
                </td>
            </tr>
            <tr>
                <td width="100%" valign="top">
                    <?php include("hmenu.html")?>
                </td>
            </tr>


            <tr>
                <td width="100%" height="400px" valign="top">
                    <h2>Student >> Student List
                    </h2>
                    <p align="right">
                        <a href="AddNewStuRecord.php" class="newadd">Add New Student Record !</a>
                    </p>
                    <p align="left">
                    <form action="DipsStuById.php" method="get">
                        <span style="background-color: #ffff00;">
                            Search Student By Enroll No &nbsp;&nbsp;<input type="search" name="enroll" />
                        </span>
                    </form>
                    </p>
                    <p align="center">
                        <a href="Student.php" style="text-decoration: none;font-size: 14px;color: #009900;"><< Back</a>
                    </p>
                    <p>&nbsp;</p>
                    <table cellspacing="2" cellpadding="2" border="0" width="100%">
                        <tr style="background-color: #00ccff;">
                            <th>
                                Enroll No. 
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                F_name
                            </th>
                            <th>
                                Gender 
                            </th>
                            <th>
                                Class
                            </th>
                            <th>
                                Stream
                            </th>
                            <th>
                                Sem.
                            </th>
                            <th>
                                Pswd
                            </th>
                            <th>
                                Photo
                            </th>
                        </tr>


                        
                                    
                                    <?php
                        
                       $enroll=$_REQUEST['enroll'];
                       $con=mysql_connect("localhost","root","");
                            $db=mysql_select_db("onlinelibrary",$con);
                            $q="select * from stu_mstr where enroll_no='$enroll'";
	                    $r = mysql_query($q);
	                    $c = mysql_num_rows($r);
                             if ($c>0) {
                             if($row = mysql_fetch_array($r))
                             { 
                            
                            echo "<tr>";
                                echo "<td align='center' style='background-color: #00ccff;'>".$row['enroll_no'];
                                echo "</td>";
                                echo "<td align='center'>".$row['sname'];
                                echo "</td>";
                                echo "<td align='center'>".$row['fname'];
                                echo "</td>";
                                echo "<td align='center'>".$row['gender'];
                                echo "</td>";
                                echo "<td align='center'>".$row['sclass'];
                                echo "</td>";
                                echo "<td align='center'>".$row['stream'];
                                echo "</td>";
                                echo "<td align='center'>".$row['semester'];
                                echo "</td>";
                                echo "<td align='center'>";
                                $s1="Update";
                                $s2="Remove";
                                echo "<a href='updateStuRecord.php?enroll=".$row['enroll_no']."&id1=".$s1."'>".$s1."</a></td>";
                                echo "</td>";
                                echo "<td align='center'>";
                                echo "<a href='RemoveStu.php?enroll=".$row['enroll_no']."&id1=".$s2."'>".$s2."</a></td>";
                                echo "</td>";
                            echo "</tr>";
                            
                        }
                           }
                       ?>

                    </table>
                </td>
            </tr>
        </table>
        <?php include("footer.html") ?>
    </center>
</body>
</html>
