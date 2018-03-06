<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Admin Home Page</title> 
        <link href="style/mycss.css" rel="stylesheet" type="text/css" />

       <script type="text/javascript">
            function validate()
            {
                if(document.frm.pname.value=="")
                {
                    alert("Please enter Publisher Name");
                    document.frm.pname.focus();
                    return false;
                }
                if(document.frm.adrs.value=="")
                {
                    alert("Please enter Address");
                    document.frm.adrs.focus();
                    return false;
                }
                if(document.frm.city.value=="")
                {
                    alert("Please enter Your City");
                    document.frm.city.focus();
                    return false;
                }
                if(document.frm.state.value=="")
                {
                    alert("Please enter State");
                    document.frm.state.focus();
                    return false;
                }
                if(document.frm.country.value=="")
                {
                    alert("Please enter Country");
                    document.frm.country.focus();
                    return false;
                }
                if(document.frm.pin.value=="")
                {
                    alert("Please enter Pin");
                    document.frm.pin.focus();
                    return false;
                }
                if(document.frm.phone.value=="")
                {
                    alert("Please enter Phone");
                    document.frm.phone.focus();
                    return false;
                }
                if (echeck(document.frm.email.value)==false){
                    document.frm.email.value="";
                    document.frm.email.focus();
                    return false;
                }

                return true;
            }
            function echeck(str) {

                var at="@"
                var dot="."
                var lat=str.indexOf(at)
                var lstr=str.length
                var ldot=str.indexOf(dot)

                if (str.indexOf(at)==-1){
                    alert("Invalid E-mail ID")
                    return false
                }

                if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
                    alert("Invalid E-mail ID")
                    return false
                }

                if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
                    alert("Invalid E-mail ID")
                    return false
                }

                if (str.indexOf(at,(lat+1))!=-1){
                    alert("Invalid E-mail ID")
                    return false
                }

                if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
                    alert("Invalid E-mail ID")
                    return false
                }

                if (str.indexOf(dot,(lat+2))==-1){
                    alert("Invalid E-mail ID")
                    return false
                }

                if (str.indexOf(" ")!=-1){
                    alert("Invalid E-mail ID")
                    return false
                }

                return true
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
                    <h2>Publisher  >> Update Record
                    </h2>
                    <p align="right" class="newadd">
                       &nbsp;
                       
                    </p>
                    <p align="right" class="delt" style="font-size: 14px;">
                        
                      &nbsp
                    </p>
                     <?php
                        
                                   $pname=$_REQUEST['pname'];
                                   $q="select * from publisher_mstr where pname='$pname'";
                           
                          
                            $con=mysql_connect("localhost","root","");
                           $db=mysql_select_db("onlinelibrary",$con);
                           
                          $r = mysql_query($q);

	                 $c = mysql_num_rows($r);

	if($c > 0)
	{
            if($row = mysql_fetch_array($r))
            {
            echo "<form action='UpdatePublisher.php' method='post' name='frm' onsubmit='return validate();'>";
                   echo "<table cellspacing='1' cellpadding='1' border='0' width='70%'>";

                            echo "<tr>";
                               echo "<th>";
                                    echo "Publisher Name";
                                echo "</th>";
                                echo "<td>";
                                $v1=$row['pname'];
                                    echo "<input type='text' name='pname' value=$v1 />";
                                    echo "<input type='hidden' name='cpname' value=$v1 />";
                                    echo "</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<th>";
                                    echo "Addres";
                                echo "</th>";
                                echo "<td>";
                                   echo "<input type='text' name='adrs' value=$row[address] />";
                                echo "</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<th>";
                                    echo "City";
                                echo "</th>";
                                echo "<td>";
                                   echo "<input type='text' name='city' value=$row[city] />";
                                echo "</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<th>";
                                    echo "State";
                                echo "</th>";
                                echo "<td>";
                                   echo "<input type='text' name='state' value=$row[state] />";
                                echo "</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<th>";
                                    echo "Country";
                                echo "</th>";
                                echo "<td>";
                                   echo "<input type='text' name='country' value=$row[country] />";
                                echo "</td>";
                            echo "</tr>";

                            echo "<tr>";
                                echo "<th>";
                                   echo "Pin";
                                echo "</th>";
                                echo "<td>";
                                   echo "<input type='text' name='pin' value=$row[pin] />";
                                echo "</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<th>";
                                    echo "Phone";
                                echo "</th>";
                                echo "<td>";
                                    echo "<input type='text' name='phone' value=$row[phone] />";
                                echo "</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<th>";
                                    echo "E-mail";
                                echo "</th>";
                                echo "<td>";
                                $v2=$row['email'];
                                   echo "<input type='text' name='email' value=$v2 /> ";
                                echo "</td>";
                            echo "</tr>";
                            echo "<tr>";

                                echo "<td colspan='2' align='right'>";
                                   echo "<input type='submit' value='Update' class='button' />";
                                   echo "<input type='reset' value='Clear' class='button' />";
                                echo "</td>";
echo "</tr>";
        }
        
        }?>



                        </table>
                    </form>
                               
                 
                </td>
            </tr>
        </table>
        <?php include("footer.html") ?>
    </center>
</body>
</html>
