
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
                    <h2>Books  >> Update Record
                    </h2>
                    <p align="right" class="newadd">
                       &nbsp;
                       
                    </p>
                    <p align="right" class="delt" style="font-size: 14px;">
                        
                      &nbsp
                    </p>
                     <?php
                        
                           $bname=$_REQUEST['bname'];
                             $q="select * from book_mstr where bname='$bname'";
                              $con=mysql_connect("localhost","root","");
                           $db=mysql_select_db("onlinelibrary",$con);
                           
                          $r = mysql_query($q);

	                 $c = mysql_num_rows($r);

	if($c > 0)
	{
            if($row = mysql_fetch_array($r))
                             {   
                $v1=$row['bname'];
                $v2=$row['author_name'];
                $v3=$row['pname'];
                $v4=$row['page_no'];
                $v5=$row['price'];
                $v6=$row['no_copy'];
                
                
                           echo "<form action='UpdateBook.php' method='get' name='frm' onsubmit='return validate();'>";
                       echo "<table cellspacing='1' cellpadding='1' border='0' width='70%'>";
                       
                        echo "<tr>";
                         echo "<th>";
                           echo "Book Name";
                        echo "</th>";
                        echo "<td>";
                            echo "<input type='text' name='bname' value='$v1'/>";
                            echo "<input type='hidden' name='cbname' value='$v1'/>";
                        echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                         echo "<th>";
                            echo "Author Name";
                        echo "</th>";
                        echo "<td>";
                            echo "<input type='text' name='aname' value='$v2'/>";
                        echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                         echo "<th>";
                            echo "Total Page";
                        echo "</th>";
                        echo "<td>";
                            echo "<input type='text' name='tpage' value='$v4'/>";
                        echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                         echo "<th>";
                            echo "Price";
                        echo "</th>";
                        echo "<td>";
                            echo "<input type='text' name='price' value='$v5'/>";
                        echo "</td>";
                        echo "</tr>";
                         
                        echo "<tr>";
                         echo "<th>";
                            echo "Avail No. of Copy";
                        echo "</th>";
                        echo "<td>";
                            echo "<input type='text' name='acopy' value='$v6'/>";
                        echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<th>";
                           echo "Publisher Name";
                        echo "</th>";
                        echo "<td>";
                        echo "<select name='pname'>";
                                echo "<option value=''></option>";
                             }} ?>
                    <?php
                                          
                          $con=mysql_connect("localhost","root","");
                            $db=mysql_select_db("onlinelibrary",$con);
                            $q="select pname from publisher_mstr";
	                    $r = mysql_query($q);
	                    $c = mysql_num_rows($r);
                             while($row = mysql_fetch_array($r))
                             { 
                        $aa=$row['pname'];
                            echo "<option value='".$aa."'>".$aa."</option>";
                                 
                             }?>
                            </select>
                        </td>
                        </tr>
                        
                         
                        <tr>
                            
                            <td colspan="2" align="right">
                                <input type="submit" value="Update" class="button" />&nbsp;&nbsp;<input type="reset" value="Clear" class="button" />
                            </td>
                   
                        
                   
                          
                    </table>
                    </form>
                              
                           
                 
                </td>
            </tr>
        </table>
        <?php include("footer.html") ?>
    </center>
</body>
</html>
