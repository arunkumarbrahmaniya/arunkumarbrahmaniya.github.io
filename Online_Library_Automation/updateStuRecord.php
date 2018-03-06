

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Admin Home Page</title> 
        <link href="style/mycss.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript">
            function validate()
            {
                if(document.frm.sname.value=="")
                {
                    alert("Please enter Name");
                    document.frm.sname.focus();
                    return false;
                }
                if(document.frm.fname.value=="")
                {
                    alert("Please enter Your Father Name");
                    document.frm.fname.focus();
                    return false;
                }
                if(document.frm.sclas.value=="")
                {
                    alert("Please enter Your Class");
                    document.frm.sclas.focus();
                    return false;
                }
                if(document.frm.stream.value=="")
                {
                    alert("Please enter Stream");
                    document.frm.stream.focus();
                    return false;
                }
                if(document.frm.sem.value=="")
                {
                    alert("Please enter Semester");
                    document.frm.sem.focus();
                    return false;
                }
                return true;
            }
                
        </script>
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
                    <?php include("hmenu.html") ?>
                </td>
            </tr>
           

            <tr>
                <td width="100%" height="400px" valign="top">
                    <h2>Student  >> Update Record
                    </h2>
                    <p align="right" class="newadd">
                       &nbsp;
                       
                    </p>
                    <p align="right" class="delt" style="font-size: 14px;">
                        
                      &nbsp
                    </p>
                    <?php 
                        
                       
                           $enroll=$_REQUEST['enroll'];
                          $con=mysql_connect("localhost","root","");
                           $db=mysql_select_db("onlinelibrary",$con);
                           $q="select sname,fname,gender,sclass,stream,semester from stu_mstr where enroll_no='$enroll'";
                           
                           $r = mysql_query($q);

	$c = mysql_num_rows($r);

	if($c > 0)
	{
            if($row = mysql_fetch_array($r))
                             {   
                        
                       echo "<form action='UpdateStu.php' method='post' name='frm' onsubmit='return validate();'>";
                    echo "<table cellspacing='1' cellpadding='1' border='0' width='70%'>";
                        echo "<tr style='background-color: #00ccff;'>";
                         echo "<th>";
                           echo "Enroll No";
                        echo "</th>";
                        echo "<td>";
                           echo "<input type='hidden' name='enroll' value='$enroll' />'$enroll'";
                        echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                         echo "<th>";
                           echo "Name";
                        echo "</th>";
                        echo "<td>";
                        $a=$row['sname'];
                           echo "<input type='text' name='sname' value='$a'>";
                        echo "</td>";
                       echo "</tr>";
                        echo "<tr>";
                         echo "<th>";
                            echo "F_name";
                        echo "</th>";
                        echo "<td>";
                        $b=$row['fname'];
                            echo "<input type='text' name='fname' value='$b'/>";
                        echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<th>";
                           echo "Gender"; 
                        echo "</th>";
                        echo "<td>";
                        $c1=$row['gender'];
                           echo "<input type='text' name='gender' value='$c1'/>";
                          
                        echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                         echo "<th>";
                            echo "Class";
                        echo "</th>";
                        echo "<td>";
                        $d=$row['sclass'];
                            echo "<input type='text' name='sclass' value='$d'/>";
                        echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                         echo "<th>";
                           echo "Stream";
                        echo "</th>";
                        echo "<td>";
                        $e=$row['stream'];
                            echo "<input type='text' name='stream' value='$e'/>";
                        echo "</td>";
                        echo "</tr>";
                         echo "<th>";
                            echo "Semester";
                        echo "</th>";
                       echo "<td>";
                       $f=$row['semester'];
                            echo "<input type='text' name='sem' value='$f'/>";
                        echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                            
                            echo "<td colspan='2' align='right'>";
                               echo "<input type='submit' value='Update' class='button' />&nbsp;&nbsp;<input type='reset' value='Clear' class='button' />";
                            echo "</td>";
                   
                        
                   
                          
                    echo "</table>";
                    echo "</form>";
                               
                           }
        }
        ?>         
                </td>
            </tr>
        </table>
        <?php include("footer.html") ?>
    </center>
</body>
</html>
