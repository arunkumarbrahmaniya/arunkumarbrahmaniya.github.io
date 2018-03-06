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

                    <h1>Fine Detail & Total</h1>

            <center>

                <div style="width: 550px;height: 15px;text-align: justify;background-color:#ffffcc;font-size: 10px;">

                    The  Books issue for 7 days from date of issued only . Fine Rs. 1.50/- per day after 7 days
 
               </div>


            </center>

            <p align="left">&nbsp;

           

            </p>

            <table cellspacing="2" cellpadding="2" border="0" width="90%">

                <tr style="background-color: #66cc00">

                    <th>

                        Issue No

                    </th>

                    <th>

                        Book Name
 
                    </th>


                    <th>

                        Date of Issue

                    </th>

                    <th>

                        Date of Return

                    </th>


                    <th>

                        Fine

                    </th>


                </tr>



		  <?php
		  
		  $total = 0;

                            $enroll =$_SESSION['user'];

                            $con=mysql_connect("localhost","root","");

                            $db=mysql_select_db("onlinelibrary",$con);

                            $q="SELECT * FROM isuue_mstr where enroll_no='$enroll'";

	                    $r = mysql_query($q);

	                    $c = mysql_num_rows($r);

                             if ($c>0)

                             {

                              while($row = mysql_fetch_array($r))

                             {
  
                echo "<tr>";

                    echo "<td align='center' style='background-color: #66cc00'>".$row[0];

                    echo "</td>";

                    echo "<td align='center'>".$row[2];

                    echo "</td>";

                    echo "<td align='center'>".$row[3];

                    echo "</td>";

                    echo "<td align='center'>".$row[4];

                    echo "</td>";
					
					echo "<td align='center'>".$row[5];

                    echo "</td>";

                     echo "</tr>";

                     $total = $total + $row['5'];

                    }
					
               }
			   
			   echo "<tr>";

                    echo "<td align='Right' width='100%' colspan='7' style='background-color: #cccccc'><b>Total : Rs. ".$total;
                    echo "</b></td></tr>";
					
					
					if ($total == 0) {
                
                echo "<td align='center' width='100%' colspan='7'>No Fine due on YOU !";

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
