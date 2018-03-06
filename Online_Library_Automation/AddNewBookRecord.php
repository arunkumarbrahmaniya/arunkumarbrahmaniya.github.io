<?php include("chkUser.php"); ?>
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
                    <h2>Books  >> Add New Record
                    </h2>
                    <p align="right" class="newadd">
                        
                       
                    </p>
                    <p align="right" class="delt" style="font-size: 14px;">
                        
                       
                    </p>
                    
                    <form action="AddNewBook.php" method="get" name="frm" onsubmit="return validate();">
                     <table cellspacing="1" cellpadding="1" border="0" width="70%">
                       
                        <tr>
                         <th>
                           Book Name
                        </th>
                        <td>
                            <input type="text" name="bname" />
                        </td>
                        </tr>
                        <tr>
                         <th>
                            Author Name
                        </th>
                        <td>
                            <input type="text" name="aname" />
                        </td>
                        </tr>
                        <tr>
                         <th>
                           Publisher Name
                        </th>
                        <td>
                            <select name="pname">
                                <option value=""></option>
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
                         <th>
                            Total Page
                        </th>
                        <td>
                            <input type="text" name="tpage" />
                        </td>
                        </tr>
                        <tr>
                         <th>
                            Price
                        </th>
                        <td>
                            <input type="text" name="price" />
                        </td>
                        </tr>
                         
                        <tr>
                         <th>
                            Avail No. of Copy
                        </th>
                        <td>
                            <input type="text" name="acopy" />
                        </td>
                        </tr>
                         
                        <tr>
                            
                            <td colspan="2" align="right">
                                <input type="submit" value="Add" class="button" />&nbsp;&nbsp;<input type="reset" value="Clear" class="button" />
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