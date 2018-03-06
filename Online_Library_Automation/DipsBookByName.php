
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
                    <?php include("hmenu.html") ?>
                </td>
            </tr>


            <tr>
                <td width="100%" height="400px" valign="top">
                    <h2>Books >> Books List
                    </h2>
                    <p align="right">
                        <a href="AddNewBookRecord.php" class="newadd">Add New Book Record !</a>
                    </p>
            <center>
                <div style="width: 550px;height: 15px;text-align: justify;background-color:#ffffcc;font-size: 10px;">
                    The  Books will be issue for 7 days from date of issued only . Fine Rs. 1.50/- per day after 7 days
                </div>

            </center>
            <p align="left">
            <form action="DipsBookByName.php" method="get">
                <span style="background-color: #ffff00;">
                    Search Book By Name &nbsp;&nbsp;<input type="search" name="bname" />
                </span>
            </form>
            </p>
            <p>&nbsp;</p>
            <table cellspacing="1" cellpadding="1" border="0" width="100%">
                <tr style="background-color: #00ccff;">
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
                    <th colspan="2">
                        Action
                    </th>
                </tr>


                <?php
                                  
                $bname=$_REQUEST['bname'];
                          $con=mysql_connect("localhost","root","");
                            $db=mysql_select_db("onlinelibrary",$con);
                            $q="select * from book_mstr where bname='$bname'";
	                    $r = mysql_query($q);
	                    $c = mysql_num_rows($r);
                             while($row = mysql_fetch_array($r))
                             { 
                            
                        echo "<tr>";
                    echo "<td align='center' style='background-color: #00ccff;'>".$row['bname'];
                    echo "</td>";
                    echo "<td align='center'>".$row['author_name'];
                    echo "</td>";
                    echo "<td align='center'>".$row['pname'];
                    echo "</td>";
                    echo "<td align='center'>".$row['page_no'];
                    echo "</td>";
                    echo "<td align='center'>".$row['price'];
                      
                    echo "</td>";
                    echo "<td align='center'>".$row['no_copy'];
                    echo "</td>";
                    echo "<td align='center'>".$row['issue_copy'];
                        
                    echo "</td>";
                    echo "<td align='center'>";
                    $r1=$row['bname'];
                        echo "<a href=UpdateBookRecord.php?bname='.$r1 class='updt'>Update</a>";
                    echo "</td>";
                    echo "<td align='center'>";
                     echo "<a href='RemoveBook.php?bname='.$r1 class='delt'>Remove</a>";
                    echo "</td>";
                echo "</tr>";
                             } ?>
               
            </table>
            </td>
            </tr>
        </table>
        <?php include("footer.html") ?>
    </center>
</body>
</html>
