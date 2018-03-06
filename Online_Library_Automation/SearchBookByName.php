<?php
session_start();
?>

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
                    <?php include("stumenu.html")?>
                </td>
            </tr>


            <tr>
                <td width="100%" height="400px" valign="top" align="center">
                    <h1>Available Books in Library</h1>
                    
                    <p align="left">
                    <form action="SearchBookByName.php" method="get">
                        <span style="background-color: #ffff00;">
                            Search Book By Name &nbsp;&nbsp;<input type="search" name="bname">
                        </span>
                    </form>
                    </p>
                    <table cellspacing="2" cellpadding="2" border="0" width="90%">
                        <tr style="background-color: #66cc00">
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
                                Total Page 
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Avail No_Copy
                            </th>
                            <th>
                                Issued No_Copy
                            </th>

                        </tr>


                      <?php
                            $bname=$_GET['bname'];
                             $con=mysql_connect("localhost","root","");
                            $db=mysql_select_db("onlinelibrary",$con);
                            $q="select * from book_mstr where book_mstr.no_copy!=book_mstr.issue_copy and bname='$bname'";
	                    $r = mysql_query($q);
	                    $c = mysql_num_rows($r);
                             if ($c>0) {
                            if($row = mysql_fetch_array($r))
                             {   
                        
                            echo "<tr>";
                            echo "<td align='center' style='background-color: #66cc00'>".$bname;
                                
                            echo "</td>";
                            echo "<td align='center'>".$row['author_name'];
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
                            
                        
                } else {
               
               echo "<tr>";
                    echo "<td colspan='9' align='center'>";
                      echo "Either this book is not available in library or no copy of this book is available for Issue.";
                    echo "</td>";
                echo "</tr>";
                }
                             }          
                             ?>

                    </table>
                <p>
                    <a href="SearchBook.php" style="text-decoration: none;font-size: 14px;color: #66cc00;">
                        <b>    << BACK</b>
                    </a>
                </p>
                </td>
            </tr>
        </table>
        <%@include file="footer.html" %>
    </center>
</body>
</html>
