


<?php

   session_start(); 

?>

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
                    <?php include("header.html") ?>
                </td>
            </tr>
            <tr>
                <td width="100%" valign="top">
                    <?php include("stumenu.html") ?>
                </td>
            </tr>


            <tr>
                <td width="100%" height="400px" valign="top" align="center">
                    <h1>List of Issued Books to You</h1>
                     <center>
                <div style="width: 550px;height: 15px;text-align: justify;background-color:#ffffcc;font-size: 10px;">
                    The  Books issue for 7 days from date of issued only . Fine Rs. 1.50/- per day after 7 days
                </div>

            </center>
                    <p align="left">
                    <form action="SearchIssueReport.php" method="get">
                        <span style="background-color: #ffff00;">
                            Search Issued Book By Issue no &nbsp;&nbsp;<input type="search" name="issue_no" />
                        </span>
                    </form>
                   
                    <table cellspacing="2" cellpadding="2" border="0" width="90%">
                        <tr style="background-color: #66cc00">
                            <th>
                                Issue No
                            </th>
                            <th>
                                Book Name 
                            </th>
                            <th>
                                Author Name
                            </th>
                            <th>
                                Publisher Name
                            </th>
                            <th>
                               Date of Issue
                            </th>
                            <th>
                                Date of Return
                            </th>
                            <th>
                               Status
                            </th>
                           

                        </tr>


                       <?php
                            $r1=0;
                            $enroll =$_SESSION['user'];
                            $isno=$_REQUEST['issue_no'];
                            $con=mysql_connect("localhost","root","");
                            $db=mysql_select_db("onlinelibrary",$con);
                            $q="SELECT isuue_mstr.issue_no,isuue_mstr.bname, book_mstr.author_name, book_mstr.pname, isuue_mstr.issue_date, isuue_mstr.return_date, isuue_mstr.book_returned FROM  onlinelibrary.isuue_mstr INNER JOIN onlinelibrary.book_mstr ON (isuue_mstr.bname = book_mstr.bname) WHERE (book_mstr.no_copy !=book_mstr.issue_copy) AND (isuue_mstr.enroll_no ='$enroll')and (isuue_mstr.issue_no='$isno')";
	                    $r = mysql_query($q);
	                    $c = mysql_num_rows($r);
                             if ($c>0)
                             {
                            if($row = mysql_fetch_array($r))
                             {   
                                $r1=1;
                            echo "<tr>";
                            echo "<td align='center' style='background-color: #66cc00'>".$row[0];
                            echo "</td>";
                            echo "<td align='center'>".$row['bname'];
                            echo "</td>";
                            echo "<td align='center'>".$row['author_name'];
                            echo "</td>";
                            echo "<td align='center'>".$row['pname'];
                            echo "</td>";
                            echo "<td align='center'>".$row['issue_date'];
                            echo "</td>";
                            echo "<td align='center'>".$row['return_date'];
                            echo "</td>";
                            echo "<td align='center'>";
                                
                            
                            if($row['book_returned']==0)
                                                               {
                              
                        echo "<span style='color: red'>";
                           echo "Not Return";
                        echo "</span>";
                             
                            }
                            else
                                {
                            
                             
                        echo "<span style='color: green'>";
                             echo "Return";
                        echo "</span>";
                                     
                            }
                             }
                             }
                                
                            echo "</td>";

                        echo "</tr>";
                        
                                
                                if($r1==0){
                                    
                                    echo "<td align='center' width='100%' colspan='7'>";
                                        echo "No book has been issued to you of This Issue  Number!";
                                    echo "</td>";
                                   
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
