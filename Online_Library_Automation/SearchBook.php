<?php include("chkUser.php"); ?>
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
                    <br> <h3>Available Books in Library</h3>
                    <p align="left">
                    <form action="SearchBookByName.php" method="get">
                        <span style="background-color: #ffff00;">
                            Search Book By Name &nbsp;&nbsp;<input type="search" name="bname">
                        </span>
                    </form>
                    </p>

                      <?php
                     echo "<table cellspacing='2' cellpadding='2' border='0' width='90%'>";
                        echo "<tr style='background-color: #66cc00'>";
                            echo "<th>Book Name</th><th>Author Name</th><th>Publisher Name</th><th>Total Page </th><th>Price</th><th>Avail No_Copy</th><th> Issued No_Copy </th> </tr>";


                    
                           
                                $con=mysql_connect("localhost","root","");
                            $db=mysql_select_db("onlinelibrary",$con);
                            $q="select * from book_mstr where book_mstr.no_copy!=book_mstr.issue_copy";
	                    $r = mysql_query($q);
	                    $c = mysql_num_rows($r);
                             if ($c>0) {
                             while($row = mysql_fetch_array($r))
                             {   
                                                  
                                echo "<tr>";
                            echo "<td align='center' style='background-color: #66cc00'>".$row['bname'];
                                
                            echo "</td>";
                            echo "<td align='cente'>".$row['author_name'];
                            echo "</td>";
                            echo "<td align='center'>".$row['pname'];
                            echo "</td>";
                            echo "<td align='center'>".$row['page_no'];
                            echo "</td>";
                            echo "<td align='center'>".$row['price'];
                            echo "</td>";
                            echo "<td align='center''>".$row['no_copy'];
                            echo "</td>";
                            echo "<td align='center'>".$row['issue_copy'];
                            echo "</td>";
                            echo "</tr>";
                            
                             }
                             }
                             ?>
        </table>
                </td>
            </tr>
                                        
        </table>
        <?php include("footer.html")?>
    </center>
</body>
</html>