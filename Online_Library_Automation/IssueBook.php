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
                    <h2>Issue >> Issued List
                    </h2>
                    <p align="right">
                      <a href="AddNewIssueRecord.php" class="newadd">Add New issue Record !</a>
                    </p>
             <center>
                <div style="width: 550px;height: 15px;text-align: justify;background-color:#ffffcc;font-size: 10px;">
                    The  Books will be issue for 7 days from date of issued only . Fine Rs. 1.50/- per day after 7 days
                </div>

            </center>
             <p align="left">
           
            </p>
            <p>&nbsp;</p>
            <table cellspacing="1" cellpadding="1" border="0" width="100%">
                <tr style="background-color: #00ccff;">
                    <th>
                        Issue No
                    </th>
                    <th>
                        Student<br>
                        Enroll No
                    </th>
                    <th>
                        Book Name
                    </th>
                    <th>
                        Issue Date 
                    </th>
                    <th>
                        Return Date
                    </th>
                    <th>
                        Fine
                    </th>
                    <th>
                        Status
                    </th>
					<th>
                        Action
                    </th>
                </tr>

                <?php
  
                $con=mysql_connect("localhost","root","");
                $db=mysql_select_db("onlinelibrary",$con);
                
                $query="select * from isuue_mstr";

                $res=mysql_query($query);
                
                $cc = mysql_num_rows($res);
                
                if($cc > 0)
                {
                    
                    while($row = mysql_fetch_array($res))
                    {
                        $a = $row[0];
                        $b = $row[1];
                        $c = $row[2];
                        $d = $row[3];
                        $e = $row[4];
                        $f = $row[5];
                        $g = $row[6];
                        if($g == 1)
                        {
                            $aa = "Return";
                        }
                        else
                        {
                            $aa = "Not Return";
                        }
						
					echo "<tr>";
                    echo "<td align='center' style='background-color: #00ccff;'>".$a."</td>";
                    echo "<td align='center'>".$b."</td>";
                    echo "<td align='center'>".$c."</td>";
                    echo "<td align='center'>".$d."</td>";										
                    echo "<td align='center'>".$e."</td>";
                    echo "<td align='center'>".$f."</td>";
                    echo "<td align='center' style='background-color: #ffff00;color:red;'>".$aa."</td>";
                    echo "<td align='center'> <a href='return.php?id=".$a."' target='_blank'> Return </a> </td>";
                    echo "<td align='center' style='background-color: #ff6666'></td>";
                    echo "<td align='center'>&nbsp;</td>";
                echo "</tr>";
                    }
                }
        
                ?>
                

                            </table>
            </td>
            </tr>
        </table>
        <?php include("footer.html"); ?>
    </center>
</body>
</html>