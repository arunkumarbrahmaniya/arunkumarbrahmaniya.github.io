<?php include("chkUser.php"); ?><html>
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
                    <h2>Publisher >> Publisher List
                    </h2>
                    <p align="right">
                        <a href="AddNewPublisherRecord.php" class="newadd">Add New Publisher Record !</a>
                    </p>
                    <p align="left">
                    <form action="DipsPublisherByName.jsp" method="get">
                        <span style="background-color: #ffff00;">
                            Search Publisher By Name &nbsp;&nbsp;<input type="search" name="pname" />
                        </span>
                    </form>
                    </p>
                    <p>&nbsp;</p>
                    <table cellspacing="1" cellpadding="1" border="0" width="100%">
                        <tr style="background-color: #00ccff;">
                            <th>
                                Name 
                            </th>
                            <th>
                                Address
                            </th>
                            <th>
                                City 
                            </th>
                            <th>
                                State
                            </th>
                            <th>
                                Country
                            </th>
                            <th>
                                Pin
                            </th>
                            <th>
                                Phone
                            </th>
                            <th>
                                E-mail
                            </th>

                            <th colspan="2">
                                Action
                            </th>
                        </tr>
<?php
                        
                       
                       $con=mysql_connect("localhost","root","");
                            $db=mysql_select_db("onlinelibrary",$con);
                            $q="select * from publisher_mstr";
                              $r = mysql_query($q);
	                    $c = mysql_num_rows($r);
                             if ($c>0) {
                             while($row = mysql_fetch_array($r))
                             { 
                            $v1=$row['pname'];
                           $v2=$row['address'];
                           $v3=$row['city'];
                           $v4=$row['state'];
                           $v5=$row['country'];
                           $v6=$row['pin'];
                            $v7=$row['phone'];
                           $v8=$row['email'];
                                 
                           echo "<tr>";
                           
                           echo "<td align='center' style='background-color: #00ccff;'>".$v1."</td>";

                           echo "<td align='center' >".$v2."</td>";
                           
                           echo "<td align='center'>".$v3."</td>";
                           
                           echo "<td align='center'>".$v4."</td>";
                           
                           echo "<td align='center'>".$v5."</td>";
                           
                           echo "<td align='center'>".$v6."</td>";
                           
                           echo "<td align='center'>".$v7."</td>";                           
                           
                           echo "<td align='center'>".$v8."</td>";                           

                                               
                                  echo "<td>";                    
                               echo "<a href='UpdatePublisherRecord.php?pname=$v1' class='updt'>Update</a>";
                            echo "</td>";
                            echo "<td align='center'>";
                                echo "<a href='RemovePublisher.php?pname=$v1' class='delt'>Remove</a>";
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